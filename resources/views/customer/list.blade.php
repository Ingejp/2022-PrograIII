@extends('layout')

@section('contenido')
    <div class="p-3 bg-white mb-3">
        <h3>Lista de Comercios</h3>
        <div class="input-group mb-3">
            <button type="button" class="btn btn-success ml-5" ><i class="fas fa-plus text-white"></i> Nuevo</button>
        </div>
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">ADDRESS</th>
                    <th scope="col">PHONE</th>
                    <th scope="col" ></th>
                </tr>
                </thead>
                <tbody>
                @foreach($customers as $customer)
                    <tr>
                        <td>{{$customer->id}}</td>
                        <td>{{$customer->name}}</td>
                        <td>{{$customer->address}}</td>
                        <td>{{$customer->phone_number}}</td>
                        <td class="d-flex d-inline"><a href="/comercio=editar={{$customer->id}}"><i class="far fa-edit fa-lg"></i></a><a class="mx-3" href="#" ><i class="fas fa-trash-alt fa-lg text-danger" ></i></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-center">
            {{ $customers->links() }}
        </div>
    </div>
@endsection
