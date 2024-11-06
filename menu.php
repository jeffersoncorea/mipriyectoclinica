<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        body {
            background: linear-gradient(to right, #f8e0e0, #ffffff); /* Fondo más cálido */
            font-family: Arial, sans-serif;
        }
        h1 {
            margin-top: 20px;
            color: #0056b3;
        }
        .nav-link {
            font-weight: bold;
            color: #ffffff; /* Texto blanco para mayor contraste */
        }
        .nav-link:hover {
            color: #ffc107; /* Color amarillo al pasar el mouse */
        }
        .nav {
            background-color: #007bff; /* Fondo azul para la barra de navegación */
            border-radius: 8px; /* Bordes redondeados */
        }
        .content-section {
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s, transform 0.3s; /* Transición suave */
        }
        .content-section:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); /* Sombra más pronunciada al pasar el mouse */
            transform: scale(1.02); /* Efecto de aumento al pasar el mouse */
        }
        .welcome-img {
            max-width: 100%;
            height: auto;
        }
        .service-section {
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s, transform 0.3s; /* Transición suave */
            margin-top: 20px; /* Espacio entre secciones */
        }
        .service-section:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); /* Sombra más pronunciada al pasar el mouse */
            transform: scale(1.02); /* Efecto de aumento al pasar el mouse */
        }
        .service-card {
            border: none;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>

    <title>Bienvenido a la Clínica</title>
</head>
<body>
    <nav class="nav nav-pills p-3 justify-content-center">
        <a href="menu.php" class="nav-link">Inicio</a>
        <a href="buscar.php" class="nav-link">Nueva Cita</a>
        <a href="factura.php" class="nav-link">Ver todas las Citas</a>
        <a href="tienda.php" class="nav-link">Farmacia</a>
        <a href="factura2.php" class="nav-link">Facturas Farmacia</a>
        <a href="cerrar.php" class="nav-link">Cerrar Sesión</a>
    </nav>

    <div class="container text-center">
        <h1>¡Bienvenidos a nuestra Clínica!</h1>
        <div class="content-section my-4">
            <img src="fpdf/img/hola2.png" alt="escudo" class="welcome-img">
            <p class="mt-3">Estamos aquí para ofrecerte la mejor atención. Explora nuestras opciones de servicios y citas a través de la navegación superior.</p>
        </div>

        <h2>Servicios Disponibles</h2>
        <div class="service-section">
            <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="card service-card">
                        <div class="card-body">
                            <h5 class="card-title">Consulta Médica</h5>
                            <p class="card-text">Atención personalizada con nuestros médicos especialistas.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="card service-card">
                        <div class="card-body">
                            <h5 class="card-title">Farmacia</h5>
                            <p class="card-text">Disponemos de una farmacia completa con atención inmediata.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Clínica. Todos los derechos reservados.</p>
    </footer>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

<?php include("plantilla/pie.php"); ?>