<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>7</title>
</head>
<body>
    <h1>Tabuada</h1>
    <form method="get">
        <label for="numero">Digite um número:</label>
        <input type="number" name="numero" id="numero" required>
        <button type="submit">Calcular</button>
    </form>

    <?php
    if (isset($_GET['numero'])) {
        $numero = $_GET['numero'];
        echo "<h2>Tabuada do $numero</h2>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<p>$numero × $i = " . ($numero * $i) . "</p>";
        }
    }
    ?>
    
</body>
</html>