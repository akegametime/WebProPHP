<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title> ผลลัพธ์ ตัวอย่าง Control statement ที่12 </title>
</head>
<body>
<?php
$row = $_POST['row'];
$column = $_POST['column'];
$rowMax = intval( $row);
$colMax = intval( $column);

echo "<table align='center' border='4' width='300'>";
for($r = 1; $r <= $rowMax ; $r++) {
    echo "<tr>";
for($c = 1; $c <= $colMax ; $c++) {

echo "<td align ='center'>";

$rand = rand(1,99);
if ($rand % 2 == 0){ 

    echo "<font color='blue'>";
    
}
else {

    echo "<font color='red'>";
}


echo $rand;





echo "</font></td>";
}
echo "</tr>";
}
echo "</table>";
?>
<a href='ch6-12.php'> Back </a>
</body>
</html>