

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    h1{
        color: red;
        font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        text-align: center;
        font-size: 40px;
    }
    div{
        text-align: center;
    }
</style>
<body>
    <h1>REGISTRO FEITO COM SUCESSO</h1>
    <div><img src="mitologia1.png" alt=""></div>
</body>
</html>


<?php 




$servidor = "localhost";
$usuario = "root";
$senha  = "";
$dbname = "mitos";

$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

