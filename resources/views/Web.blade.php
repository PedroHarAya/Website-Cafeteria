<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Coffe Shop</title>

    <!--Estillos CSS-->
    @vite(['resources/css/Estilos3.css', 'resources/js/Instrucciones.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <form action="{{ route('logout') }}" method="POST" class="logout-form">
        @csrf
        <button type="submit" class="logout-btn-img">
            <img src="{{ Vite::asset('resources/images/salir.png') }}" alt="Cerrar sesión" title="Cerrar sesión">
        </button>
    </form>
    <header>
        <div class="container-hero">
            <div class="container hero">
                <div class="customer-support">
                    <i class="fa-solid fa-headset"></i>
                    <div class="content-customer-support">
                        <span class="text">Soporte al Cliente</span>
                        <span class="number">667-304-3145</span>
                    </div>
                </div>
                <div class="container-logo">
                    <i class="fa-solid fa-mug-hot"></i>
                    <h1 class="logo"><a href="/">Roost</a></h1>
                </div>
                <div class="container-user">
                    <i class="fa-solid fa-user"></i>
                    <i class="fa-solid fa-basket-shopping"></i>
                    <div class="container-shopping-cart">
                        <span class="text">Carrito</span>
                        <span class="number">(0)</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars"></i>
                <ul class="menu">
                    <li><a href="#">Inicio</a></li>
                    <li><a href="#">Moca Helado</a></li>
                    <li><a href="#">Expreso</a></li>
                    <li><a href="#">Capuchino</a></li>
                    <li><a href="#">Más</a></li>
                    <li><a href="#">Blog</a></li>
                </ul>

                <form class="search-form">
                    <input type="search" placeholder="Buscar...">
                    <button class="btn-search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </button>
                </form>
            </nav>
        </div>
    </header>

    <section class="banner">
        <div class="content-banner">
            <p>Café Delicioso</p>
            <h2>100% Natural <br>Café Fresco</h2>
            <a href="#">Comprar ahora</a>
        </div>
    </section>
</body>

</html>