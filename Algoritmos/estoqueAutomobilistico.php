<?php
/*
Uma empresa produz peças para a indústria automobilística e necessita saber o valor total de cada uma,
para tanto é fornecido ao computador o código da peça, o valor unitário da peça e a quantidade de peças produzidas.
O cálculo do valor total é feito pela expressão quantidade * valor da peça.
No final é apresentado na tela o código da peça e o seu valor total.
*/

$pecas = [
    ['cod' => 1, 'peca' => 'penu'],
    ['cod' => 2, 'peca' => 'chicote'],
    ['cod' => 3, 'peca' => 'vela'],
    ['cod' => 4, 'peca' => 'chave'],
];

//var_dump($pecas);
echo "Cód.    Peça<br>";

for($i=0; $i < count($pecas); $i++){
    echo $pecas[$i]['cod'], " - ", $pecas[$i]['peca'], "<br>";
}

if(isset($_POST['calcular'])){
    $cod = $_POST['cod'];
    $valorUnitario = $_POST['valorUnitario'];
    $quantidade = $_POST['quantidade'];

    $valorTotal = $valorUnitario * $quantidade;

    echo "<h2>Código da Peça - $cod</h2><h2>Valor Total: R$ $valorTotal</h2>";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estoque - Automobilístico</title>
</head>
<body>

    <form method="POST">
        <input type="number" name="cod" placeholder="Digite um código de 1 à <?=count($pecas)?>"><br>
        <input type="number" name="valorUnitario" placeholder="Digite o valor da peça"><br>
        <input type="number" name="quantidade" placeholder="Quantidade desta peça"><br>
        <button name="calcular">Calcular</button>
    </form>

</body>
</html>