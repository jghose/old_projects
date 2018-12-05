<html>
<?php
include("authenticate.php");
include("mysqlconect.php");
?>
<?php
$uname=$_COOKIE['Login'];
if(isset($_POST['reg_no']))
{
	$con=mysqlconnect('localhost','root','19950228');
	mysql_select_db("student", $con);
	$query="select * from student where reg_no='$_POST[reg_no]'";
	$res=mysql_query($query,$con);
	while($a=mysql_fetch_array($res))
	{
		$s=$a['sex'];
		}
	$query="select * from student where reg_no='$uname'";
	$result=mysql_query($query,$con);
	while($b=mysql_fetch_array($result))
	{
		$f=$b['sex'];
		}
		if($s!=$f)
		{
			print '<script type="text/javascript">';
print 'alert("This student is of opposite gender which is not allowed")';
print '</script>';
header('Location:search_roommate.html');
	}
		else{
			$a=mysql_fetch_array($res);
			$adm=$a['admyear'];
			$b=mysql_fetch_array($result);
			$ad=$b['admyear'];
		if($adm!=$ad)
		{
			print '<script type="text/javascript">';
print 'alert("This student is of different year which is not allowed")';
print '</script>';
header('Location:search_roommate.html');
	}
		}
		echo "You have selected the following student";
		$query="select * from student where reg_no='$_POST[reg_no]'";
	$res=mysql_query($query,$con);
	echo "<table border='1'>
<tr>
<th>Reg_no</th>
<th>Name</th>
<th>Branch</th>
<th>City</th>
</tr>";

while($row=mysql_fetch_array($res))
  {
  	$regpref=$row['reg_no'];
  echo "<tr>";
  echo "<td>" . $row['reg_no'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['branch'] . "</td>";
  echo "<td>" . $row['city'] . "</td>";
  echo "</tr>";
  }
 echo "</table>";
 mysql_query("delete from s_city where reg_no=$uname",$con);
		 	mysql_query("delete from s_branch where reg_no=$uname",$con);
  	mysql_query("delete from s_city_branch where reg_no=$uname",$con);
			mysql_query("delete from pref where reg_no=$uname",$con);
			
			mysql_query("delete from stu_pref where reg_no=$uname",$con);
			$res=$_REQUEST['hpref'];
 switch($res)
 {
 	case "T": 
 	$hostel="Sarabhai";
 	break;
 	case "m":
 	$hostel="Homi Baba";
 	break;
 	case "P":
 	$hostel="D.B.A.";
 	break;
 	case "t":$hostel="M.S. Swaminathan";
 	break;
 case "z":
 $hostel="PG";
 break;
 default:echo "No condition Matches!!!!!!!";
 }
 //echo $hostel;
 //echo $regpref;
$yy=mysql_query("insert into pref values('$uname','bs','$hostel')",$con);
 $xxx=mysql_query("insert into stu_pref values('$uname','$regpref','$hostel')",$con); 
echo "<a href=\"home.php\"> Go back </a>";
	
		}
		elseif(isset($_POST['name'])) {
			$na=$_POST['name'];
			//echo $na;
			$query="select * from student where reg_no='$uname'";
	$result=mysql_query($query,$con);
	while($b=mysql_fetch_array($result))
	{
		$f=$b['sex'];
		}
	//echo $f;
	$resul=mysql_query($query,$con);
	while($c=mysql_fetch_array($resul))
				{
					$adi=$c['admyear'];
					}	
			//$br=$_REQUEST['branch'];
			//echo $adi;
			$r=$_REQUEST['Branch'];
			switch($r)
	 {
 	case "bi": 
 	$branch="Biotechnology";
 	break;
	case "ci": 
 	$branch="Civil Engineering";
 	break;
 	case "ch":
 	$branch="Chemical Engineering";
 	break;
 	case "el":
 	$branch="Electrical Engineering";
 	break;
 	case "ec":$branch="Electronics Engineering";
 	break;
 	case "co":
 	$branch="Computer Science";
 	break;$res=$_REQUEST[Hostel];
 switch($res)
 {
 	case "T": 
 	$hostel="Sarabhai";
 	break;
 	case "m":
 	$hostel="Homi Baba";
 	break;
 	case "P":
 	$hostel="D.B.A.";
 	break;
 	case "t":$hostel="M.S Swaminathan";
 	break;
 case "z":
 $hostel="PG";
 break;
 default:echo "No condition Matches!!!!!!!";
 }
 case "me":
 $branch="Mechanical Engineering";
 break;
case "pi":
 $branch="Food Processing";
break;
}
//echo $branch;
			$que="SELECT * FROM student where sex='$f' and name='$na' and reg_no!='$uname' and admyear=$adi and branch='$branch'";
			$res=mysql_query($que,$con);
			if(!$res){
				echo "No student found with the parameters given,try again please";
				}
				else{
echo "Following students match your parameters";
echo "<table border='1'>
<tr>
<th>Reg_no</th>
<th>Name</th>
<th>Branch</th>
<th>City</th>
</tr>";

while($row=mysql_fetch_array($res))
  {
  echo "<tr>";
  echo "<td>" . $row['reg_no'] . "</td>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['branch'] . "</td>";
  echo "<td>" . $row['city'] . "</td>";
  echo "</tr>";
  }
echo "</table>";


			
		}
		
	echo "Return to the selection form after checking the registration number from the table<a href=\"search_roommate.html\"> Click here </a> ";
	} 
	?>
	</html>	