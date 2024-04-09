<?php

namespace App\Http\Controllers\Mobil;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MobilController extends Controller
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

        $mobil = DB::table('mobils')
            ->whereNull('deleted_at')
            ->paginate(20)
            ->withQueryString();

        if ($request->search) {
            $search = strtolower($request->search);
            if ($search == 'tersedia') {
                $mobil = DB::table('mobils')
                    ->where('status', true)
                    ->whereNull('deleted_at')
                    ->paginate(20)
                    ->withQueryString();
            } elseif ($search == 'tidak tersedia') {
                $mobil = DB::table('mobils')
                    ->where('status', false)
                    ->whereNull('deleted_at')
                    ->paginate(20)
                    ->withQueryString();
            } else {
                $mobil = DB::table('mobils')
                    ->whereAny([
                        'merek',
                        'model',
                    ], 'LIKE', $search)
                    ->whereNull('deleted_at')
                    ->paginate(20)
                    ->withQueryString();
            }
        }

        return view('mobil.index', compact('title', 'breadcrumb', 'mobil'));
    }

    public function create()
    {
        /*Layouts App*/
        $title = 'Tambah Mobil';
        $breadcrumb = [
            [
                "name" => "Mobil",
                "url" => route('mobil.index')
            ],
            [
                "name" => "Tambah Mobil",
                "url" => route('mobil.create')
            ]
        ];

        return view('mobil.create', compact('title', 'breadcrumb'));
    }

    public function store(Request $request)
    {
        $rule = [
            'merek' => 'required',
            'model' => 'required',
            'nomor_plat' => 'required',
            'tarif' => 'required|numeric|min:0',
        ];

        $validatedData = $request->validate($rule);

        DB::beginTransaction();
        try {
            $mobil = new Mobil;
            $mobil->merek = $validatedData['merek'];
            $mobil->model = $validatedData['model'];
            $mobil->nomor_plat = $validatedData['nomor_plat'];
            $mobil->tarif = $validatedData['tarif'];
            $mobil->save();

            DB::commit();

            return redirect(route('mobil.index'))->with('success', 'Berhasil menambah data mobil!');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()->withErrors([$th->getMessage()]);
        }
    }

    public function edit(Mobil $mobil, Request $request)
    {
        /*Layouts App*/
        $title = 'Ubah Mobil';
        $breadcrumb = [
            [
                "name" => "Mobil",
                "url" => route('mobil.index')
            ],
            [
                "name" => "Ubah Mobil $mobil->id",
                "url" => route('mobil.edit', $mobil->id)
            ]
        ];

        return view('mobil.edit', compact('title', 'breadcrumb', 'mobil'));
    }

    public function update(Mobil $mobil, Request $request)
    {
        $rule = [
            'merek' => 'required',
            'model' => 'required',
            'nomor_plat' => 'required',
            'tarif' => 'required|numeric|min:0',
        ];

        $validatedData = $request->validate($rule);

        DB::beginTransaction();
        try {
            $mobil->merek = $validatedData['merek'];
            $mobil->model = $validatedData['model'];
            $mobil->nomor_plat = $validatedData['nomor_plat'];
            $mobil->tarif = $validatedData['tarif'];
            $mobil->save();

            DB::commit();

            return redirect(route('mobil.index'))->with('success', 'Berhasil mengubah data mobil ' . $mobil->id . '!');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()->withErrors([$th->getMessage()]);
        }
    }

    public function destroy(Mobil $mobil)
    {
        DB::beginTransaction();
        try {
            $mobil->delete();

            DB::commit();

            return redirect(route('mobil.index'))->with('success', 'Berhasil menghapus data mobil ' . $mobil->id . '!');
        } catch (\Throwable $th) {
            DB::rollBack();

            return back()->withErrors([$th->getMessage()]);
        }
    }
}
