@extends('app')

@section('content')
    @auth
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <p>Welcome <b>{{ Auth::user()->name }}</b></p>
                    <a class="btn btn-primary" href="{{ route('password') }}">Change Password</a>
                    <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a><br><br>
                    <a class="btn btn-info" href="{{ route('daftar') }}">Pendaftaran Pasien</a>
                </div>
            </div>
        </div>
    @endauth

    {{-- @guest
<a class="btn btn-primary" href="{{ route('login') }}">Login</a>
<a class="btn btn-info" href="{{ route('register') }}">Register</a>
@endguest --}}

    @guest
        <a class="btn btn-primary mb-4" href="{{ route('login') }}">Login</a>
        <a class="text-caption" href="{{ route('register') }}">Belum punya akun, silahkan klik</a>
    @endguest
@endsection
