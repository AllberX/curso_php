<?php

    //PRIMEIRO PASSO PARA BUSCAR DADOS
    //FAZER A CONSULTA DO SELECT
    $consulta_atendimento = "SELECT cd_atendimento, cd_paciente, cd_convenio, cd_especialidade,dt_atendimento,
    vl_atendimento  
                           FROM hospital.atendimento
                           ORDER BY cd_atendimento DESC";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $resultado_atendimento = mysqli_query($conexao, $consulta_atendimento);
    //OBS a variavel $conexao é a mesma do conexao.php
?>
