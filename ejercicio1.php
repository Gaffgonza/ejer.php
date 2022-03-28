<html><head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link rel="stylesheet" href="css/style.css">
 <title>Calculate descount</title> </head>
  <body>
    <section class="form-register">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
    <?php echo '<div class="midiv"> Ingrese el valor de su compra </div>'; ?>     
      <input class="controls" type="number " required name="price" id="price" placeholder="Ingrese el precio" value="" > <br>    
      <input type="hidden" name="hide" value="1" /> 
    <input class="botons"type="submit" value="confirmar" require> </form>
   <?php
  if(isset($_POST['hide'])) {
     $priceI=$_REQUEST['price'];
     $random_number =rand(1,100);
  if ($random_number<=56){
     $porcentage="10%";
     $descount = $priceI*0.10;
     $priceF =$priceI-$descount;
  } else if($random_number>=57){
     $porcentage="30%";
     $descount = $priceI*0.30;
     $priceF =$priceI-$descount;
 }
 $color="white";

 echo "<b>El total de la compra es: $descount </b>"."<font color='".$color."'>"."".$priceI." dolares"."</font>"."<br>";
 echo "<b>Has recibido el descuento de : $porcentage </b>"."<font color='".$color."'>"."".$porcentage."</font>"."<br>";
 echo "<b>Su descuento es:          $priceI </b>"."<font color='".$color."'>"."".$descount." dolares"."</font>"."<br>"."<br>";
 echo "<b>El precio final es:       $priceF </b>"."<font color='".$color."'>"."".$priceF." dolares"."</font>"."<br>";}?>
</section></body></html>
