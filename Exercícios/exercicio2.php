<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>

    <!-- CSS Interno -->
    <style>
        .paragrafo {color: blue}
        .destaque {color: orange}
        .matheus {color: red}
    </style>
</head>
<body>

    <h1 class="destaque">É muito legal HTML</h1>
    <p>Programador: Matheus Ferreira</p>
    <hr>

    <?php

   // Geração de texto (string)
echo "Chama Sesi-Senai";

/*Geração de texto estruturado (com tags, atributos)*/
echo "<h2>Estou <span class='destaque'>cansado</span> através do PHP.</h2>";
echo "<h2>Estou com <span class=\"destaque\">sono</span> através do PHP.</h2>";

?>

<h1>HTML e PHP mesclados</h1>
<p>Parágrafo HTML</p>

<?php
    $linguagem = "Linguagem PHP.";
    ?>
    <p class="paragrafo">Parágrafo mesclando HTML com <?=$linguagem?> </p>
    <h1 class="matheus">O Matheus é lindo</h1>
    
</body>
</html>
    <head>
     