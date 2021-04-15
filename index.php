<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Taller M&M</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="CSS/normalize.css">
    <link rel="stylesheet" href="index.css">

   
</head>             
    <body>
        
    <?php
    //comprobacion login
        session_start();
        if (!isset($_SESSION["usuario"])) {
            header("location:login.html");
        }
    ?>
    <header class="site-header inicio">
        <div class="contenedor contenidoheader">
            <div class="barra"> 
                <div class="logo3">
                    <p class="LOGOP">TALLER M&M</p>

                </div>

                    <nav class="navegacion">
                    <a href="http://localhost/taller/formulario_registro/formulario_inserar_registros.php">Reg_Clientes </a>
                    <a href="http://localhost/taller/formulario_registro/formulario_inserar_proveedores.php">Reg_Proveedores</a>
                    <a href="http://localhost/taller/formulario_registro/formulario_insertar_compra.php">Reg_Compras</a>
                    <a href="http://localhost/taller/formulario_registro/formulario_insertar_venta.php">Reg_Ventas</a>
                    <a href="http://localhost/taller/formulario_registro/formulario_insertar_items.php">Creacion_Items</a>
                    <a href="http://localhost/taller/login/cierra_secion.php">Cerrar Sesion</a>
                    <p>Usuario Activo:  <?php
                            echo $_SESSION["usuario"];
                        ?>
                    </p>
                </nav>
            </div> 
            <h1>Venta y Reparacion De Herramientas Electro-Mecanicas</h1>
        </div>
    </header>


    <footer class="site-footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="http://localhost/taller/formulario_registro/formulario_inserar_registros.php">Reg_Clientes </a>
                    <a href="http://localhost/taller/formulario_registro/formulario_inserar_proveedores.php">Reg_Proveedores</a>
                    <a href="http://localhost/taller/formulario_registro/formulario_insertar_compra.php">Reg_Compras</a>
                    <a href="http://localhost/taller/formulario_registro/formulario_insertar_venta.php">Reg_Ventas</a>
                    <a href="http://localhost/taller/formulario_registro/formulario_insertar_items.php">Creacion_Items</a>
            </nav>

        <p class="copyright">Todos los derechos reservados 2019 &copy;</p>
        </div>
    </footer>

    </body>
</html>
