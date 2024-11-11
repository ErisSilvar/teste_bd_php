<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar dados da postagem</title>
</head>

<body>
    <main>
        <h1>Motrar postagem</h1>
        <?php
        if (isset($_GET['codigo'])) {
            date_default_timezone_set('America/Fortaleza');
            date("Y-m-d H:i:s");


            require_once 'class/rb.php';

            R::setup(
                'mysql:host=127.0.0.1;port=3307;dbname=cadastro',
                'root',
                ''
            );


            $p = R::load('postagem', $_GET['codigo']);

            R::close();

            echo "<p>" . $p->id . "</p>";
        } else {
            echo '<p style="color:red;">EITA</p>';
        }


        ?>
    </main>
</body>

</html>