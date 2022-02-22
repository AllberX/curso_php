<?php

    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   

    //BUSCANDO DADOS DO CADASTRO DE atendimento via _POST
    $var_cd_atendimento = $_POST['frm_cd_atendimento'];    
    $var_cd_paciente = $_POST['frm_cd_paciente'];
    $var_cd_convenio = $_POST['frm_cd_convenio'];
    $var_cd_especialidade = $_POST['frm_cd_especialidade'];
    $var_dt_atendimento = $_POST['frm_dt_atendimento'];
    $var_vl_atendimento = $_POST['frm_vl_atendimento'];

    //PRIMEIRO PASSO PARA INSERIR DADOS
    //FAZER A CONSULTA DO INSERT
    $insere_atendimento = "INSERT INTO hospital.atendimento 
                            (cd_atendimento,cd_paciente,cd_convenio,cd_especialidade,dt_atendimento,vl_atendimento)
                         VALUES 
                            ('$var_cd_atendimento', ' $var_cd_paciente', ' $var_cd_convenio', '$var_cd_especialidade',
                             '$var_dt_atendimento', '$var_vl_atendimento')";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $valida_cadastro_atendimento = mysqli_query($conexao, $insere_atendimento);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE INSERIDOS
    if(!$valida_cadastro_atendimento){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro no cadastro do Atendimento.';        
        header('Location: ../../atendimento$insere_atendimento.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Atendimento cadastrado com sucesso!';   
        header('Location: ../../atendimento$insere_atendimento.php');
    }

?>

