<?php

    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   

    //BUSCANDO DADOS DO CADASTRO  via _POST
    $var_cd_especialidade = $_POST['frm_cd_especialidade'];    
 

    //PRIMEIRO PASSO PARA deleta
    //FAZER A CONSULTA DO DELETE
    $deleta_especialidade = "DELETE FROM hospital.especialidade 
    WHERE cd_especialidade = '$var_cd_especialidade'";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $deleta_cadastro_especialidade = mysqli_query($conexao, $deleta_especialidade);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE DELETADOS
    if(!$deleta_cadastro_especialidade){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro ao deletar a especialidade.';        
        header('Location: ../../especialidade.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Especialidade excluída com sucesso!';   
        header('Location: ../../especialidade.php');
    }



?>