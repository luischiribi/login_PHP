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
        <form action="" method="post">
        <input type="text" name="nombre" id="" placeholder="nombre usuario">
        <input type="text" name="telefono" id="" placeholder="telefono usuario">
        <input type="text" name="email" id="" placeholder="email usuario">
        <input type="text" name="direccion" id="" placeholder="direccion usuario">
        <button type="submit">enviar</button>

        </form>
    </div>
</body>
</html>
<?php
$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];

echo "<table>
<tr>
<td>nombre</td>
<td>telefono</td>
<td>email</td>
<td>direccion</td>
</tr>
<tr>
<td>".$nombre."</td>
<td>".$telefono."</td>
<td>".$email."</td>
<td>".$direccion."</td>
</tr>
</table>";
