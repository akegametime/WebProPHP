<!DOCTYPE html >

<html>
<head>

</head>

<body>
  <center>


    <form action="form.php" method="get">
    <input type="text" name="num1[]" placeholder="Enter Car Name "><br>
    </br>
    <input type="text" name="num1[]" placeholder="Enter Car Name "><br>
    <br/>
    <input type="text" name ="num1[]" placeholder="Enter Car Name "><br><br>
    <input type="text" name="num1[]"placeholder="Enter Car Name "><br>
    </br>
    <input type="text" name="num1[]"placeholder="Enter Car Name "><br>
    <br/>
    <input type="text" name ="num1[]" placeholder="Enter Car Name "><br><br>
    <input type="text" name="num1[]" placeholder="Enter Car Name "><br>
    </br>
    <input type="text" name="num1[]" placeholder="Enter Car Name "><br>
    <br/>
    <input type="text" name ="num1[]" placeholder="Enter Car Name "><br><br>
    <input type="text" name ="num1[]" placeholder="Enter Car Name "><br><br>



    <input type="submit" value="Submit Information" name="b1"/><br> <br>

  </form>





<?php

if(isset($_GET['b1']))
{

$num1 = $_GET["num1"];


foreach ($num1 as $showCar) {
    echo $showCar."<br>";

}



}

?>
</center>