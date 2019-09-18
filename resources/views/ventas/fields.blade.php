<!-- Clienteid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clienteId', 'Clienteid:') !!}
    {!! Form::number('clienteId', null, ['class' => 'form-control']) !!}
</div>

<!-- Vendedorid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vendedorId', 'Vendedorid:') !!}
    {!! Form::number('vendedorId', null, ['class' => 'form-control']) !!}
</div>

<!-- Productoid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('productoId', 'Productoid:') !!}
    {!! Form::number('productoId', null, ['class' => 'form-control']) !!}
</div>

<!-- Cantidad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cantidad', 'Cantidad:') !!}
    {!! Form::number('cantidad', null, ['class' => 'form-control']) !!}
</div>

<!-- Total Field -->
<div class="form-group col-sm-6">
    {!! Form::label('total', 'Total:') !!}
    {!! Form::number('total', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('ventas.index') !!}" class="btn btn-default">Cancel</a>
</div>
