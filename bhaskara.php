<?php
    include_once 'calculo.php';
    echo '<pre>';

    $dado = new dados;

    $dado->a=(int)$_POST['txta'];
    $dado->b=(int)$_POST['txtb'];
    $dado->c=(int)$_POST['txtc'];

    $dado->dadosEntrada();

    //fazendo referencia e chamando a classe delta
    $delta = new delta;

    $delta->b=$dado->b;
    $delta->a=$dado->a;
    $delta->c=$dado->c;

    $delta->calc_delta();

    //fazendo referencia a classe dos calculos do x1 e x2

    $x = new calc_xs;

    $x->a=$dado->a;
    $x->b=$dado->b;
    $x->delta=$delta->ValorDelta;

    $x->x1();
    $x->x2();

    //chamando os calculos para exibir dos resultados

    $dado->delta=$delta->ValorDelta;
    $dado->x1=$x->x1;
    $dado->x2=$x->x2;

    $dado->infoSaida();
    
    var_dump($dado);

?>