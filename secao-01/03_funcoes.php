<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Funções</title>
</head>
<body>
<?php
    // void (sem retorno)
    function oi(){
        echo 'oi';
    }
    oi();

    echo '<br>';

    //return (com retorno)
    function calcular_area($comprimento, $largura){
        return $comprimento * $largura;
    }

    echo calcular_area(30,9);
?>


</body>
</html>