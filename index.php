<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

This is SMS GATEWAY API TEST

<?php

$date = date('l dS \of F Y h:i:s A');

echo "$date";

?>

<h1>My SMS form</h1>
<font size="5" face="arial" color="black">
<form name="contactform" method="post" action="post.php">
<table width="450px">
</tr>
<tr>
<td valign="top">
  <label for="first_name">Full Name *</label>
</td>
<td valign="top">
  <input  type="text" name="first_name" maxlength="50" size="30">
</td>
</tr>


<tr>
<td valign="top">
  <label for="telephone">Telephone Number</label>
</td>
<td valign="top">
  <input  type="text" name="telephone" maxlength="30" size="30">
</td>
</tr>
<tr>
<td valign="top">
  <label for="message">Message *</label>
</td>
<td valign="top">
  <textarea  name="content" maxlength="640" cols="25" rows="6"></textarea>
</td>
</tr>
<tr>
<td colspan="2" style="text-align:center">
  <input type="submit" value="Submit">  
</td>
</tr>
</table>
</form>
</font>


<body>
</body>
</html>
