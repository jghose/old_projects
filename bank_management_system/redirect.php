	<html>	You are successfully registered.
	
	</html>
<?php
setcookie("Login","$_POST[user]",time()+3600);
setcookie("paa","$_POST[pass]",time()+1800);
header('Location:/home.php');
mysql_select_db("student", $con);
?>
	



	