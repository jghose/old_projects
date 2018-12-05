
<?php
session_start();

include("mysqlconect.php");
$con=mysqlconnect('localhost','root','19950228');
if(!$con)
	{
	die("Error:-".mysql_error());
	}
mysql_select_db("customer", $con);
$sql="SELECT password FROM cus_login where userName=$_POST[user]";
$result=mysql_query($sql);

while($row=mysql_fetch_array($result))
  {
  $a=$row['password'];
  }
echo $a;

if(!$a){
   header('Location: wrongun.html');
}
if($a=="$_POST[pass]")
{
	
setcookie("Login","$_POST[user]",time()+3600);
setcookie("paa","$_POST[pass]",time()+1800);
header('Location: home.php');
echo "You are now logged in as $_POST[user]";
}
else
header('Location: wrongun.html');
?>
