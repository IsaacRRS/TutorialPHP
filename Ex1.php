<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MÉDIA</title>
</head>
<body>
    <header>
        <h2>MÉDIA</h2>
    </header>
    <form action="" method="post">

        <label>Nome: </label><br>
        <input type="text" name="nome"><br>
        <label>Primeira nota: </label><br>
        <input type="text" name="nota1"><br>
        <label>Segunda nota: </label><br>
        <input type="text" name="nota2"><br><br>
        <input type="submit" value="Enviar">

    </form><br>

    <?php

    function media($nota1, $nota2) {
       
        if (is_numeric($nota1) && is_numeric($nota2)) {
            return ($nota1 + $nota2) / 2;
        } else {
            return null; 
        }
    }

   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
     
        $nome = isset($_POST["nome"]) ? $_POST["nome"] : '';
        $nota1 = isset($_POST["nota1"]) ? $_POST["nota1"] : '';
        $nota2 = isset($_POST["nota2"]) ? $_POST["nota2"] : '';

        if (!empty($nome) && is_numeric($nota1) && is_numeric($nota2)) {
            
            $media = media($nota1, $nota2);

            if ($media !== null) {
                echo "Seu nome é {$nome}<br>";
                echo "Sua primeira nota foi {$nota1}<br>";
                echo "Sua segunda nota foi {$nota2}<br>";
                echo "Sua média foi {$media}</p>";
            } 
        } else {
            echo "Preencha corretamente";
        }
    }
    ?>
<style>
    
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    height: 100vh;
    padding-top: 80px; 
    }
header {
    position: fixed; 
    top: 0;
    left: 0;
    right: 0;
    background-color: #0b234a;
    color: #eb780c;
    padding: 20px;
    text-align: center;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
    z-index: 1000; 
    }
form {
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    max-width: 400px;
    width: 100%;
    margin-top: 70px; 
    }
label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
    }
input[type="text"] {
    width: calc(100% - 22px); 
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
    box-sizing: border-box; 
    }
input[type="submit"] {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    }
input[type="submit"]:hover {
    background-color: #0056b3;
    }
    
</style>
</body>
</html>