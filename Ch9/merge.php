<?php
$a=array ("Beer","Bom","Wat");
$b=array (22,23,24);

$d=array ("Dopper","G","ADADA");

$c= array_merge($a,$b,$d);



foreach ($c as $value)
{
 echo $value;//แสดงผลข้อมูล 2 ชุด แสดง คือ Beer Bom Wat 22 23 24
}
?>