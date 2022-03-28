<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular multiplos</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <form action="calcularmulti.php" method="$_GET">
        <h2>Calcular Multiplos</h2>
        <ul>
            <li>
                <label for="multiplos">Número:</label>
                <input type="number" name="multiplos" id="multiplos"
                placeholder="numero" required="">
            </li>
            <li class="button">
                <button type="submit" id="btn_Calcular">Calcular</button>
            </li>
            <li>
                <?php
                if(isset($_GET["multiplos"])){
                    $multiplos = $_GET["multiplos"];
                    switch($multiplos){
                        case 2:
                            echo "$multiplos es multiplo de 2";
                            break;
                        case 3:
                            echo "$multiplos es multiplo de 3";
                            break;
                        case 4:
                            echo "$multiplos es multiplo de 2";
                            break;
                        case 5:
                            echo "$multiplos es multiplo de 5"; 
                            break;
                        case 6:
                            echo "$multiplos es multiplo  de 2 y 3";
                            break;
                        case 7:
                            echo "$multiplos es multiplo  de 7";
                            break;
                        case 8:
                            echo "$multiplos es multiplo de 2 ";
                            break;
                        case 9:
                            echo "$multiplos es multiplo de 3";
                            break;
                        case 10:
                            echo "$multiplos es multiplo de 2 y 5";
                            break;
                        case 11:
                            echo "$multiplos no es multiplo de 2, 3, 5 y 7";
                            break;
                        case 12:
                            echo "$multiplos es multiplo de 2 y 3";
                            break;
                        case 13:
                            echo "$multiplos no es multiplo de 2, 3, 5 y 7";
                            break;
                        case 14:
                            echo " $multiplos es multiplo de 2 y 7";
                            break;
                        case 15:
                            echo "$multiplos es multiplo de 3 y 5";
                            break;
                        case 16:
                            echo "$multiplos es multiplo de 2";
                            break;
                        case 17:
                            echo "$multiplos no es multiplo de 2, 3, 5 y 7";
                            break;
                        case 18:
                            echo "$multiplos es multiplo de 2 y 3";
                            break;
                        case 19:
                            echo "$multiplos no es multiplo de 2, 3, 5 y 7";
                            break;
                        case 20:
                            echo "$multiplos es multiplo de 2 y 5";
                            break;                                   

                                    
                    }
                }
                ?>
            </li>
        </ul>

    </form>
</body>
</html>