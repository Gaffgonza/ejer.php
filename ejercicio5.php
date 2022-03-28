<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio número 5</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
   <form action="ejercicio5.php" method="POST">
       <h2>Ingrese una palabra</h2>
       <ul>
           <li>
               <label for="vocales"><h3> Ingrese palabra:</h3></label>
               <input type="text" name="vocales" id="vocales"
               placeholder="ingrese una palabra" required="">
           </li>
           <li class="button"> 
               <button type="submit">Contar vocales</button>
           </li>

           <li>
            <?php
            $vocales = $_REQUEST['vocales'];
            $counter = 0;
            $trasformada = "?";
            for($i = 0; $i < strlen($vocales); $i++){
                switch ($vocales[$i]) {
                    case "A":
                    case 'a': $counter++;
                    $trasformada="?";
                        break;
                    case "E":
                    case 'e': $counter++;
                    $trasformada="$";
                        break;
                    case "I":
                    case 'i': $counter++;
                    $trasformada="{";
                        break;
                    case "O":
                    case 'o': $counter++;
                    $trasformada="/";
                         break; 
                    case "U":
                    case 'u': $counter++;
                    $trasformada=";";
                         break;        
                      
                    }

            }
            

            if($counter == 1){
                echo " La palabra $vocales  tiene $counter vocales";
            }else{
                echo "La palabra $vocales tiene $counter vocales";
                
            
            }
            
            
            ?>
        </li>
        </ul>
    </form>
</body>
</html>