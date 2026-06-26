<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Palindromos</h1>
    <!-- formulário para entrada de texto -->
    <form method="get">
        <label for="texto">Informe um texto:</label><br><br>
        <input type="text" id="texto" name="texto" value="<?php echo isset($_GET['texto']) ? $_GET['texto'] : ''; ?>" style="width: 300px;">
        <input type="submit" value="Verificar">
    </form>
    

    <?php
    if (isset($_GET['texto']) && $_GET['texto'] !== '') {
        $texto = strtolower(trim($_GET['texto']));
        $texto_sem_espacos = str_replace(' ', '', $texto);
        $texto_invertido = strrev($texto_sem_espacos);

        if ($texto_sem_espacos === $texto_invertido) {
            echo "<h3>O texto '$texto' é um palíndromo.</h3>";
        } else {
            echo "<h3>O texto '$texto' não é um palíndromo.</h3>";
        }
    }
    ?>

    <!-- informações sobre palíndromos -->
     <ul>
        <li>Tamanho da string: <?php echo strlen($texto_sem_espacos); ?></li>
        <li>É um palíndromo: <?php echo ($texto_sem_espacos === $texto_invertido ? "Sim" : "Não"); ?></li>
        <li>Número de vogais: <?php echo substr_count($texto_sem_espacos, 'a') + substr_count($texto_sem_espacos, 'e') + substr_count($texto_sem_espacos, 'i') + substr_count($texto_sem_espacos, 'o') + substr_count($texto_sem_espacos, 'u'); ?></li>
        <li>Número de consoantes: <?php echo (strlen($texto_sem_espacos) - (substr_count($texto_sem_espacos, 'a') + substr_count($texto_sem_espacos, 'e') + substr_count($texto_sem_espacos, 'i') + substr_count($texto_sem_espacos, 'o') + substr_count($texto_sem_espacos, 'u'))); ?></li>
     </ul>
        
</body>
</html>