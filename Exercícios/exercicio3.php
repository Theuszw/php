<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 3</title>
</head>
<body>
    <!-- Matheus Ferreira -->

    <h2>Números Inteiros</h2>
    <p>Tipo: int</p>
   
    <?php
        echo 10;
        echo " | Valores inteiros. <br>";
        echo 10 + 14;
        echo " | Soma de inteiros. <br>";
        echo -60;
        echo " | Números negativos. <br>";
    ?>

    <br>

    <h2>Verificação</h2>
   
    <?php

    $a ="certeza";
    $b = 15.5;

    if(is_float($a)) {
        echo "É float c! <br>";
    }

    if(is_float($b)) {
        echo "É float a! <br>";
    }

    if(is_float(5757.67)) {
        echo "É float b! <br>";
    }

    if(is_float("teste")) {
        echo "É float e! <br>";
    }

?>

    <br><hr>

    <!--  -->
    <!--  -->

    <h2>Tipos de dados texto no PHP</h2>
    <ul>
        <li>aspas simples</li>
        <li>aspas duplas</li>
    </ul>

    <?php

        echo "Lorem ipsum dolor sit amet consectetur adipisicing elit (aspas duplas) <br>";
        echo "Lorem ipsum dolor sit amet consectetur adipisicing elit (aspas simples) <br>";

        echo "<br>";

        echo "Arthur disse: 'Olá!' <br>";
        echo "Matheus disse: 'Olá!' <br>";
       
?>

    <h2>Verificação</h2>
   
    <?php

    $str = "Pegue";
    $num = 118;

    if(is_string($str)) {
        echo "$str é uma string 1 <br>";
    }

    if(is_string($num)) {
        echo "$num é uma string 2 <br>";
    }

    if(is_string("asd")) {
        echo "É uma string 3 <br>";
    }

    ?>

    <br><hr>

    <!--  -->
    <!--  -->

    <h2>Tipos de dados booleano no PHP</h2>

    <?php
    echo TRUE;
    echo "<br>";
    echo false;

    if(true) {
        echo "É verdadeiro! <br>";
    }

    if(5 > 2) {
        echo "É verdadeiro! <br>";
    }

    $podeEntrar = true;

    if($podeEntrar) {
        echo "O usuário pode entrar";
    }

    ?>

    <h2>Verificação</h2>

    <?php

        $a = true;

    if(is_bool($a)) {
    echo "É um booleano 15 <br>";
    }

    if(is_bool(0)) {
    echo "É um booleano 25 <br>";
    }

    if(is_bool(false)) {
    echo "É um booleano 35 <br>";
    }

    if(is_bool(0.0 == false)) {
    echo "0 é considerado falso! <br>";
    }

?>

    <br><hr>    

    <!--  -->
    <!--  -->

    <h2>Tipos de dados array no PHP</h2>

    <?php
    $a = array (130, 150, 170, 190);

    print_r($a);
    echo "<br>";

    echo "<p>O primeiro valor da lista é: $a[0]</p>";

    $arr = ["Valor ingresso", 210, true];

    echo "<br>";
    print_r($arr);
    echo "<br>";
    print_r($arr[1]);
    echo "<br><p>O Segundo valor da lista é: $arr[1]</p>";

    ?>