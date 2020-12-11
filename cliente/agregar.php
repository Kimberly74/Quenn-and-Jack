<html>
    <head>
        <title>AGREGAR</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
            if(isset($_POST['enviar'])){
                $nombre=$_POST['nombre'];
                $telefono=$_POST['telefono'];
                $direccion=$_POST['direccion'];

                include("conexion.php");
                $sql="insert into cliente(nombre,telefono,direccion)
                values('".$nombre."', '".$telefono."', '".$direccion."')";

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
            <label id="titulo" class="nombre">Agregar Nuevo Cliente</label>
        <img class="fotouser" src="../source/img/user.png" alt="User" style="height: 50%;">
        </div><br>
        <form  action="<?=$_SERVER['PHP_SELF']?>" method="post">
            <div id="tablaB">    
                <div id="columnaA">
                    <label>Nombre:</label><br><br>
                    <label>Telefono:</label><br><br>
                    <label>Direccion:</label><br><br>
                </div>
                <div id="columnaB">
                    <input type="text" name="nombre"> <br><br>
                    <input type="text" name="telefono"> <br><br>
                    <input type="text" name="direccion"> <br><br>
                </div>
            </div>
            <input id="rojo" type="submit" name="enviar" value="AGREGAR">
        </form>
        <?php
            }
        ?>
        <script src="source/js/menu.js"></script>
    </body>
</html>