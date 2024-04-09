<?php

namespace App\Http\Controllers\Mobil;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use App\Models\Peminjam;
use App\Models\Pengembalian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PeminjamanController extends Controller
{
    public function index(Request $request)
    {
        /*Layouts App*/
        $title = 'Daftar Mobil';
        $breadcrumb = [
            [
                "name" => "Mobil",
                "url" => route('mobil.index')
            ]
        ];

        $mobil = DB::table('mobils')->latest()->paginate(20)->withQueryString();

        if ($request->tanggal_mulai && $request->tanggal_selesai) {
            $mobil = Mobil::whereDoesntHave('peminjam', function ($query) use ($request) {
                $query->where(function ($q) use ($request) {
                    $q->whereBetween('tanggal_mulai', [$request->tanggal_mulai, $request->tanggal_selesai])
                        ->orWhereBetween('tanggal_selesai', [$request->tanggal_mulai, $request->tanggal_selesai])
                        ->orWhere(function ($innerQuery) use ($request) {
                            $innerQuery->where('tanggal_mulai', '<', $request->tanggal_mulai)
                                ->where('tanggal_selesai', '>', $request->tanggal_selesai);
                        });
                })->where('status', true);
            })->latest()->paginate(20)->withQueryString();
        }
        $mulai = $request->tanggal_mulai ?? null;
        $selesai = $request->tanggal_selesai ?? null;

        return view('peminjaman.index', compact('title', 'breadcrumb', 'mobil', 'mulai', 'selesai'));
    }

    public function store(Mobil $mobil, Request $request)
    {
        DB::beginTransaction();
        try {
            $peminjaman = new Peminjam;
            $peminjaman->user_id = Auth::user()->id;
            $peminjaman->mobil_id = $mobil->id;
            $peminjaman->tanggal_mulai = $request->tanggal_mulai;
            $peminjaman->tanggal_selesai = $request->tanggal_selesai;
            $peminjaman->save();

            DB::commit();

            return redirect(route('peminjaman.index'))->with('success', 'Berhasil meminjam mobil!');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()->withErrors([$th->getMessage()]);
        }
    }

    public function listPeminjaman()
    {
        /*Layouts App*/
        $title = 'Daftar List Peminjaman Mobil';
        $breadcrumb = [
            [
                "name" => "List Peminjaman",
                "url" => route('peminjaman.listPeminjaman')
            ]
        ];

        $peminjaman = Peminjam::where('user_id', Auth::user()->id)
            ->where('status', true)
            ->latest()
            ->paginate(20)
            ->withQueryString();

        return view('peminjaman.listPeminjaman', compact('title', 'breadcrumb', 'peminjaman'));
    }

    public function pengembalianMobil(Request $request)
    {
        $request->validate(['nomor_plat' => 'required']);

        $data = Peminjam::where('user_id', Auth::user()->id)->whereHas('mobil', function ($query) use ($request) {
            $query->where('nomor_plat', $request->nomor_plat);
        })->first();

        if ($data) {
            return redirect(route('peminjaman.data', $data->id))->with('success', 'Data Peminjam ditemukan!');
        } else {
            return back()->withInput()->withErrors('Data tidak ditemukan!');
        }
    }

    public function data(Peminjam $peminjam)
    {
        if ($peminjam->status == false) {
            return back()->withErrors('Status peminjaman telah selesai!');
        }
        /*Layouts App*/
        $title = 'Daftar List Peminjaman Mobil';
        $breadcrumb = [
            [
                "name" => "List Peminjaman",
                "url" => route('peminjaman.listPeminjaman')
            ],
            [
                "name" => 'Pengembalian Mobil Plat : ' . $peminjam->mobil->nomor_plat,
                "url" => route('peminjaman.data', $peminjam->id)
            ],
        ];

        return view('peminjaman.dataPengembalian', compact('title', 'breadcrumb', 'peminjam'));
    }

    public function selesai(Peminjam $peminjam, Request $request)
    {
        DB::beginTransaction();
        try {
            $peminjam->status = false;
            $peminjam->save();

            $pengembalian = new Pengembalian;
            $pengembalian->user_id = Auth::user()->id;
            $pengembalian->mobil_id = $peminjam->mobil_id;
            $pengembalian->peminjam_id = $peminjam->id;
            $pengembalian->total_sewa = $request->total_sewa;
            $pengembalian->tarif = $request->tarif;
            $pengembalian->save();

            DB::commit();

            return redirect(route('peminjaman.index'))->with('success', 'Berhasil menyelesaikan pengembalian mobil');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()->withErrors([$th->getMessage()]);
        }
    }
}
