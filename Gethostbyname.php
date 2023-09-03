<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="./CSS/styleGabriel.css" media="screen" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GetHostByName</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>    
</head>

<body>
    <div class="container" id="texto-principal">
        <h1>Gethostbyname()</h1>
        <div id="texto-secundario">
            <p>A função gethostbyname() em PHP é usada para obter o endereço IP correspondente a um nome de host. Ela
                realiza uma consulta DNS para traduzir o nome de host em um endereço IP. O nome de host pode ser um
                domínio
                (como "www.example.com") ou um hostname local (como "localhost").</p>
            <p> 1. Parâmetros: $hostname: O nome de host que você deseja resolver para um endereço IP.</p>

            <p>2. Retorno: Retorna o endereço IP como uma string se a resolução for bem-sucedida.Retorna o próprio nome
                de
                host se a resolução falhar.</p>

            <p>3. Uso: Essa função é útil quando você deseja descobrir o endereço IP de um nome de host para fins de
                comunicação via rede ou para realizar verificações baseadas em IP.</p>
        </div>
    </div>
    <div  id="input">
        <form action="Gethostbyname.php" method="post">
            <label for="hostname"></label>
            <input placeholder="Digite um HostName" id="hostname" name="hostname" required>
            <button type="submit" class="button">Consultar</button>
        </form>
    </div>
    <div id="texto-principal">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $hostname = $_POST["hostname"];
        $ipAddress = gethostbyname($hostname);

        if ($ipAddress !== $hostname) {
            echo "<p style='text-align:center'>O endereço IP de $hostname é $ipAddress.</p>";
        } else {
            echo "Não foi possível resolver o endereço IP para $hostname.";
        }
    } else {
        echo "Nenhuma consulta realizada.";
    }
    ?>
    </div>
    <br>
    <div class="container" style="display:flex ; justify-content:flex-end">       
                <a href="index.html">
                    <img src="img/botao-voltar.png" alt="butãovulta" width="40px" height="40px" >
                </a>
    </div>
</body>

</html>