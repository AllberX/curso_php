<?php

    include 'cabecalho.php';

?>

<div class="div_titulo"> <h10> <i class="fas fa-address-card"></i> Especialidades </h10> </div>

Bem vindo a página de cadastro de especialidades!

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

<!-- FORM PARA CADASTRAR CONVENIO -->

<form method="POST" action="consultas/especialidades/sql_cadastrar_especialidades.php"> 
    <div class="row">
        <div class="col-4">
            <input class="form-control" type="text" name="frm_nome_especialidade" placeholder="Especialidade" required>
        </div> 
        <div class="col-2">
            <input class="form-control" type="text" name="frm_sus" placeholder="SUS" required>
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
      <th> Especialidade </th>
      <th> SUS </th>
   
      <th> Ações </th>
      <th> Editar </th>

  </tr> 

    <?php

        //BUSCANDO DADOS DO BANCO DE DADOS
        include 'consultas/especialidades/sql_consultar_especialidades.php';

        //ESSE INCLUDE VAI ALIMENTAR A VARIAVEL $resultado_ESPECIALIDADE
        //COM TODOS OS DADOS DOS ESPECIALIDADE

        //EXIBINDO OS RESULTADOS POR LINHA
        while($row_especialidade = mysqli_fetch_assoc($resultado_especialidade)) {

    ?>
            <!--CONTEUDO-->
            <tr>
              <td> <?php echo $row_especialidade['cd_especialidade']; ?> </td>
              <td> <?php echo $row_especialidade['nm_especialidade']; ?> </td>
              <td> <?php echo $row_especialidade['sn_sus']; ?> </td>  
        


              <!-- FORM EXCLUR ESPECIALIDADE -->
              <form method="POST" action="consultas/especialidades/sql_excluir_especialidades.php"> 
              <input class="form-control" type="text" value="<?php echo $row_especialidade['cd_especialidade']; ?>" name="frm_cd_especialidade" hidden>
                    <td>   <button class="btn btn-primary" type="submit"> <i class="fas fa-trash"></i></button> </td>  
              
    </form>

                 <!-- FORM/MODAL EDITAR CONVENIO -->  

                <td>   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?php echo $row_especialidade['cd_especialidade']; ?>" data-bs-whatever="@getbootstrap"> <i class="fas fa-pencil-alt"></i></button> </td>  
                   

    
                <div class="modal fade" id="modal<?php echo $row_especialidade['cd_especialidade']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                    <form method="POST" action="consultas/especialidades/sql_editar_especialidades.php"> 
                        <!-- DENTRO DO MODAL -->
                        <div class="mb-3">
                            <label for="recipient-name" class="col-form-label">Especialidade: </label>
                            <input type="text" name="frm_nm_especialidade" value="<?php echo $row_especialidade['nm_especialidade'];?> "class="form-control" id="recipient-name">
                        </div>
                        <div class="mb-3">
                            <label for="message-text" class="col-form-label">SUS:</label>
                            <input type="text" name="frm_sus" maxlength="1" value="<?php echo $row_especialidade['sn_sus'];?> "class="form-control" id="recipient-name">
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                    
                    <input class="form-control" type="text" value="<?php echo $row_especialidade['cd_especialidade'];?>" name="frm_cd_especialidade" hidden>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    <!-- SALVAR DADOS EDITADOS DENTRO DO MODEL -->
                        <button class="btn btn-primary" type="submit"> Salvar</button>
        </form>
        </div>
        </div>
    </div>
    </div>
 
   <?php } ?>  
  
</table>

<?php

include 'rodape.php';

?>