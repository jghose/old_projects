<?php
$t=mysql_connect("localhost","root","19950228");
if($t)
echo "connected";
else
echo "not connected";
echo "your name is".$_POST["user"] . "ansd name is ".$_POST["age"];
mysql_select_db("php",$t);
$q="INSERT INTO student1 (name,age) VALUES('$_POST[user]','$_POST[age]')";
mysql_querry($q,$t);
?>

