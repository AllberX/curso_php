<?php
    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   

    //BUSCANDO DADOS DO CADASTRO DE paciente via _POST
    $var_cd_paciente = $_POST['frm_cd_paciente'];    
    $var_nm_paciente = $_POST['frm_nome_paciente']; 
    $var_sexo = $_POST['sexo'];
    $var_dt_nascimento = $_POST['dt_nascimento'];   


    //PRIMEIRO PASSO PARA INSERIR DADOS
    //FAZER A CONSULTA DO INSERT

    $edita_paciente  = "UPDATE hospital.paciente 
    SET nm_paciente  = '$var_nm_paciente ', sexo  = '$var_sexo ', dt_nascimento  = '$var_dt_nascimento '
    WHERE nm_paciente  = '$var_nm_paciente ', sexo  = '$var_sexo ', dt_nascimento  = '$var_dt_nascimento ";


    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $valida_cadastro_paciente = mysqli_query($conexao, $edita_paciente);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE INSERIDOS
    if(!$valida_cadastro_paciente){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro na edição do paciente.';        
        header('Location: ../../paciente.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Paciente editado com sucesso!';   
        header('Location: ../../paciente.php');
    }
?>