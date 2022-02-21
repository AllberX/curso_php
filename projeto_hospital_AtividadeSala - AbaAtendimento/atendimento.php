<?php

    include 'cabecalho.php';

?>

<div class="div_titulo"> <h10> <i class="fas fa-comments"></i> Atendimentos </h10> </div>

Bem vindo a página de atendimentos !
</br></br>
<!-- CHAMANDO ALERT COM A SESSAO SE A SESSAO ESTIVER ATIVA -->
<?php 
    //SE EXISTIR DADOS NA SESSAO msg_execucao
    if(isset($_SESSION['msg_execucao'])){
?>
            <!-- EXIBE A SESSAO NUM ALERT BOOTSTRAP -->
            <div class="alert alert-primary" role="alert">
                <?php echo $_SESSION['msg_execucao']; ?>    
            </div>
<?php 
            //DEPOIS DE EXIBIR A SESSAO, LIMPA ELA
            unset($_SESSION['msg_execucao']);
    }
?>
<!-- FORM PARA CADASTRAR atendimento -->
<form method="POST" action="consultas/atendimento/sql_cadastrar_atendimento.php"> 
    <div class="row">
        <div class="col-4">
            <input class="form-control" type="text" name="frm_nome_atendimento" placeholder="Nome" required>
        </div>    
    </div>
</form>
</br>
<form method="POST" action="consultas/atendimento/sql_cadastrar_atendimento.php"> 
    <div class="row">
        <div class="col-4">
            <input class="form-control" type="date" name="frm_dt_atendimento" required>
        </div>     
    </div>
</form>
</br>
<form method="POST" action="consultas/atendimento/sql_cadastrar_atendimento.php"> 
    <div class="row">
        <div class="col-4">
            <input class="form-control" type="text" name="frm_vl_atendimento" placeholder="R$" required>
        </div> 
        <div class="col-1">
            <button class="btn btn-primary" type="submit"> <i class="fas fa-plus"></i> </button>
        </div>      
    </div>
</form>
</br>

<table class="table table-striped table-hover">

  <!-- PRIMEIRA LINHA (TR) TITULO (TH) -->
  <tr>
      <th> Cod Atendimento </th>
      <th> Cod Paciente </th>
      <th> Cod convenio </th>
      <th> Cod especialidade </th>
      <th> Data Atendimento </th>
      <th> Valor Atendimento </th>
      <th> Ações </th>
  </tr> 

    <?php

        //BUSCANDO DADOS DO BANCO DE DADOS
        include 'consultas/atendimento/sql_consultar_atendimento.php';

        //ESSE INCLUDE VAI ALIMENTAR A VARIAVEL $resultado_atendimento
        //COM TODOS OS DADOS DOS atendimento

        //EXIBINDO OS RESULTADOS POR LINHA
        while($row_atendimento = mysqli_fetch_assoc($resultado_atendimento)) {
?>
            <!--CONTEUDO-->
            <tr>
              <td> <?php echo $row_atendimento['cd_atendimento']; ?> </td>
              <td> <?php echo $row_atendimento['cd_paciente']; ?> </td>
              <td> <?php echo $row_atendimento['cd_convenio']; ?> </td>
              <td> <?php echo $row_atendimento['cd_especialidade']; ?> </td>
              <td> <?php echo $row_atendimento['dt_atendimento']; ?> </td>
              <td> <?php echo $row_atendimento['vl_atendimento']; ?> </td>
              <td> 
                <form method="POST" action="consultas/atendimento/sql_deletar_atendimento.php">     
                    <input class="form-control" type="number" value="<?php echo $row_atendimento['cd_atendimento']; ?>" 
                    name="frm_cd_atendimento" hidden>
                    <button class="btn btn-primary" type="submit"> <i class="fas fa-trash"></i> </button>
                </form> 
            </td>  
        </tr>
   <?php } ?>  
<!-- FORM PARA DELETAR atendimento -->
</table>
<?php
include 'rodape.php';
?>