<?PHP
$name = $_POST['name'];
$email = $_POST["emailaddress"];
$message = $_POST['message'] ;
$mobile = $_POST['mobile'] ;
$to = "majeearindam4@gmail.com";
$subject = "Message from your Portfolio";
$headers = "From: $email\n";
$emailmessage = "A visitor, $name to your site has sent some message through the following email address.\n

Email Address: $email \n and mobile number: $mobile \n .Please Hurry Up to reply. \n $message ";
$user = "$email";
$usersubject = "Thank You";
$userheaders = "From: majeearindam4@gmail.com\n";
$usermessage = "Thank you for sending message.";
mail($to,$subject,$emailmessage,$headers);
mail($user,$usersubject,$usermessage,$userheaders);

?>