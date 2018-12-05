<?php include("authenticate.php");?>
<?php
$uname=$_COOKIE['Login'];
include("mysqlconect.php");
$con=mysqlconnect('localhost','root','19950228');
mysql_select_db("student", $con);
$q="select city from student where reg_no=$uname";
$query=mysql_query($q,$con);
while($row=mysql_fetch_array($query))
  {
  $city=$row['city'];
  }
  $q="select branch from student where reg_no=$uname";
  $query=mysql_query($q,$con);  
  while($r=mysql_fetch_array($query))
  {
  $bran=$r['branch'];
  }
   $q="select branch from student where reg_no=$uname";
  $query=mysql_query($q,$con);  
  while($r=mysql_fetch_array($query))
  {
  $year=$r['admyear'];
  }
$res=$_REQUEST[Hostel];
 switch($res)
 {
 	case "T": 
 	$hostel="Sarabhai";
 	break;
 	case "m":
 	$hostel="Homi Baba";
 	break;
 	case "P":
 	$hostel="D.B.A";
 	break;
 	case "t":$hostel="M.S. Swaminathan";
 	break;
 default:echo "No condition Matches!!!!!!!";
 }
 mysql_query("delete from s_city where reg_no=$uname",$con);
		 	mysql_query("delete from s_branch where reg_no=$uname",$con);
  	mysql_query("delete from s_city_branch where reg_no=$uname",$con);
			mysql_query("delete from pref where reg_no=$uname",$con);
 
 if(isset($_POST[pref])) 
{  
  if(isset($_POST[pref_city]))
  {
  	 	mysql_query("insert into pref values('$uname','cb','$hostel')",$con);
  	mysql_query("insert into s_city_branch values('$uname','$city','$bran','$hostel','$year')",$con);

	}
	else {	 	mysql_query("insert into pref values('$uname','b','$hostel')",$con);
		 	mysql_query("insert into s_branch values('$uname','$bran','$hostel','$year')",$con);
		
		}
		}
		elseif(isset($_POST[pref_city])) {
			 	mysql_query("insert into pref values('$uname','c','$hostel')",$con);
		 	mysql_query("insert into s_city values('$uname','$city','$hostel','$year')",$con);
		 	}
		 	echo "Successfully Modified for reg number $uname";
		 	header('Location:home.php');
	
 ?>