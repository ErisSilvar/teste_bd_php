<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de postagem</title>
</head>
<body>
    <main>
        <h1>Desenvolvimento Web</h1>
        <h2>Cadastro de postagem</h2>
        <br><br>
        <form action="cadastrarpostagem.php" method="get">
            <fieldset>
                <legend>Dados da postagem</legend>
                <label for="descricao">Descrição</label><br>
                <input id="descricao" type="text" name="descricao">
                <input type="submit" value="Cadastrar">
            </fieldset>
        </form>

        <form action="mostrarpostagem.php" method="get">
            <fieldset>
                <legend>Mostrar dados da postagem</legend>
                <label for="mostrar" name="mostrar">Mostrar</label><br>
                <input id="mostrar" type="number" name="mostrar">
                <input type="submit" value="Mostrar">
            </fieldset>
        </form>
    </main>
</body>
</html>