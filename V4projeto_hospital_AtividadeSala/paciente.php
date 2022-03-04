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
</form>

<form method="POST" action="consultas/paciente/sql_cadastrar_paciente.php"> 
    <div class="row">
        <div class="col-4">
            <input class="form-control" type="text" name="frm_sexo" placeholder="Sexo" required>
        </div>     
    </div>
</form>

<form method="POST" action="consultas/paciente/sql_cadastrar_paciente.php"> 
    <div class="row">
        <div class="col-4">
            <input class="form-control" type="date" name="frm_dt_nascimento" placeholder="Nascimento" required>
        </div> 

        <div class="col-1">
            <button class="btn btn-primary" type="submit"> <i class="fas fa-plus"></i> </button>
        </div>      
    </div>
</form>
</br>
</br>
<table class="table table-striped table-hover">

  <!-- PRIMEIRA LINHA (TR) TITULO (TH) -->
  <tr>
      <th> Código </th>
      <th> Nome </th>
      <th> Sexo </th>
      <th> Nascimento </th>
      <th> Excluir </th>
      <th> Editar </th>

      </tr> 

<?php

    //BUSCANDO DADOS DO BANCO DE DADOS
    include 'consultas/paciente/sql_consultar_paciente.php';

    //ESSE INCLUDE VAI ALIMENTAR A VARIAVEL $resultado_paciente
    //COM TODOS OS DADOS DOS paciente

    //EXIBINDO OS RESULTADOS POR LINHA
    while($row_paciente = mysqli_fetch_assoc($resultado_paciente)) {

?>
        <!--CONTEUDO-->
        <tr>
            <td> <?php echo $row_paciente['cd_paciente']; ?> </td>
            <td> <?php echo $row_paciente['nm_paciente']; ?> </td>
            <td>        <?php echo $row_paciente['sexo']; ?> </td>
           <td><?php echo $row_paciente['dt_nascimento']; ?> </td>


     <!-- FORM DELETAR PACIENTE -->
    <form method="POST" action="consultas/paciente/sql_deletar_paciente.php">
    <input class="form-control" type="number" value="<?php echo $row_paciente['cd_paciente']; ?>" name="frm_cd_paciente" hidden>
    <td>   <button class="btn btn-primary" type="submit" > <i class="fas fa-trash"></i></button> </td>   
    </form>

    <!-- FORM/MODAL EDITAR PACIENTE -->  
<td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?php echo $row_paciente['nm_paciente']; ?>" data-bs-whatever="@getbootstrap"> <i class="fas fa-pencil-alt"></i></button> </td>  
    <form method="POST" action="consultas/paciente/sql_editar_paciente.php"> 
    <div class="modal fade" id="modal<?php echo $row_paciente['nm_paciente']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">

                    <!-- DENTRO DO MODAL -->
<div class="mb-3">
<label for="recipient-name" class="col-form-label">Nome:</label>
<input type="text" name="frm_nome_paciente" value="<?php echo $row_paciente['nm_paciente']; ?> "class="form-control" id="recipient-name">
</div>

<div class="mb-3">
<label for="recipient-name" class="col-form-label">sexo:</label>
<input type="text" name="frm_sexo" value="<?php echo $row_paciente['sexo']; ?> "class="form-control" id="recipient-sexo">
</div>

<div class="mb-3">
<label for="recipient-name" class="col-form-label">Nascimento:</label>
<input type="text" name="frm_dt_nascimento" value="<?php echo $row_paciente['dt_nascimento']; ?> "class="form-control" id="recipient-dt_nascimento">
</div>


                    </div>


    <div class="modal-footer">


                    <!-- SALVAR DADOS EDITADOS DENTRO DO MODEL -->
    <input class="form-control" type="number" value="<?php echo $row_paciente['cd_paciente']; ?>" name="frm_cd_paciente" hidden>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
        <button class="btn btn-primary" type="submit"> Salvar</button>
      </form>
     </div>
    </div>
  </div>
 </div> 


</tr>
<?php } ?>  
</table>








<?php
include 'rodape.php';
?>
