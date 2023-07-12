<!-- Nivel Actividad Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nivel_actividad', 'Nivel Actividad:') !!}
    {!! Form::number('nivel_actividad', null, ['class' => 'form-control']) !!}
</div>

<!-- Frecuencia Alimentacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('frecuencia_alimentacion', 'Frecuencia Alimentacion:') !!}
    {!! Form::number('frecuencia_alimentacion', null, ['class' => 'form-control']) !!}
</div>

<!-- Intolerancias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('intolerancias', 'Intolerancias:') !!}
    {!! Form::text('intolerancias', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Alergias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alergias', 'Alergias:') !!}
    {!! Form::text('alergias', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Preparacion Comidas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('preparacion_comidas', 'Preparacion Comidas:') !!}
    {!! Form::text('preparacion_comidas', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Patologia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patologia', 'Patologia:') !!}
    {!! Form::text('patologia', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Patología Familiar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('patología_familiar', 'Patología Familiar:') !!}
    {!! Form::text('patología_familiar', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Medicacion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('medicacion', 'Medicacion:') !!}
    {!! Form::text('medicacion', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>

<!-- Socio Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('socio_id', 'Socio Id:') !!}
    {!! Form::number('socio_id', null, ['class' => 'form-control']) !!}
</div>