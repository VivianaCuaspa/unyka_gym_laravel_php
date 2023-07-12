<div class="table-responsive">
    <table class="table" id="suscripcions-table">
        <thead>
        <tr>
            <th>Socio</th>
        <th>Tipo Suscripcion</th>
        <th>Fecha Inicio</th>
        <th>Fecha Fin</th>
        <th>Estado</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($suscripcions as $suscripcion)
            <tr>
            <td>{{ $suscripcion->socio->nombre }}</td>
            <td>{{ $suscripcion->tipoSuscripcion->nombre}}</td>
            <td>{{ $suscripcion->fecha_inicio }}</td>
            <td>{{ $suscripcion->fecha_fin }}</td>
            <td>{{ $suscripcion->estado }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['suscripcions.destroy', $suscripcion->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('suscripcions.show', [$suscripcion->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('suscripcions.edit', [$suscripcion->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
