<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formularios.css">

</head>
    <body>
    <?php
    //comprobacion login
        session_start();
        if (!isset($_SESSION["usuario"])) {
            header("location:login.html");
        }
    ?>
        <div class="Contenedor">
            <header class="encabezado">
                <h1>Registro De Ventas Por Item</h1>
            </header>
            <div class="contenedor_tabla">
            <img src="mylogo.svg" alt="logo">

                <form name="form1" method="get" action="insertar_venta.php">
                    <table>
                    <tr>
                        <td>Id_venta</td>
                        <td><label for="Id_venta2"></label>
                        <input type="text" name="Id_venta2" id="Id_venta2"></td>
                    </tr>
                    <tr>
                        <td>N_Factura_Cliente</td>
                        <td><label for="Factura_cliente2"></label>
                        <input type="text" name="Factura_cliente2" id="Factura_cliente2"></td>
                    </tr>
                    <tr>
                        <td>Id_Item </td>
                        <td><label for="Id_item3"></label>
                        <input type="text" name="Id_item3" id="Id_item3"></td>
                    </tr>
                    <tr>
                        <td>CC_Cliente</td>
                        <td><label for="CC_Cliente2"></label>
                        <input type="text" name="CC_Cliente2" id="CC_Cliente2"></td>
                    </tr>
                    <tr>
                        <td>Cantidad Venta</td>
                        <td><label for="cant_venta2"></label>
                        <input type="text" name="cant_venta2" id="cant_venta2"></td>
                    </tr>
                    
                    <tr>
                        <td>Valor_Unidad</td>
                        <td><label for="valor_unidad2"></label>
                        <input type="text" name="valor_unidad2" id="valor_unidad2"></td>
                    </tr>
                    <tr>
                        <td>Valor_Total Venta</td>
                        <td><label for="valor_total2"></label>
                        <input type="text" name="valor_total2" id="valor_total2"></td>
                    </tr>
                    <tr>
                        <td>Fecha Venta</td>
                        <td><label for="fecha_venta2"></label>
                        <input type="text" name="fecha_venta2" id="fecha_venta2"></td>
                    </tr>
                    
                    <tr>
                        <td>&nbsp </td>
                        <td>&nbsp </td>
                    </tr>
                    <tr class>
                        <td aling="center"><input class="boton" type="submit" name="enviar" id="enviar" value="Enviar"></td>
                        <td aling="center"><input class="boton" type="reset" name="borrar" id="borrar" value="Borrar"></td>
                    </tr>
                    </table>
                </form>
                
                <br>

            </div>
        </div>
        <footer class="site-footer">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="http://localhost/taller/index.php">Volver a Inicio</a>
                <a href="http://localhost/taller/formulario_registro/listado_ventas.php">Resumen de ventas</a>
            </nav>
        <p class="copyright">Todos los derechos reservados 2019 Taller M&M&copy;</p>
        </div>
    </footer>
    </body>
</html>