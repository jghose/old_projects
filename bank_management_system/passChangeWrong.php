
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


</head><body background="back.jpg">
		  <div class="midtxt" style="font-size: 13px; margin: 0px 0pt 0pt;" align="left">
		                
        <font size="5">

<table align="left" border="0" cellpadding="6" cellspacing="0">
  <tbody background="back.jpg">
  <tr>
    <td>
	</br></br></br>
	<strong>Password Mismatched!!   Re-Enter</strong></br></br></br>
	<form name="form1" method="post" action="passProcess.php">
	<div align="right">
		<strong>Enter Old Password:</strong>
		<input name="old" type="int" id="old" ></br></br>
		
		<strong>Enter New Password:</strong>
		<input name="new1" type="int" id="new1" ></br></br>
		
		<strong>Re-Enter New Password:</strong>
		<input name="new2" type="int" id="new2" ></br></br>

		<input name="cus" type="submit" id="cus">
	</form>
	</div></td>
    <td>
</td>
  </tr>
  <tr>
     </tr>
 </tbody></table>
 </font>
 
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
 <br>
  <br>
 <br>
 <br>
 <br>
 <br>
				</div>
			  
			 
</div>
 
       
</div></body></html>
