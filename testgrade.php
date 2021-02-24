<!doctype html>

<html>

<head>

</head>
<?php

$total = -1;


if($total >=0 and $total <=49.9 ){

    echo ("Your Score is : ");
echo ($total);
echo ("<br>");
echo ("Your Grade is : F");

}

else if($total >=50 and $total <=54.9 ){

    echo ("Your Score is : ");
echo ($total);
echo ("<br>");
echo ("Your Grade is : D");

}

else if($total >=55 and $total <=59.9 ){

    echo ("Your Score is : ");
echo ($total);
echo ("<br>");
echo ("Your Grade is : D+");

}

else if($total >=60 and $total <=64.9 ){

    echo ("Your Score is : ");
echo ($total);
echo ("<br>");
echo ("Your Grade is : C");


}

else if($total >=65 and $total <=69.9 ){

    echo ("Your Score is : ");
echo ($total);
echo ("<br>");
echo ("Your Grade is : C+");

}
else if($total >=70 and $total <=74.9 ){


    echo ("Your Score is : ");
echo ($total);
echo ("<br>");
echo ("Your Grade is : B");

}
else if($total >=75 and $total <=79.9 ){

    echo ("Your Score is : ");
echo ($total);
echo ("<br>");
echo ("Your Grade is : B+");

}
else if($total >=80 and $total <=100 ){

    echo ("Your Score is : ");
echo ($total);
echo ("<br>");
echo ("Your Grade is : A");

}
else {
    
    echo ("Your Score is : ");
echo ($total);
echo ("<br>");
echo ("The number is out of scope");

}


?>

<body>

    








</body>

</html>