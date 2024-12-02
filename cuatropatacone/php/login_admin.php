<?php
session_start();
if (!empty($_POST["btning"])) {
  if (!empty($_POST["usuarios"]) and !empty($_POST["password"])){
    $usuario=$_POST["usuarios"];
    $password=$_POST["password"];
    $sql= $conexion->query(" Select * from usuarios where usuario='$usuario' and password= '$password' ");
    if($datos=$sql->fetch_object()){
      $_SESSION["id_usuario"]=$datos->id_usuario;
      $_SESSION["usuario"]=$datos->usuario;
      $_SESSION["password"]=$datos->password;
      header("location:menu.php");
  } else{
    echo "acceso denegado";
}
} else{ 
  echo'
  <script>
  alert("incorrecto");
  window.location = "../registro.php";
  </script>
  
  ';
  exit;
    }
    }
  

  ?>

   