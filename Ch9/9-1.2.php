<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>ตัวอย่างที่ 9-1 </title>
</head>
<body>
<?php
$weekdays = array("จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์","อาทิตย์");
echo '<center><font size="4" color="blue">กุมภาพันธ์ ๒๕๖๔</font>';
echo '<font size="5" color="red">  </font>';
echo '<font size="4" color="blue">Feb 2021</font></center>';
echo '<table border="1" align="center">';
echo '<tr>';
for($n = 0 ; $n < 7; $n++) {
echo '<td align="center" width="90">' . $weekdays[$n] . '</td>';
}
print_month();
echo '</tr></table>';
function print_month() {
$day = 1;
for($row = 1 ; $row <= 4; $row++) {
echo '<tr>';
for($col = 1 ; $col <= 7; $col++) {
if (($day >= 1) && ($day <= 28))
echo '<td align="center">' . $day . '</td>';
else
echo '<td align="center"> </td>';
$day++;
}
}
}
?>
</body>
</html>