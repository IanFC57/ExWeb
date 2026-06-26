<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Página 3: Receba os dados das Páginas 1 e 2, calcule o IMC (IMC = Peso / (Altura * Altura)), e exiba todos os dados coletados (nome, e-mail, peso, altura) junto com o IMC calculado. -->
    <h1>IMC - Resultado</h1>
    <?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $peso = $_POST['peso'];
    $altura = $_POST['altura'];
    
    $imc = $peso / ($altura * $altura);
    $imc_formatado = number_format($imc, 2, ',', '.');
    ?>

    <p><strong>Nome:</strong> <?php echo $nome; ?></p>
    <p><strong>E-mail:</strong> <?php echo $email; ?></p>
    <p><strong>Peso:</strong> <?php echo $peso; ?> kg</p>
    <p><strong>Altura:</strong> <?php echo $altura; ?> m</p>
    
    <h3><strong>IMC Calculado:</strong> <?php echo $imc_formatado; ?></h3>
</body>
</html>