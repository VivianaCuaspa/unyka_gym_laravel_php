<li class="nav-item">
    <a href="{{ route('socios.index') }}"
       class="nav-link {{ Request::is('socios*') ? 'active' : '' }}">
        <p>Socios</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('fichaInformativas.index') }}"
       class="nav-link {{ Request::is('fichaInformativas*') ? 'active' : '' }}">
        <p>Ficha Informativas</p>
    </a>
</li>


