<?php

$EmailFrom = $_REQUEST['email']; 
$EmailTo = "prameetkotak@me.com"; // Your email address here
$Subject = "Contact form";
$Name = Trim(stripslashes($_POST['name'])); 
$Email = Trim(stripslashes($_POST['email'])); 
$Phone = Trim(stripslashes($_POST['phone'])); 
$Message = Trim(stripslashes($_POST['message'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  echo "Error";
  exit;
}

// prepare email body text
$Body = "Email from Switch Website";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Phone: ";
$Body .= $Phone;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Message: ";
$Body .= "\n";
$Body .= "\n";
$Body .= $Message;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Phone, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  echo "<script type='text/javascript'>alert('Mail Sent');</script>";
}
else{
  echo "<script type='text/javascript'>alert('Mail not Sent');</script>";
}
?>