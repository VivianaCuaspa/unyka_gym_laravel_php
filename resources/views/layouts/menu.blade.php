<li class="nav-item">
    <a href="{{ route('socios.index') }}"
       class="nav-link {{ Request::is('socios*') ? 'active' : '' }}">
        <p>Socios</p>
    </a>
</li>










<li class="nav-item">
<li class="nav-item">
    <a href="{{ route('tipoSuscripciones.index') }}"
       class="nav-link {{ Request::is('tipoSuscripciones*') ? 'active' : '' }}">
        <p>Membresías</p>
    </a>
</li>














<li class="nav-item">
    <a href="{{ route('suscripcions.index') }}"
       class="nav-link {{ Request::is('suscripcions*') ? 'active' : '' }}">
        <p>Suscripciones</p>


    </a>
</li>


<li class="nav-item">
    <a href="{{ route('fichaInformativas.index') }}"
       class="nav-link {{ Request::is('fichaInformativas*') ? 'active' : '' }}">
        <p>Fichas Informativas</p>
    </a>
</li>


