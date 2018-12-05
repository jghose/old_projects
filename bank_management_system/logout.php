<?php
if(isset($_COOKIE[Login]))
setcookie("Login", "", time()-3600);
if(isset($_COOKIE['paa']))
setcookie("paa", "", time()-3600);
header('Location: index.html');
?>