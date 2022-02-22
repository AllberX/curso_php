<?php

    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   

    //BUSCANDO DADOS DO atendimento via _POST
    $var_cd_atendimento = $_POST['frm_cd_atendimento'];    
 

    //PRIMEIRO PASSO PARA DELETAR DADOS
    $insere_atendimento = "DELETE FROM hospital.atendimento 
    WHERE cd_atendimento = '$var_cd_atendimento'";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $valida_cadastro_atendimento = mysqli_query($conexao, $insere_atendimento);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE DELETADOS
    if(!$valida_cadastro_atendimento){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro ao deletar o atendimento.';        
        header('Location: ../../atendimento.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Atendimento excluído com sucesso!';   
        header('Location: ../../atendimento.php');
    }
?>