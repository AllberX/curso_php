<!--AQUI E HTML-->

<?php
//AQUI E O PHP

$var_nome = $_POST ['frm_name'];
    echo $var_nome;

$var_idade = $_POST ['frm_idade'];
    echo $var_idade;

$var_sexo = $_POST ['frm_sexo'];
    echo $var_sexo;

    if($var_sexo == 'M'){
    echo  '<style>
    .caixa_exibição{
    width: 100px;
    height: 50px;
    border: solid 1px blue;
    }
    </style>';

    }else {
    echo  '<style>
    .caixa_exibição{
    width: 100px;
    height: 50px;
    border: solid 1px pink;
    }
    </style>';
    }
?>
<div class="caixa_exibição">
<?php
    echo $var_nome . ' </br> ';
?>