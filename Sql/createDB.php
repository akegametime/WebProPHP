<?php


$servername  = "localhost";
$username = "root";
$password =  "12345";


$conn = mysqli_connect($servername,$username,$password);

if(isset($_GET['b1']))
{
    $dbname = $_GET["text"];


    if(!$conn){

        die ("Connection failed : ".mysqli_connect_error());

    }

    $sql = "CREATE DATABASE $dbname";
    if(mysqli_query($conn,$sql)){

    echo " Database created successfully";
    }
    else {

        echo "Error creating database :".mysqli_error($conn);
    }
    mysqli_close($conn);

    }


if(isset($_GET['b2']))
{

    $dbname = $_GET["text"];


    if(!$conn){

        die ("Connection failed : ".mysqli_connect_error());

    }

    $sql = "DROP DATABASE $dbname";
    if(mysqli_query($conn,$sql)){

    echo " Database Delete successfully";
    }

    else {

        echo "Error creating database :".mysqli_error($conn);
    }
    mysqli_close($conn);

    }


    if(isset($_GET['b3']))
{

    $dbname = $_GET["text"];


    if(!$conn){

        die ("Connection failed : ".mysqli_connect_error());

    }

    $sql = "SHOW DATABASES $dbname";
    if(mysqli_query($conn,$sql)){

    echo $sql;
    }

    else {

        echo "Error creating database :".mysqli_error($conn);
    }
    mysqli_close($conn);

    }


?>