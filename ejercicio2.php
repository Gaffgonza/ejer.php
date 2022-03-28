<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dias Festivos</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
</head>
<body>
    <form action="ejercicio2.php" method="get">
    <ul>
        <h2>Dias Festivos</h2>
        <li>
            <label for="dia">Ingrese dia Festivo:</label>
            <input type="number" name="dia" id="dia"
            min="1" max="30" required="">
        </li>
        <li class="button">
            <button type="submit">Enviar</button>
            <button type="reset">Limpiar</button>
        </li>
        <li>
            <?php
            if(isset($_GET["dia"])){
                //La funcion isset evalua si
                //una variable esta o no definida
                $dia = $_GET["dia"];
                switch($dia){
                    case 1:
                        echo "El dia del Niño es el $dia de Octubre";
                        break;
                    case 10:
                        echo "El dia de la Madre es el $dia de Mayo";
                        break;
                    case 15:
                        echo "El dia de Independencia es el $dia de Septiembre";
                        break;
                    case 17:
                        echo "El dia del Padre es el $dia de Junio";
                        break;
                    case 3:
                        echo "El dia de la Cruz es el $dia de Mayo";
                        break;
                    case 14:
                        echo "La Semana Santa empieza del $dia de Abril";
                        break;
                    case 22:
                        echo "El dia del Maestro es el $dia de Junio";
                        break;
                    case 13:
                        echo "El dia del Progrmador es el $dia de Septiembre";
                        break;
                    case 24:
                        echo "El dia de Navidad es el $dia de Diciembre";
                        break;
                    default:
                        echo "Dia no valido";
                }
            }
            ?>
        </li>
    </ul>

    </form>
</body>
</html>