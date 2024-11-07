@extends('adminlte::page')

@section('title', 'Dashboard Administracion')

@section('content_header')
    <h1>Dashboard</h1>
@endsection

@section('content')
    <p>Bienvenido al panel de administracion</p>

    <div class="small-box bg-gradient-success">
        <div class="inner">
            <h3>44</h3>
            <p>Usuarios Registrados</p>
        </div>
        <div class="icon">
            <i class="fas fa-user-plus"></i>
        </div>
        <a href="#" class="small-box-footer">
            More info <i class="fas fa-arrow-circle-right"></i>
        </a>
    </div>
    <div class="small-box bg-info">
        <div class="inner">
          <h3>15</h3>
          <p>Nuevas Reservas</p>
        </div>
        <div class="icon">
          <i class="fas fa-shopping-cart"></i>
        </div>
        <a href="#" class="small-box-footer">
          More info <i class="fas fa-arrow-circle-right"></i>
        </a>
      </div>

      <div class="info-box">
        <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Mensajes</span>
          <span class="info-box-number">1,410</span>
        </div>
      </div>
      <div class="info-box bg-success">
        <span class="info-box-icon"><i class="far fa-flag"></i></span>
        <div class="info-box-content">
          <span class="info-box-text">Bookmarks</span>
          <span class="info-box-number">410</span>
        </div>
      </div>
@endsection