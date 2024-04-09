@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 ">
            <div class="row">
                <div class="col-12">
                    <a href="{{route('pengembalian.index')}}" class="btn btn-primary m-1">Kembali</a>
                </div>
            </div>
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Form Pengembalian Mobil</h4>
                    </div>
                </div>
                <div class="col-12">
                    <div class="iq-card-body">
                        <div class="new-user-info">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <x-label-form for="merek" :required="true">Merek</x-label-form>
                                    <x-input-form type="text" class="mb-0" name="merek"
                                                  placeholder="Masukkan merek mobil"
                                                  :hasError="$errors->has('merek')"
                                                  value="{{old('merek', $pengembalian->mobil->merek)}}" readonly/>
                                </div>
                                <div class="form-group col-md-6">
                                    <x-label-form for="model" :required="true">Model</x-label-form>
                                    <x-input-form type="text" class="mb-0" name="model"
                                                  placeholder="Masukkan model mobil"
                                                  :hasError="$errors->has('model')"
                                                  value="{{old('model', $pengembalian->mobil->model)}}" readonly/>
                                </div>
                                <div class=" form-group col-md-6
                                                                                                        ">
                                    <x-label-form for="nomor_plat" :required="true">Plat</x-label-form>
                                    <x-input-form type="text" class="mb-0" name="nomor_plat"
                                                  placeholder="Masukkan plat mobil"
                                                  :hasError="$errors->has('nomor_plat')"
                                                  value="{{old('nomor_plat', $pengembalian->mobil->nomor_plat)}}"
                                                  readonly/>
                                </div>
                                <div class=" form-group col-md-6
                                                                                                        ">
                                    <x-label-form for="tarif" :required="true">Tarif per hari</x-label-form>
                                    <x-input-form type="number" class="mb-0" name="tarif"
                                                  placeholder="Masukkan tarif mobil per hari"
                                                  :hasError="$errors->has('tarif')"
                                                  value="{{old('tarif', $pengembalian->mobil->tarif)}}" readonly/>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <x-label-form for="tanggal_mulai" :required="true">Tanggal Mulai</x-label-form>
                                    <x-input-form type="date" class="mb-0" name="tanggal_mulai"
                                                  placeholder="Masukkan tanggal mulai sewa mobil"
                                                  :hasError="$errors->has('tanggal_mulai')"
                                                  value="{{old('tanggal_mulai', $pengembalian->peminjam->tanggal_mulai)}}"
                                                  readonly/>
                                </div>
                                <div class="form-group col-md-6">
                                    <x-label-form for="tanggal_selesai" :required="true">Tanggal Selesai
                                    </x-label-form>
                                    <x-input-form type="date" class="mb-0" name="tanggal_selesai"
                                                  placeholder="Masukkan tanggal selesai sewa mobil"
                                                  :hasError="$errors->has('tanggal_selesai')"
                                                  value="{{old('tanggal_selesai', $pengembalian->peminjam->tanggal_selesai)}}"
                                                  readonly/>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-12">
                                    <h2>Jumlah Hari Penyewaan Mobil
                                        : {{$pengembalian->total_sewa}} Hari</h2>
                                </div>
                                <div class="col-12">
                                    <h2>Total Tarif Penyewaan Mobil : @IDR($pengembalian->mobil->tarif)</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

