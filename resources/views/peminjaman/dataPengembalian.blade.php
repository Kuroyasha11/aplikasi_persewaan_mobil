@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 ">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Form Pengembalian Mobil</h4>
                    </div>
                </div>
                <div class="col-12">
                    <div class="iq-card-body">
                        <div class="new-user-info">
                            <form action="{{route('peminjaman.data.selesai', $peminjam->id)}}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <x-label-form for="merek" :required="true">Merek</x-label-form>
                                        <x-input-form type="text" class="mb-0" name="merek"
                                                      placeholder="Masukkan merek mobil"
                                                      :hasError="$errors->has('merek')"
                                                      value="{{old('merek', $peminjam->mobil->merek)}}" readonly/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <x-label-form for="model" :required="true">Model</x-label-form>
                                        <x-input-form type="text" class="mb-0" name="model"
                                                      placeholder="Masukkan model mobil"
                                                      :hasError="$errors->has('model')"
                                                      value="{{old('model', $peminjam->mobil->model)}}" readonly/>
                                    </div>
                                    <div class=" form-group col-md-6
                                                                                                        ">
                                        <x-label-form for="nomor_plat" :required="true">Plat</x-label-form>
                                        <x-input-form type="text" class="mb-0" name="nomor_plat"
                                                      placeholder="Masukkan plat mobil"
                                                      :hasError="$errors->has('nomor_plat')"
                                                      value="{{old('nomor_plat', $peminjam->mobil->nomor_plat)}}"
                                                      readonly/>
                                    </div>
                                    <div class=" form-group col-md-6
                                                                                                        ">
                                        <x-label-form for="tarif" :required="true">Tarif per hari</x-label-form>
                                        <x-input-form type="number" class="mb-0" name="tarif"
                                                      placeholder="Masukkan tarif mobil per hari"
                                                      :hasError="$errors->has('tarif')"
                                                      value="{{old('tarif', $peminjam->mobil->tarif)}}" readonly/>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <x-label-form for="tanggal_mulai" :required="true">Tanggal Mulai</x-label-form>
                                        <x-input-form type="date" class="mb-0" name="tanggal_mulai"
                                                      placeholder="Masukkan tanggal mulai sewa mobil"
                                                      :hasError="$errors->has('tanggal_mulai')"
                                                      value="{{old('tanggal_mulai', $peminjam->tanggal_mulai)}}"
                                                      readonly/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <x-label-form for="tanggal_selesai" :required="true">Tanggal Selesai
                                        </x-label-form>
                                        <x-input-form type="date" class="mb-0" name="tanggal_selesai"
                                                      placeholder="Masukkan tanggal selesai sewa mobil"
                                                      :hasError="$errors->has('tanggal_selesai')"
                                                      value="{{old('tanggal_selesai', $peminjam->tanggal_selesai)}}"
                                                      readonly/>
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-12">
                                        @php
                                            $tanggal_mulai = \Carbon\Carbon::parse($peminjam->tanggal_mulai);
                                            $tanggal_selesai = \Carbon\Carbon::parse($peminjam->tanggal_selesai);
                                            $jumlahHari = $tanggal_mulai->diffInDays($tanggal_selesai);
                                        @endphp
                                        <h2>Jumlah Hari Penyewaan Mobil
                                            : {{$jumlahHari}} Hari</h2>
                                        <input type="hidden" name="total_sewa" value="{{$jumlahHari}}">
                                    </div>
                                    <div class="col-12">
                                        <h2>Total Tarif Penyewaan Mobil : @IDR($peminjam->mobil->tarif *
                                            $jumlahHari)</h2>
                                        <input type="hidden" name="tarif" value="{{$peminjam->mobil->tarif *
                                            $jumlahHari}}">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-primary btn-block my-3"
                                        onclick="return confirm('Apakah anda yakin?')">Selesaikan
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

