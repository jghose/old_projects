<?php
if (isset($_COOKIE["Login"])&&isset($_COOKIE["paa"]))
{
	$con=mysql_connect("localhost","root","19950228");
	mysql_select_db("student", $con);
$sql="SELECT password FROM u_name where reg_no=$_COOKIE[Login]";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
  {
  $a=$row['password'];
  }
//echo $a;

if(!$a){
   header('Location:/wrongun.html');
}
if(!$a==$_COOKIE['paa'])
 {
 header('Location:/index.html');
}

}
else header('Location:/index.html');
$uname=$_COOKIE["Login"];
?>