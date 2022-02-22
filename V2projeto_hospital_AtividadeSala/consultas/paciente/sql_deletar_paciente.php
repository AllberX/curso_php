<?php
    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   
    //BUSCANDO DADOS DO CADASTRO  via _POST
    $var_cd_paciente = $_POST['frm_cd_paciente'];    

    //PRIMEIRO PASSO PARA deleta
    //FAZER A CONSULTA DO DELETE
    $deleta_paciente = "DELETE FROM hospital.paciente 
    WHERE cd_paciente = '$var_cd_paciente'";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $deleta_cadastro_paciente = mysqli_query($conexao, $deleta_paciente);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE DELETADOS
    if(!$deleta_cadastro_paciente){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro ao deletar paciente.';        
        header('Location: ../../paciente.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Paciente excluído com sucesso!';   
        header('Location: ../../paciente.php');
    }
?>
