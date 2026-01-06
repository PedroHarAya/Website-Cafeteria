<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Página de Inicio</title>

        <!--Estillos CSS-->
          @vite(['resources/css/Estilos3.css', 'resources/js/Instrucciones.js'])
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"/>

    </head>
  <body>
    <form action="{{ route('logout') }}" method="POST" class="logout-form">
        @csrf
        <button type="submit" class="logout-btn-img">
            <img src="{{ Vite::asset('resources/images/salir.png') }}" alt="Cerrar sesión" title="Cerrar sesión">
        </button>
    </form>
    
  </body>
</html>