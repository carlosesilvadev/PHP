<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Média</title>
</head>
<body>
    <form method="POST">
        <h1>Calcular Média</h1>
        <input type="number" placeholder="Número 1" name="numero1"><br>
        <input type="number" placeholder="Número 2" name="numero2"><br>
        <input type="number" placeholder="Número 3" name="numero3"><br>
		<button name="numeros"> Calcular Média</button>
    </form>
<?php 

    if(isset($_POST['numeros'])){
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $numero3 = $_POST['numero3'];

        $media = ($numero1+$numero2+$numero3)/3;

       echo "<h1>Média: $media</h1>";
    }

?>
</body>
</html>