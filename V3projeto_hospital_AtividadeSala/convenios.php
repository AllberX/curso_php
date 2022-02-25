<?php

    include 'cabecalho.php';

?>

<div class="div_titulo"> <h10> <i class="fas fa-address-card"></i> Convênios </h10> </div>

Bem vindo a página de convênios!
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

<form method="POST" action="consultas/convenios/sql_cadastrar_convenio.php"> 
    <div class="row">
        <div class="col-4">
            <input class="form-control"  type="text" name="frm_nome_convenio" placeholder="Nome" required>
        </div> 
        <div class="col-2">
            <input class="form-control" type="number" name="frm_cooparticipacao" placeholder="Cooparticipação" required>
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
      <th> Cooparticipação </th>
   
      <th> Ações </th>
      <th> Editar </th>

  </tr> 

    <?php

        //BUSCANDO DADOS DO BANCO DE DADOS
        include 'consultas/convenios/sql_consultar_convenios.php';

        //ESSE INCLUDE VAI ALIMENTAR A VARIAVEL $resultado_convenios
        //COM TODOS OS DADOS DOS CONVENIOS

        //EXIBINDO OS RESULTADOS POR LINHA
        while($row_convenios = mysqli_fetch_assoc($resultado_convenios)) {

    ?>
            <!--CONTEUDO-->
            <tr>
              <td> <?php echo $row_convenios['cd_convenio']; ?> </td>
              <td> <?php echo $row_convenios['nm_convenio']; ?> </td>
              <td> <?php echo $row_convenios['cooparticipacao']; ?> </td>  
        


              <!-- FORM EXCLUR CONVENIO -->
        <form method="POST" action="consultas/convenios/sql_excluir_convenio.php"> 

              <input class="form-control" type="number" value="<?php echo $row_convenios['cd_convenio']; ?>" name="frm_cd_convenio" hidden>
            <td>   <button class="btn btn-primary" type="submit" > <i class="fas fa-trash"></i></button> </td>  
                
         </form>

                   <!-- FORM/MODAL EDITAR CONVENIO -->  
                
                <td>   <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal<?php echo $row_convenios['cd_convenio']; ?>" data-bs-whatever="@getbootstrap"> <i class="fas fa-pencil-alt"></i></button> </td>  
                     
        <form method="POST" action="consultas/convenios/sql_editar_convenio.php"> 
                        <div class="modal fade" id="modal<?php echo $row_convenios['cd_convenio']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="text" name="frm_nome_convenio" value="<?php echo $row_convenios['nm_convenio']; ?> "class="form-control" id="recipient-name">
                            </div>
                            <div class="mb-3">
                                <label for="message-text" class="col-form-label">Cooparticipação:</label>
                                <input type="text"  name="frm_cooparticipacao" value="<?php echo $row_convenios['cooparticipacao']; ?> "class="form-control" id="recipient-name">
                            </div>
                            
                        </div>
        <div class="modal-footer">
                        <!-- SALVAR DADOS EDITADOS DENTRO DO MODEL -->
        <input class="form-control" type="number" value="<?php echo $row_convenios['cd_convenio']; ?>" name="frm_cd_convenio" hidden>
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