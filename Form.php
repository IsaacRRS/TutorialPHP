<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
</head>
<body>
    <header>
        <h2>Exercício 2</h2>
    </header>
    <form action="Ex2.php" method="post">

        <label>Nome: </label><br>
        <input type="text" name="nome"><br>
        <label>Primeira nota: </label><br>
        <input type="text" name="nota1"><br>
        <label>Segunda nota: </label><br>
        <input type="text" name="nota2"><br><br>
        <input type="submit" value="Enviar">

    </form><br>
<?php
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $nome = isset($_POST["nome"]) ? $_POST["nome"] : '';
        $nota1 = isset($_POST["nota1"]) ? $_POST["nota1"] : '';
        $nota2 = isset($_POST["nota2"]) ? $_POST["nota2"] : '';

        if (!empty($nome) && is_numeric($nota1) && is_numeric($nota2)) {

            $media = ($nota1 + $nota2) / 2;
            echo "Seu nome é {$nome}<br>";
            echo "Sua primeira nota foi {$nota1}<br>";
            echo "Sua segunda nota foi {$nota2}<br>";
            echo "Sua média foi {$media}<br>";
            
        } else {
            echo "Preencha corretamente.<br>";
        }
    }
?>