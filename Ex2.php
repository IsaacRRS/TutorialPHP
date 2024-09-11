<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
</head>
<body>
    <header>
        <h2>Tabuada</h2>
    </header>
    <form action="" method="post">
        <label for="numero">Digite um número:</label><br>
        <input type="number" id="numero" name="numero" required><br><br>
        <input type="submit" value="Gerar Tabuada">
    </form>
    
    <?php
    
    function tabuada($numero) {
        echo "<table>";
        echo "<tr><th>Multiplicador</th><th>Resultado</th></tr>";
        
        for ($i = 1; $i <= 10; $i++) {
            $resultado = $numero * $i;
            echo "<tr><td>{$i}</td><td>{$resultado}</td></tr>";
        }
        
        echo "</table>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
        $numero = $_POST["numero"] ?? '';

        
        if (is_numeric($numero) && $numero > 0) {
            echo "<h3>Tabuada do {$numero}</h3>";
            
            tabuada($numero);
        } else {
            echo "digite um número positivo.";
        }
    }
    ?>
<style>
    form {
        margin-bottom: 20px;
    }
    table {
        width: 40%;
        border-collapse: collapse;
        margin-top: 20px;
    }
    table, th, td {
        border: 2px solid black;
    }
    th, td {
        padding: 10px;
        text-align: center;
    }
    th {
        background-color: grey;
    }
</style>
</body>
</html>
