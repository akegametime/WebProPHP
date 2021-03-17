<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action = "insertto.php" medthod="get">
ชื่อจริง :<input type="text" name ="name" required /><br><br>
นามสกุล :<input type="text" name ="lname" required /><br><br>
Email :<input type="email" name ="email" required /><br><br>
DbName :
<?php
$servername = "localhost";
$username = "root";
$password = "12345";


$sql = "SHOW DATABASES";
$link = mysqli_connect($servername,$username,$password) or
    die ("Error connecting to mysql : ".mysqli_error($link).'\r\n');

if(!($result=mysqli_query($link,$sql))){
    printf("Error:$s\n",mysqli_error($link));
}
echo'<select name="" required >'; 
while($row = mysqli_fetch_row($result)){

    if(($row[0]!="information_schema")&& ($row[0]!="mysql")){
        echo "<option>".$row[0]."</option>";
    }
}
echo '</select>';
?>
<br><br>






TableName :<input type="text" name ="tablename" required /><br><br>

<input type="submit" value="Submit" name="b1"/><br> <br>


</body>
</html>