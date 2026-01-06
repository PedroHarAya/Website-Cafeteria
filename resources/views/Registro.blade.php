<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Registro</title>
        <!--Estillos CSS-->
          @vite(['resources/css/Estilos2.css', 'resources/js/Instrucciones.js'])
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"/>

    </head>
    @if (session('success'))
    <div id="toast" class="toast">
        {{ session('success') }}
    </div>

    <script>
        // Mostrar el toast
        const toast = document.getElementById('toast');
        toast.classList.add('show');

        // Ocultarlo después de 2 segundos
        setTimeout(() => {
            toast.classList.remove('show');
        }, 2500);
    </script>
@endif

    <body>
        <div class="container">
            <h1 class="form-title">
                Formulario de Registro
            </h1>

        <form id="registroForm" action="{{ route('registro.store') }}" method="POST">
            @csrf
              <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="name" id="name" placeholder="Ingrece su nombre" required>
              </div>  
              <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" id="email" name="email" placeholder="Ingrece su correo" required >
              </div>
              <div class="input-group password">
                <i class="fas fa-lock-open"></i>
                <input type="Password" name="password" id="password" placeholder="Ingrese una contraseña" required >
                <i id="eye1" class="fas fa-eye"></i>
              </div>
              <div class="input-group password">
                <i class="fas fa-lock"></i>
                <input type="Password" name="confirm_password" id="confirm_password" placeholder="Confirme su contraseña" required >
                <i id="eye2" class="fas fa-eye"></i>  
            </div>
            <input type="submit" class="btn" value="Registrar" name="Registrar">
        </form>
        <!-- Mensaje flotante -->
        <div id="mensaje" class="mensaje"></div>
        <p class="or">
            --------O--------
        </p>
        <div class="links">
            <p>¿Ya tienes una cuanta?</p>
            <a href="{{ route('Login') }}">Iniciar Sesión</a>  
        </div>
      </div>
    </body>
</html>
