<?php
if (isset($_REQUEST['firstname'],$_REQUEST['email'])) {
      
    $firstname = $_REQUEST['firstname'];
	$lastname = $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];
      
    // Set your email address where you want to receive emails. 
    //$to = 'almoubarackbtp1@gmail.com';
    $to = 'itech.ndao@gmail.com';
      
    $subject = 'From Website almoubarackbtp.com';
    $headers = "From: ".$firstname." <".$email."> \r\n";
      
    $send_email = mail($to,$subject,$message,$headers);
      
    echo ($send_email) ? 'success' : 'error';
      
}

?>