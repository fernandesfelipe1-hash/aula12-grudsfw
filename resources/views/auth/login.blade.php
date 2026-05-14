@extends('layouts.adminlte')

@section('title', 'Login')
@section('body_class', 'hold-transition login-page')
@section('auth_page', true)

@section('content')
<div class="login-box">
    <div class="login-logo">
        <b>Aula</b> Dusk
    </div>

    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Acesse sua conta</p>

            <form method="POST" action="{{ route('login.post') }}" dusk="login-form">
                @csrf

                <div class="input-group mb-3">
                    <input 
                        type="email" 
                        name="email" 
                        class="form-control" 
                        placeholder="E-mail"
                        dusk="login-email"
                    >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input 
                        type="password" 
                        name="password" 
                        class="form-control" 
                        placeholder="Senha"
                        dusk="login-password"
                    >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <button 
                    type="submit" 
                    class="btn btn-primary btn-block"
                    dusk="login-button"
                >
                    Entrar
                </button>
            </form>

            <p class="mt-3 mb-0 text-center">
                <a href="{{ route('register') }}" dusk="register-link">
                    Criar nova conta
                </a>
            </p>
        </div>
    </div>
</div>
@endsection