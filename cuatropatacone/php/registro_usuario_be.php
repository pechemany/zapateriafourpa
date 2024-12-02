<?php

    include 'conexion.php';

    $usuarios = $_POST['usuario'];
    $password =$_POST['password'];

    $query = "INSERT INTO usuarios(usuario, password) 
              VALUES('$usuarios','$password')";

    $ejecutar = mysqli_query($conexion, $query);

    if($ejecutar){
        echo'
        
        <script>
        alert("usuario almacenado exitosamente");
        window.location= "../index.php";
        </script>
        
        
        
        ';
    } else{
        echo "ha fallado la conexion";
    }

?>