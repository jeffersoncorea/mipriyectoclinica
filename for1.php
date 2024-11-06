<?php include("Plantilla/cabeza.php"); ?>
<?php require("cnx.php"); 

$txtnombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$txtproductoF = isset($_POST["producto"]) ? $_POST["producto"] : "";
$txtcantidad = isset($_POST["cantidad"]) ? $_POST["cantidad"] : "";
$txttotal = isset($_POST["total"]) ? $_POST["total"] : "";
$txtfecha = date('Y-m-d');

$Accion = isset($_POST["accion"]) ? $_POST["accion"] : "";

if ($Accion == "Guardar") {
    // Inserción en la tabla facturas
    $carrito = "INSERT INTO facturas (nombre, productoF, cantidad, fecha, total) 
                VALUES ('$txtnombre', '$txtproductoF', $txtcantidad, '$txtfecha', '$txttotal')";
    $ejecutar = mysqli_query($camino, $carrito);

    if ($ejecutar) {
        echo "Se ha guardado correctamente.";
        sleep(3);
        header("location: menu.php");
        exit();
    } else {
        echo "Error al guardar la factura: " . mysqli_error($camino);
    }
} else if ($Accion == "Reporte2") {
    header("location: reporte2.php");
    exit();
} else {
    echo "";
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
  .welcome-img {
    max-width: 100%;
    height: auto;
  }
  .content-section {
    padding: 20px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
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
    <title>Formulario de Factura</title>
</head>
<body>

<div class="container mt-5">
    <h1 class="text-center">Formulario de Compra</h1>
    <form id="facturaForm" method="POST">
        <div class="form-group">
            <label for="nombre">Nombre del Comprador</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="producto">Producto</label>
            <select class="form-control" id="productoF" name="producto" required>
                <option value="" disabled selected>Selecciona un producto</option>
                <option value="Acetaminofen">Acetaminofen</option>
                <option value="Paracetamol">Paracetamol</option>
                <option value="Loratadina">Loratadina</option>
                <option value="Ibuprofeno">Ibuprofeno</option>
                <option value="Sintrom">Sintrom</option>
                <option value="Sueldo Oral Ancalmo">Sueldo Oral Ancalmo</option>
            </select>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" class="form-control" id="cantidad" name="cantidad" min="1" required>
        </div>
        <div class="form-group">
            <label for="total">Total</label>
            <input type="text" class="form-control" id="total" name="total" required readonly>
        </div>
        <button type="button" class="btn btn-primary" onclick="calcularTotal()">Calcular Total</button>
        <button type="submit" name="accion" value="Guardar" class="btn btn-primary">Comprar</button>
    </form>
</div>

<script>
function calcularTotal() {
    const cantidad = document.getElementById('cantidad').value;
    const precioPorUnidad = 30.00; // Cambia esto por el precio real del producto
    const total = cantidad * precioPorUnidad;
    document.getElementById('total').value = total.toFixed(2);
}
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>