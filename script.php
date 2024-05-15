<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Cor Favorita</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #000000;
            margin: 0;
            padding: 0;
        }
        .result-container {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        p {
            font-size: 18px;
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="result-container">
        <?php
        $favcolor = $_POST["favcolor"];
        switch ($favcolor) {
            case "vermelho":
                echo "<p>Sua cor favorita é vermelho!</p>";
                break;
            case "azul":
                echo "<p>Sua cor favorita é Azul!</p>";
                break;
            case "verde":
                echo "<p>Sua cor favorita é verde!</p>";
                break;
            default:
                echo "<p>Sua cor favorita não é Vermelho, Azul ou Verde.</p>";
        }
        ?>
    </div>
</body>
</html>
