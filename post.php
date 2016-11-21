<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>


<?php

//Paremeters to get details from datase 
//$datenew = date('l dS \of F Y h:i:s A');
//$senderName = 'HCC+LEKKI';
//$destination = $_POST['telephone'];
//$message = $message = 'Dear+'.stripslashes($_POST['first_name']).',+Thank+you+for+worshiping+with+us+today.+We+hope+you+have+enjoyed+every+bit+of+the+service+&+you+will+join+us+again+soon.';


//URL to send sms from database to the First Timer
//$response = file_get_contents("http://smsc.dimetext.com/API/WebSMS/Http/v1.0a/index.php?username=lekki@holyghostchristiancentre.com&password=lekkichurch&sender=$senderName&to=$destination&message=$message&reqid=1&format={json|text}&route_id=route+id&callback=Any+Callback+URL&unique=0&sendondate=$datenew" )


$senderName = "Oluwasegun";
$userId = "59593194";
$destination = $_POST['telephone'];   //make sure that the phone numbers has been formatted to have 234 in the front
$password = "@shegs04";
$message = 'Dear+'.stripslashes($_POST['first_name']).',+Thank+you+for+worshiping+with+us+today.+We+hope+you+have+enjoyed+every+bit+of+the+service+&+you+will+join+us+again+soon.';

//you can ur encode all the required fields
$response = file_get_contents("http://developers.cloudsms.com.ng/api.php?userid=$userId&password=$password&type==5&destination=$destination&sender=$senderName&message=$message" )



?>



</body>
</html>
