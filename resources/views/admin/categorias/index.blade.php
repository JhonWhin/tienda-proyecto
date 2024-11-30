@extends('admin.layouts.dashboard')

@section('content-header')

<div class="row mb-2">
    <div class="col-sm-6">
      <h1 class="m-0 text-dark">Categorias</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
      <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
        <li class="breadcrumb-item active">Categoria</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
    
@endsection

@section('content')
<div class="row">
  <div class="col">
  <div class="card">
      <div class="card-header">

        <a href="{{ route('categorias.create') }}" class="btn btn-primary m-2 float-right">Crear</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
        <thead>
            <tr align="center">
                <th style="width: 5%">N°</th>
                <th>Descripción</th>
                <th style="width: 15%">Habilitado</th>
                <th colspan="2" style="width: 20%">Acciones</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
        </table>
        
        </div>
      </div>
    </div>
    </div>
    <!-- /.col-md-6 -->

@endsection