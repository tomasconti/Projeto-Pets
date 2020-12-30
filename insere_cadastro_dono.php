<?php
include "conexao.php"; 

$nome=$_POST['nome'];
$nome_usuario=$_POST['nome_usuario'];
$dt_nascimento=$_POST['dt_nascimento'];
$num_celular=$_POST['num_celular'];
$email=$_POST['email'];
$senha=$_POST['senha'];

$sql="insert into dono
values('$nome_usuario','$nome','$dt_nascimento','$num_celular','$email','$senha')";
$resultado=pg_query($conecta,$sql);
$linhas=pg_affected_rows($resultado);
if ($linhas > 0)
{
    echo "<script type='text/javascript'>alert('Cadastro realizado com sucesso!')</script>";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cadastro_dono.html'>";
}                
else
{
    echo "<script type='text/javascript'>alert('Erro no cadastro, tente novamente')</script>";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=cadastro_dono.html'>";

}  
pg_close($conecta);
?>
