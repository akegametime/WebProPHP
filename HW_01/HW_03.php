<!DOCTYPE html >

<html>
<head>

</head>

<body>
  <center>
  <?php if (!(isset($_GET['b1']))) { ?>
  <h1>HW3 :Cal Grade </h1>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        
  Final      (0-30) : <input type="text" name="Final"/><br>
  </br>
  Midterm    (0-30) : <input type="text" name="Mid"/><br>
  <br/>
  Assignment (0-20) : <input type="text" name ="Assign"/><br>
  <br/>
  Homework   (0- 20)  : <input type="text" name="HW"/><br>
  <br/>




  <input type="submit" value="Submit" name="b1"/><br> <br>
  <?php } else { ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
        <?php
           if ((isset($_GET['b1']))) {
       $final=$_GET['Final'];
       $mid=$_GET['Mid'];
       $assign=$_GET['Assign'];
       $hw=$_GET['HW'];  
       
       $total =$final+$mid+$assign+$hw;
       echo "<font size='5' face='Arial'>";
       echo ("<br>");
       echo ("<br>");
       
       

       echo("Final       : ");
       echo($final);
       echo ("<br>");
       echo ("<br>");
       echo ("Midterm    : ");
       echo($mid);
       echo ("<br>");
       echo ("<br>");
       echo ("Assignment : ");
       echo($assign);
       echo ("<br>");
       echo ("<br>");
       echo ("Homework   : ");
       echo($hw);
       echo ("<br>");
       echo ("<br>");
       echo ("Total Score = ");
       echo ($total);
       echo ("<br>");
       echo ("<br>");

  
       if($total >=0 && $total <=49.9 ){

           echo ("Your Grade is : F");

       }

       else if($total >=50 && $total <=54.9 ){

           echo ("Your Grade is : D");

       }

       else if($total >=55 && $total <=59.9 ){

           echo ("Your Grade is : D+");

       }

       else if($total >=60 && $total <=64.9 ){

           echo ("Your Grade is : C");

           
       }

       else if($total >=65 && $total <=69.9 ){

           echo ("Your Grade is : C+");

       }
       else if($total >=70 && $total <=74.9 ){

           echo ("Your Grade is : B");

       }
       else if($total >=75 && $total <=79.9 ){

           echo ("Your Grade is : B+");

       }
       else if($total >=80 && $total <=100 ){

           echo ("Your Grade is : A");

       }
       else {
         echo ("The number is out of scope");
         
       }

      }
      echo ("<br>");
      echo ("<br>");
      
      ?>
         <input type="submit" value="Back" name="b2" > 
         
         </center>

         <?php } ?>
  </form>

  </body>

  </html>