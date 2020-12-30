<?php
include "conexao.php";

$nome_usuario=$_POST['nome_usuario'];
$senha=$_POST['senha'];

$tabela = pg_query("SELECT * FROM dono");
$linhas = pg_num_rows($tabela);
    
for($c=0; $c < $linhas ; $c++){
    $resultado = pg_fetch_array($tabela);
    if($nome_usuario == $resultado[0] and $senha == $resultado[5])
    {
        header('location:cadastro_pet.html');
        exit();
    }
}
echo "<script type='text/javascript'>alert('Usuário ou senha incorretos')</script>";
echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=index.html'>";
pg_close($conecta);
?>