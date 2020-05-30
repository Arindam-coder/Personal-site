<?php 
$name = $_POST['name'];
$email = $_POST["email"];
$message = $_POST['message'] ;
$mobile = $_POST['mobile'] ;
$to = "majeearindam06072002@gmail.com";
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
header("Location: https://arindam-coder.github.io/Personal-site/index.html");
exit();  

?>

<?php /*
$errors = '';
$myemail = 'majeearindam4@gmail.com';//<-----Put Your email address here.
if(empty($_POST['name'])  || 
   empty($_POST['email']) || 
   empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name']; 
$email_address = $_POST['email']; 
$message = $_POST['message']; 

if (!preg_match(
"/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i", 
$email_address))
{
    $errors .= "\n Error: Invalid email address";
}


if( empty($errors))

{

$to = $myemail;

$email_subject = "Contact form submission: $name";

$email_body = "You have received a new message. ".

" Here are the details:\n Name: $name \n ".

"Email: $email_address\n Message \n $message";

$headers = "From: $myemail\n";

$headers .= "Reply-To: $email_address";

mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page

header('Location: contact-form-thank-you.html');

}
*/
 ?>
