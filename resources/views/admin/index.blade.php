@extends('admin.layouts.dashboard')

@section('content-header')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">Mi Página en Blanco</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
        <li class="breadcrumb-item"><a href="{{ route('categorias.index') }}">Categoria</a></li>
        <li class="breadcrumb-item active">Crear Categoria</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
    
@endsection

@section('content')
<div class="row">
    <div class="col-lg-6">
      <h1 class="display text-center text-primary">HOLA MUNDO</h1>
    </div>
    <!-- /.col-md-6 -->
  </div>
@endsection