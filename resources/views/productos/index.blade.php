@extends('layouts.app')

@section('content')


<div class="container">
    <div id="list-productos">
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicExampleModal">
  Crear productos
</button>
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
                <td></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <b>Total de Registros:</b> {{ $productos->total() }} {{ $productos->links() }}
   
    </div><!-- list-productos-->
    


<!-- Modal -->
<div class="modal fade" id="basicExampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Crear Productos</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="from-create">
            <form action="{{url('/productos')}}" method="post">
                {{csrf_field()}}
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" id="nombre" required name="nombre" aria-describedby="nombreHelp" value="{{old('nombre')}}" placeholder="Nombre de producto">
                    <!-- <small id="nombreHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group">
                    <label for="proveedor">Proveedor</label>
                    <input type="text" class="form-control" id="proveedor" name="proveedor" placeholder="proveedor" required>
                </div>
                <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="number" step="any" class="form-control" id="precio" name="precio" placeholder="precio" min="0" required>
                </div>
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad" max="10" min="0" required>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </form>
        </div><!-- from create -->
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button> -->
      </div>
    </div>
  </div>
</div>

</div><!-- /container -->



@endsection
