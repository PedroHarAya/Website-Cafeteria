<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Loguin</title>

        <!--Estillos CSS-->
          @vite(['resources/css/Estilos.css', 'resources/js/Instrucciones.js'])
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"/>

    </head>
    <body>

    @if (session('error'))
    <div id="toast" class="toast">
        <i class="fas fa-exclamation-circle"></i> {{ session('error') }}
    </div>

    <script>
        const toast = document.getElementById('toast');
        toast.classList.add('show');
        setTimeout(() => toast.classList.remove('show'), 2500);
    </script>
    @endif

        <div class="container">
            <h1 class="form-title">
                Iniciar Sesión
            </h1>
        <form action="{{ route('login.store') }}" method="POST">
            @csrf
              <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="Ingrece su correo" required >
              </div>
              <div class="input-group password">
                <i class="fas fa-lock"></i>
                <input type="Password" name="password" id="password" placeholder="Ingrese su contraseña" required >
                <i id="eye1" class="fas fa-eye"></i>
              </div>
              <p class="recover">
                <a href="#">¿Olvidaste tu contraseña?</a>
              </p>
              <input type="submit" class="btn" value="Iniciar Sesión" name="Iniiciarsesion">
        </form>
        <!-- mensaje flotante -->
        <p class="or">
            --------O--------
        </p>
        <div class="links">
            <p>¿No tienes una cuanta?</p>
            <a href="{{ route('Registro') }}">Registrarse</a>  
        </div>
    </div>
  </body>
</html>