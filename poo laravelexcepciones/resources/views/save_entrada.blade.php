<?php

include("db.blade.php");

if (isset($_POST['save_entrada'])){
   $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
   
   $query = "INSERT INTO entrada(nombre, apellido) VALUES ('$nombre', '$apellido')";
   $result = mysqli_query($conn, $query);

   if (!$result){
      die("Query Failed");
   }

   $_SESSION['message'] = 'Nombre del trabajador ingresado y registrado';
   $_SESSION['message_type'] = 'primary';

   header("Location:registro.blade.php");
  }
?>