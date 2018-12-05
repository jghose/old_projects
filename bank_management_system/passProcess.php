
<html ><head>


<?php
include("mysqlconect.php");
if (isset($_COOKIE["Login"])&&isset($_COOKIE["paa"]))
{
	$con=mysqlconnect('localhost','root','19950228');
	//$con=mysql_connect("localhost","root");
	mysql_select_db("customer", $con);
$sql="SELECT password FROM cus_login where userName=$_COOKIE[Login]";
$result=mysql_query($sql,$con);
while($row=mysql_fetch_array($result))
  {
  $a=$row['password'];
  }
if($a!=$_POST['old']){
	header('Location: passChangeWrong.php');
}
if($_POST['new1']!=$_POST['new2']){
	header('Location: passChangeWrong.php');
}
if(!$a){
   header('Location: wrongun.html');
}
if($a==$_COOKIE['paa'])
  echo "Welcome " . $_COOKIE["Login"] . "!<br />";
else
{
 header('Location:/index.html');
}

}
else header('Location:/index.html');
$uname=$_COOKIE["Login"];
?>
<?php
	mysql_select_db("customer", $con);
	$passw=$_POST['new1'];
	$sql="UPDATE cus_login SET password='$passw' WHERE userName='$_COOKIE[Login]'";
	$result=mysql_query($sql,$con);
?>


<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Bank Management System</title>

<link href="styles.css" rel="stylesheet" type="text/css">
<link href="styles.css" rel="stylesheet" type="text/css">
<div id="HEADER">
	<h1 align="center" font size=18>Bank Management System </h1>

	<ul>

		<li><a href="home.php">Home</a></li>
			<li><a href="logout.php">Logout</a></li>
		

	</ul>
<script src="home.php_files/ga.js" async="" type="text/javascript"></script><script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20513375-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


</head>
	<body background="back.jpg">
		<h1>Password Change Successful</h1>
	</body>
	<?php
	setcookie("paa","$_POST[new1]",time()+1800);
	?>
</html>
