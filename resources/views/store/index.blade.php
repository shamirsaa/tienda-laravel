@extends('layouts.app')
@section('content')
<table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Proveedor</th>
                <th scope="col">Precio</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            
            @foreach($productos as $producto)
            <tr>
                <th scope="row">{{$producto->id}}</th>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->proveedor}}</td>
                <td>{{$producto->precio}}</td>
                <td>{{$producto->cantidad}}</td>
                <td><a href="">agregar</a></td>
            </tr>
            @endforeach
        </tbody>
        @endsection