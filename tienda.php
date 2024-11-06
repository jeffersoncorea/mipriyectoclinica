<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <title>Bienvenido a la Clínica</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to right, #f8e0e0, #ffffff);
            font-family: Arial, sans-serif;
            margin: 0;
        }
        header {
            background-color: #007bff;
            padding: 20px;
            text-align: center;
            color: white;
        }
        nav {
            margin: 10px 0;
        }
        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover {
            color: #ffc107;
        }
        h1 {
            color: #0056b3;
            margin-top: 20px;
        }
        .container {
            max-width: 1200px;
            margin: auto;
            padding: 20px;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .col-md-4 {
            flex: 0 0 30%;
            margin: 10px;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            background-color: white;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
        .card-img-top {
            max-width: 200%;
            height: auto;
            border-radius: 10px 10px 0 0;
            transition: transform 0.6s ease, filter 0.6s ease;
        }
        .card-img-top:hover {
            transform: scale(1.1);
            filter: brightness(1.2);
        }
        .card-body {
            padding: 20px;
        }
        footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <header>
        <nav>
            <a href="menu.php">Inicio</a>
            <a href="buscar.php">Nueva Cita</a>
            <a href="factura.php">Ver todas las Citas</a>
            <a href="tienda.php">Farmacia</a>
            <a href="factura2.php">Facturas Farmacia</a>
            <a href="cerrar.php">Cerrar Sesión</a>
        </nav>
    </header>
    <center><h1>Productos</h1></center>
    <div class="container">
        <div class="row">
            <!-- Tarjeta 1 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="imagen/ece.jpg" class="card-img-top" alt="Acetaminofen">
                    <div class="card-body">
                        <h5 class="card-title">Acetaminofen</h5>
                        <p class="card-text">
                            Precio 30 lps<br>
                            El acetaminofeno se usa para aliviar el dolor leve o moderado.<br>
                            Acetaminofén Mk 500 Mg 20 Tabletas.
                        </p>
                        <a href="for1.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="imagen/para.jpg" class="card-img-top" alt="Paracetamol">
                    <div class="card-body">
                        <h5 class="card-title">Paracetamol</h5>
                        <p class="card-text">
                            Precio 45 lps cdu<br>
                            PARACETAMOL es un analgésico y antipirético eficaz para el control del dolor leve o moderado.<br>
                            Paracetamol Pensa 500 mg de 10 y 20 comprimidos.
                        </p>
                        <a href="for1.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="imagen/lora.jpg" class="card-img-top" alt="Loratadina">
                    <div class="card-body">
                        <h5 class="card-title">Loratadina</h5>
                        <p class="card-text">
                            Precio 60 lps<br>
                            La loratadina es un fármaco antihistamínico para tratar síntomas de resfriados y reacciones alérgicas.<br>
                            Loratadina Sandoz está disponible en envase de 20 comprimidos.
                        </p>
                        <a href="for1.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 4 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="imagen/ibuprofeno.jpg" class="card-img-top" alt="Ibuprofeno Calox">
                    <div class="card-body">
                        <h5 class="card-title">Ibuprofeno Calox</h5>
                        <p class="card-text">
                            Precio 70 lps<br>
                            Antiinflamatorio no esteroideo con actividad analgésica y antipirética.<br>
                            Ibuprofeno 400 mg Tabletas Recubiertas.
                        </p>
                        <a href="for1.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 5 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="imagen/sintrom.jpg" class="card-img-top" alt="Sintrom">
                    <div class="card-body">
                        <h5 class="card-title">Sintrom</h5>
                        <p class="card-text">
                            Precio 1,200 lps<br>
                            Sintrom se utiliza para la prevención y el tratamiento de la coagulación de la sangre.<br>
                            Sintrom 4 mg 30 tabletas.
                        </p>
                        <a href="for1.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 6 -->
            <div class="col-md-4">
                <div class="card">
                    <img src="imagen/suero.jpg" class="card-img-top" alt="Suero Oral Ancalmo Vitaminado">
                    <div class="card-body">
                        <h5 class="card-title">Suero Oral Ancalmo Vitaminado</h5>
                        <p class="card-text">
                            Precio 75 lps<br>
                            Reemplaza el agua y electrolitos perdidos por deshidratación.<br>
                            Contiene paquete de 54 sobres.
                        </p>
                        <a href="for1.php" class="btn btn-primary">Comprar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>&copy; 2024 Clínica - Todos los derechos reservados</p>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-evSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"></script>
</body>
</html>