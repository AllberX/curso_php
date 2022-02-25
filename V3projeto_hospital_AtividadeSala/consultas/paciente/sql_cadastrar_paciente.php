<?php

    //INICIANDO SESSAO
    session_start();

    //CHAMANDO ARQUIVO CONEXAO
    include '../../conexao.php';

    //CADA ../ SIGNIFICA VOLTAR UMA PASTA PARA TRAS   

    //BUSCANDO DADOS DO CLIENTE via _POST
    $var_nm_paciente = $_POST['frm_nome_paciente'];    

    //PRIMEIRO PASSO PARA INSERIR DADOS
    //FAZER A CONSULTA DO INSERT
    $insere_paciente = "INSERT INTO hospital.paciente 
                            (nm_paciente)
                         VALUES 
                            ('$var_nm_paciente')";

    //SEGUNDO PASSO
    //JUNTAR AS INFORMACOES DA CONEXAO + A CONSULTA
    $valida_cadastro_paciente = mysqli_query($conexao, $insere_paciente);
    //OBS a variavel $conexao é a mesma do conexao.php

    //VALIDANDO SE OS DADOS FORAM CORRETAMENTE INSERIDOS
    if(!$valida_cadastro_paciente){
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Erro no cadastro do paciente.';        
        header('Location: ../../paciente.php');
    }else{
        //CRIANDO SESSAO MENSAGEM
        $_SESSION['msg_execucao'] = 'Paciente cadastrado com sucesso!';   
        header('Location: ../../paciente.php');
    }



?>