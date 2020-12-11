<?php
    $id=$_GET['id'];
    include("conexion.php");

    $sql="delete from inventario where id='".$id."'";
    $resultado=mysqli_query($conexion,$sql);

    if($resultado){
        echo"<script language='JavaScript'>
              alert('Los datos fueron eliminados correctamente a la BD');
              location.assign('ver.php');
              </script>";
    }else{
        echo"<script language='JavaScript'>
              alert('ERROR: Los datos NO fueron eliminados de la BD');
              location.assign('ver.php');
              </script>";
    }
?>