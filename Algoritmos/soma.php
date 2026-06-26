<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Soma</title>
</head>
<body>

<form method="POST">
    <h1>Soma:</h1>
    <input type="number" name="numero1" placeholder="Primeiro Número"></input><br>
    <input type="number" name="numero2" placeholder="Segundo Número"></input><br>
    <button name="somar">SOMAR</button>
</form>

<?php 

    if(isset($_POST['somar'])){
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];

        if($numero1 != NULL || $numero2 != NULL){
            $soma = $numero1 + $numero2;
            echo "<h1>Resultado: $soma</h1>";
        }else{
            echo "Campo vazio, favor preencher para calcular a soma.";
        }
    }

?>

</body>
</html>