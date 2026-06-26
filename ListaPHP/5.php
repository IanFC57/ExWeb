<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5</title>
</head>
<body>
    <h1>Sorteador de Números</h1>
    
    <form action="" method="POST">
        <label>Número Mínimo:</label>
        <input type="number" name="minimo" required>
        <br><br>
        
        <label>Número Máximo:</label>
        <input type="number" name="maximo" required>
        <br><br>
        
        <button type="submit">Sortear Número</button>
    </form>
    
    <br>

    <?php
    if (isset($_POST['minimo']) && isset($_POST['maximo'])) {
        $minimo = $_POST['minimo'];
        $maximo = $_POST['maximo'];
        
        $inicio = min($minimo, $maximo);
        $fim = max($minimo, $maximo);
        
        $numeroSorteado = rand($inicio, $fim);
        
        echo "<div class='resultado'>O número sorteado foi: $numeroSorteado</div>";
    }
    ?>
</body>
</html>