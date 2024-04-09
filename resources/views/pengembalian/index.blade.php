@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card shadow-sm">
                <div class="card-body mx-2 my-2">
                    <div class="table-responsive text-nowrap m-2">
                        <table class="table table-bordered table-hover" id="myTable" style="width: 100%;">
                            <thead>
                            <tr class="text-center">
                                <th style="width: 30px;">No</th>
                                <th>Merek</th>
                                <th>Model</th>
                                <th>Plat</th>
                                <th>Total Sewa</th>
                                <th>Total Tarif</th>
                                <th style="width: 60px;">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($pengembalian->count())
                                @foreach($pengembalian as $item)
                                    <tr class="text-center">
                                        <td>{{$loop->iteration + $pengembalian->firstItem() -1}}</td>
                                        <td>{{$item->mobil->merek}}</td>
                                        <td>{{$item->mobil->model}}</td>
                                        <td>{{$item->mobil->nomor_plat}}</td>
                                        <td>{{$item->total_sewa}} hari</td>
                                        <td class="text-right">@IDR($item->tarif)</td>
                                        <td>
                                            <a href="{{route('pengembalian.show', $item->id)}}"
                                               class="btn btn-primary m-1">Lihat</a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr class="text-center">
                                    <td colspan="7">Tidak Ada Data</td>
                                </tr>
                            @endif
                            </tbody>
                        </table>
                        <div class="d-flex-justify-content-end">
                            {{$pengembalian->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

