<!DOCTYPE html>
<html>
<head>
    <title>Página PHP com a Função trim</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
    <link rel="stylesheet" type="text/css" href="./CSS/style.css" media="screen" />
 <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
            color: #333;
            margin: 0;
            padding: 20px;
        }
        h2 {
            color: #555;
        }
        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
        }
        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            margin-bottom: 15px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 15px;
            border-radius: 3px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        p {
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
    
        $frase = '';

        
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            
            $frase = $_POST["frase"];

            
            $frase = trim($frase);
        }
        ?>
        <span style="font-size: 50px;"> Trim() </span>
        <br>
        <br>
        <p style="text-align:justify;">
        <span style="fontsize: 20px;"> A função trim é presente em várias linguagens de programação, incluindo PHP.
            Tem a finalidade de remover espaços em branco do início e do final de uma string. 
            Ela não modifica a string original, mas retorna uma nova string com os espaços extras removidos. 
            É util para processar dados inseridos por usuários, como entradas de formulários, onde espaços em branco desnecessários 
            podem ser acidentalmente incluídos. Ao aplicar a função trim, você garante que a string resultante esteja limpa de espaços indesejados, 
            facilitando a manipulação e comparação de strings de forma mais precisa.</span>
        </p>
        <h2>Formulário: Função trim() aplicada em PHP</h2>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            Frase: <input type="text" name="frase" value="<?php echo $frase; ?>">
            <br>
            <br>
            <input type="submit" value="Enviar">
            <br>
        </form>

        <?php

        if ($frase !== '') {
            echo "<br><p>Frase após aplicação da função trim(): '$frase'</p>";
        }
        ?>
        <br>
        <div style="display:flex ; justify-content:flex-end">       
                <a href="index.html">
                    <img src="img/botao-voltar.png" alt="butãovulta" width="40px" height="40px" >
                </a>
        </div>
    </div>
</body>
</html>