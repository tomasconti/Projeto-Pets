<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Conecta com BD PostgreSQL</title>
    </head>
    <body>
        <?php
            $conecta = pg_connect("host=127.0.0.1 port=5432 dbname=b33tomasconti
            user=b33tomasconti password=01042020");
        
           /* if (!$conecta)
            {
            echo "Não foi possível estabelecer conexão com o banco de dados!<br><br>";
            exit;
            }
            else
            //echo "Conexão estabelecida com o banco de dados!<br><br>"; */
        ?>
    </body>
</html>