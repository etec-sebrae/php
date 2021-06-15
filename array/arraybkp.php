<?php

//Criando array com indexadores automatico e imprimindo com a função print_r;
$frutas = array("laranja","melancia","abacaxi");
//print_r($frutas);
//percorrendo o array com foreach e for
// função para contar array count()

for($i = 0; $i < count($frutas); $i++){
    echo("$frutas[$i] <br>");
}

$laticinios=array("queijo"=>"10.0","presunto"=>"10.9","mortadela"=>"43");
foreach($laticinios as $chave => $valor){
    echo "indice $chave valor $valor ";
}

$marcas = array("Volvo", "BMW", "Toyota");
sort($marcas);
foreach($marcas as $marca ){
    echo "$marca ";
}



$carros = array("Volvo", "BMW", "Toyota");
echo "Eu gosto de ".$carros[0].", ".$carros[1]." e ".$carros[2].".";



//Calculo trabalhando com notas
/* $soma = 0;
$notas = array(7,8,9,10);
    foreach($notas as $x){
        $soma =  $soma + $x;        
    }
$qtd = (sizeof($notas));
$media = $soma/sizeof($notas);
echo "$media $qtd" ;
*/
//trabalhando operadores de comparaçõem em php
/*$numeros = array(12,4,47,8,10);
$maior = 0;
foreach($numeros as $numero){
    if($numero >= $maior){
        $maior = $numero;
    }   
}
echo "maior numero $maior";
*/

$valorProduto = 14500.00;
$desconto = 5; // 5% de desconto em programação é * 0.05, para isso divida esse valor por 100.

if($valorProduto>10000){
    echo $valorProduto = $valorProduto - ($valorProduto * ( $desconto/100));
}
?>