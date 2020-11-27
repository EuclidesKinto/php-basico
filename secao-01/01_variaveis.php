<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variáveis</title>
</head>
<body>
<?php
    // string
    $nome = "Euclides";

    // int
    $idade = 99;

    // float
    $altura = 1.65;

    // boolean
    $fumante = true;
?>

<h1>Variáveis</h1>

<p>A variável <b>$nome</b>  é uma <i>string</i> com o valor: <?= $nome; ?>.</p>
<p>A variável <b>$idade</b>  é uma <i>int</i> com o valor: <?= $idade; ?>.</p>
<p>A variável <b>$altura</b>  é uma <i>float</i> com o valor: <?= $altura; ?>.</p>
<p>A variável <b>$fumante</b>  é uma <i>boolean</i> com o valor: <?= $fumante; ?>.</p>

</body>
</html>