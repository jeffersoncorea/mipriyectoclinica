<?php
try {
    $camino = mysqli_connect("localhost", "root", "", "clinica");
 echo "";
} 
catch (exception $ex) {
    echo "error" .$ex->getmessage();
}
?>