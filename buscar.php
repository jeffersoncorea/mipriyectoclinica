<?php; ?>

<?php require("cnx.php");
// Inicialización de variables
$txtdoc = isset($_POST["doctor_seleccionado"]) ? $_POST["doctor_seleccionado"] : "";
$txtdoc1 = isset($_POST["txtdoctor"]) ? $_POST["txtdoctor"] : "";
$txtedad = isset($_POST["txtedad"]) ? $_POST["txtedad"] : "";
$txtesp = isset($_POST["txtespecialidades"]) ? $_POST["txtespecialidades"] : "";
$txtge = isset($_POST["txtgenero"]) ? $_POST["txtgenero"] : "";
$txtidentidad = isset($_POST["identidadR"]) ? $_POST["identidadR"] : "";
$txtnombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
$txtdepartamento = isset($_POST["departamento"]) ? $_POST["departamento"] : "";
$txtdireccion = isset($_POST["direccion"]) ? $_POST["direccion"] : "";
$txtdescripcion = isset($_POST["descripcion"]) ? $_POST["descripcion"] : "";
$txtfecha = isset($_POST["fecha"]) ? $_POST["fecha"] : "";
$txthora = isset($_POST["hora"]) ? $_POST["hora"] : "";
$txtidDoc = isset($_POST["idDoc"]) ? $_POST["idDoc"] : "";
$Accion = isset($_POST["accion"]) ? $_POST["accion"] : "";

// Lógica de búsqueda de doctor
if ($Accion == "Buscar") {
    $carrito = "SELECT * FROM doc WHERE nomdoc= '$txtdoc'";
    $ejecutar = mysqli_query($camino , $carrito);
    $buscar = mysqli_fetch_array($ejecutar);
    
    if ($buscar) {
        $txtdoc = $buscar['nomdoc'];
        $txtidDoc = $buscar['idDoc'];
        $txtesp = $buscar['especialidad'];
        $txtge = $buscar['genero'];
        $txtedad = $buscar['edad'];
    }
}


// Lógica para guardar reserva
if ($Accion == "Guardar") {
    $carrito = "INSERT  INTO reserva (nomdoc, identidadR, nombre, departamento, direccion, descripcion, fecha, hora) 
                VALUES ('$txtdoc1', '$txtidentidad', '$txtnombre', '$txtdepartamento', '$txtdireccion', '$txtdescripcion', '$txtfecha', '$txthora')";
    $ejecutar = mysqli_query($camino, $carrito);
    echo "Se ha guardado correctamente";
    sleep(3);
    header("location: menu.php");
    exit();
} elseif ($Accion == "Reporte") {
    header("location: reporte.php");
    exit();
}
?>

