@extends('auth.layouts.auth')

@section('body_class','passwords_email')

@section('content')
<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content"><br><br><br>
            <img src="../assets/images/icon.png" alt="logo" width="100px"><br><br>
            <div><br>
                <div class="h1">{{ config('app.name') }}</div>
            </div>
            {{ Form::open(['route' => 'password.email']) }}
                <h1>{{ __('views.auth.passwords.email.header') }}</h1>
                <div>
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                            placeholder="{{ __('views.auth.passwords.email.input') }}" required autofocus>
                </div>
                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                @if (!$errors->isEmpty())
                    <div class="alert alert-danger" role="alert">
                        {!! $errors->first() !!}
                    </div>
                @endif
                <div>
                    <button class="btn btn-primary btn-block submit" type="submit"><i class="fa fa-check"></i> Enviar Solicitud </button>
                    {{-- <a class="reset_pass" href="{{ route('login') }}">
                        {{ __('views.auth.passwords.email.message') }}
                    </a> --}}
                </div><br>
                <div class="clearfix"></div>
                <p>&copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('views.auth.passwords.email.copyright') }}</p>
            {{ Form::close() }}
        </section>
    </div>
</div>
<style>
    .passwords_email{
        background: rgb(252,218,1);
        background: linear-gradient(177deg, rgba(252,218,1,1) 0%, rgba(130,131,59,1) 50%, rgba(9,45,116,1) 100%);
    }
    p,h1, .h1{
        color: white;
        text-shadow: 0 1px 0 rgba(9,45,116,1) !important;
    }
</style>
@endsection

@section('styles')
    @parent {{ Html::style(mix('assets/auth/css/passwords.css')) }}
@endsection
