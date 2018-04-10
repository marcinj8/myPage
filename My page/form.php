<?php

  if (isset($_POST['name']) ||
  isset($_POST['subject']) ||
  isset($_POST['email']) ||
  isset($_POST['message']))  {  
  
  $target_email = "marcin.janerka@gmail.com";
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $message = $_POST['message'];  
  
  mail($target_email, "$subject", $message, "From:" . $email, $name);
    
  echo "Thank you";
  }
  
  
  else  {
?>

 <div>
  Fill the form
 </div> 
  
<?php
  }
?>


