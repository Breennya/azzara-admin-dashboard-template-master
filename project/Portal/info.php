<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>BioFactor</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Bootstrap Agency Template" name="keywords">
    <meta content="Bootstrap Agency Template" name="description">

    <!-- Favicon -->
    <link href="img/logo/logo.ico" rel="icon">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 
    
    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="lib/slick/slick.css" rel="stylesheet">
    <link href="lib/slick/slick-theme.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>        
    <div class="wrapper"><!-- Header Start -->
        <div class="header">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2">
                        <div class="brand">
                            <a href="index.php">
                                <img src="img/logo/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="topbar">
                            <div class="topbar-col">
                                <a href="tel:+012 345 67890"><i class="fa fa-phone-alt"></i>+52 624 345 67900</a>
                            </div>
                            <div class="topbar-col">
                                <a href="mailto:info@example.com"><i class="fa fa-envelope"></i>biofactor@gmail.com</a>
                            </div>
                            <div class="topbar-col">
                                <div class="topbar-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="navbar navbar-expand-lg bg-light navbar-light">
                            <a href="#" class="navbar-brand">MENU</a>
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>
        
                            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                                <div class="navbar-nav ml-auto">
                                    <a href="index.php" class="nav-item nav-link">Inicio</a>
                                    <a href="about.php" class="nav-item nav-link">Acerca de</a>
                                    <a href="info.php" class="nav-item nav-link active">Información</a>
                                    <a href="guia.php" class="nav-item nav-link">Guía de uso</a>
                                    <a href="contact.php" class="nav-item nav-link">Contáctanos</a>
                                    <a href="registro.php" class="btn nav-item" id="register-btn">
                                        <img src="img/registrar.png" alt="Registrar">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Page Header Start -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h2>Preguntas Frecuentes</h2>
                    </div>
                    <div class="col-12">
                        <a href="">Inicio</a>
                        <a href="">Informacón</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page Header End -->

        <div class="single">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!-- Control de búsqueda -->
                        <form class="mb-4">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Escribe tu pregunta aquí..." aria-label="Buscar" id="searchInput">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" onclick="searchFAQ()">Buscar</button>
                                </div>
                            </div>
                        </form>

                        <h2 class="section-title">Preguntas Frecuentes</h2>
                        <div id="faqList">
                            <div class="faq-item">
                                <h3>¿Qué es un biodigestor?</h3>
                                <p>Un biodigestor es un sistema que permite la descomposición de residuos orgánicos en ausencia de oxígeno, produciendo biogás y un subproducto fertilizante.</p>
                            </div>
                            <div class="faq-item">
                                <h3>¿Cómo se monitorea la producción de gas metano?</h3>
                                <p>La producción de gas se monitorea mediante sensores que miden la presión y la concentración de gas dentro del biodigestor, y envían estos datos a un sistema en tiempo real.</p>
                            </div>
                            <div class="faq-item">
                                <h3>¿Qué tipo de residuos se pueden usar?</h3>
                                <p>Principalmente residuos orgánicos, como restos de alimentos, estiércol y material vegetal, que se descomponen de manera eficiente en el biodigestor.</p>
                            </div>
                            <div class="faq-item">
                                <h3>¿Cuáles son los beneficios del uso de biodigestores?</h3>
                                <p>Los biodigestores reducen la acumulación de residuos, producen biogás como fuente de energía renovable y generan un fertilizante natural.</p>
                            </div>
                            <div class="faq-item">
                                <h3>¿Es seguro el uso de biodigestores?</h3>
                                <p>Sí, los biodigestores son seguros si se instalan y mantienen correctamente. Es importante seguir las recomendaciones del fabricante y realizar un monitoreo regular.</p>
                            </div>
                            <div class="faq-item">
                                <h3>¿Qué mantenimiento requieren los biodigestores?</h3>
                                <p>El mantenimiento incluye la limpieza de los sensores, la revisión de las conexiones y el aseguramiento de que no haya obstrucciones en las entradas y salidas del sistema.</p>
                            </div>
                            <div class="faq-item">
                                <h3>¿Cuánto tiempo se tarda en producir biogás?</h3>
                                <p>El tiempo de producción de biogás puede variar, pero generalmente comienza a producirse entre 15 y 30 días después de la carga inicial de residuos orgánicos.</p>
                            </div>
                            <div class="faq-item">
                                <h3>¿Se puede usar el biogás en casa?</h3>
                                <p>Sí, el biogás producido puede utilizarse como combustible para cocinar, generar electricidad o incluso para calefacción, siempre que se instalen los sistemas adecuados.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer Start -->
        <footer class="footer">
            <div class="container">
                <div class="row">
                    <!-- Sobre Nosotros -->
                    <div class="col-md-5">
                        <div class="footer-about">
                            <h2>Nosotros</h2>
                            <p>
                                En BioFactor, nos dedicamos a ofrecer soluciones innovadoras y sostenibles para la gestión de residuos sólidos mediante biodigestores. Nuestro enfoque es brindar una alternativa eficiente y amigable con el medio ambiente para supervisar la producción de gas metano a partir de desechos orgánicos.
                            </p>
                            <ul class="footer-contact">
                                <li><i class="fa fa-phone-alt"></i> +52 624 345 67900</li>
                                <li><i class="fa fa-envelope"></i> biofactor@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Enlaces Rápidos y Redes Sociales -->
                    <div class="col-md-7">
                        <div class="row">
                            <!-- Enlaces Rápidos -->
                            <div class="col-md-6">
                                <div class="footer-link">
                                    <h2>Enlaces rápidos</h2>
                                    <a href="about.php">Acerca de</a>
                                    <a href="about.php">Misión</a>
                                    <a href="about.php">Visión</a>
                                    <a href="about.php">Equipo</a>
                                </div>
                            </div>
                            <!-- Redes Sociales -->
                            <div class="col-md-6">
                                <div class="footer-social">
                                    <h2>Redes Sociales</h2>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <p>&copy; <a href="#">BioFactor</a>, Todos los derechos reservados. Diseño por <a href="#">Equipo SOFT</a></p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer End -->
    </div>

    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/slick/slick.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="js/main.js"></script>

    <!-- Script de búsqueda -->
    <script>
        function searchFAQ() {
            const input = document.getElementById('searchInput').value.toLowerCase();
            const faqItems = document.querySelectorAll('.faq-item');
            let found = false;

            faqItems.forEach(item => {
                const question = item.querySelector('h3').textContent.toLowerCase();
                if (question.includes(input) || item.querySelector('p').textContent.toLowerCase().includes(input)) {
                    item.style.display = 'block';
                    found = true;
                } else {
                    item.style.display = 'none';
                }
            });

            if (!found) {
                alert('No se encontraron resultados para su búsqueda.');
            }
        }
    </script>
</body>
</html>
