<?php



 $SQL="  SELECT *  FROM  
          book INNER JOIN typebook 
           ON  book.id = typebook.id  ";

 $QUERY= mysqli_query($SQL) or die ("Error Query [".$SQL."]");    

?>

 <table width="100%" >
   <tr>
     <td bgcolor="#FFFFFF" width="50" align="center">    Id     </td>
     <td bgcolor="#FFFFFF"  width="573" align="center">      Name      </td>
     <td bgcolor="#FFFFFF" width="100" align="center">     Salary    </td>
   </tr>


 <?php while($rs=mysql_fetch_array($QUERY))  {      ?>


   <tr>
     <td  align="center">     <?=$rs['id'];  ?>      </td>
     <td  align="center">   <?=$rs['Name'];?>  </td>
     <td  align="center">   <?=$rs['Salary'];?>         </td>
   </tr>

   <?php  } ?>
 </table>    