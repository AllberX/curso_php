<?php

    //PRIMEIRO PASSO PARA BUSCAR DADOS
    //FAZER A CONSULTA DO SELECT
    $consulta_paciente = "SELECT cd_paciente, nm_paciente, sexo, dt_nascimento
                           FROM hospital.paciente
                           ORDER BY cd_paciente DESC";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $resultado_paciente = mysqli_query($conexao, $consulta_paciente);
    //OBS a variavel $conexao é a mesma do conexao.php

?>
