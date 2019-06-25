<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['object'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$object = strip_tags(htmlspecialchars($_POST['object']));
$message = strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'chloetanguy9@gmail.com';
$email_subject = "Formulaire de Contact du site Cobalt": $object";
$email_body = "Vous avez reçu un nouveau message depuis le formulaire de contact du site de Cobalt. \n\n"."Voici les détails:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nObject: $Object\n\nMessage:\n$message";
$headers = "De: noreply@cobalt-watches.com\n"; //
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
