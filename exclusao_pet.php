<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Exclusão lógica no BD</title>
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
                <h1>Exclusão Pet</h1>
                <div class="elementos">
                    <?php
                    include "conexao.php";
                    $sql="select * from pet
                    where excluido != 'S'
                    order by nome";
                    $resultado= pg_query($conecta, $sql);
                    $qtde=pg_num_rows($resultado);
                    if ($qtde > 0)
                    {
                ?>
                <table border="1" id="tabela">
                <tr>
                    <td><b>Código</b></td>
                    <td><b>Nome</b></td>
                    <td><b>Raça</b></td>
                    <td><b>Gênero</b></td>
                    <td><b>Cor</b></td>
                    <td><b>Porte</b></td>
                    <td><b>Idade</b></td>
                    <td><b>Pedigree</b></td>
                    <td><b>Exclusão</b></td>
                </tr>
                    <?php for ($cont=0; $cont < $qtde; $cont++)
                    {
                 $linha=pg_fetch_array($resultado);?>
                    <tr>
                <td><?php echo $linha[cod_pet]; ?></td>
                <td><?php echo $linha[nome]; ?></td>
                <td><?php echo $linha[raca]; ?></td>
                <td><?php echo $linha[genero]; ?></td>
                <td><?php echo $linha[cor]; ?></td>
                <td><?php echo $linha[porte]; ?></td>
                <td><?php echo $linha[idade]; ?></td>
                <td><?php echo $linha[pedigree]; ?></td>
                <td><?php echo "<a href='exclusao_pet_confirma.php?cod_pet=$linha[cod_pet]'>Excluir</a>"; ?></td>
                    </tr>
                    <?php } ?>
                    </table>
                <?php 
                    } 
                    else
                    echo "Não foram encontradas animais cadastradas<br><br>";
                ?>
                    <br><br>
                    
                </div>
            </div>
        </div>
        
    </body>
</html>