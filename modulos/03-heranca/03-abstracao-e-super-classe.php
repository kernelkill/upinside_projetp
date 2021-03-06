<!doctype html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Abstração</title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 17/02/17
 * Time: 00:07
 */ 
    require_once ('./inc/config.inc.php');
    
 /*   $conta = new Abstracao('Joabe Kachorroski', 500);
    $contaDois = new Abstracao('Antonio Marcos', 500);


    $conta->Depositar(1000);
    $conta->Depositar(1000);
    $conta->Sacar(500);
    $conta->Sacar(500);
    $conta->Transferir(500,$contaDois);

    var_dump($conta, $contaDois);*/

    $cc = new AbstracaoCC('Joabe Kachorroski', 0, 1000);
    $cp = new AbstracaoCP('Joabe Kachorroski', 0);

    $cc->Depositar(1000);
    $cc->Sacar(100);
    $cc->Transferir(500,$cp);

    $cp->Depositar(1000);
    $cp->Sacar(100);
    $cp->Transferir(500,$cc);

    $cc->VerSaldo();
    $cp->VerSaldo();

    var_dump($cc, $cp);

?>

</body>
</html>