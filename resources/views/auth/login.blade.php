@extends('auth.layouts.app')

@section('content')
    <div class="col-md-5 bg-white sign-in-page-data">
        <div class="sign-in-from">
            @if($errors->any())
                <x-error-alert :$errors/>
            @endif
            @if (Session::has('success'))
                <x-success-alert>{{session('success')}}</x-success-alert>
            @endif
            <h1 class="mb-0 text-center">Login</h1>
            <p class="text-center text-dark">Masukkan email dan password anda</p>
            <form class="mt-4" action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group">
                    <x-label-form for="email" :required="true">Email</x-label-form>
                    <x-input-form type="email" class="mb-0" name="email" placeholder="Masukkan email"/>
                </div>
                <div class="form-group">
                    <x-label-form for="password" :required="true">Password</x-label-form>
                    {{--                    <a href="#" class="float-right">Forgot password?</a>--}}
                    <x-input-form type="password" class="mb-0" name="password" placeholder="Password"/>
                </div>
                <div class="d-inline-block w-100">
                    <x-checkbox-form divClass="d-inline-block mt-2 pt-1" name="rememberMe" placeholder="Ingat Saya"
                                     :hasError="$errors->has('rememberMe')" :checked="old('rememberMe') ?? false"/>
                </div>
                <div class="sign-info text-center">
                    <button type="submit" class="btn btn-primary d-block w-100 mb-2">Login</button>
                    <span class="text-dark dark-color d-inline-block line-height-2">Tidak mempunyai akun? <a
                            class="font-weight-bold"
                            href="{{route('register')}}">Klik disini</a></span>
                </div>
            </form>
        </div>
    </div>
@endsection
