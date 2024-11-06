<?php include("Plantilla/cabeza.php"); ?>
<?php require("cnx.php"); 



?>

    <h4>CITAS</h4>
    <link rel="stylesheet" href="style1.css">
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
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <form action="reporte.php" method="POST">
                <div class="mb-3">
                    <label  form="" class="form-label">Codigo</label>
                    <input type="text" class="form-control" name="txtidDoc" id="txtidDoc" placeholder=""/></br>

    
                <button type="submit" name="accion" value="Reporte" class="btn btn-warning">Reporte</button>
             
                <a class="btn btn-info" href="menu.php">Volver </a>
               
            </form>
        </div>
    </div>   
<?php include("Plantilla/pie.php"); ?>