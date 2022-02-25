<?php

    //PRIMEIRO PASSO PARA BUSCAR DADOS
    //FAZER A CONSULTA DO SELECT
    $consulta_especialidade = "SELECT cd_especialidade, nm_especialidade
                           FROM hospital.especialidade
                           ORDER BY cd_especialidade DESC";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $resultado_especialidade = mysqli_query($conexao, $consulta_especialidade);
    //OBS a variavel $conexao é a mesma do conexao.php

?>