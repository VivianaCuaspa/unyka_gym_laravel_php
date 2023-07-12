<!-- Nombre Field -->
<div class="col-sm-12">
    {!! Form::label('nombre', 'Nombre:') !!}
    <p>{{ $tipoSuscripciones->nombre }}</p>
</div>

<!-- N Meses Field -->
<div class="col-sm-12">
    {!! Form::label('n_meses', 'N Meses:') !!}
    <p>{{ $tipoSuscripciones->n_meses }}</p>
</div>

<!-- Precio Field -->
<div class="col-sm-12">
    {!! Form::label('precio', 'Precio:') !!}
    <p>{{ $tipoSuscripciones->precio }}</p>
</div>

