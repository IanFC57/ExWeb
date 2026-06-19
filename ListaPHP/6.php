<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>]
    <form method="get">
        <label for="numero">Informe um número</label>
        <input type="text" id="num"></input>
        <input type="submit" value="submeter">
        <?php
            if(!isset($_GET[num])){
                exit();
            }
            $num = $_GET[num];
            if($num%2=0){
                echo "par";
            }else{
                echo "Impar";
            }

        ?>



    </form>
    
</body>
</html>