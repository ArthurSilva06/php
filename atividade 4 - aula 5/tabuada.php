<?php 
$number1 = $_POST['number1'];
$number2 = $_POST['number2'];
$number3 = $_POST['number3'];
$maior;
$meio;
$menor;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabuada</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
    <h1>Atividade 4</h1>

        <?php 
        // Ordenando os valores em ordem crescente
        $array = array($number1, $number2, $number3);
        sort($array);
        $menor = $array[0];
        $meio = $array[1];
        $maior = $array[2];

        echo "Valores em ordem crescente: $menor, $meio, $maior";
        ?>

    </section>    
</body>
</html>
