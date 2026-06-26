<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Área do Círculo</title>
</head>
<body>

<form method="POST">
    <h1>Calcular Área do Círculo</h1>
    <input name="raio" type="number" step="0.01" placeholder="Qual é o raio do círculo?">
    </input><br>
    <button name="calcular">Calcular</button>
</form>

<?php

if(isset($_POST['calcular'])){
    $raio = $_POST['raio'];

    $area = pi() * ($raio * $raio);

    echo "<h1>Área: ".number_format($area,2)."</h1>";
}

?>

</body>
</html>