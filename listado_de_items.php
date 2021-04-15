<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> 
    <link rel="stylesheet" href="stilos_resultados.css">
</head>
<body>
<?php
    //comprobacion login
        session_start();
        if (!isset($_SESSION["usuario"])) {
            header("location:login.html");
        }
    ?>
    <header class="encabezado">
        <h1>Listado de Items</h1>
    </header>
 
    <section>
        <div class="contenedortabla">
            <div class="subtabla">
                <p>Id_item</p>
                <?php
                        $db_host="localhost";
                        $db_nombre="mym"; 
                        $db_usuario="root";
                        $db_contra=""; 
                        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); 
                        if(mysqli_connect_errno()){ 
                            echo "Fallo al conectar con la Base De Datos";
                            exit();
                        }
                        mysqli_set_charset($conexion, "utf8");
                        $consulta="select * from items"; 
                        $resultado=mysqli_query($conexion,$consulta); 
                        while(($fila=mysqli_fetch_row($resultado))==true){ 
                            echo "<table><tr><td>";
                            echo $fila[0] . "</td></tr></table>";
                        }
                        mysqli_close($conexion);
                        ?>
            </div>
            <div class="subtabla">
                <p>Descrpcion Item</p>
                <?php
                        $db_host="localhost";
                        $db_nombre="mym"; 
                        $db_usuario="root";
                        $db_contra=""; 
                        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); 
                        if(mysqli_connect_errno()){ 
                            echo "Fallo al conectar con la Base De Datos";
                            exit();
                        }
                        mysqli_set_charset($conexion, "utf8");
                        $consulta="select * from items"; 
                        $resultado=mysqli_query($conexion,$consulta); 
                        while(($fila=mysqli_fetch_row($resultado))==true){ 
                            echo "<table><tr><td>";
                            echo $fila[1] . "</td></tr></table>";
                        }
                        mysqli_close($conexion);
                        ?>
            </div>
            <div class="subtabla">
                <p>Marca</p>
                <?php
                        $db_host="localhost";
                        $db_nombre="mym"; 
                        $db_usuario="root";
                        $db_contra=""; 
                        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); 
                        if(mysqli_connect_errno()){ 
                            echo "Fallo al conectar con la Base De Datos";
                            exit();
                        }
                        mysqli_set_charset($conexion, "utf8");
                        $consulta="select * from items"; 
                        $resultado=mysqli_query($conexion,$consulta); 
                        while(($fila=mysqli_fetch_row($resultado))==true){ 
                            echo "<table><tr><td>";
                            echo $fila[2] . "</td></tr></table>";
                        }
                        mysqli_close($conexion);
                        ?>
            </div>
            <div class="subtabla">
                <p>Id Proveedor</p>
                <?php
                        $db_host="localhost";
                        $db_nombre="mym"; 
                        $db_usuario="root";
                        $db_contra=""; 
                        $conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre); 
                        if(mysqli_connect_errno()){ 
                            echo "Fallo al conectar con la Base De Datos";
                            exit();
                        }
                        mysqli_set_charset($conexion, "utf8");
                        $consulta="select * from items"; 
                        $resultado=mysqli_query($conexion,$consulta); 
                        while(($fila=mysqli_fetch_row($resultado))==true){ 
                            echo "<table><tr><td>";
                            echo $fila[3] . "</td></tr></table>";
                        }
                        mysqli_close($conexion);
                        ?>
            </div>

        <div>
    </section>
    <footer class="site-footer">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="http://localhost/taller/index.php">Volver a Inicio</a>
                <a href="http://localhost/taller/formulario_registro/formulario_insertar_items.php">Volver a Creacion de Items</a>
            </nav>
        <p class="copyright">Todos los derechos reservados 2019 Taller M&M&copy;</p>
        </div>
    </footer>
</body>
</html>