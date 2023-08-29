<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

    <title>PassWordHash</title>
</head>
<body>
    <section class="container" style="text-align: justify;">
        <h1 class="display-3">Password_hash()</h1>

        <br>
        <p>
            A função password_hash no PHP é uma ferramenta poderosa que ajuda a manter as senhas seguras 
            em aplicações web e sistemas. Ela trabalha transformando senhas em uma forma irreconhecível, 
            chamada de "hash". Pense nisso como uma versão altamente confusa da sua senha original, 
            quase como uma língua secreta que somente o computador compreende.
        </p>
        <br>
        <p>
            A mágica acontece quando você passa sua senha para a função password_hash. 
            Ela utiliza um processo complexo, chamado de "função de hash criptográfico", para criar esse 
            hash único. O interessante é que essa transformação é de uma única via, ou seja, você não pode 
            pegar o hash e descobrir a senha original a partir dele. Isso é importante porque, se por algum
            motivo os dados forem comprometidos, os invasores não poderão simplesmente ler as senhas. 
            Mesmo que eles tenham acesso aos hashes, decifrá-los é extremamente difícil e demorado.
        </p>
        <br>
        <p>
            Para verificar se uma senha está correta, você usaria a função password_verify. 
            Ela compara a senha digitada com o hash armazenado previamente, sem revelar a senha original.
            Essa é uma forma inteligente e segura de lidar com senhas, protegendo os dados sensíveis dos 
            usuários.
        </p>

        <br>

        <form action="PassWordHash.php" method="post">
            <label for="password">Digite sua senha: </label>
            <input type="text" id="password" name="password" required>
            <button type="submit" name="gerarHash">Gerar Hash</button>
        </form>
        
        <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST['gerarHash'])) {
                    $senha = $_POST["password"];
                    $hash = password_hash($senha, PASSWORD_DEFAULT);
                    
                    echo "<br>";
                    echo "Senha Codificada: " . $hash;
                }
            }
    
        ?>
        <br>
        <div style="display:flex ; justify-content:flex-end">       
            <a href="index.html">
                <img src="img/botao-voltar.png" alt="butãovulta" width="40px" height="40px" >
            </a>
        </div>
    </section> 

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>  
</body>
</html>