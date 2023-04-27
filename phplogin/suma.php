<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1>Suma </h1>
    <form action="" method="post">
    <tr>
    <td><input type="text" name="numero1" placeholder="ingrese numero 1"></td>
    <td><input type="text" name="nummero2" placeholder="ingrese numero 2"></td>
    <button type="submit">sumar</button>
    </tr>
    </form>
</body>
</html>
<?php
$num1 = $_POST['numero1'];
$num2 = $_POST['nummero2'];
$suma = $num1 + $num2;

echo "la suma es ".$suma;
