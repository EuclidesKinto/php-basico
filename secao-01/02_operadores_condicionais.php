<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Operadores Condicionais</title>
</head>
<body>
<?php
//      ((V  e V) ou F) = V
//    if((22 == 22 && 3 == 3) || 5 != 5){
//        echo "Verdadeiro";
//    }else{
//        echo "Falso";
//    }

    //---------------------------------------------

    $usuario_possui_cartao = true;
    $valor_compra = 400;
    $frete = 50;
    $desconto_frete = true;

    if($usuario_possui_cartao == true && $valor_compra >= 400){
        $frete = 0;
    }else if($usuario_possui_cartao == true && $valor_compra >= 300){
        $frete = 10;
    }else if($usuario_possui_cartao == true && $valor_compra >= 200){
        $frete = 20;
    }else if($usuario_possui_cartao == true && $valor_compra >= 100){
        $frete = 30;
    }else{
        $desconto_frete = false;
    }

    $total = $valor_compra + $frete;
?>

<h1>Detalhes do Pedido</h1>

<p>Possui o cartão da loja? - <?= $usuario_possui_cartao ? 'SIM' : 'NÃO'?></p>
<p>Valor da compra: R$<?= $valor_compra;?></p>
<p>Recebeu desconto de frete? - <?= $desconto_frete ? 'SIM' : 'NÃO'?></p>
<p>Valor do frete: R$<?= $frete;?></p>
<p>Valor Total: R$<?= $total;?></p>

</body>
</html>