<html>
<body>
        
        <?php    
        $x= $_GET["numx"];
    
        $y= $_GET["numy"];
        
        $o= $_GET["op"];
        
        if($o=="+"){ 
        $r=$x+$y;
        echo ($r);
        }
        if($o=="-"){ 
            $r=$x-$y;
            echo ($r);
            }
            if($o=="*"){ 
                $r=$x*$y;
                echo ($r);
                }
                else if($o=="/"){ 
                    $r=$x/$y;
                    echo ($r);
                    }
        ?>
</body>
</html>