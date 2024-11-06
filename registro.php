
<?php
require("cnx.php");
$id=isset(($_POST["txtid"]))? $_POST["txtid"]:"";
$usua=isset(($_POST["txtusuario"]))? $_POST["txtusuario"]: "";
$contra=isset(($_POST["txtcontraseña"]))? $_POST["txtcontraseña"]:"";
$nac=isset(($_POST["txtnac"]))? $_POST["txtnac"]:"";
$tel=isset(($_POST["txttelef"]))? $_POST["txttelef"]:"";
$accion=isset(($_POST["accion"]))? $_POST["accion"]:"";


if ($accion == "ingresar" ) {
    $carrito = "INSERT INTO usuario (Id, usuario, contraseña, nacionalidad, telefono) VALUES ('$id','$usua','$contra','$nac','$tel')";
    $carrito = mysqli_query($camino, $carrito);
    sleep(3);
    header("location: index.php");
}
else {
    echo "Realice una accion";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-6">
                <div class="card shadow-lg">
                    <h1>Registrate </h1>
                        <div class="card-body">
                            <form  method="POST">
                                <div class="mt-3">
                                    <label for="" class="form-label">Ingrese numero de identidad</label>
                                    <input type="text" name="txtid" class="form-control">
                                </div>

                                <div class="mt-3">
                                    <label for="" class="form-label">Ingrese su usuario</label>
                                    <input type="text" name="txtusuario" class="form-control">
                                </div>

                                <div class="mt-3">
                                    <label for="" class="form-label">Ingrese una contraseña</label>
                                    <input type="password" name="txtcontraseña" class="form-control">
                                </div>

                                <div class="mt-3">
                                    <label for="" class="form-label">Ingrese su nacionalidad</label>
                                    <input type="text" name="txtnac" class="form-control">
                                </div>

                                <div class="mt-3">
                                    <label for="" class="form-label">Ingrese su numero telefonico </label>
                                    <input type="text" name="txttelef" class="form-control">
                                </div>
                                <br><br>
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-info" name="accion" value="ingresar" >Ingresar </button>
                                </div>

                                
                            </form>
                        </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>