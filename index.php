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

                $id = R::store($usuario);

            R::close();
        ?>
    </main>

    <footer>
        <p>&copy; 2024 - Eris Emanoel</p>
    </footer>
</body>
</html>