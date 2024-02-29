<!DOCTYPE html>
<html lang="PT-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMC - Resultado</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;1,900&display=swap" rel="stylesheet">
    
</head>
<body>
    <div id="corpo">
        <?php
            $nome = $_POST['cxnome'];
            $altura = $_POST['cxaltura'];
            $peso = $_POST['cxpeso'];

            $imc = $peso / ($altura * $altura);

            echo "<p>Nome: " . $nome . "</p>";
            echo "<p>Resultado do IMC: " . $imc . "</p>";

            if ($imc < 17) {
                echo "Muito Abaixo do Peso";
            } else if ($imc < 18.5) {
                echo "Abaixo do Peso";
            } else if ($imc < 25) {
                echo "Peso ideal";
            } else if ($imc < 30) {
                echo "Sobrepeso";
            } else if ($imc < 35) {
                echo "Obesidade grau I";
            } else if ($imc < 40) {
                echo "Obesidade grau II";
            } else {
                echo "Obesidade grau III";
            }
        ?>
    </div>
</body>
</html>
