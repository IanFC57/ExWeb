<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php
    function randomize() {
        $numeroAleatorio = rand(1, 100);
        echo "<h1>$numeroAleatorio</h1>";
    }

    randomize();
    ?>
</body>
</html>