<?php

//Criando Variavel
$nome= "Sylvio";
$sobrenome= "Alberto Castro";

//Usando o ponto para concatenar os valores
$nome_completo = $nome .' '. $sobrenome; 

//Exibindo o valor da váriavel

echo $nome_completo;

//Variavel idade
$idade = 35; 

echo '</br>'; //pular linha

//Verificando se é maior de idade
// if (se) a variavel idade for maior que 18 anos = Maior de idade
//Senão menor de idade 

if ($idade >= 18){
    $resultadoidade = "Maior de idade";
}else {
    $resultadoidade = "Menor de idade";
}
echo '</br>'; //pular linha

echo $resultadoidade;

echo '</br>'; //pular linha

?>

<table> <!--Abre Tabela-->

<tr> <!--Linha-->
    <th> <!--Coluna de título-->
    NOME
    </th> <!--Coluna de título-->

    <th> <!--Coluna de título-->
    IDADE
    </th> <!--Coluna de título-->
</tr> <!--Linha-->

<tr> <!--Linha-->
    <td> <!--Coluna de Resultado-->
    <?php echo $nome_completo; ?>
    </td> <!--Coluna de Resultado-->

    <td> <!--Coluna de Resultado-->
    <?php echo $idade; ?>
    </td> <!--Coluna de Resultado-->
</tr> <!--Linha-->

</table> <!--Fecha Tabela-->