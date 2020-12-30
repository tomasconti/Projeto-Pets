<?php
include "conexao.php"; 
//dados enviados do script altera_prod_lista.php
$cod_pet=$_POST['cod_pet'];
$nome=$_POST['nome'];
$raca=$_POST['raca'];
$genero=$_POST['genero'];
$cor=$_POST['cor'];
$porte=$_POST['porte'];
$idade=$_POST['idade'];
$pedigree=$_POST['pedigree'];
$sql="UPDATE pet 
SET
nome = '$nome',
raca = '$raca',
genero = '$genero', 
cor = '$cor',
porte = '$porte',
idade = $idade,
pedigree = '$pedigree'
WHERE cod_pet = $cod_pet";
$resultado=pg_query($conecta,$sql);
$qtde=pg_affected_rows($resultado);
if ($qtde > 0)
{
echo "<script type='text/javascript'>alert('Gravação OK !!!')</script>";
echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=altera_pet.php'>";
}
else	
{
echo "Erro na gravacao !!!<br><br>";
echo "A conexão com o banco de dados foi encerrada!";
}
pg_close($conecta);
?>