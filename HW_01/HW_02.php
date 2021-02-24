<!DOCTYPE html >

<html>
<head>

</head>

<body>
  <center>
  <br>
  <h1>HW2 :Sum Of Number </h1>

  <form action="HW_02.php" method="get">
  Num 1 :<input type="text" name="num1"/><br>
  </br>
  <input type="radio" name="operator" value="+"> + 
  <input type="radio" name="operator" value="-"> -
  <input type="radio" name="operator" value="*"> * 
  <input type="radio" name="operator" value="/"> /<br><br>
  Num 2 :<input type="text" name="num2"/><br>
  <br/>
  
  <input type="radio" name="operator2" value="+"> + 
  <input type="radio" name="operator2" value="-"> - 
  <input type="radio" name="operator2" value="*"> * 
  <input type="radio" name="operator2" value="/"> / <br> <br>

  Num 3 :<input type="text" name ="num3"/><br><br>



  <input type="submit" value="Submit" name="b1"/><br> <br>

  </form>

  </body>

  </html>




<?php

if(isset($_GET['b1']))
{
  $operator = $_GET['operator'];
  $operator2 = $_GET['operator2'];
  $num1=$_GET['num1'];
  $num2=$_GET['num2'];
  $num3=$_GET['num3'];  

  if($operator == "+"  ){
    $total =$num1 +$num2 ;
    
  }
  else if($operator == "-"  ){
    $total =$num1-$num2 ;
    
  }
  else if($operator == "*"  ){
    $total =$num1*$num2 ;
    
  }
  else if($operator == "/"  ){
    $total =$num1/$num2 ;
    
  }
  if($operator2 == "+"  ){
    $total = $total+$num3;
    
  }
  else if($operator2 == "-"  ){
    $total = $total-$num3 ;
    
  }
  else if($operator2 == "*"  ){
    $total = $total*$num3 ;
    
  }
  else if($operator2 == "/"  ){
    $total = $total/$num3 ;
    
  }
echo("Sum Of Number = ");
echo($total);

}
?>
</center>