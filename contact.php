<?php
 
if(isset($_POST['email'])) {
  $email_to = "eylultasyurek@gmail.com";
  $email_subject = "Searching For Man Friday";
 
    function died($error) {
 
        echo "We are very sorry, but the comments could not be submitted. ";
        echo $error."<br /><br />"; 
        die();
 
    }
 
     
 
    // validation expected data exists
 
    if(!isset($_POST['ManFriday']) &&
 
        !isset($_POST['Where']) &&
 
        !isset($_POST['DoesItEnd']) &&
 
        !isset($_POST['Soundtrack']) &&
 {died('Please fill in at least one of the comment boxes.');   }
 
     
  
 
    function clean_string($string) {
 
      $bad = array("content-type","bcc:","to:","cc:","href");
 
      return str_replace($bad,"",$string);
 
    }
 
     
    $email_message .= "ManFriday: ".clean_string($ManFriday)."\n";
 
    $email_message .= "Where: ".clean_string($Where)."\n";
 
    $email_message .= "DoesItEnd: ".clean_string($DoesItEnd)."\n";
 
    $email_message .= "Soundtrack: ".clean_string($Soundtrack)."\n";
    
  
  
$headers = 'From: '.$email_from."\r\n".
 
'Reply-To: '.$email_from."\r\n" .
 
'X-Mailer: PHP/' . phpversion();
 
@mail($email_to, $email_subject, $email_message, $headers);  
 
?>
 
 
 
Thanks for sharing!
 
 
 
<?php
 
}
 
?>