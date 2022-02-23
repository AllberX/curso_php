<?php
    include 'cabecalho.php';
?>

<div class="div_titulo"> <h10> <i class="fas fa-user-alt"></i> Paciente </h10> </div>
Bem vindo a página de Pacientes!
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
<!-- FORM PARA CADASTRAR -->
<form method="POST" action="consultas/paciente/sql_cadastrar_paciente.php"> 
    <div class="row">
        <div class="col-4">
            <input class="form-control" type="text" name="frm_nome_paciente" placeholder="Nome" required>
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
      <th> Código </th>
      <th> Nome </th>
      <th> Sexo </th>
      <th> Nascimento </th>
      <th> Ações </th>
  </tr> 
    <?php
        //BUSCANDO DADOS DO BANCO DE DADOS
        include 'consultas/paciente/sql_consultar_paciente.php';

        //ESSE INCLUDE VAI ALIMENTAR A VARIAVEL $resultado_
        //COM TODOS OS DADOS 

        //EXIBINDO OS RESULTADOS POR LINHA
        while($row_paciente = mysqli_fetch_assoc($resultado_paciente)) {

    ?>
            <!--CONTEUDO-->
            <tr>
              <td> <?php echo $row_paciente['cd_paciente']; ?> </td>
              <td> <?php echo $row_paciente['nm_paciente']; ?> </td>
              <td> <?php echo $row_paciente['sexo']; ?> </td>
              <td> <?php echo $row_paciente['dt_nascimento']; ?> </td>
              <td> 
                <form method="POST" action="consultas/paciente/sql_deletar_paciente.php">   
                    <input class="form-control" type="number" value="<?php echo $row_paciente['cd_paciente']; ?>" name="frm_cd_paciente" hidden>
                     <button class="btn btn-primary" type="submit"> <i class="fas fa-trash"></i> </button>
                </form> 
            </td>  
           </tr>
   <?php } ?>  
</table>

<?php
include 'rodape.php';
?>
