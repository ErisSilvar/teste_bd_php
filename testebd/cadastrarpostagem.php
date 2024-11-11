<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Postagem</title>
</head>
<body>
    <header>
        <h2>Desenvolvimento Web</h2>
    </header>

    <main>
        <h1>RedBeanPHP</h1>

        <?php
            if(isset($_GET['descricao'])) {
                $descricao = $_GET['descricao'];

                require_once 'class/rb.php';

                R::setup( 'mysql:host=127.0.0.1;port=3307;dbname=cadastro',
             'root', '' );

                $p = R::dispense('postagem');

                $p->descricao = $descricao;
                date_default_timezone_set('America/Fortaleza');
                $p->dataHora = date("Y-m-d H:i:s");
                $p->curtidas = 99;
                $p->ativo = TRUE;

                $id = R::store($p);

                R::close();
    
            } else {
                echo '<p style="color:red;">Dados inválidos para cadastro da postagem.</p>';
            }
            
        ?>
    </main>

    <footer>
        <p>&copy; 2024 - Eris Emanoel</p>
    </footer>
</body>
</html>