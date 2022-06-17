@extends('auth.layouts.auth')

@section('body_class','login')

@section('content')
<div class="content" style="height: 100%;">
    <div class="row" style="height: 100%; margin: 0;">
        <div class="col-md-6" id="bg-cover-login" style="height: 100%;">
            <div class="bgImgCoverPages"></div>
        </div>


        <div class="col-md-6" style="height: 100%;">
            <div style="height: 90%;">
                <div class="login_wrapper" style="height: 100%; position: relative;">
                    <div class="animate form login_form" style="position: absolute; top: 13%;">
                        <section class="login_content">

                            @if(config('auth.users.registration'))
                                    <div >

                                        <div class="clearfix"></div>
                                        <br/>

                                        <div>
                                            <div class="h1">{{ config('app.name') }}</div>
                                        </div>
                                    </div>
                                @endif

                            {{ Form::open(['route' => 'login']) }}
                                <h1>{{ __('views.auth.login.header') }}</h1>

                                <div>
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"
                                           placeholder="{{ __('views.auth.login.input_0') }}" required autofocus>
                                </div>
                                <div>
                                    <input id="password" type="password" class="form-control" name="password"
                                           placeholder="{{ __('views.auth.login.input_1') }}" required>
                                </div>
                                <div class="checkbox al_left">
                                    <label>
                                        <input type="checkbox"
                                               name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('views.auth.login.input_2') }}
                                    </label>
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
                                    <button class="btn btn-default submit" type="submit">{{ __('views.auth.login.action_0') }}</button>
                                    <a class="reset_pass" href="{{ route('password.request') }}">
                                        {{ __('views.auth.login.action_1') }}
                                    </a>
                                </div>

                                <div class="clearfix"></div>

                                {{-- <div class="separator">
                                    <span>{{ __('views.auth.login.message_0') }}</span>
                                    <div>
                                        <a href="{{ route('social.redirect', ['facebook']) }}" class="btn btn-success btn-facebook">
                                            <i class="fa fa-facebook"></i>
                                            Facebook
                                        </a>
                                        <a href="{{ route('social.redirect', ['twitter']) }}" class="btn btn-success btn-twitter">
                                            <i class="fa fa-twitter"></i>
                                            Twitter
                                        </a>
                                    </div>
                                </div> --}}



                                @if(config('auth.users.registration'))
                                    <div class="separator">
                                        <p class="change_link">{{ __('views.auth.login.message_1') }}
                                            <a href="{{ route('register') }}" class="to_register"> {{ __('views.auth.login.action_2') }} </a>
                                        </p>

                                        <div class="clearfix"></div>
                                        <br/>

                                        <div>
                                            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('views.auth.login.copyright') }}</p>
                                        </div>
                                    </div>
                                @endif


                                {{-- @if(config('auth.users.registration'))
                                    <div class="separator">
                                        <p class="change_link">{{ __('views.auth.login.message_1') }}
                                            <a href="{{ route('register') }}" class="to_register"> {{ __('views.auth.login.action_2') }} </a>
                                        </p>

                                        <div class="clearfix"></div>
                                        <br/>

                                        <div>
                                            <div class="h1">{{ config('app.name') }}</div>
                                            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. {{ __('views.auth.login.copyright') }}</p>
                                        </div>
                                    </div>
                                @endif --}}






                            {{ Form::close() }}
                        </section>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    #bg-cover-login {
        background: url(https://www.pertec.com.bo/assets/img/bg.jpg);
        background-repeat: no-repeat;
        background-position: center center;
        background-size: cover;
        padding: 0;
        box-shadow: 5px -5px 5px 0px #FFCB00;
    }
    .bgImgCoverPages {
        width: 100%;
        height: 100%;
        position: relative;
        background: linear-gradient(183deg, rgba(9,48,112,1) 0%, rgba(255,255,255,1) 100%);
        opacity: 0.1;
    }
</style>

@endsection

@section('styles')
    @parent

    {{ Html::style(mix('assets/auth/css/login.css')) }}
@endsection
