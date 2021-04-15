<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar_Compra</title>
    <style>
        h1{
            text-align:center;
            color:#330066;
            border-bottom:dotted #330066;
            width: 50%;
            margin:auto;
        }
        table{
            border:3px solid #330066;
            padding:20px 50px;
            margin-top: 50px;
            font-weight: 800;   
        }
        body{
            background-color:#339999;
            font-family: Arial, Helvetica, sans-serif;
        }
        /**footer**/
        footer{
            height: 10rem;
        }
        .site-footer{
            background-color:  #333333;
            margin: 0;
            height: 5rem;
        }
        .contenedor-footer{
            padding: 2rem 0;
            display: flex;
            justify-content: space-between;
        }
        .copyright{
            margin: 0;
            color: #f5f5f5;
        }
        .contenido-nosotros{
            display: grid;
            /**grid-template-columns: 50% 50%; divide la pantalla en fracciones*/
            grid-template-columns: repeat(2, 1fr);
            grid-column-gap: 2rem;
        }
        .texto-nosotros blockquote{
            font-weight: 900;
            font-size: 2rem;
            margin: 0;
            padding: 3rem 0;
        }
        /**navegacion**/

        .navegacion a {
            color: white;
            text-decoration: none; /*quita la linea del enlace*/
            font-size: 1rem; /* tamaño de fuente*/
            margin-right: 1.5rem; /* separacion de siguiente elemento*/
            }
        .navegacion a:hover{ /*color que se colocda al colocar el mause emcima del elemento*/
            color:#71b100;
        }
        .navegacion a:last-of-type{
            margin:0;
        }
        .contenedor-tabla{
            border:3px solid #f7f7f8;
            padding:20px 50px;
            margin-top: 50px;
            font-weight: 800;
        }
    </style>
</head>
<body>
    <div class="contenedor-tabla">
        <?php 
            $idven2=$_GET["Id_venta2"];
            $facven2=$_GET["Factura_cliente2"];
            $iditem3=$_GET["Id_item3"];
            $cclien2=$_GET["CC_Cliente2"];
            $canven2=$_GET["cant_venta2"];
            $valuni2=$_GET["valor_unidad2"];
            $valtot2=$_GET["valor_total2"];
            $fecven2=$_GET["fecha_venta2"];

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
                $consulta="INSERT INTO ventas(Id_venta, N_factura_cliente, Id_item2, CC_Cliente1, Cant_venta, Valor_unidad_item, Valor_total_venta, Fecha_venta) values('$idven2','$facven2','$iditem3','$cclien2','$canven2','$valuni2','$valtot2','$fecven2')";
                
                $resultado=mysqli_query($conexion,$consulta); 

                if($resultado==false){
                    echo "Error al insertar informacion";
                }else{
                    echo "Registro guardado <br><br>";
                    
                    
                    echo "<table><tr><td>$idven2</td></tr>";
                    echo "<tr><td>$facven2</td></tr>";
                    echo "<tr><td>$iditem3</td></tr>";
                    echo "<tr><td>$cclien2</td></tr>";
                    echo "<tr><td>$canven2</td></tr>";
                    echo "<tr><td>$valuni2</td></tr>";
                    echo "<tr><td>$valtot2</td></tr>";
                    echo "<tr><td>$fecven2</td></tr></table>";
                    
                }

                mysqli_close($conexion);
        ?>
    </div>
   <footer class="site-footer">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="http://localhost/taller/index.php">Volver a Inicio</a>
                <a href="http://localhost/taller/formulario_registro/listado_ventas.php">Resumen De Ventas</a>
            </nav>
        <p class="copyright">Todos los derechos reservados 2019 Taller M&M&copy;</p>
        </div>
    </footer>



</body>
</html>