<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
</head>
<body>
    <header>
        <h2>Lista</h2>
    </header>
    
    <form action="" method="post">
        <label for="nome">Digite um nome:</label><br>
        <input type="text" id="nome" name="nome" required><br><br>
        <input type="submit" value="Verificar Nome">
    </form>

    <?php
  
    function verificarNomeNaLista($nome) {
       
        $nomes = ["ALICIA", "FABIO", "LAVINIA", "DIANA", "ISAAC", "ISRAEL", "EDUARDO", "JUAN"];
        

        if (in_array($nome, $nomes)) {
            return "O nome {$nome} foi encontrado na lista.";
        } else {
            return "O nome {$nome} não consta na lista.";
        }
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
       
        $nome = isset($_POST["nome"]) ? strtoupper(trim($_POST["nome"])) : '';

        if (!empty($nome)) {
            echo verificarNomeNaLista($nome);
        } else {
            echo "Por favor, digite um nome.";
        }
    }
    ?>
</body>
</html>
