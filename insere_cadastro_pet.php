<?php
include "conexao.php";

$nome=$_POST['nome'];
$raca=$_POST['raca'];
$genero=$_POST['genero'];
$cor=$_POST['cor'];
$porte=$_POST['porte'];
$idade=$_POST['idade'];
$pedigree=$_POST['pedigree'];
$excluido='N';

$sql="insert into pet
values(nextval('cod_pet'),'$nome','$raca','$genero','$cor','$porte',$idade,'$pedigree','$excluido')";
$resultado=pg_query($conecta,$sql);
$linhas=pg_affected_rows($resultado);

if ($linhas > 0) 
{
    echo "<script type='text/javascript'>alert('Cadastro realizado com sucesso!')</script>";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cadastro_pet.html'>";
}
else
{
    echo "<script type='text/javascript'>alert('Erro no cadastro, tente novamente')</script>";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cadastro_pet.html'>";
}

pg_close($conecta);
?>