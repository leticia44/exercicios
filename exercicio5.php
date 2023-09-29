<?php
//declarando variáveis
$num = 4;
$limite = 30;
// enquanto número for menor que 38
while($num < $limite) {

// Exibir os números
 echo "Executando $num <br>";

// Se o número for idêntico a 24
if($num === 24) {
    echo "Parando o Loop✋";
break;
}
$num += 2;

}
?>