<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>comprueba login</title>
</head>
<body>
    <?php
        try{
            $base=new PDO("mysql:host=localhost; dbname=mym", "root", "");
            $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql="SELECT * FROM USUARIOS_PASS  WHERE USUARIOS= :login AND PASSWORD= :password";
            $resultado=$base->prepare($sql);
            $login=htmlentities(addslashes($_POST["login"]));
            $password=htmlentities(addslashes($_POST["password"]));
            $resultado->bindValue(":login",$login);
            $resultado->bindValue(":password",$password);
            $resultado->execute();
            //comprobacion de usuario
            $numero_registro=$resultado->rowCount();
            if ($numero_registro!=0) {
                session_start();
                $_SESSION["usuario"]=$_POST["login"];
                header("location:http://localhost/taller/index.php");
            }else{
                header("location:login.html");
            }


        }catch(Exception $e){
            die("Error: " . $e->GetMessage());
        }

    ?>
</body>
</html>