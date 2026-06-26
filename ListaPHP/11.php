<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>11</title>
</head>
<body>
    
   <form action="" method="POST">
        <label>Primeiro número:</label>
        <input type="number" name="numero1" required>
        
        <label>Segundo número:</label>
        <input type="number" name="numero2" required>
        
        <button type="submit">Gerar</button>
    </form>
    
    <br><br>

    <?php
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        
        $inicio = min($numero1, $numero2);
        $fim = max($numero1, $numero2);
        
        for ($i = $inicio; $i <= $fim; $i++) {
            echo "<span class='numero-destaque'>$i</span>";
        }
    }
    ?>
    <!-- Grave a sessão do usuário para que ele não precise digitar os números novamente ao atualizar a página -->
    <?php
    session_start();
    if (isset($_POST['numero1']) && isset($_POST['numero2'])) {
        $_SESSION['numero1'] = $_POST['numero1'];
        $_SESSION['numero2'] = $_POST['numero2'];
    }
    ?>
    <!-- Exiba os números salvos na sessão, se houver -->
    <?php
    if (isset($_SESSION['numero1']) && isset($_SESSION['numero2'])) {
        $numero1 = $_SESSION['numero1'];
        $numero2 = $_SESSION['numero2'];
        
        echo "<p>Números salvos na sessão: $numero1 e $numero2</p>";
    }
    ?>

</body>
</html>