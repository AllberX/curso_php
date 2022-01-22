<?php
$Qtd_repeticoes = 10; 
echo 'QUANTIDADE DE REPETIÇOES:<br>' . $Qtd_repeticoes;

//CONTADOR
$contador =1;
echo ' <br> <br> CONTADOR SE INICIA: <br> ' . $contador;

while($contador <= $Qtd_repeticoes ) {
    echo '<br> <br> Repetição:' . $contador;    
    $contador = $contador + 1;
}

?>