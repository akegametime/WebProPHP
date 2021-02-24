<?php
Echo getcwd()."<br>";
$dir = 'D:\Xampp\htdocs\WebProPHP';
$files = scandir($dir);
foreach($files as $value){
echo $value."<br>";
}
echo getcwd()."<br>";
chdir("..\\");
echo getcwd()."<br>";

chdir("D:Xampp\\");
echo getcwd()."<br>";

?>