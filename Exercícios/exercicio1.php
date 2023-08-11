<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe Geral</title>

    <!-- CSS Interno -->
    <style>
        .paragrafo {color: pink}
        .destaque {color: red;}
    </style>
</head>
<body>

    <h1 class="destaque">Trabalhando com PHP</h1>
    <P>Programador: Matheus Ferreira</P>
    <hr>

    <?php

   // Geração de texto (string)
echo "Chama Sesi-Senai";

/*Geração de texto estruturado (com tags, atributos)*/
echo "<h2>Gerando <span class='destaque'>HTML</span> através do PHP.</h2>";
echo "<h2>Gerando <span class=\"destaque\">HTML</span> através do PHP.</h2>";

?>

<h1>HTML e PHP mesclados</h1>
<p>Parágrafo HTML</p>

<?php
    $linguagem = "Linguagem PHP.";
    ?>
    <p class="paragrafo">Parágrafo mesclando HTML com <?=$linguagem?> </p>
    
</body>
</html>
    <head>
     