<?php
// variável para o contados
$i = 1;

// Executa o while externo 5 veze 
while($i <= 5) {
echo "$i Loop externo <br>";

// segundo contador
 $j = 1;

while($j <= 2) {
    
echo "Loop interno $j <br>"; 

// acresceta +1 ao contador 
$j++;

} 
// acrescenta +1 ao contador
$i++;
}
?>