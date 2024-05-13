<link rel="stylesheet" href="css.css">
<body>
    <div>
        <?php
        $favcolor = $_POST["$favcolor"];
    switch ($favcolor){
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
                    echo "<p>Sua cor favorita não é Vermelho, Azul ou Verde";
    }
    ?>
    </div>
</body>