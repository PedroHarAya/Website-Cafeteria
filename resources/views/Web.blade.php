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

    <main class="main content">
        <section class="container container-features">
            <div class="card-feature">
                <i class="fa-solid fa-plane-up"></i>
                <div class="feature-content">
                    <span>Envio gratuito a nivel mundial</span>
                    <p>En pedido superior a $150</p>
                </div>
            </div>
            <div class="card-feature">
                <i class="fa-solid fa-wallet"></i>
                <div class="feature-content">
                    <span>Contrareembolso</span>
                    <p>100% garantia de devolución de dinero</p>
                </div>
            </div>
            <div class="card-feature">
                <i class="fa-solid fa-gift"></i>
                <div class="feature-content">
                    <span>Targeta regalo especial</span>
                    <p>Ofrece bonos especiales con regalo</p>
                </div>
            </div>
            <div class="card-feature">
                <i class="fa-solid fa-headset"></i>
                <div class="feature-content">
                    <span>Soporte al Cliente 24/7</span>
                    <p>Llamanos 24/7 al 6673023346</p>
                </div>
            </div>
        </section>
        <section class="container top-categories">
            <h1 class="heading-1">Mejores Categorías</h1>
            <div class="container-categories">
                <div class="card-category category-moca">
                    <p>Café moca</p>
                    <span>Ver más</span>
                </div>
                <div class="card-category category-expreso">
                    <p>Expreso Americano</p>
                    <span>Ver más</span>
                </div>
                <div class="card-category category-capuchino">
                    <p>Capuchino</p>
                    <span>Ver más</span>
                </div>
            </div>
        </section>
        <section class="container top-products">
            <h1 class="heading-1">Mejores Productos</h1>
            <div class="container-options">
                <span class="active">Destacados</span>
                <span>Más recientes</span>
                <span>Mejores vendidos</span>
            </div>

            <div class="container-products">
                <!-- Producto 1 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="images/cafe-irish.jpg" alt="cafe irish">
                        <span class="discount">-13%</span>
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-code-compare"></i>
                            </span>
                        </div>
                    </div>

                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Café Irish</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$4.70 <span>$5.40</span></p>
                    </div>
                </div>
                <!-- Producto 2 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="images/cafe-irish.jpg" alt="cafe irish">
                        <span class="discount">-13%</span>
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-code-compare"></i>
                            </span>
                        </div>
                    </div>

                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Café Irish</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$4.70 <span>$5.40</span></p>
                    </div>
                </div>
                <!-- Producto 3 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="images/cafe-irish.jpg" alt="cafe irish">
                        <span class="discount">-13%</span>
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-code-compare"></i>
                            </span>
                        </div>
                    </div>

                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Café Irish</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$4.70 <span>$5.40</span></p>
                    </div>
                </div>
                <!-- Producto 4 -->
                <div class="card-product">
                    <div class="container-img">
                        <img src="images/cafe-irish.jpg" alt="cafe irish">
                        <span class="discount">-13%</span>
                        <div class="button-group">
                            <span>
                                <i class="fa-regular fa-eye"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-heart"></i>
                            </span>
                            <span>
                                <i class="fa-regular fa-code-compare"></i>
                            </span>
                        </div>
                    </div>

                    <div class="content-card-product">
                        <div class="stars">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-regular fa-star"></i>
                        </div>
                        <h3>Café Irish</h3>
                        <span class="add-cart">
                            <i class="fa-solid fa-basket-shopping"></i>
                        </span>
                        <p class="price">$4.70 <span>$5.40</span></p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>