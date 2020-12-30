<?php
include "conexao.php";
//dados enviados do script exclui_prod_chamada_confirma_exclusao_logica.php
$cod_pet = $_POST['cod_pet'];
$data=date('d/m/Y');
$sql="update pet
set excluido = 'S', dt_exclusao='$data'
where cod_pet=$cod_pet";
//inserida a data de exclusao do produto para documentação
$resultado=pg_query($conecta,$sql);
$qtde=pg_affected_rows($resultado);
if ($qtde > 0 )
{
echo "<script type='text/javascript'>alert('Exclusão OK !!!')</script>";
echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=exclusao_pet.php'>";
}
else
{
echo "Erro na exclusão !!!<br>";
echo "<a href='exclusao_pet.php'>Voltar</a>";
}
?>