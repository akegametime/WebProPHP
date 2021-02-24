<!DOCTYPE html >

<html>
<head>

</head>

<body>
  <center>
  <h1>HW1 :Find Min Max Average </h1>

  <form action="HW_01.php" method="get">
  Num 1 :<input type="text" name="num1"/><br>
  </br>
  Num 2 :<input type="text" name="num2"/><br>
  <br/>
  Num 3 :<input type="text" name ="num3"/><br><br>


  <input type="radio" name="operator" value="Minimum"> Minimum <br>
  <input type="radio" name="operator" value="Maximum"> Maximum <br>
  <input type="radio" name="operator" value="Average"> Average <br><br>

  <input type="submit" value="Submit" name="b1"/><br> <br>

  </form>

  </body>

  </html>




<?php

if(isset($_GET['b1']))
{
  $operator = $_GET['operator'];
  $num1=$_GET['num1'];
  $num2=$_GET['num2'];
  $num3=$_GET['num3'];  

  if($operator == "Minimum"){
 
    
    echo ("Minimum Number = ");
    echo (min($num1,$num2,$num3));
      }

    else if($operator == "Maximum"){

      echo ("Maximum Number = ");
      echo (max($num1,$num2,$num3));
      }
    else if($operator == "Average"){

      $total = ($num1+$num2+$num3)/3;
      echo ("Average Number = ");
      echo ($total);
        }
}

?>
</center>