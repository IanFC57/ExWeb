<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>IMC - Dados do Usuário</h1>
    <!-- formulario para entrada de dados do nome e email Envie os dados pelo método GET
     para a pagina 2, se o usuario não preencher os campos, exiba uma mensagem de erro na mesma página.
    -->
    <form action="10b.php" method="GET">
        <label>Nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>E-mail:</label><br>
        <input type="email" name="email" required><br><br>
        <button type="submit">Enviar</button>
    </form>


</body>
</html>