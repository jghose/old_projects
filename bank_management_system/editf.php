<html>
<body link="white" alink="white" vlink="white"> 
<script type="text/javascript">
<!--
function toggleTB(what){
if(what.selected){document.pref.select_room.disabled=0}
else{document.pref.select_room.disabled=1}}

//-->
</script>


<link href="styles.css" rel="stylesheet" type="text/css">
<?php
$uname=$_COOKIE["Login"];
echo "You are logged in as $uname";
setcookie("Edit","$uname",time()+1800);


?>
<body leftmargin=5 topmargin=8 marginwidth=4 marginheight=4> 
<form name="pref" action="process.php" method="post">
<fieldset>
<legend><h1 align="center" font size=8>Preference form </h1></legend> &nbsp;&nbsp;&nbsp;
<td><font size=4><div align="left"class="style1"><span class="style25">1.Select Hostel:&nbsp;</span></font>></div></td>
 &nbsp;&nbsp;&nbsp;
    <td><div align="left"class="style1"><select name="Hostel" id="Hostel" style="width:140px">
          		    <option value="g">KNGH</option>

					
										</select>
<
        		     &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
        		     <br \> <br \>
        		    <td><font size=4><div align="left"class="style1"><span class="style25">2.Select Preference Type:&nbsp;</span></div></font></td>
<div align="left"class="style1"><input type="checkbox" name="pref_city" value="by_city" size="3" />By City<br />
<input type="checkbox" name="pref" value="by_branch" size="3" />By Branch</div>
 &nbsp;&nbsp;&nbsp;<br />
<pre>					</pre>  <td><font size=4><div align="left"class="style1">Select By student name:<a href="select_studentf.php">Click here</a></div></font>	
<pre>



          		
          		
          		
          		</pre>
          		
        		    <div align="left"><input name="submit" type="submit" id="submit" value="update"></div>
        		    </fieldset>
</form>
</body></html>