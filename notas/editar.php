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
                $fecha=$_POST['fecha'];
                $nombre=$_POST['nombre'];
                $nota=$_POST['nota'];

                $sql="update notas set fecha='".$fecha."', nombre='".$nombre."', nota='".$nota."' where id='".$id."'";
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
                $sql="select * from notas where id='".$id."'";
                $resultado=mysqli_query($conexion,$sql);

                $fila=mysqli_fetch_assoc($resultado);
                $fecha=$fila["fecha"];
                $nombre=$fila["nombre"];
                $nota=$fila["nota"];
                mysqli_close($conexion);

        ?>
        <div class="cabecera">   
            <a href="ver.php" id="atras" class="indicaciones">
                Regresar
            </a>
            <label id="titulo" class="nombre">Editar Notas</label>
        <img class="fotouser" src="../source/img/user.png" alt="User" style="height: 50%;">
        </div><br>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <div id="tablaB">
                <div id="columnaA">
                    <label>Fecha:</label><br><br>
                    <label>Nombre:</label><br><br>
                </div>
                <div id="columnaB">
                <input type="text" name="fecha" value="<?php echo $fecha;?>"><a style="color:white;">Ejemplo: "2020/12/07" </a> <br><br>
                    <input type="text" name="nombre" value="<?php echo $nombre;?>"> <br><br>
                    <input type="hidden" name="id"
                    value="<?php echo $id; ?>">
                </div>
            </div>
                <label>Nota:</label><br>
                <textarea style="height:150px; width:500px;" type="text" name="nota"><?php echo $nota;?></textarea> <br><br>
        
            <input id="rojo" type="submit" name="enviar" value="ACTUALIZAR">
        </form>
        <?php
            }
        ?>
        <script src="source/js/menu.js"></script>
    </body>
</html>