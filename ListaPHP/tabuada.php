<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get">
        <label for="num">Informe um número</label>
        <input type="text" id="num" name="num">
        <input type="submit" value="Calcular">
        </form>

        <?php
            if(!isset($_GET["num"])){
                exit();
            }
            function tabuada($num){
                for ($i=0; $i<=10;$i++){
                    echo "$num * $i=".($num*$i)."<br>";
                }
            }

            tabuada($_GET["num"]);

        ?>
    
</body>
</html>