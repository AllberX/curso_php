Back End - Dados inseridos no formulário de cadastro 
<br></br>

<?php 

$cd_Nome = $_POST['Nome_form']; 
$cd_CPF = $_POST['CPF_form'];
$cd_Login = $_POST['Login_form'];
$cd_Senha = $_POST['Senha_form'];

//echo $cd_Nome, '<br>';
//echo $cd_CPF, '<br>';
//echo $cd_Login, '<br>';
//echo $cd_Senha;

// Dados recebidos, sendo impressos na tela 

?>

<table>
  <tr>
    <th>Nome</th>
    <th>CPF</th>
    <th>Login</th>
    <th>Senha</th>
  </tr>
  <tr>
    <td> <?php echo $cd_Nome; ?> </td>
    <td> <?php echo $cd_CPF; ?> </td>
    <td> <?php echo $cd_Login; ?> </td>
    <td> <?php echo $cd_Senha; ?> </td>
  </tr>
</table>

