<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Loops PHP</title>
</head>
<body>
    <h1 class="destaqueP">Estruturas de Controle e Repetição (Loops)</h1>
    <hr>
    <h2 class="destaque">While (enquanto)</h2>


    <!-- 1ª Digitação (Aqui) -->

    <?php
        $i =1;
        while ($i <=5) {
    ?>
        <p><?=$i?></p>
    <?php
        $i ++;
        }
    ?>


<hr>
<!-- _______________________________________________________________________________ -->

    <h2 class="destaque">do/while (repita)</h2>


<!-- 2ª Digitação (Aqui) -->

<?php
    $j = 1;
        do{
?>
<div><h3>Olá!</h3></div>
<?php
    $j++;

        } while ($j <=3);
        ?>


<hr>
<!-- _______________________________________________________________________________ -->
    <h2 class="destaque">For</h2>

<?php
    // Laço For
    // para i de 1 até 10 faça

    //Controle; Condição; Atualização

    //  3ª Digitação (Aqui)

    for($i =1; $i <=10; $i++) {
        echo $i." ";
    }

 ?>
 <!-- _______________________________________________________________________________ -->

 <!-- Exercício
      1) Crie um array com os meses do ano
      2) Usando um loop for, acesse e mostre os nomes dos meses dentro de uma lista ordenada
 -->
<hr>
    <h2 class="destaque">Exercício meses</h2>

<?php

    $meses = array("Janeiro", "Fevereiro", "Março", "Abril","Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro","Novembro", "Dezembro");
?>
    <ol>


        <!-- 4ª Digitação (Aqui) -->

        <?php
    for ($i = 0; $i <count($meses);
    $i++) {
    echo "<li>" . $meses[$i] . "</li>";
    }
   
    ?>


    </ol>

<!-- _______________________________________________________________________________ -->
<hr>
    <h2 class="destaque">foreach (para cada)</h2>

<ol>


    <!-- 5ª Digitação (Aqui) -->
    

</ol>
<!-- _______________________________________________________________________________ -->
<hr>
    <h2 class="destaque">Array associativo</h2>
<?php
    $clubes = [
        "Corinthians" => "Timão",
        "Palmeiras" => "Porco",
        "São Paulo" => "Tricolor",
        "Santos" => "Peixe",

    ];

    //  6ª Digitação (Aqui) 

    foreach ($clubes as $clube => $apelido) {
        ?>
        <p>
            O <?=$clubes?> é conhecido como: <?=$apelido?>
        </p>

<?php
    }

?>
<!-- _______________________________________________________________________________ -->
<hr>
    <h2 class="destaque">Matriz (Associativa)</h2>
<?php

$alunos = [

              [
                  "nome" => "Chaves",
                  "idade" => 8

              ],
              [
                  "nome" => "Chapolin",
                  "idade" => 20

              ],
              [
                  "nome" => "Chiquinha",
                  "idade" => 10

              ]
          ];

    foreach($alunos as $aluno){
?>

  <!-- 7ª Digitação (Aqui) -->

        <p>Nome: <?=$aluno['nome']?></p>
        <p>Idade: <?=$aluno['idade']?></p>

<?php
    }
?>

</body>
</html>