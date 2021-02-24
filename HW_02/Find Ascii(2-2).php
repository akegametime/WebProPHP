<!DOCTYPE html >

<html>
<head>

</head>

<body>
  <center>

  <h1>HW2-2 :Find Ascii</h1>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        
    Your Text  : <input type="text" name="text"/><br>
  </br>
  <input type="submit" value="Submit" name="b1"/><br> <br>
  <input type="submit" value="Clear" name="C1"/><br> <br>

</form>

<?php

if(isset($_GET['b1']))
{

    $str = $_GET["text"];

    echo "<font size='6' face='Arial'>";
    echo "<br>";    
    echo ("Count Char in Sentence");
    echo "<br>";    
    echo "<br>";  
    echo "<br>";  

$arr1 = str_split($str);



$arrs = array_count_values($arr1);

foreach ($arrs as $arr2 =>$val) {

   
    if($arr2 !=" "){
    
    echo $arr2 ." : Ascii = " . ord( $arr2 ) . "<br>";
    }
  }



}

?>

</center>

      
</body>

</html>
            