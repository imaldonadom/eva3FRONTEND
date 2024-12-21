<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>One Page Scroll Website</title>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/style.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/styles.css"> <!-- Enlace al CSS -->
</head>
<body>

    <!-- Header -->
    <header class="main-header">
        <nav>
            <ul>
                <li style="float: left; font-family: 'Dancing Script', serif; font-size: 24px; font-weight: bold; color: white; margin-right: 20px;">
                    <a href="#banner" style="text-decoration: none; color: inherit;">La Chomba</a>
                </li>
                <li><a href="#banner">Inicio</a></li>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#contacto">Contact</a></li>
            </ul>
        </nav>
    </header>


        <!-- Banner -->
        <section id="banner" class="banner">
            <h1>La Chomba</h1>
            <!-- Cuadro de Texto -->
            <div class="intro-box">
                <p class="intro-text">
                    La Chomba es un emprendimiento dedicado al arte de tejer, ofreciendo productos artesanales hechos con pasión y dedicación. Este proyecto busca plasmar la esencia del negocio a través de una página web sencilla y funcional que permita a los clientes conectarse con el emprendimiento y conocer sus canales de comunicación.
                </p>
            </div>
            <!-- Carrusel -->

            <div id="carouselExample" class="carousel slide">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="imagen/estambre1.png" class="d-block" alt="First Slide">
                    </div>
                    <div class="carousel-item">
                        <img src="imagen/estambre2.png" class="d-block" alt="Second Slide">
                    </div>
                    <div class="carousel-item">
                        <img src="imagen/gorro3.png" class="d-block" alt="Third Slide">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>



<!-- Producto -->
<section id="productos" class="productos">
    <h2>Productos</h2>
    <div class="contenedor-productos">
        <div class="fondo">
            <img src="imagen/chomba1.png" alt="Chomba 1">
        </div>
        <div class="fotos">
            <div class="foto-container">
                <img src="imagen/ropa1.jpg" alt="Product 1" onclick="ampliarImagen(this)">
            </div>
            <div class="foto-container">
                <img src="imagen/ropa2.jpg" alt="Product 2" onclick="ampliarImagen(this)">
            </div>
            <div class="foto-container">
                <img src="imagen/ropa3.jpg" alt="Product 3" onclick="ampliarImagen(this)">
            </div>
        </div>
        <div class="fondo">
            <img src="imagen/chomba2.png" alt="Chomba 2">
        </div>
    </div>
</section>
<script src="script.js"></script>




    <section id="contacto" class="contacto">
        <h2>Contact Us</h2>
        <form class="contact-form">
            <input type="text" placeholder="Your Name">
            <input type="email" placeholder="Your Email">
            <textarea placeholder="Your Message"></textarea>
            <button type="submit">Send</button>
        </form>
    </section>

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 La Chomba. All Rights Reserved.</p>
    </footer>


    
</body>
</html>
