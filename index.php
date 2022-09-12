<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Optimización de videojuegos</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500&display=swap" rel="stylesheet">
    
    <link rel='stylesheet' type='text/css' media='screen' href='./style/index.css'>
</head>

<body class="d-flex flex-column min-vh-100">                  <!-- LANDING PAGE -->
    <header class="hero">
        <div class="textos-hero">
            <h1>Curses and sweet lies</h1>
            <p>Una nueva era se acerca, el bien y el mal se encuentran, una forma de derrotarlo es ...</p>
            <a href="#hrefComunidad" class="btn btn-warning" role="button">Conoce más</a>
        </div>

        <div class="svg-hero" style="height: 150px; overflow: hidden;" >
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: #505050;"></path>
            </svg>
        </div>
    </header>
    
    <div class="container-fluid container">
        <div class="contenedor last-section" id="hrefComunidad">
            <img src="./resources/D.png" alt="comunidad" class="profile">
            <div class="contenedor-textos-main">
                <h2 class="titulo left">Spring Boy #D</h2>
                <p class="parrafo">Equipado para la guerra, puro personaje, demostrando a mi país que somos los más leales.</p>
                <a href="#hrefInfo" class="btn btn-warning cta" role="button">Siguiente</a>
            </div>
        </div>
    </div>

    <div class="container-fluid container">
        <div class="contenedor last-section" id="hrefComunidad">
            <div class="contenedor-textos-main">
                <h2 class="titulo left">Strange Human #N</h2>
                <p class="parrafo">Odian a los villanos, sin saber realmente que es lo que los mueve a hacer tales acciones.</p>
                <a href="#hrefInfo" class="btn btn-warning cta" role="button">Siguiente</a>
            </div>   
            <img src="./resources/N.png" alt="comunidad" class="profile">     
        </div>
    </div>

    <section class="info" id="hrefInfo">
        <div class="contenedor container-fluid container">
            <h2 class="titulo left">Información</h2>
            <p class="parrafo">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            <a href="#hrefUsuarios" class="btn btn-outline-light cta" role="button">Aceptar</a>
        </div>
    </section>

    <div class="container-fluid container">
        <section class="cards contenedor" id="hrefUsuarios">
            <h2 class="titulo">Redes sociales</h2>
            <div class="content-cards">
                <article class="card">
                    <i class="bi bi-facebook"></i>
                    <h3>Facebook</h3>
                    <p>Siguenos en Facebook</p>
                    <a href="https://www.facebook.com/Curses-Sweet-Lies-114750657906302/" target="_blank" class="btn btn-warning cta" role="button">Me interesa</a>
                </article>

                <article class="card">
                    <i class="bi bi-twitter"></i>
                    <h3>Twitter</h3>
                    <p>Siguenos en Twitter</p>
                    <a href="https://twitter.com/the8_imperium?t=pdM2yWDr1Cso9_HLEbCvEg&s=09" target="_blank" class="btn btn-warning cta" role="button">Me interesa</a>
                </article>
                
                <article class="card">
                    <i class="bi bi-instagram"></i>
                    <h3>Instagram</h3>
                    <p>Siguenos en Instagram</p>
                    <a href="https://instagram.com/curses.and.sweet_lies?igshid=YmMyMTA2M2Y=" target="_blank" class="btn btn-warning cta" role="button">Me interesa</a>
                </article>
            </div>
        </section>

    </div>

    <div class="svg-wave" style="height: 150px; overflow: hidden;" >
        <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
            <path d="M0.00,49.98 C149.99,150.00 349.20,-49.98 500.00,49.98 L500.00,150.00 L0.00,150.00 Z" style="stroke: none; fill: rgb(33, 37, 41);"></path>
        </svg>
    </div> 

<?php
        include_once('assets/footer.php');
    ?>

</body>
</html>