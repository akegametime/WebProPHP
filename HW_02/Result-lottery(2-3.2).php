<center>


<?php
if(isset($_GET['submit']))
{

echo "<font size='5' face='Arial'>";
echo "<br><br><br>" ;

$num1 = $_GET["num1"];
$num2 = $_GET["num2"];





$random = (rand(0,99));

if($num1 == $random ){
    echo ("ยินดีด้วยคุณถูกรางวัล <br>");
    $result = $num2*60;
    echo ("คุณได้เงินรางวัล ".$result." บาท<br>");
    ?> <a href="Lottery.php"><button type="submit">Back</button></a>
    <br>
<?php
    echo ("รางวัล เลขที่ออก คือ : ".$random."<br><br>");
    
    
    }

else if ($num1 !=$random){
    echo ("เสียใจด้วยคุณไม่ถูกรางวัล <br><br>");

    ?> <a href="Lottery.php"><button type="submit">Back</button></a> <br><br>
    <?php
    echo ("รางวัล เลขที่ออก คือ : ".$random."<br>");
 
    
} 









echo "</font>";

}

?>





</center>