<html>
    <head>
        <title>Productos</title>
        <script type="text/javascript">
            function confirmar(){
                return confirm('¿Estas seguro?, Se eliminarán los datos PERMANENTEMENTE');
            }
        </script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>

        <?php
            include("conexion.php");
            //select * from producto
            $sql="select * from producto";
            $resultado=mysqli_query($conexion,$sql);
        ?>
        <div class="cabecera">   
            <a onclick="menu()" id="atras" class="indicaciones">
                Regresar
            </a>
            <label id="titulo" class="nombre">Productos</label>
        <img class="fotouser" src="../source/img/user.png" alt="User" style="height: 50%;">
        </div><br>
        
        <a id="azul" href="agregar.php">NUEVO PRODUCTO</a><br><br>
        <div id="tabla">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Fecha</th>
                        <th>Nombre</th>
                        <th>Color</th>
                        <th>Cantidad</th>
                        <th>Proveedor</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                        while($filas=mysqli_fetch_assoc($resultado)){
                    ?>

                    <tr>
                        <td id="id"> <?php echo $filas['id'] ?> </td>
                        <td> <?php echo $filas['fecha'] ?> </td>
                        <td> <?php echo $filas['nombre'] ?> </td>
                        <td> <?php echo $filas['color'] ?> </td>
                        <td> <?php echo $filas['cantidad'] ?> </td>
                        <td> <?php echo $filas['proveedor'] ?> </td>
                        <td>
                            <?php echo "<a id='azul' href='editar.php?id=".$filas['id']."'>EDITAR</a>";  ?>
                            |
                            <?php echo "<a id='rojo' href='eliminar.php?id=".$filas['id']."' onclick='return confirmar()'> ELIMINAR </a>";  ?>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
        <?php
            mysqli_close($conexion);
        ?>
        <script src="../source/js/menu.js"></script>
    </body>
</html>