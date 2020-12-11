<?php
    include("conexion.php");
?>
<html>
    <head>
        <title>EDITAR</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            if(isset($_POST['enviar'])){
                $id=$_POST['id'];
                $nombre=$_POST['nombre'];
                $telefono=$_POST['telefono'];
                $direccion=$_POST['direccion'];

                $sql="update proveedor set nombre='".$nombre."', telefono='".$telefono."', direccion='".$direccion."' where id='".$id."'";
                $resultado=mysqli_query($conexion,$sql);

                if($resultado){
                    echo"<script language='JavaScript'>
                          alert('Los datos fueron actualizados correctamente a la BD');
                          location.assign('ver.php');
                          </script>";
                }else{
                    echo"<script language='JavaScript'>
                          alert('ERROR: Los datos NO fueron actualizados en la BD');
                          location.assign('ver.php');
                          </script>";
                }
                mysqli_close($conexion);

            }else{
                $id=$_GET['id'];
                $sql="select * from proveedor where id='".$id."'";
                $resultado=mysqli_query($conexion,$sql);

                $fila=mysqli_fetch_assoc($resultado);
                $nombre=$fila["nombre"];
                $telefono=$fila["telefono"];
                $direccion=$fila["direccion"];
                mysqli_close($conexion);

        ?>
        <div class="cabecera">   
            <a href="ver.php" id="atras" class="indicaciones">
                Regresar
            </a>
            <label id="titulo" class="nombre">Editar Proveedor</label>
        <img class="fotouser" src="../source/img/user.png" alt="User" style="height: 50%;">
        </div><br>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <div id="tablaB">
                <div id="columnaA">
                    <label>Nombre:</label><br><br>
                    <label>Telefono:</label><br><br>
                    <label>Direccion:</label><br><br>
                </div>
                <div id="columnaB">
                <input type="text" name="nombre" value="<?php echo $nombre;?>"> <br><br>
                    <input type="text" name="telefono" value="<?php echo $telefono;?>"> <br><br>
                    <input type="hidden" name="id"
                    value="<?php echo $id; ?>">
                    <input type="text" name="direccion" value="<?php echo $direccion;?>"> <br><br>
                </div>
            </div>
        
            <input id="rojo" type="submit" name="enviar" value="ACTUALIZAR">
        </form>
        <?php
            }
        ?>
        <script src="source/js/menu.js"></script>
    </body>
</html>