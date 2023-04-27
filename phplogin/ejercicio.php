<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Elija una opcion</h1>
        <u1>
            <li>1. ingrese su nombre </li>
            <li>2. suma </li>
            <li>3. resta </li>
            <li>4. multiplicacion </li>
            <li>5. division </li>
        </u1>
        <form action="" method="post">

        <input type="number" name="opt" id="opt"></input>
        <button type="submit">ingresar</button>
        </form>
    </div>
</body>
</html>

<?php
$opt=$_POST['opt'];
switch($opt) {
    case '1':
        header('Location: formulario.php');
        break;
    case '2':
        header('Location: suma.php');  
        break;
    case '3':
        header('Location: resta.php');       
        break;
    case '4':
        header('Location: multiplicacion.php');          
        break;
    case '5':
        header('Location: division.php');            
        break;
    
    default:
        
        break;
}

echo "<h1>".$opt."</h1>";
