<?php

    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   

    //BUSCANDO DADOS DO CADASTRO DE CONVENIO via _POST
    $var_cd_convenio = $_POST['frm_cd_convenio'];    
    $var_nm_convenio = $_POST['frm_nome_convenio'];    
    $var_coop = $_POST['frm_cooparticipacao'];


    //PRIMEIRO PASSO PARA INSERIR DADOS
    //FAZER A CONSULTA DO INSERT

    $edita_convenios  = "UPDATE hospital.convenio 
    SET nm_convenio  = '$var_nm_convenio ',
        cooparticipacao = '  $var_coop'
    WHERE cd_convenio  = '$var_cd_convenio' ";


    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $valida_cadastro_convenio = mysqli_query($conexao, $edita_convenios);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE INSERIDOS
    if(!$valida_cadastro_convenio){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro na edição do convênio.';        
        header('Location: ../../convenios.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Convênio editado com sucesso!';   
        header('Location: ../../convenios.php');
    }



?>