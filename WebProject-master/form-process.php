<!DOCTYPE html>
<html>
<head>
<script type="text/javascript" src="contact-form-script.js"></script>
</head>

<body>


<!-- Start Contact Form -->
<form role="form" id="contactForm" class="contact-form" data-toggle="validator" class="shake">
  <div class="form-group">
    <div class="controls">
      <input type="text" id="name" class="form-control" placeholder="Name" required data-error="Please enter your name">
      <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="form-group">
    <div class="controls">
      <input type="email" class="email form-control" id="email" placeholder="Email" required data-error="Please enter your email">
      <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="form-group">
    <div class="controls">
      <input type="text" id="msg_subject" class="form-control" placeholder="Subject" required data-error="Please enter your message subject">
      <div class="help-block with-errors"></div>
    </div>
  </div>
  <div class="form-group">
    <div class="controls">
      <textarea id="message" rows="7" placeholder="Massage" class="form-control" required data-error="Write your message"></textarea>
      <div class="help-block with-errors"></div>
    </div>
  </div>

  <button type="submit" id="submit" class="btn btn-effect"><i class="fa fa-check"></i> Send Message</button>
  <div id="msgSubmit" class="h3 text-center hidden"></div>
  <div class="clearfix"></div>

</form>
<!-- End Contact Form -->

</body>
</html>



<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required ";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Subject is required ";
} else {
    $msg_subject = $_POST["msg_subject"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}

//Add your email here
$EmailTo = "hello@example.com";
$Subject = "New Message Received";

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Subject: ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Message: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}

?>
