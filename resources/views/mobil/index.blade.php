@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 ">
            <div class="card shadow-sm">
                <div class="card-body mx-2 my-2">
                    <div class="row">
                        <div class="col-12 order-lg-2">
                            <div class="d-flex mb-3">
                                <a href="{{route('mobil.create')}}"
                                   class="btn btn-lg btn-primary m-1">Tambah</a>
                                <a href="{{route('mobil.index')}}" class="btn btn-lg btn-secondary m-1"><i
                                        class="las la-redo-alt"></i></a>
                                <form action="{{route('mobil.index')}}">
                                    <x-input-form type="text" class="m-1 pb-0" name="search"
                                                  placeholder="Pencarian"
                                                  value="{{old('search')}}"/>
                                </form>
                            </div>
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
                                <th style="width: 30px;">Status</th>
                                <th style="width: 60px;">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if($mobil->count())
                                @foreach($mobil as $item)
                                    <tr class="text-center">
                                        <td>{{$loop->iteration + $mobil->firstItem() - 1 }}</td>
                                        <td
                                        ">{{$item->merek}}</td>
                                        <td>{{$item->model}}</td>
                                        <td>{{$item->nomor_plat}}</td>
                                        <td class="text-right">@IDR($item->tarif) / hari</td>
                                        <td>
                                            @if($item->status)
                                                <span class="badge badge-success">Tersedia</span>
                                            @else
                                                <span class="badge badge-danger">Tidak Tersedia</span>
                                            @endif
                                        </td>
                                        <td>
                                            <div class="d-flex justify-content-center">
                                                <a href="{{route('mobil.edit', $item->id)}}"
                                                   class="btn btn-sm btn-warning m-1">Ubah</a>
                                                <form action="{{route('mobil.destroy', $item->id)}}" method="post">
                                                    @method('DELETE')
                                                    @csrf
                                                    <button type="submit" class="btn btn-sm btn-danger m-1"
                                                            onclick="return confirm('Apakah kamu yakin?')">Hapus
                                                    </button>
                                                </form>
                                            </div>
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
                            {{$mobil->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

