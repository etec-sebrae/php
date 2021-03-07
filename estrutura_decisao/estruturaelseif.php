<?php
$prova1 = 7;
$prova2 = 5;

$nota = ($prova1 + $prova2) / 2;

if($nota < 3 ){
    echo $desempenho = "PÉSSIMO ".$nota;
}elseif ($nota > 5  && $nota <= 6 ) {
    echo $desempenho = "RUIM ". $nota;
}elseif ($nota < 7 ) {
    echo $desempenho = "MÉDIO ".$nota;
}elseif ($nota < 9 ) {
    echo $desempenho = "BOM ".$nota;
}else{
    echo $desempenho = "EXCELENTE ".$nota;
}


$idade = 18;
$amigoDoDono = false;
if($idade >=18 || $amigoDoDono == true ){
    echo "<br> Pode entrar!!";
}else{
    echo "<br> vai dormir!!";
}

?>