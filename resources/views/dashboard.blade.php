@extends('layouts.adminlte')

@section('title', 'Dashboard')
@section('page_title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="small-box bg-info">
            <div class="inner">
                <h3 dusk="total-users">150</h3>
                <p>Usuários</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="small-box bg-success">
            <div class="inner">
                <h3 dusk="total-sales">53</h3>
                <p>Vendas</p>
            </div>
            <div class="icon">
                <i class="fas fa-shopping-cart"></i>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3 dusk="total-alerts">12</h3>
                <p>Alertas</p>
            </div>
            <div class="icon">
                <i class="fas fa-exclamation-triangle"></i>
            </div>
        </div>
    </div>
</div>

<div class="card" dusk="welcome-card">
    <div class="card-header">
        <h3 class="card-title">Bem-vindo ao sistema</h3>
    </div>

    <div class="card-body">
        <p dusk="dashboard-message">
            Esta é a página inicial usada nos testes com Laravel Dusk.
        </p>

        <a href="{{ route('login') }}" class="btn btn-danger" dusk="logout-button">
            Sair
        </a>
    </div>
</div>
@endsection