<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Página 2: Receba os dados da Página 1 e crie um formulário para coletar o peso (kg) e a altura (m) do usuário. Envie os dados pelo método POST, se o usuário não preencher os campos, exiba uma mensagem de erro na mesma página. -->
    <h1>IMC - Dados do Usuário</h1>
    <form action="10c.php" method="POST">
        <label>Peso (kg):</label><br>
        <input type="number" name="peso" step="0.01" required><br><br>

        <label>Altura (m):</label><br>
        <input type="number" name="altura" step="0.01" required><br><br>

        <input type="hidden" name="nome" value="<?php echo $_GET['nome']; ?>">
        <input type="hidden" name="email" value="<?php echo $_GET['email']; ?>">

        <button type="submit">Calcular IMC</button>
    </form>

</body>
</html>