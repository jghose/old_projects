

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Selection Form</title>

<link href="styles.css" rel="stylesheet" type="text/css">

</head>

<body><fieldset><form id="form1" name="form1" method="post" action="select_reg.php">
    <h1 align="center">Select Room Mate Preferance
    </font></h1>
   
   
  <p>&nbsp;</p>
   <p><font color="#FF0000" size="3"><strong>*select either registration number or name and branch</strong></font></p>
  <p align="justify">
   
<tr>
    <div align="justify"><strong>Registration number:</strong>
    <td width=\"54%\"><input name="reg_no" size="35" maxlength="10" value="" disabled="disabled" type="text"></td>
    
    <td width="14%"><input name="c_email" id="c_email" value="y" onclick="form1.reg_no.disabled =!this.checked;" type="checkbox"></td>
    </div>
    </tr>	
     
      <br />
    
    <pre>
    </pre>
  </p>
 
<p align="justify">
  <label for="NAME">NAME  </label>
  <input type="text" name="name" id="NAME" />
</p>
<br> <br> <br>
<p align="justify">
BRANCH:
<select name="Branch">
<option value="bi">Biotechnology</option>
<option value="ch">Chemical</option>
<option value="ci">Civil Engineering</option>
<option value="co">Computer Science</option>
<option value="el">Electrical Engineering</option>
<option value="ec">Electronics Engineering</option>
<option value="me">Mechanical</option>
<option value="pi">Food Processing</option>
</select></p>
<br /><br />
<pre>
</pre>
<p align="justify">
Hostel Option:
<select name="hpref">
<option value="g"> KNGH </option>

</select><br /><br /></p>
<pre>
</pre>
<p align="center"><input name="Submit" type="submit" value="Submit" /></p>
</form></fieldset>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>
