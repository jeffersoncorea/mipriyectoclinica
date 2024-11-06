<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Document</title>
</head>
<body>
    
    <div class="wrapper">
    <form action="login.php" method="POST">
        <h1>clinica</h1>
        <img src="fpdf/img/hola2.png" alt="escudo" width="350" height="150">
            <div class="input-box">
                <label for="" class="form-label"></label>
                <input type="text" name="txtid" class="form-control" placeholder="Ingrese su ID" required>
                <i class='bx bx-id-card'></i>
            </div>
            <div class="input-box">
                        <label for="" class="form-label"></label>
                          <input type="text" name="txtusuario"  class="form-control" placeholder="Ingrese su usuario">
                          <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <label for=" class="form-label"></label>
                    <input type="password" name="txtcontraseña"  class="form-control" placeholder="Ingrese su contraseña">
                    <i class='bx bxs-lock-alt'></i>
            </div>
            <div class="contenedor">
                <button type="submit" class="btn btn-info"> iniciar sesion</button><br>
                
            </div>
                
                    
                
                    
    </form>
                        
     
</body>
</html>