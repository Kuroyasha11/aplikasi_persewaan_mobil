@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card shadow-sm">
                <div class="card-head">
                    <a href="{{route('peminjaman.listPeminjaman')}}" class="btn btn-primary m-1">List Peminjaman</a>
                </div>
                <div class="card-body mx-2 my-2">
                    <div class="row">
                        <div class="col-12 order-lg-2">
                            <labe class="form-label">Cari mobil : (tanggal mulai - tanggal selesai)</labe>
                            <form action="{{route('peminjaman.index')}}">
                                <div class="d-flex mb-3">
                                    <x-input-form type="date" class="m-1 pb-0" name="tanggal_mulai"
                                                  placeholder="Tanggal Mulai" required
                                                  value="{{old('tanggal_mulai', $mulai ?? '')}}"/>
                                    <x-input-form type="date" class="m-1 pb-0" name="tanggal_selesai"
                                                  placeholder="Tanggal Selesai" required
                                                  value="{{old('tanggal_selesai', $selesai ?? '')}}"/>
                                    <button type="submit" class="btn btn-primary">Cari</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="table-responsive text-nowrap m-2">
                        <table class="table table-bordered table-hover" id="myTable" style="width: 100%;">
                            <thead>
                            <tr class="text-center">
                                <th style="width: 30px;">No</th>
                                <th>Merek</th>
                                <th>Model</th>
                                <th>Plat</th>
                                <th>Tarif</th>
                                <th style="width: 60px;">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($mobil->count())
                                @foreach($mobil as $item)
                                    <tr class="text-center">
                                        <td>#</td>
                                        <td>{{$item->merek}}</td>
                                        <td>{{$item->model}}</td>
                                        <td>{{$item->nomor_plat}}</td>
                                        <td class="text-right">@IDR($item->tarif) / hari</td>
                                        <td>
                                            @if($mulai !== null && $selesai !== null)
                                                <form action="{{route('peminjaman.store', $item->id)}}" method="post">
                                                    @csrf
                                                    <x-input-form type="hidden" name="tanggal_mulai"
                                                                  value="{{$mulai ?? ''}}"/>
                                                    <x-input-form type="hidden" name="tanggal_selesai"
                                                                  value="{{$selesai ?? ''}}"/>
                                                    <button type="submit" class="btn btn-primary m-1">Pinjam</button>
                                                </form>
                                            @endif
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
                            {{$mobil->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

