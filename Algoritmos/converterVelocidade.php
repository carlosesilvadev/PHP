<?php
/*Transforma uma velocidade fornecida em m/s(metros por segundo) pelo usuário para km/h(quilômetros por hora).
Para tal, a velocidade foi multiplicada por 3,6.*/

if(isset($_POST['converter'])){
    $metrosPorSegundo = $_POST['metrosPorSegundo'];
    $quilometrosPorHora = $metrosPorSegundo*3.6;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Converter Velocidade</title>
</head>
<body>
    <h1>Conversor de Velocidade m/s para km/h:</h1>

    <form method="POST">
        <input type="number" scale="0.01" placeholder="Digite velocidade em m/s" name="metrosPorSegundo">
        <button name="converter">Converter</button>
    </form>

    <?php
        echo "<h2>Km/h: $quilometrosPorHora</h2>";

    ?>
</body>
</html>