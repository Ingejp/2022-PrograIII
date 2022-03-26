@extends('layout')
@section('contenido')
    <form class="p-3 bg-white mb-3">
        @csrf
        <h2>Registrar Nuevo Cliente</h2>
        <br>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="exampleFormControlInput1" placeholder="Nombre">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
            <input type="text" class="form-control" name="direccion" id="exampleFormControlInput1" placeholder="Dirección">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="telefono" id="exampleFormControlInput1" placeholder="Teléfono">
        </div>

        <div class="mb-3">
            <button type="button" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
        </div>

@endsection
