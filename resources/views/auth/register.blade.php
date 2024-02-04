@extends('adminlte::master')

@section('adminlte_css')
    @yield('css')
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <style type="text/css">
        html, body {
            height: 100%;
            background:url("{{ asset("img/bg2.jpg") }}") no-repeat center center fixed;
            background-size: cover;
        }
        h3,h4 {
            font-weight: bold; /* Жирный шрифт для заголовков */
            color: rgb(28, 26, 26);
        }

        .form-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 10px;
            width:100%;
        }
        </style>
@stop

@section('body_class', 'register-page')

@section('body')
    <div class="login-logo">
        <img class="login-logo-img" src="img/gerb.png">
        {{-- <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Admin</b>LTE') !!}</a> --}}
        <h4>Институт водных проблем, гидроэнергетики и экологии</h5>
        <h3>Информационная система по управлению водными ресурсами</h5>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop

@section('adminlte_js')
    @yield('js')
@stop
