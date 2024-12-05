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
        <link href="libs/slick/slick-theme.css" rel="stylesheet">
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
                                        <a href="info.php" class="nav-item nav-link">Información</a>
                                        <a href="guia.php" class="nav-item nav-link">Guía de uso</a>
                                        <a href="contact.php" class="nav-item nav-link">Contáctanos</a>
                                        <a href="registro.php" class="btn nav-item active" id="register-btn">
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
                            <h2>Registro de Usuario</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Inicio</a>
                            <a href="">Registrarse</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->

    <script>
        function validateForm() {
            const username = document.getElementById("username").value;
            const name = document.getElementById("name").value;
            const lastname = document.getElementById("lastname").value;
            const email = document.getElementById("email").value;
            const password = document.getElementById("password").value;
            const confirmPassword = document.getElementById("confirm-password").value;
            const terms = document.getElementById("terms").checked;

            if (!username || !name || !lastname || !email || !password || !confirmPassword) {
                alert("Por favor, complete todos los campos.");
                return false;
            }

            if (password !== confirmPassword) {
                alert("Las contraseñas no coinciden.");
                return false;
            }

            if (!terms) {
                alert("Debe aceptar los términos y condiciones.");
                return false;
            }

            return true; // Validación exitosa
        }
    </script>
</head>

<body>
    <!-- Registration Form Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="text-center mb-4">Crea tu cuenta</h1>
            <form onsubmit="return validateForm()">
                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="form-floating">
                            Nombre: <input type="text" class="form-control" id="name" placeholder="Nombre" required>
                        </div>
                    </div><br>
                    <div class="col-md-6">
                        <div class="form-floating">
                            Apellido: <input type="text" class="form-control" id="lastname" placeholder="Apellido" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            Nombre de Usuario: <input type="text" class="form-control" id="username" placeholder="Nombre de Usuario" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            Correo Electrónico: <input type="email" class="form-control" id="email" placeholder="Correo Electrónico" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            Contraseña: <input type="password" class="form-control" id="password" placeholder="Contraseña" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-floating">
                            Confirmar Contraseña: <input type="password" class="form-control" id="confirm-password" placeholder="Confirmar Contraseña" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="terms" required>
                            <label class="form-check-label" for="terms">
                                Acepto los términos y condiciones
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary py-3 px-4" type="submit">Registrarse</button>
                    </div>
                </div>
            </form>
            <p class="text-center mt-3">¿Ya tienes cuenta? <a href="login.php">Iniciar sesión</a></p>
        </div>
    </div>
    <!-- Registration Form End -->

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
                        <div class="footer-link">
                            <h2>Síguenos en redes</h2>
                            <a href="contact.php">Facebook</a>
                            <a href="contact.php">Instagram</a>
                            <a href="contact.php">Twitter</a>
                            <a href="contact.php">Correo electrónico</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright -->
    <div class="container copyright">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; BioFactor, Todos los derechos reservados.</p>
            </div>
            <div class="col-md-6 text-md-right">
                <p>Diseñado por <a href="#">BioFactor</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->
</body>

</html>
