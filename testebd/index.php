<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudo BD</title>
</head>
<body>
    <header>
        <h2>Desenvolvimento Web</h2>
    </header>

    <main>
        <h1>RedBeanPHP</h1>

        <?php
            require_once 'class/rb.php';

            R::setup( 'mysql:host=127.0.0.1;port=3308;dbname=cadastro',
             'root', '' ); //Estabelece conexão com o banco de dados.
            
                $usuario = R::dispense('usuario');
                $usuario->nome = 'Eris';
                $usuario->idade = 18;
                $usuario->nascimento = '2005-04-03';
                $usuario->ativo = TRUE;

                $id = R::store($usuario);

                $postagem = R::dispense('postagem');
                $postagem->descricao = 'Teste';
                date_default_timezone_set('America/Fortaleza');
                $postagem->dataHora = date("Y-m-d H:i:s");

                $id = R::store($postagem);
                 


            R::close();
        ?>
    </main>

    <footer>
        <p>&copy; 2024 - Eris Emanoel</p>
    </footer>
</body>
</html>