<?php
require("cnx.php");
$id=$_POST["txtid"];
$usua=$_POST["txtusuario"];
$contra=$_POST["txtcontraseña"];
try {
    $carrito="SELECT Id,usuario,contraseña FROM usuario where Id ='$id' and usuario='$usua' and contraseña='$contra' ";
    $ejecutar=mysqli_query($camino, $carrito);

    if (mysqli_num_rows($ejecutar) > 0){
        session_start();
        $_SESSION['usuario'] = $ejecutar;
    header("Location: menu.php ");
    }
    else {
        echo "error usuario o contraseña incorrecta";
    }
} catch (exception $ex) {
    echo"error" .$ex->getmessage();
}
mysqli_close($camino);
?>