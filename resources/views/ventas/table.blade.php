<div class="table-responsive">
    <table class="table" id="ventas-table">
        <thead>
            <tr>
                <th>Clienteid</th>
        <th>Vendedorid</th>
        <th>Productoid</th>
        <th>Cantidad</th>
        <th>Total</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ventas as $ventas)
            <tr>
                <td>{!! $ventas->clienteId !!}</td>
            <td>{!! $ventas->vendedorId !!}</td>
            <td>{!! $ventas->productoId !!}</td>
            <td>{!! $ventas->cantidad !!}</td>
            <td>{!! $ventas->total !!}</td>
                <td>
                    {!! Form::open(['route' => ['ventas.destroy', $ventas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{!! route('ventas.show', [$ventas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{!! route('ventas.edit', [$ventas->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
