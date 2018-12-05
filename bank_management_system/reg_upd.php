<?php
include("mysqlconect.php");
include("authenticate.php");
$con=mysqlconnect('localhost','root','19950228');
mysql_select_db("student", $con);

$name=$_POST['name'];
$fname=$_POST['fname'];
$city=$_POST['city'];
$reg=$_POST['reg_no'];
$addr=$_POST['addr'];
$sex=$_REQUEST['sex'];
$res=$_REQUEST['year'];

$check=mysql_query("select * from u_name where reg_no=$reg",$con);

while($ro=mysql_fetch_array($check))
  {
  $a=$ro['reg_no'];
  }
echo $a;

if($a){
   header('Location: unameexists.html');
}
else{
 switch($res)
 {
 	case "87": 
 	$year="1987";
 	break;
 	case "88":
 	$year="1988";
 	break;
 	case "89":
 	$year="1989";
 	break;
 	case "90":$year="1990";
 	break;
 	case "91":
 	$year="1991";
 	break;
 case "92":
 $year="1992";
 break;
case "93":
 $year="1993";
 break;
 case "94":
 $year="1994";
 break;
case "95":
 $year="1995";
 break;

 default:echo "No condition Matches!!!!!!!";
 }
 $rest=$_REQUEST['admyear'];
 switch($rest)
 {
 	case "7": 
 	$admyear="2007";
 	break;
 	case "8":
 	$admyear="2008";
 	break;
 	case "9":
 	$admyear="2009";
 	break;
 	case "10":$admyear="2010";
 	break;
 	case "11":
 	$admyear="2011";
 	break;
 case "12":
 $admyear="2012";
 break;
case "13":
 $admyear="2013";
 break;
 case "14":
 $admyear="2014";
 break;

 default:echo "No condition Matches!!!!!!!";
 }
 $month=$_REQUEST['month'];
 $day=$_REQUEST['date'];
 $date=$year."-".$month."-".$day;
 $b=$_REQUEST['Branch'];
 
 switch($b)
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
 	break;
 case "me":
 $branch="Mechanical Engineering";
 break;
case "pi":
 $branch="Food Processing";
break;
}
$email=$_POST['email']; 
$connum=$_POST['con_no'];
$mobnum=$_POST['mob_no'];
 $pas=$_POST['pws'];
  $query="insert into u_name values('$reg','$pas')";
 mysql_query($query,$con);
$queryu="insert into student values('$name','$fname','$date','$admyear','$reg','$sex','$city','$branch')";
mysql_query($queryu,$con);
$queryv="insert into per_detail values('$reg','$email','$connum','$mobnum','$addr')";
  mysql_query($queryv,$con);
  setcookie("Login","$reg",time()+3600);
setcookie("paa","$pas",time()+1800);
header('Location: home.php');
}
?>