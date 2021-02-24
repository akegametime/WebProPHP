<html>
<body>
        
        <?php    
        $x= $_GET["num1"];
    
        $y= $_GET["num2"];
        
        $o= $_GET["op"];
        
        if($o=="+"){ 
        $r=$x+$y;
        echo ($r);
        }
        ?>
</body>
</html>