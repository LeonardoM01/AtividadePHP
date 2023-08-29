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
            <div class="col-lg-6">
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
            <div class="col-lg-6">
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
            
        </div>
    </div>
</body>
</html>

<?php
    date_default_timezone_set("America/Sao_Paulo");
    $localtime = localtime();
    $localtime_assoc = localtime(time(), true);
    print_r($localtime);
    print_r($localtime_assoc);
?>