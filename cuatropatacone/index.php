
 
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style/styleindex.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Iniciar Sesión - FOUR PATAS</title>
</head>
<body>
    
    <CEnter><h1>FOUR PATAS</h1></CEnter>

<form action="" method="POST">
<div class="formulario>

<div class="user">
<label for="User" name="titulo">Nombre de usuario</label>
            <input type="text" id="usuario" name="usuarios" required></div>
            <br><br>
            <div class="User">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required></div>
            <br><br>

          <div class="btn">   <input name="btning" type="submit" class="button" value="Iniciar"><br><br> </div>
           
            <?php
include "php/conexion.php";
include "php/login_admin.php";
?>
        <p>¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
</div>
    </form>
</body>
</html>