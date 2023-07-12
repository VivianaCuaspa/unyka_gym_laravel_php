<div class="table-responsive">
    <table class="table" id="tipoSuscripciones-table">
        <thead>
        <tr>
            <th>Nombre</th>
        <th>N Meses</th>
        <th>Precio</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($tipoSuscripciones as $tipoSuscripciones)
            <tr>
                <td>{{ $tipoSuscripciones->nombre }}</td>
            <td>{{ $tipoSuscripciones->n_meses }}</td>
            <td>{{ $tipoSuscripciones->precio }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['tipoSuscripciones.destroy', $tipoSuscripciones->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tipoSuscripciones.show', [$tipoSuscripciones->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('tipoSuscripciones.edit', [$tipoSuscripciones->id]) }}"
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
