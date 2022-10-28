@include('layouts.header');
@include('layouts.nav');

    <main class="container py-4">

    {{-- @yield se usa para crear un sector dinamico --}}
    {{-- crear un bloque vacio que luego va a tener contenido --}}
        @yield('contenido')

    </main>
        @yield('encuesta')


@include('layouts.footer');