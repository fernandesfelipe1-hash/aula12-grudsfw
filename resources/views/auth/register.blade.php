@extends('layouts.adminlte')

@section('title', 'Cadastro')
@section('body_class', 'hold-transition register-page')
@section('auth_page', true)

@section('content')
<div class="register-box">
    <div class="register-logo">
        <b>Aula</b> Dusk
    </div>

    <div class="card">
        <div class="card-body register-card-body">
            <p class="login-box-msg">Criar nova conta</p>

            <form method="POST" action="{{ route('register.post') }}" dusk="register-form">
                @csrf

                <div class="input-group mb-3">
                    <input 
                        type="text" 
                        name="name" 
                        class="form-control" 
                        placeholder="Nome"
                        dusk="register-name"
                    >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input 
                        type="email" 
                        name="email" 
                        class="form-control" 
                        placeholder="E-mail"
                        dusk="register-email"
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
                        dusk="register-password"
                    >
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>

                <div class="input-group mb-3">
                    <input 
                        type="password" 
                        name="password_confirmation" 
                        class="form-control" 
                        placeholder="Confirmar senha"
                        dusk="register-password-confirmation"
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
                    dusk="register-button"
                >
                    Cadastrar
                </button>
            </form>

            <p class="mt-3 mb-0 text-center">
                <a href="{{ route('login') }}" dusk="login-link">
                    Já tenho conta
                </a>
            </p>
        </div>
    </div>
</div>
@endsection