<?php
/* EXERCICIOS:
CRIE DUAS VARIAVEIS
1º QUANTIDADE DE CAIXAS ($qtd_caixas)
2º UNIDADES POR CAIXA ($uni_caixas)
CRIAR uma nova variavel para calcular quantas unidades contém no total
3º Quantidade total ($qtd_total)
EXIBIR OS RESULTADOS DO PHP
DENTRO DE UMA TABLE HTML
QUANTIADE DE CAIXAS | UNIDADES POR CAIXA | QUANTIDADE TOTAL

       10                      5                   50

*/

$qtd_caixas = 10;
$uni_caixas = 5;
$qtd_total = $qtd_caixas * $uni_caixas;

?>

<table> <!--Abre Tabela-->

<tr> <!--Linha-->
    <th> <!--Coluna de título-->
    QTD CAIXAS
    </th> <!--Coluna de título-->

    <th> <!--Coluna de título-->
    QTD UNIDADE
    </th> <!--Coluna de título-->

    <th> <!--Coluna de título-->
    QTD TOTAL
    </th> <!--Coluna de título-->
</tr> <!--Linha-->

<tr> <!--Linha-->
    <td> <!--Coluna de Resultado-->
    <?php echo $qtd_caixas; ?>
    </td> <!--Coluna de Resultado-->

    <td> <!--Coluna de Resultado-->
    <?php echo $uni_caixas; ?>
    </td> <!--Coluna de Resultado-->

    <td> <!--Coluna de Resultado-->
    <?php echo $qtd_total; ?>
    </td> <!--Coluna de Resultado-->
</tr> <!--Linha-->
</table> <!--Fecha Tabela-->