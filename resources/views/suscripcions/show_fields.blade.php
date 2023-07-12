<!-- Socio Id Field -->
<!-- Socio Nombre Field -->
<div class="form-group">
    {!! Form::label('socio_nombre', 'Buscar Socio por Nombre:') !!}
    {!! Form::text('socio_nombre', $socioNombre, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del socio']) !!}
</div>

<!-- Socio Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('socio_id', 'Socio:') !!}
    {!! Form::select('socio_id', $socios, null, ['class' => 'form-control']) !!}
</div>


<!-- Tipo Suscripcion Id Field -->
<div class="col-sm-12">
    {!! Form::label('tipo_suscripcion_id', 'Tipo Suscripcion:') !!}
    <p>{{ $suscripcion->tipo_suscripcion_id }}</p>
</div>

<!-- Fecha Inicio Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    <p>{{ $suscripcion->fecha_inicio }}</p>
</div>

<!-- Fecha Fin Field -->
<div class="col-sm-12">
    {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
    <p>{{ $suscripcion->fecha_fin }}</p>
</div>

<!-- Estado Field -->
<div class="col-sm-12">
    {!! Form::label('estado', 'Estado:') !!}
    <p>{{ $suscripcion->estado }}</p>
</div>

