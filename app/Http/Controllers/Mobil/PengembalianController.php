<?php

namespace App\Http\Controllers\Mobil;

use App\Http\Controllers\Controller;
use App\Models\Mobil;
use App\Models\Pengembalian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengembalianController extends Controller
{
    public function index(Request $request)
    {
        /*Layouts App*/
        $title = 'Daftar Pengembalian Mobil';
        $breadcrumb = [
            [
                "name" => "Pengembalian Mobil",
                "url" => route('pengembalian.index')
            ]
        ];

        $pengembalian = Pengembalian::latest()->paginate(20)->withQueryString();

        return view('pengembalian.index', compact('title', 'breadcrumb', 'pengembalian'));
    }

    public function show(Pengembalian $pengembalian)
    {
        /*Layouts App*/
        $title = 'Daftar Pengembalian Mobil';
        $breadcrumb = [
            [
                "name" => "Pengembalian Mobil",
                "url" => route('pengembalian.index')
            ],
            [
                "name" => 'Pengembalian Mobil - ' . $pengembalian->id,
                "url" => route('pengembalian.show', $pengembalian->id)
            ]
        ];

        return view('pengembalian.show', compact('title', 'breadcrumb', 'pengembalian'));
    }
}
