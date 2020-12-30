<?php
include "conexao.php";
//dados enviados do script altera_prod.php
$cod_pet = $_GET["cod_pet"];
$sql="SELECT * FROM pet WHERE cod_pet = $cod_pet;";
$resultado=pg_query($conecta,$sql);
$qtde=pg_num_rows($resultado);
if ( $qtde == 0 )
{
echo "Produto nao encontrado  !!!<br><br>";
exit;
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
                <form action="grava_prod_alterado.php" method="post">
                    <h1>Alteração de Animais(pets)</h1>
                    <strong>Código:</strong><br>
                        <input type="text" name="cod_pet" value="<?php echo $linha[0]; ?>" readonly><br>
                        <strong>Nome:</strong><br>
                        <input type="text" name="nome" value="<?php echo $linha[1]; ?>" ><br>
                        <br>
                        <strong>Raça:</strong><br> 
                        <input type="text" name="raca" value="<?php echo $linha[2]; ?>" ><br>
                        <br>
                        <strong>Gênero:</strong><br>
                        <input type="text" name="genero" value="<?php echo $linha[3]; ?>" ><br>
                        <br>
                        <strong>Cor:</strong><br>
                        <input type="text" name="cor" value="<?php echo $linha[4]; ?>" ><br>
                        <br>
                        <strong>Porte:</strong><br>
                        <input type="text" name="porte" value="<?php echo $linha[5]; ?>" ><br>
                        <br>
                        <strong>Idade:</strong><br>
                        <input type="text" name="idade" value="<?php echo $linha[6]; ?>" ><br>    
                        <br>
                        <strong>Pedigree:</strong><br> 
                        <input type="text" name="pedigree" value="<?php echo $linha[7]; ?>"><br><br>
                    <input type="submit" value="Gravar">
                    </form>
                    <br><br>
                    <a href="altera_pet.php">Voltar</a>
                </div>
            </div>
        </div>
        
    </body>
</html>