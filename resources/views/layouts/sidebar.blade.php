<aside class="main-sidebar" id="sidebar-wrapper">
    <section class="sidebar">
        <div class="user-panel">
            <div class="pull-left image">
                {{-- <img src="{{ asset('/').Auth::user()->base_url }}" class="img-circle" alt="User Image" /> --}}
            </div>
            <div class="pull-left info">
                {{-- <p>{{ Auth::user()->nombres." ".Auth::user()->apellidos }}</p> --}}
                {{-- <a href="#">{{ Auth::user()->tipoUsuario->nombre }}</a> --}}
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            @include('layouts.menu')
        </ul>
    </section>
  </aside>