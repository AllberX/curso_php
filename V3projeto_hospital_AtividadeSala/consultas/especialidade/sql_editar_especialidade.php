<?php
    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   

    //BUSCANDO DADOS DO CADASTRO DE CONVENIO via _POST
    $var_nm_especialidade = $_POST['frm_nm_especialidade'];
    $var_cd_especialidade = $_POST['frm_cd_especialidade'];    
    

    //PRIMEIRO PASSO PARA INSERIR DADOS
    //FAZER A CONSULTA DO INSERT
    $edita_especialidade = "UPDATE hospital.especialidade
                             SET nm_especialidade = '$var_nm_especialidade',
                             WHERE cd_especialidade = '$var_cd_especialidade' ";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $valida_cadastro_especialidade = mysqli_query($conexao, $edita_especialidade);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE INSERIDOS
    if(!$valida_cadastro_especialidade){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro na edição da especialidade.';        
        header('Location: ../../especialidade.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Especialidade editada com sucesso';   
        header('Location: ../../especialidade.php');
    }
?>




