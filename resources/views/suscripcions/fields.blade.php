<!-- Socio Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('socio_id', 'Buscar Socio por Nombre:') !!}
    {!! Form::hidden('socio_id', null, ['id' => 'socio_id']) !!}
    {!! Form::text('socio_nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del socio', 'id' => 'socio_nombre']) !!}
</div>

@push('page_scripts')
    <script>
        $('#socio_nombre').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ route('socios.search') }}",
                    dataType: "json",
                    data: {
                        term: request.term
                    },
                    success: function(data) {
                        response($.map(data, function(item) {
                            return {
                                label: item.nombre,
                                value: item.id
                            };
                        }));
                    }
                });
            },
            select: function(event, ui) {
                $('#socio_id').val(ui.item.value);
                $('#socio_nombre').val(ui.item.label);
                return false;
            }
        });
    </script>
@endpush

<!-- Tipo Suscripcion Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_suscripcion_id', 'Tipo Suscripcion:') !!}
    {!! Form::hidden('tipo_suscripcion_id', null, ['id' => 'tipo_suscripcion_id']) !!}
    {!! Form::text('tipo_suscripcion_nombre', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el tipo de suscripcion', 'id' => 'tipo_suscripcion_nombre']) !!}
</div>

@push('page_scripts')
    <script>
        $('#tipo_suscripcion_nombre').autocomplete({
            source: function(request, response) {
                $.ajax({
                    url: "{{ route('tipo_suscripciones.search') }}",
                    dataType: "json",
                    data: {
                        term: request.term
                    },
                    success: function(data) {
                        response($.map(data, function(item) {
                            return {
                                label: item.nombre,
                                value: item.id
                            };
                        }));
                    }
                });
            },
            select: function(event, ui) {
                $('#tipo_suscripcion_id').val(ui.item.value);
                $('#tipo_suscripcion_nombre').val(ui.item.label);
                return false;
            }
        });
    </script>
@endpush

<!-- Fecha Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_inicio', 'Fecha Inicio:') !!}
    {!! Form::text('fecha_inicio', null, ['class' => 'form-control','id'=>'fecha_inicio']) !!}
</div>

@push('page_scripts')
    <script>
        $('#fecha_inicio').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        });
    </script>
@endpush

<!-- Fecha Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fecha_fin', 'Fecha Fin:') !!}
    {!! Form::text('fecha_fin', null, ['class' => 'form-control','id'=>'fecha_fin']) !!}
</div>

@push('page_scripts')
    <script>
        $('#fecha_fin').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            useCurrent: true,
            sideBySide: true
        });
    </script>
@endpush

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', 'Estado:') !!}
    {!! Form::text('estado', null, ['class' => 'form-control','maxlength' => 255,'maxlength' => 255]) !!}
</div>
