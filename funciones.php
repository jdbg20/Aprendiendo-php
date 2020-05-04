<?php




function bienvenida(){


    echo"Welcome al curso php";
   
}


bienvenida();
echo'<br><br>';

//Funciones con parametros

function saludar($hola){

    echo $hola;
    
}

saludar("Hola a todos");
echo'<br><br>';

//funcion con retorno


function retorno($retornar){

    return $retornar;
}



echo retorno("Retornado la funcion");







?>