<!-- Enlaces a CSS -->
<link rel="stylesheet" href="style1.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<style>
  body {
    background: linear-gradient(to right, #f8e0e0, #ffffff); /* Fondo cálido */
    font-family: Arial, sans-serif;
  }
  h1 {
    margin-top: 20px;
    color: #0056b3;
  }
  .nav-link {
    font-weight: bold;
    color: #ffffff; /* Texto blanco */
  }
  .nav-link:hover {
    color: #ffc107; /* Color amarillo al pasar el mouse */
  }
  .nav {
    background-color: #007bff; /* Fondo azul */
    border-radius: 8px; /* Bordes redondeados */
  }
  .form-container {
    padding: 20px;
    background-color: white;
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

  <h4 class="text-center mt-4"> Hacer Cita</h4>
    
  <div class="row justify-content-center mt-5">
      <div class="col-lg-8 form-container"> <!-- Cuadro para el formulario -->
          <form method="POST">
              <div class="mb-3">
                  <label class="form-label">Seleccionar Doctor</label>
                  <select class="form-control" name="doctor_seleccionado" id="doctor_seleccionado">
                      <option value="">Seleccione un doctor</option>
                      <option value="Gerzon">1-Doctor</option>
                      <option value="Elvin">2-Odontologo</option>
                      <option value="luis">3-Cardiologo</option>
                      <option value="Brenda">4-Pediatra</option>
                      <option value="Jeferson">5-Cirujano</option>
                  </select>
              </div>
              <div class="mb-3">
                  <label class="form-label">Nombre del Doctor</label>
                  <input type="text" class="form-control" value="<?php echo $txtdoc; ?>" name="txtdoctor" id="txtdoctor" readonly />
              </div>
              <div class="mb-3">
                  <label class="form-label">ID del Doctor</label>
                  <input type="text" class="form-control" value="<?php echo $txtidDoc; ?>" name="txtidDoc" id="txtidDoc" readonly />
              </div>
              <div class="mb-3">
                  <label class="form-label">Edad</label>
                  <input type="text" class="form-control" value="<?php echo $txtedad; ?>" name="txtedad" id="txtedad" readonly />
              </div>
              <div class="mb-3">
                  <label class="form-label">Especialidad</label>
                  <input type="text" class="form-control" value="<?php echo $txtesp; ?>" name="txtespecialidades" id="txtespecialidades" readonly />
              </div>
              <div class="mb-3">
                  <label class="form-label">Género</label>
                  <input type="text" class="form-control" value="<?php echo $txtge; ?>" name="txtgenero" id="txtgenero" readonly />
              </div>

              <button type="submit" name="accion" value="Buscar" class="btn btn-warning">Buscar</button>

              <div class="mb-3">
                  <label for="identidadR" class="form-label">Escriba su número de Identidad:</label>
                  <input type="text" id="identidadR" name="identidadR" class="form-control" value="<?php echo $txtidentidad; ?>" />
              </div>
              <div class="mb-3">
                  <label for="nombre" class="form-label">Escriba su nombre:</label>
                  <input type="text" id="nombre" name="nombre" class="form-control" value="<?php echo $txtnombre; ?>" />
              </div>
              <div class="mb-3">
                  <label for="departamento" class="form-label">Seleccione el departamento de su Residencia:</label>
                  <select class="form-control" name="departamento" id="departamento">
                      <option value="">Seleccione departamento</option>
                      <option value="La paz">La Paz</option>
                      <option value="comayagua">Comayagua</option>
                      <option value="Tegucigalpa">Tegucigalpa</option>
                      <option value="Siguatepeque">Siguatepeque</option>
                      <option value="Choluteca">Choluteca</option>
                      <option value="El Progreso">El Progreso</option>
                      <option value="Ocotepeque">Ocotepeque</option>
                  </select>
              </div>
              <div class="mb-3">
                  <label for="direccion" class="form-label">Escriba su dirección:</label>
                  <input type="text" id="direccion" name="direccion" class="form-control" value="<?php echo $txtdireccion; ?>" />
              </div>
              <div class="mb-3">
                  <label for="descripcion" class="form-label">Describa su enfermedad o discapacidad:</label>
                  <textarea id="descripcion" name="descripcion" class="form-control" rows="3"><?php echo $txtdescripcion; ?></textarea>
              </div>
              <div class="mb-3">
                  <label for="fecha" class="form-label">Seleccione la fecha:</label>
                  <input type="date" id="fecha" name="fecha" class="form-control" value="<?php echo $txtfecha; ?>" />
              </div>
              <div class="mb-3">
                  <label for="hora" class="form-label">Seleccione la hora:</label>
                  <input type="time" id="hora" name="hora" class="form-control" value="<?php echo $txthora; ?>" />
              </div>
              <div class="d-grid">
                  <button type="submit" name="accion" value="Guardar" class="btn btn-primary">Guardar</button>
                  <a class="btn btn-info" href="menu.php">Volver</a>
              </div>
              <br>
          </form>
      </div>
  </div>

<?php include("Plantilla/pie.php"); ?>