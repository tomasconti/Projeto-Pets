<?php
include "conexao.php";

$cod_pet = $_GET['cod_pet'];
$sql="select * from pet
where cod_pet=$cod_pet";
$resultado=pg_query($conecta,$sql);
$qtde=pg_num_rows($resultado);
if ( $qtde == 0 )
{
    echo "<script type='text/javascript'>alert('Registro não encontrado')</script>";
    echo "<meta HTTP-EQUIV='refresh' CONTENT='0;URL=exclusao_pet.php'>";
}
$linha = pg_fetch_row($resultado);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Confirmação no BD</title>
        <link rel="stylesheet" href="design_menu.css" />
        <link rel="stylesheet" href="design_button.css" />
       
    </head>
    <body>
        <div class="geral">
            <div class="cabecalho">
                <div class="logo">
                    <img src="pets.png" width="80px">
                </div>
                <div class = "menu">
                    <ul>
                        <li><a href = "cadastro_pet.html" >Cadastrar</a></li>
                        <li><a href = "altera_pet.php" >Alterar</a></li>
                        <li><a href = "exclusao_pet.php" >Excluir</a></li>
                        <li><a href = "consulta_pet.php" >Consultar</a></li>
                        <li><a href = "index.html" >Sair</a></li> 
                    </ul>
                </div>
            </div>
            <div class="opcao">
                <div class="elementos">
                    <h1>Confirmação de exclusão</h1>
                    <form action="exclusao_pet_logica.php" method="post">
                        <strong>Código:</strong><br>
                        <input type="text" name="cod_pet" value="<?php echo $linha[0]; ?>" readonly><br>
                        <strong>Nome:</strong><br>
                        <input type="text" name="nome" value="<?php echo $linha[1]; ?>" readonly><br>
                        <br>
                        <strong>Raça:</strong><br> 
                        <input type="text" name="raca" value="<?php echo $linha[2]; ?>" readonly><br>
                        <br>
                        <strong>Gênero:</strong><br>
                        <input type="text" name="genero" value="<?php echo $linha[3]; ?>" readonly><br>
                        <br>
                        <strong>Cor:</strong><br>
                        <input type="text" name="cor" value="<?php echo $linha[4]; ?>" readonly><br>
                        <br>
                        <strong>Porte:</strong><br>
                        <input type="text" name="porte" value="<?php echo $linha[5]; ?>" readonly><br>
                        <br>
                        <strong>Idade:</strong><br>
                        <input type="text" name="idade" value="<?php echo $linha[6]; ?>" readonly><br>    
                        <br>
                        <strong>Pedigree:</strong><br> 
                        <input type="text" name="pedigree" value="<?php echo $linha[7]; ?>" readonly><br><br>
                        <input type="submit" value="Excluir">
                    </form> 
                    <br><br>
                    <a href="exclusao_pet.php">Voltar</a>
                </div>
            </div>
        </div>
        
    </body>
</html>