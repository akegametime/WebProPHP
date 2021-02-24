<!DOCTYPE html >

<html>
<head>

</head>

<body>
  <center>
  <?php if (!(isset($_GET['b1']))) { ?>
  <h1>HW3 :Cal Grade </h1>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
Num 1 : <input type="text" name="num1"/><br>
  </br>





  <input type="submit" value="Submit" name="b1"/><br> <br>
    
  <?php  }else  { ?>
  
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
    <?php
           if ((isset($_GET['b1']))) {

            for ($i=1; $i<=100; $i++)
	
            {
                 
            if($i%2==0)
                  
            {
                    
            @$even=$even+$i;
                  
            }
                  
            else
                  
            {
                      
            @$odd=$odd+$i;
                  
            }
                   
                
            } 
                 
            echo "Sum of even numbers=".$even."<br/>";
                
             echo "Sum of odd numbers=".$odd;
             
        
        
        
        }

            ?>
 <input type="submit" value="Back" name="b2" > 
         </center>

         <?php } ?>
  </form>

  </body>

  </html>