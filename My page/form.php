<?php

// if (isset($_POST['name']) &&
//   isset($_POST['subject']) &&
//   isset($_POST['email']) &&
//   isset($_POST['message']))  {  

// $nameErr = $emailErr = $messageErr = $subjectErr = "";
// $name = $email = $message = $subject = "";

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["name"])) {
//     $nameErr = "Name is required";
//   } else {
//     $name = test_input($_POST["name"]);
//     // check if name only contains letters and whitespace
//     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
//       $nameErr = "Only letters and white space allowed"; 
//     }
//   }
  
//   if (empty($_POST["email"])) {
//     $emailErr = "Email is required";
//   } else {
//     $email = test_input($_POST["email"]);
//     // check if e-mail address is well-formed
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//       $emailErr = "Invalid email format"; 
//     }
//   }
    
//   if (empty($_POST["subject"])) {
//     $subject = "";
//   } else {
//     $subject = test_input($_POST["subject"]);
//     // check if name only contains letters and whitespace    
//     if (!preg_match("/^[a-zA-Z ]*$/",$subject)) {
//       $subjectErr = "Invalid subject"; 
//     }    
//   }

//   if (empty($_POST["message"])) {
//     $message = "";
//   } else {
//     $message = test_input($_POST["message"]);
//   }

//   $target_email = "marcin.janerka@gmail.com";
//   $name = $_POST['name'];
//   $subject = $_POST['subject'];
//   $email = $_POST['email'];
//   $message = $_POST['message'];  
//   $email_body = "You have received a new message from " . $name . " email: " . $email . "\n".
//                 "Here is the message:\n" . $message;
  
//   $send = mail($target_email, $subject, $email_body, "from:" . $email);
    
//   if ($send) {
//     echo 'thank you';   
    
    
//     header("Location: http://www.marcinjanerka.com/");

//   } else {

//     echo 'problem';   
           
//   }
// }

  

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
  
  $target_email = "marcin.janerka@gmail.com";
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $email = $_POST['email'];
  $message = $_POST['message'];  
  $email_body = "You have received a new message from " . $name . " email: " . $email . "\n".
                "Here is the message:\n" . $message;
  
  $send = mail($target_email, $subject, $email_body, "from:" . $email);
    
  if ($send) {
    
    header("Location:http://www.marcinjanerka.com/"); 

  } else {

    echo 'Error';   
           
  }
// }
  
?>



