<div class="table-responsive">
    <table class="table" id="fichaInformativas-table">
        <thead>
        <tr>
        <th>Nombre de socio</th>
            <th>Nivel Actividad</th>
        <th>Frecuencia Alimentacion</th>
        <th>Intolerancias</th>
        <th>Alergias</th>
        <th>Preparacion Comidas</th>
        <th>Patologia</th>
        <th>Patología Familiar</th>
        <th>Medicacion</th>
            <th colspan="3">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($fichaInformativas as $fichaInformativa)
            <tr>
            <td>{{ $fichaInformativa->socio->nombre }}</td>
                <td>{{ $fichaInformativa->nivel_actividad }}</td>
            <td>{{ $fichaInformativa->frecuencia_alimentacion }}</td>
            <td>{{ $fichaInformativa->intolerancias }}</td>
            <td>{{ $fichaInformativa->alergias }}</td>
            <td>{{ $fichaInformativa->preparacion_comidas }}</td>
            <td>{{ $fichaInformativa->patologia }}</td>
            <td>{{ $fichaInformativa->patología_familiar }}</td>
            <td>{{ $fichaInformativa->medicacion }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['fichaInformativas.destroy', $fichaInformativa->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('fichaInformativas.show', [$fichaInformativa->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('fichaInformativas.edit', [$fichaInformativa->id]) }}"
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
