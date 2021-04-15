<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro De Proveedores</title>
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
            $nitpro3=$_GET["Nit_proveedor3"];
            $nompro3=$_GET["Nom_proveedor3"];
            $dirpro3=$_GET["Dir_proveedor3"];
            $telpro3=$_GET["Tel_proveedor3"];
            

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
                $consulta="INSERT INTO proveedor(Nit_proveedor, Nom_proveedor, Dir_proveedor, Tel_proveedor) values('$nitpro3','$nompro3','$dirpro3','$telpro3')";
                
                $resultado=mysqli_query($conexion,$consulta); 

                if($resultado==false){
                    echo "Error al insertar informacion";
                }else{
                    echo "Registro guardado <br><br>";
                    
                    
                    echo "<table><tr><td>$nitpro3</td></tr>";
                    echo "<tr><td>$nompro3</td></tr>";
                    echo "<tr><td>$dirpro3</td></tr>";
                    echo "<tr><td>$telpro3</td></tr></table>";
                    
                }

                mysqli_close($conexion);
        ?>
    </div>
   <footer class="site-footer">
        <div class="contenedor contenedor-footer">
            <nav class="navegacion">
                <a href="http://localhost/taller/index.php">Volver a Inicio</a>
                <a href="http://localhost/taller/formulario_registro/listado_proveedores.php">Lista de Proveedores</a>
            </nav>
        <p class="copyright">Todos los derechos reservados 2019 Taller M&M&copy;</p>
        </div>
    </footer>



</body>
</html>