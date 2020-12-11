<html>
    <head>
        <title>AGREGAR</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            if(isset($_POST['enviar'])){
                $fecha=$_POST['fecha'];
                $nombre=$_POST['nombre'];
                $color=$_POST['color'];
                $cantidad=$_POST['cantidad'];

                include("conexion.php");
                $sql="insert into inventario(fecha,nombre,color,cantidad)
                values('".$fecha."', '".$nombre."', '".$color."', '".$cantidad."')";

                $resultado=mysqli_query($conexion,$sql);

                if($resultado){
                    echo"<script language='JavaScript'>
                          alert('Los datos fueron ingresados correctamente a la BD');
                          location.assign('ver.php');
                          </script>";
                }else{
                    echo"<script language='JavaScript'>
                          alert('ERROR: Los datos NO fueron ingresados a la BD');
                          location.assign('ver.php');
                          </script>";
                }
                mysqli_close($conexion);

            }else{
        ?>
        <div class="cabecera">   
            <a href="ver.php" id="atras" class="indicaciones">
                Regresar
            </a>
            <label id="titulo" class="nombre">Agregar Inventario</label>
        <img class="fotouser" src="../source/img/user.png" alt="User" style="height: 50%;">
        </div><br>
        <form  action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <div id="tablaB">    
                <div id="columnaA">
                    <label>Fecha:</label><br><br>
                    <label>Nombre:</label><br><br>
                    <label>Color:</label><br><br>
                    <label>Cantidad:</label><br><br>
                </div>
                <div id="columnaB">
                    <input type="text" name="fecha"><a style="color:white;">Ejemplo: "2020/12/07" </a> <br><br>
                    <input type="text" name="nombre"> <br><br>
                    <input type="text" name="color"> <br><br>
                    <input type="text" name="cantidad"> <br><br>
                </div>
            </div>
            <input id="rojo" type="submit" name="enviar" value="AGREGAR">
        </form>
        <?php
            }
        ?>
        <script src="../source/js/menu.js"></script>
    </body>
</html>