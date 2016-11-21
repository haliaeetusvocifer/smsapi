<?php
include 'apicon.php';
    $firstName = $_POST['firstName'];
    $middleInitial = $_POST['middleInitial'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $state = $_POST['state'];
    $emailAddress = $_POST['emailAddress'];
    $phoneNumber = $_POST['phoneNumber'];
    $status = $_POST['status'];
    $gender = $_POST['gender'];
    $ageGroup = $_POST['ageGroup'];
    $numberOfChildren = $_POST['numberOfChildren'];
    $beNotified = $_POST['beNotified'];
    $facebookName = $_POST['facebookName'];
    $twitterHandle = $_POST['twitterHandle'];
    $howDidYouHear = $_POST['howDidYouHear'];
    $importantThing = $_POST['importantThing'];
    $firstImpression = $_POST['firstImpression'];
    $dislike = $_POST['dislike'];
    $picture = $_POST['picture'];
    $signature = $_POST['signature'];

    // Insert data into data base
$sql = "INSERT INTO firstTimer.firstTimer(id,firstName,middleInitial,lastname,address,state,emailAddress,phoneNumber,status,gender,ageGroup,numberOfChildren,beNotified,facebookName,twitterHandle,howDidYouHear,importantThing,firstImpression,dislike,picture,signature) VALUES(NULL,'$firstName','$middleInitial','$lastname','$address','$state','$emailAddress','$phoneNumber','$status','$gender','$ageGroup','$numberOfChildren','$beNotified','$facebookName','$twitterHandle','$howDidYouHear','$importantThing','$firstImpression','$dislike','$picture','$signature');";

//beginning of sms notification code

//end of sms notification code


if ($connection->query($sql)) {
$msg = array("status" =>1 , "msg" => "Your record inserted successfully");

$to = $_POST['emailAddress'];
			$subject = "Welcome To Testimony Place";
			$message = 'Dear '.stripslashes($_POST['firstName']).',
Thank you for worshiping with us today. We hope you have enjoyed every bit of the service & you will join us again soon.

For more information about us and our services , please connect with us online though the following media;

Facebook: www.facebook.com/hcctestimonyplace
Twitter: @hcclekkichurch
Email: info@hcclekki.org
Website: www.hcclekki.org
Phone: +234 1 2918772 | Mobile +234 809 099 0191

Thank you.
';

			$headers = "From: info@hcclekki.org" . "\r\n";

//call the sms function here

			mail($to,$subject,$message,$headers);

} else {
echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
 
$json = $msg;
 
header('content-type: application/json');
echo json_encode($json);
 
 
@mysqli_close($conn);
 
?>