<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <br>
    <p>1:Hola Mundo</p>
    <p>2:</p>
    <?php
    $mensaje = "Hola Mundo";
    echo $mensaje;
    ?>
    <br>
    <p>3:</p>
    <?php
    $num1 = 6;
    $num2 = 2;
    $total = $num1 + $num2;
    echo $total;

    $total2 = $num1 - $num2;
    echo $total2;
    $total3 = $num1 * $num2;
    $total4 = $num1 / $num2;
    $suma = $total + $total2;
    echo $suma;
    ?>

    <p>4:</p>
    <?php
    $num1 = 20;
    $num2 = 9;
    $num3 = 5;
    $num4 = 32;
    $total = $num1 * $num2 /$num3 + $num4;
    echo $total;
    ?>

     <p>5:(a)</p>
     <p>Perímetro:</p>
     <?php
     $num1 = 18;
     $num2 = 12;
     $total = $num1 + $num2 + $num1 + $num2;
     echo $total;
     ?>

      <p>Área:</p>
      <?php
      $num1 = 18;
      $num2 = 12;
      $total = $num1 * $num2;
      echo $total;
      ?>
      
      <p>(b)</p>
      <p>Perímetro</p>
      <?php
      $num1 = 3.14;
      $num2 = 30;
      $total = $num1 * $num2;
      echo $total;
       ?>

       <p>Área</p>
       <?php
       $num1 = 3.1416;
       $num2 = 15;
       $total = $num2 * $num2 *$num1;
       echo $total;
      ?>






  </body>
</html>
