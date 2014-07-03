<?php
 
if(isset($_POST['email'])) {
  $email_subject = "Be Happy Today!";
 
    function died($error) {
 
        echo "Sorry, we couldn't send the image. ";
        echo $error."<br /><br />"; 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['toLine']) &&
 {died('Please add an email address.');   }
   
    $email_to = $ManFriday
    $email_message = "Someone sent you a smile! visit ... to send one!";
    

$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($toLine, $email_subject, $email_message, $headers);  
 
?>
 
 
 
Continue sharing the love!
 
 
 
<?php
 
}
 
?>