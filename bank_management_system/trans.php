
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
//echo $a;

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
$uname=$_COOKIE["Login"];
$query="select bal from cus_acc where userName='$uname'";
$result=mysql_query($query,$con);
 while($row=mysql_fetch_array($result))
  {
  $bal=$row['bal'];
  }
  $u1=$_POST['user'];
 $query="select acc_no from cus_acc where userName='$u1'";
$result=mysql_query($query,$con);
 while($row=mysql_fetch_array($result))
  {
  $acc=$row['acc_no'];
  }
 $query="select cus_name from cus_acc where userName='$u1'";
$result=mysql_query($query,$con);
 while($row=mysql_fetch_array($result))
  {
  $name=$row['cus_name'];
  }
  $amt=$_POST['pass'];
  if($bal<$amt){
	header('Location: chkWrong.php');
  }
  if(!$acc){
	header('Location: chkWrong.php');
  }
  ?>
  <?php
  mysql_select_db("customer", $con);
	$u1=$_POST['user'];
	$query="select bal from cus_acc where userName='$u1'";
	$result=mysql_query($query,$con);
	while($row=mysql_fetch_array($result))
	{
	$bal=$row['bal'];
	}
	$acc=$u1;
	$amt=$_POST['pass'];
	$upBal=$bal+$amt;
 
  $queups="UPDATE cus_acc SET bal='$upBal' WHERE acc_no='$u1'";
  mysql_query($queups,$con);
  
  
  
  
  $acc=$_COOKIE['Login'];
   $query="select bal from cus_acc where userName='$acc'";
$result=mysql_query($query,$con);
 while($row=mysql_fetch_array($result))
  {
  $bal=$row['bal'];
  }
  $upBal=$bal-$amt;
  $queupr="UPDATE cus_acc SET bal='$upBal' WHERE acc_no='$acc'";
  mysql_query($queupr,$con);
  
  $trans='Transfer To'+$u1;
  $queryv="INSERT into transactions(trans_amount,trans_account,trans_name,trans_maker) VALUES('$amt','$acc','$trans','$acc')";
  mysql_query($queryv,$con);
  
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
<script type="text/javascript">
function valid_field (field)
{
	with (field)
	{
		if (value==null||value=="" || value =="0")
			{return false}
	else 
		{return true}
	}
}		

function valid_form(thisform)
{
	with (thisform)
	{	
		
		if(valid_field(user)==false) 
							{alert ("Account Number field cannot be empty");
								document.form1.user.focus();
							return false}
		if(valid_field(pass)==false) 
							{alert ("Amount field cannot be empty");
							document.form1.pass.focus();
							return false}
		if(valid_field(hold)==false) 
							{alert ("Receiver's Name field cannot be empty");
							document.form1.hold.focus();
							return false}
	}
	if($c<document.form1.hold.value();){
		alert ("Insufficient Fund In Account");
	}
}

function isvalid(evt)
{
	var charCode = (evt.which) ? evt.which : event.keyCode
	if ( (charCode == 13) || (charCode == 8) || (charCode == 95) || (charCode > 47 && charCode < 58) || (charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) )
		return true;
	else
	{
		alert("Please enter appropriate character");
		return false;
	}
}

</script>

<script language="javascript">
						var currenttime = "April 13, 2011 13:01:00"
			var montharray=new Array("January","February","March","April","May","June","July","August","September","October","November","December")
			var serverdate=new Date(currenttime)
			
			function padlength(what)
			{
				var output=(what.toString().length==1)? "0"+what : what
				return output
			}
			
			function displaytime()
			{
				serverdate.setSeconds(serverdate.getSeconds()+1)
				
				var datestring=montharray[serverdate.getMonth()]+" "+padlength(serverdate.getDate())+", "+serverdate.getFullYear()
				var timestring=padlength(serverdate.getHours())+":"+padlength(serverdate.getMinutes())+":"+padlength(serverdate.getSeconds())
				document.getElementById("servertime").innerHTML=datestring+" "+timestring
			}
			
			window.onload=function()
			{
				setInterval("displaytime()", 1000)
			}			

   	</script>


</head><body background="back.jpg">
</br></br><h1>Transaction Made</h1>
		  <div class="midtxt" style="font-size: 13px; margin: 0px 0pt 0pt;" align="left">
		                
        <font size="5">

<table align="left" border="0" cellpadding="6" cellspacing="0">
  <tbody background="back.jpg"><tr>
    <td width="30%"><strong>Name:</strong><br></td>
    <td width="45%">
<?php
//echo $uname;
$query="select cus_name from cus_acc where userName='$uname'";
$result=mysql_query($query,$con);
 while($row=mysql_fetch_array($result))
  {
  $a=$row['cus_name'];
  }
echo "<font size=\"4\"> $a";
?>

</td>
   
  </tr>
  <tr>
    <td><div align="justify"><strong>Address:<br>
    </strong></div></td>
    <td><?php
//echo $uname;
//$con=mysql_connect("localhost","root");
mysql_select_db("customer", $con);
$query="select address from cus_acc where userName='$uname'";
$result=mysql_query($query,$con);
 while($row=mysql_fetch_array($result))
  {
  $b=$row['address'];
  }
echo "<font size=\"4\"> $b";
?></td>
  </tr>
  <tr>
    <td><div align="justify"><strong>Date of Birth:  </strong></div></td>
   <td>
<?php
$query="select dob from cus_acc where userName='$uname'";
$result=mysql_query($query,$con);
 while($row=mysql_fetch_array($result))
  {
  $c=$row['dob'];
  }
echo "<font size=\"4\"> $c";
?>
</td>
  </tr>
  
  </br>
  <tr>
    <td><div align="justify"><strong>Account Balance:  </strong></div></td>
   <td>
<?php
$query="select bal from cus_acc where userName='$uname'";
$result=mysql_query($query,$con);
 while($row=mysql_fetch_array($result))
  {
  $c=$row['bal'];
  }
echo "<font size=\"4\"> $c";
?>

</td>
  </tr>
  <tr>
     </tr>
 </tbody></table>
 </font>
 <br>
 <br>
				</div>
			  
			 
</div>
 <div id="trans">
 <a>Account Holder:</a><?php
	echo "<font size=\"4\"> $_POST[hold]";
 ?></br>
 <a>Account Number:<a><?php
	echo "<font size=\"4\"> $_POST[user]";
 ?></br>
 <a>Amount:<a><?php
	echo "<font size=\"4\"> $_POST[pass]";
 ?></br>
 </div>
       
</div>
</body></html>
