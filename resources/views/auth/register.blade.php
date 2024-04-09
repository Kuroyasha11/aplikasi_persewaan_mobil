@extends('auth.layouts.app')

@section('content')
    <div class="col-md-5 bg-white sign-in-page-data">
        <div class="sign-in-from">
            @if($errors->any())
                <x-error-alert :$errors/>
            @endif
            <h1 class="mb-0 text-center">Daftar</h1>
            <p class="text-center text-dark">Masukkan data diri anda.</p>
            <form class="mt-4" action="{{route('postRegister')}}" method="post">
                @csrf
                <div class="form-group">
                    <x-label-form for="name" :required="true">Nama Lengkap</x-label-form>
                    <x-input-form type="text" class="mb-0" name="name" placeholder="Masukkan nama lengkap"/>
                </div>
                <div class="form-group">
                    <x-label-form for="alamat">Alamat</x-label-form>
                    <x-input-form type="text" class="mb-0" name="alamat" placeholder="Masukkan alamat"/>
                </div>
                <div class="form-group">
                    <x-label-form for="nomor_telepon">Nomor Telepon</x-label-form>
                    <x-input-form type="number" class="mb-0" name="nomor_telepon" placeholder="Masukkan nomor telepon"/>
                </div>
                <div class="form-group">
                    <x-label-form for="nomor_sim">Nomor SIM</x-label-form>
                    <x-input-form type="number" class="mb-0" name="nomor_sim" placeholder="Masukkan nomor sim"/>
                </div>
                <div class="form-group">
                    <x-label-form for="email" :required="true">Email</x-label-form>
                    <x-input-form type="email" class="mb-0" name="email" placeholder="Masukkan email"/>
                </div>
                <div class="form-group">
                    <x-label-form for="password" :required="true">Password</x-label-form>
                    <x-input-form type="password" class="mb-0" name="password" placeholder="Password"/>
                </div>
                <div class="form-group">
                    <x-label-form for="password_confirmation" :required="true">Konfirmasi Password</x-label-form>
                    <x-input-form type="password" class="mb-0" name="password_confirmation"
                                  placeholder="Konfirmasi Password"/>
                </div>
                <div class="sign-info text-center">
                    <button type="submit" class="btn btn-primary d-block w-100 mb-2">Daftar</button>
                    <span class="text-dark d-inline-block line-height-2">Sudah mempunyai akun ? <a
                            class="font-weight-bold"
                            href="{{route('login')}}">Klik disini</a></span>
                </div>
            </form>
        </div>
    </div>
@endsection
