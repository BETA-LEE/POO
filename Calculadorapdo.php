<?php
//FERNANDO SENA
//MEU ESTUDO 2022 - INTRODUÇÃO A CLASSES , OBJETO , MÉTODO STANDARDSENA@OUTLOOK.COM
class Calculadora {
private $valor; //objeto valor 

function __construct($inicial){//metodo incial 


   $this->valor = $inicial;

}

function soma($novo) {
 return $this->valor += $novo;
} //metodo da calculadora 


function divide($novo){
    return $this->valor /= $novo;
//segundo metodo
}
}
$calc = new Calculadora(10); //criando o objeto calculadora 
print $calc->soma(20); //imprimindo o metodo soma e atribuindo valores 
print $calc->divide(2);
