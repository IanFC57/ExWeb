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
            $num = $_GET["num"];
            function soma($numArray){
                $soma = 0;
                for ($i=0; $i<=count($numArray);$i++){
                    $soma += (int)$numArray[$i];
                }
                return $soma;
            }
            $valores = explode(",", $num);
            $resultado = soma($valores);
            echo $resultado;
        ?>
    
</body>
</html>