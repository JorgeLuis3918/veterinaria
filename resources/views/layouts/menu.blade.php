<li class="{{ Request::is('home') ? 'active' : '' }}">
	<a href="{{ route('home') }}"><i class="fa fa-home"></i><span>Inicio</span></a>
</li>


<li class="{{ Request::is('usuario') ? 'active' : '' }}">
	<a href="{{route('usuario.index')}}"><i class="fas fa-users"></i><span>Usuarios</span></a>
</li>

<li class="">
	<a href="#"><i class="fas fa-paw"></i><span>Mascota</span></a>
</li>
<li class="">
	<a href="#"><i class="fas fa-notes-medical"></i><span>Historia Clinica</span></a>
</li>

<li>
	<a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
		<i class="fas fa-sign-out-alt"></i>
		<span class="title">Cerrar sesión</span>
	</a>
	<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
		@csrf
	</form>
</li>