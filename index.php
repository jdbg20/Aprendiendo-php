<?php


//variable tipo numero
$numero=10;

echo 'Esto es un numero: '.$numero;
echo '<br><br>';
//variable tipo arreglo
$texto="Jesus david Barrios Guzman";
echo 'Mi nombre es'.$texto;

echo '<br><br>';
//variable tipo booleana
$booleana=true;

echo'Esto es una variable booleana:'.$booleana;
echo '<br><br>';
//variable tipo arreglo


$arreglo= array("Alejandro","Maria",123);

echo $arreglo[0];
echo '<br><br>';

echo $arreglo[1];
echo '<br><br>';

echo $arreglo[2];
echo '<br><br>';
//arreglos con propiedades
$corolres = array("color1"=>"rojo","color2"=>"Azul");
echo $corolres["color1"];
echo '<br><br>';
//variables de tipo objeto

$objeto=(object)["mueblel"=>"amarillo","mueble2"=>"Escritorio"];

echo $objeto->mueblel;


?>