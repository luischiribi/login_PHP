<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>    
            <div>
                    <form action= "" method="POST">

                    <label>Usuario: </label>

                    <input type="text" name="user" placeholder="ingresar usuario" required><br>

                    <label>Contraseña: </label>

                    <input type="password" name="password" placeholder="ingrese contraseña" required><br><br>

                    <input type="submit" value="Enviar">

                    </form>
            </div>
</body>
</html>

<?php

   $user = $_POST['user'];

   $password = $_POST['password'];


        if (($user == "usuario") AND ($password == "12345")){

            echo "Bienvenido ";
            header('Location: ejercicio.php'); 

        }

        Else{

            echo "¡Usuario o contraseña incorrectos!";

        }

?>