@extends('layout')
@section('contenido')

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <li>{!! \Session::get('success') !!}</li>
            </ul>
        </div>
    @endif

    @if(\Session::has('warning'))
        <div class="alert alert-warning">
            <ul>
                <li>{!! \Session::get('warning') !!}</li>
            </ul>
        </div>
    @endif
    <form action="{{route('customer.create')}}" method="post" class="p-3 bg-white mb-3">
        @csrf
        @method('POST')
        <h2>Registrar Nuevo Cliente</h2>
        <br>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="Nombre">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Dirección</label>
            <input type="text" class="form-control" name="address" id="exampleFormControlInput1" placeholder="Dirección">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Teléfono</label>
            <input type="text" class="form-control" name="phone_number" id="exampleFormControlInput1" placeholder="Teléfono">
        </div>
        <div class="mb-3">
                <div class="form-group">
                    <label>Categoria</label>
                    <select name="category" class="form-control" >
                        <option value="">--Seleccione--</option>

                        @foreach($categories as $category)
                            <option value="{{$category->id}}"> {{$category->description}}  </option>
                        @endforeach

                    </select>
            </div>
        </div>

        <div class="mb-3">
            <button type="submit" class="btn btn-success">Guardar <i class="fas fa-save"></i></button>
            <a href="{{url('/')}}" class="btn btn-danger">Cancelar <i class="fas fa-arrow-alt-circle-left"></i></a>
        </div>

@endsection
