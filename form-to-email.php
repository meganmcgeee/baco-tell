<?php
  $chesgord = $_POST['chesgord'];
  $chesgordquant = $_POST['quant-chesgord']
?>

<?php
	$email_from = 'spamchick10@gmail.com';

	$email_subject = "New bacotell submission";

	$email_body = "You have received an order of $chesgordquant cheesy gordita $chesgord from the user $name.\n".

?>

<?php

  $to = "spamchick10@gmail.com";

  $headers = "From: $email_from \r\n";

  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to,$email_subject,$email_body,$headers);

 ?>


<?php
function IsInjected($str)
{
    $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
    $inject = join('|', $injections);
    $inject = "/$inject/i";
    
    if(preg_match($inject,$str))
    {
      return true;
    }
    else
    {
      return false;
    }
}

if(IsInjected($visitor_email))
{
    echo "Bad email value!";
    exit;
}
?>

