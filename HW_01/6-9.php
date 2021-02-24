<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ตัวอย่าง Control statement ที่ 9 </title></head>
</head>
<body>

<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
Strat Number : <input type="text" name="st"/><br>
End Number : <input type="text" name="ed"/><br>

Divide By : <input type="text" name="dv"/><br>
<input type="submit" value="Submit" name="b1"/><br> <br>

<?php
 if ((isset($_GET['b1']))) {

$found = false;

$st=$_GET['st'];
$ed=$_GET['ed'];
$dv=$_GET['dv'];
$count = 0;

while( $st <= $ed ) {
if ($st % $dv == 0)
{


echo ($st);

}
$st++;
}



}
?>
</body>
</html>