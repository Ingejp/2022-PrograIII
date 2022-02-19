@extends('layout')
@section('contenido')
    <h2>Add New Customer</h2>
    <br>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Customer name">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Address</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Complete address">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Phone</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Customer phone">
    </div>

    <div class="mb-3">
        <button type="button" class="btn btn-success">Guardar</button>
    </div>

@endsection
