<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de Cita Médica</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

<div class="container ">
<div class="row justify-content-center mt-5">
<div class="col-lg-6">
    <div class="card p-4">
        <h1 class="text-center">Reserva de Cita Médica</h1>
        <form action="#" method="post">
            <div class="mb-3">

            <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    if (isset($_POST['nomdoc']) && isset($_POST['edad']) && isset($_POST['especialidad']) && isset($_POST['genero'])) {
        $nombres = $_POST['nomdoc'];
        $edades = $_POST['edad'];
        $especialidades = $_POST['especialidad'];
        $generos = $_POST['genero'];

     
        echo '<div class="container mt-4">';
        
        for ($i = 0; $i < count($nombres); $i++) {
            
            echo '<div class="card mb-3" style="padding: 15px;">';
            echo '<h5>Doctor: ' . htmlspecialchars($nombres[$i]) . '</h5>';
            echo '<p><strong>Edad:</strong> ' . htmlspecialchars($edades[$i]) . '</p>';
            echo '<p><strong>Especialidad:</strong> ' . htmlspecialchars($especialidades[$i]) . '</p>';
            echo '<p><strong>Género:</strong> ' . htmlspecialchars($generos[$i]) . '</p>';
            echo '</div>'; 
        }

        echo '</div>'; 
    } else {
        echo "No se recibieron datos.";
    }
}
?>
             <div class="mb-3">
                <label for="identidad" class="form-label">Escriba su numero de Identidad:</label>
                <input type="text" id="identidad" name="identidad" class="form-control" required>
            </div>
           <div class="mb-3">
                <label for="nombre" class="form-label">Escriba su nombre:</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="departamento" class="form-label">Seleccione departamento:</label>
                <input type="departamento" name="departamento" class="form-control" required>
                   
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Escriba su dirección:</label>
                <input type="text" id="direccion" name="direccion" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Describa su enfermedad o discapacidad:</label>
                <textarea id="descripcion" name="descripcion" class="form-control" rows="3" required></textarea>
            </div>

            

            <div class="mb-3">
                <label for="fecha" class="form-label">Seleccione la fecha:</label>
                <input type="date" id="fecha" name="fecha" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="hora" class="form-label">Seleccione la hora:</label>
                <input type="time" id="hora" name="hora" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Reservar</button>
        </form>
    </div>
</div>


</body>
</html>