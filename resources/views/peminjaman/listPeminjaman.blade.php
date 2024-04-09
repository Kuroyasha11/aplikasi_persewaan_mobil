@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card shadow-sm">
                <div class="card-head">
                    <div class="row">
                        <div class="col-lg-6 col-12 my-2">
                            <a href="{{route('peminjaman.index')}}" class="btn btn-primary m-1">Kembali</a>
                        </div>
                        <div class="col-lg-6 col-12 my-2">
                            <form action="{{route('peminjaman.listPeminjaman.pengembalianMobil')}}" method="post">
                                @csrf
                                <div class="d-flex">
                                    <x-input-form type="text" class="m-1 pb-0" name="nomor_plat"
                                                  placeholder="Masukkan nomor plat"
                                                  :hasError="$errors->has('nomor_plat')"
                                                  value="{{old('nomor_plat')}}"/>
                                    <button type="submit" class="btn btn-primary">Pengembalian</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body mx-2 my-2">
                    <div class="table-responsive m-2">
                        <table class="table table-bordered table-hover" id="myTable" style="width: 100%;">
                            <thead>
                            <tr class="text-center">
                                <th style="width: 30px;">No</th>
                                <th>Merek</th>
                                <th>Model</th>
                                <th>Plat</th>
                                <th>Tarif</th>
                                <th>Tanggal Sewa</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($peminjaman->count())
                                @foreach($peminjaman as $item)
                                    <tr class="text-center">
                                        <td>{{$loop->iteration + $peminjaman->firstItem() - 1}}</td>
                                        <td>{{$item->mobil->merek}}</td>
                                        <td>{{$item->mobil->model}}</td>
                                        <td>{{$item->mobil->nomor_plat}}</td>
                                        <td class="text-right">@IDR($item->mobil->tarif) / hari</td>
                                        <td>
                                            {{$item->tanggal_mulai}} s.d. {{$item->tanggal_selesai}}
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="text-center">
                                    <td colspan="6">Tidak Ada Data</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                        <div class="d-flex-justify-content-end">
                            {{$peminjaman->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

