<!--
Para realizar uma pesquisa com um grupo de 50 pessoas,foram obtidos os seguintes dados de cada pessoa: nome, idade, sexo
e salário e depois do processamento foi informado pelo computador: a quantidade de mulheres entrevistas,
a quantidade de homens entrevistados e a soma total do salario de todos os entrevistados.
-->
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisa de Salarios</title>
</head>
<body>
    <?php
    $nomes = ["Adriano da Silva Santana", "Alessandro dos Santos Macedo", "Anderson Augusto Ferreira", "Anderson Felipe", "Beatriz Cruz", "Bianca Zanella Abrunhosa", "Carlos Duarte", "CARLOS EDUARDO SILVA", "Carlos Rogério das Dores", "DENNIS TERENTJVAS", "Diego Rodrigues Aureliano", "Eduardo Begido de Oliveira", "Eliel Oliveira", "Felipe Henrique Arruda", "Felipe Vieira Mororo", "Gabriella Lopes", "Gustavo Mesko", "Henrique Alves dos Santos", "Jessica Anjos", "Iago Graciano", "ICARO AGILI CARDOSO", "JANUS JOSE JUNIOR", "Joao Carlos Nascimento", "Jonnathan Oliveira dos Santos", "José Rodrigues do Nascimento Neto", "Larissa Ionafa", "Leandro Ferreira Alcantara", "LEONARDO ANTONIO DOS SANTOS LOPES", "Leonardo Santos Felix", "Lucas Donatelli Cardona", "Marcelo Santos Silva", "Marco Pessolato", "Michel Nascimento", "Miguel Vieira", "Nilson Araujo Botelho", "Otavio Duarte Pinheiro", "Ricardo Castilho Pereira", "Rogerio do Santos Mazuqui", "Rosana Cristina Silva", "ROSANGELA VIEIRA COSTA", "Thiago Cruz Sampaio", "Thiago Henrique Arroyo", "Vagner Valle", "Vanessa Miguel"];
    $listaPessoas = [];
    $quantidadeDeMulheres=0;
    $quantidadeDeHomens=0;
    $salarioDeTodos = 0;

    for($i=0;$i<50;$i++){
        //A cada iteração é adicionado uma nova pessoa no array $listaPessoas[];
        $listaPessoas[] = [
            'nome' => $nomes[rand(0,43)],
            'idade' => rand(20,45), 
            'sexo' => (rand(0,1) == 0)?'F':'M',
            'salario' => rand(4700,8200)
        ];

        if($listaPessoas[$i]['sexo'] == 'F'){
            $quantidadeDeMulheres++;
        } else{
            $quantidadeDeHomens++;
        }

        $salarioDeTodos += $listaPessoas[$i]['salario'];
    }

    echo "<h1>Pessoas Entrevistadas:</h1>";

    foreach($listaPessoas as $pessoa){
        echo "Nome: ".$pessoa['nome']." - Idade: ".$pessoa['idade']." - Sexo: ".$pessoa['sexo']." - Salário: R$".$pessoa['salario']."<br>";
    }

    /*
    for($i=0;$i < count($listaPessoas);$i++){
        echo "Nome: ".$listaPessoas[$i]['nome']." Idade: ".$listaPessoas[$i]['idade']." Sexo: ".$listaPessoas[$i]['sexo']." Salário: R$".$listaPessoas[$i]['salario']."<br>";
    }
    */

    /*
    $i = 0;
    while($i < count($listaPessoas)){
        echo "Nome: ".$listaPessoas[$i]['nome']." Idade: ".$listaPessoas[$i]['idade']." Sexo: ".$listaPessoas[$i]['sexo']." Salário: R$".$listaPessoas[$i]['salario']."<br>";
        $i++;
    }
    */
    
    echo "<h1>Quantidade de Mulheres: $quantidadeDeMulheres</h1>";
    echo "<h1>Quantidade de Homens: $quantidadeDeHomens</h1>";
    echo "<h1>Salario de Todos: R$$salarioDeTodos</h1>";

    ?>  
</body>
</html>