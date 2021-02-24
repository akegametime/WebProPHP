<?php
$x=100;
$y=10;
$operator = "-";


function plus ($x,$y){
    
    $result=$x+$y;
echo "x+y = $result <br>" ;
}//บวก

function sub ($x,$y){
    
    $result=$x-$y;
    echo "x-y = $result<br>" ;
};//ลบ

function mul($x,$y){
    
    $result=$x*$y;
    echo "x*y = $result<br>" ;
};//คูณ

function div($x,$y){
    
    $result=$x/$y;
    echo "x/y = $result" ;
};//หาร

switch ($operator) {
    case "+":
    plus($x,$y);
    break;
    case "-":
    sub($x,$y);   
    break;
    }



?>