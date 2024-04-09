@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 ">
            <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                    <div class="iq-header-title">
                        <h4 class="card-title">Detail Mobil {{$mobil->id}}</h4>
                    </div>
                </div>
                <div class="col-12">
                    <div class="iq-card-body">
                        <div class="new-user-info">
                            <form action="{{route('mobil.update', $mobil->id)}}" method="post">
                                @method('PUT')
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <x-label-form for="merek" :required="true">Merek</x-label-form>
                                        <x-input-form type="text" class="mb-0" name="merek"
                                                      placeholder="Masukkan merek mobil"
                                                      :hasError="$errors->has('merek')"
                                                      value="{{old('merek', $mobil->merek)}}"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <x-label-form for="model" :required="true">Model</x-label-form>
                                        <x-input-form type="text" class="mb-0" name="model"
                                                      placeholder="Masukkan model mobil"
                                                      :hasError="$errors->has('model')"
                                                      value="{{old('model', $mobil->model)}}"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <x-label-form for="nomor_plat" :required="true">Plat</x-label-form>
                                        <x-input-form type="text" class="mb-0" name="nomor_plat"
                                                      placeholder="Masukkan plat mobil"
                                                      :hasError="$errors->has('nomor_plat')"
                                                      value="{{old('nomor_plat', $mobil->nomor_plat)}}"/>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <x-label-form for="tarif" :required="true">Tarif per hari</x-label-form>
                                        <x-input-form type="number" class="mb-0" name="tarif"
                                                      placeholder="Masukkan tarif mobil per hari"
                                                      :hasError="$errors->has('tarif')"
                                                      value="{{old('tarif', $mobil->tarif)}}"/>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Ubah</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

