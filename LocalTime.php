<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Função LocalTime</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container" style="text-align: justify;">
        <h1 class="display-3">LocalTime()</h1>
    
        <p>
            A função localtime() é uma função incorporada da linguagem de programação PHP, amplamente utilizada para manipular e converter informações de data e hora. 
            Ela desempenha um papel importante quando se trata de lidar com timestamps Unix e representa uma data e hora específica no contexto da hora local.
        </p>
        
        <p>
            Ao receber um timestamp Unix como entrada, a função localtime() retorna uma matriz associativa que contém vários elementos representando os diferentes componentes da data e hora correspondentes a esse timestamp. 
            <br>Esses componentes incluem:
        </p>
        <div class="row">
            <div class="col-lg-4">
                <ul class="list-group">
                    <li class="list-group-item">tm-sec</li>
                    <li class="list-group-item">tm-min</li>
                    <li class="list-group-item">tm_hour</li>
                    <li class="list-group-item">tm_mday</li>
                    <li class="list-group-item">tm_mon</li>
                    <li class="list-group-item">tm_year</li>
                    <li class="list-group-item">tm_wday</li>
                    <li class="list-group-item">tm_yday</li>
                    <li class="list-group-item">tm_isdst</li>
                </ul>
            </div>
            <div class="col-lg-8">
                <ul class="list-group">
                    <li class="list-group-item">Os segundos da hora.</li>
                    <li class="list-group-item">Os minutos da hora.</li>
                    <li class="list-group-item">As horas do dia (formato de 24 horas).</li>
                    <li class="list-group-item">O dia do mês (1 a 31).</li>
                    <li class="list-group-item">O mês do ano (0 a 11, onde 0 é janeiro).</li>
                    <li class="list-group-item">O ano (anos após 1900)</li>
                    <li class="list-group-item">O dia da semana (0 a 6, onde 0 é domingo).</li>
                    <li class="list-group-item">O dia do ano (1 a 365 ou 366 em anos bissextos).</li>
                    <li class="list-group-item">Um indicador de horário de verão (1 se estiver em vigor, 0 se não estiver e -1 se desconhecido).</li>
                </ul>
            </div>
            
        </div>
        <br>
        <div class="row">
            <br><p>Então, você pode ver a hora local de uma dessas regiões abaixo:
        </div>
        <form action="LocalTime.php" method="post">
            <select name="regiao" class="form-select form-select-sm" aria-label=".form-select-sm example">
                <option value="America/Sao_Paulo">São Paulo, Brasil - America do Sul</option>
                <option value="Pacific/Pago_Pago">Pago Pago, Samoa Americana - Pacifico</option>
                <option value="Asia/Dubai">Dubai, Emirados Árabes Unidos - Asia</option>
                <option value="Antarctica/Troll">Troll, Jutulsessen - Antártida</option>
                <option value="Indian/Maldives">Maldives, Maldives - Asia</option>
            </select>
            <br><button type="submit">Ver informações de hora da região</button>
        </form>
    </div>
    <div class="row">   
        <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (isset($_POST["regiao"])) {
                    $regiao = $_POST["regiao"];

                    date_default_timezone_set($regiao);
                    $localtime = localtime();
                    $mes = $localtime[4] + 1;
                    $ano = $localtime[5] + 1900;
                    $localtimeSelect = "$localtime[3]/$mes/$ano $localtime[2]:$localtime[1]:$localtime[0]"; 

                    echo "<br><h4 class=\"container\">O dia e a hora em $regiao é: $localtimeSelect</h4>"; 

                }
            } 
            
        ?>

        <div style="display:flex ; justify-content:flex-end">       
            <a href="index.html">
                <img src="img/botao-voltar.png" alt="butãovulta" width="40px" height="40px" >
            </a>
        </div>

    </div>

    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script> 

</body>
</html>

