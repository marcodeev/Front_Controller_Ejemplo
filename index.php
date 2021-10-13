<?php

//2-a

$bancos=40;
$bancos_extra=4;
$aulas=12;

echo "Total de bancos ".($bancos+$bancos_extra)*$aulas;
echo "<br><br>";


//3-h

function cualEsMayor($valorA,$valorB)
{
    echo "<br>";
    echo "valorA= ".$valorA;
    echo "<br>";
    echo "valorB= ".$valorB;
    echo "<br>";
    if($valorA>$valorB)
    {
        return $valorA." es mayor valor A";
    }else if($valorA<$valorB)
    {
        return $valorB." es mayor valor B";
    }else
    {
        return "son iguales";
    }
}

//4-a

function tabla($numero)
{   echo "<br><br>";
    for($i=0;$i<=10;$i++)
    {
        
        echo $i."x".$numero."=".$numero*$i;
        echo "<br>";
    }
}

echo cualEsMayor(7,7);

tabla(7);





echo "<br><br><br><br>";

//3-b

$cantidad_socios=3;
$primer_ganacia=4500;
$segunda_ganancia=22450;
$dias_gancia_baja=10;
$cantidad_de_dias=40;


$resultado=($primer_ganacia*$dias_gancia_baja);
$resultado+=($segunda_ganancia*($cantidad_de_dias-$dias_gancia_baja));
$resultado/=3;
echo "Cada socio ganara $".$resultado;

echo "<br><br><br>";

//3-e

function oracion($palabra1,$palabra2)
{
    $oracion=$palabra1." ".$palabra2;

    return $oracion;
}

echo oracion('Hola','mundo');

echo "<br><br><br>";

//4-b

function contar($numero)
{
    $conteo=0;
    
    do
    {
        echo $conteo." ";
        $conteo++;
    }
    while($conteo<=$numero);
    
    /*
    while($conteo<=$numero)
    {
        echo $conteo." ";
        $conteo++;
    }
    */  
}

contar(10);

echo '<br>';

function sumarNumeros($a,$b)
{
    if((gettype($a)!='string')&&(gettype($b)!='string'))
    $c=$a+$b;
    else
    $c="valores incorrectos";

    return $c;
}

$resultado=sumarNumeros('a',90);

echo "El resultado es $resultado";


function Nombre_de_funcion(&$atributos)
{
    $atributos*=2;
    return $atributos;
}


$variableA=50;
Nombre_de_funcion($variableA);
echo $variableA;