<?php

  if(isset($_POST['submit'])) {

    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailfrom = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];


    $mailTo = "zinferguy@gmail.com";
    $headers = "From: ".$mailfrom;
    $txt = "You have recieved an E-mail from ".$name.".\n\n".$message;


    mail($mailTo,$subject,$txt,$headers);

    header("Location: contact.php?mailsend");
  }

 ?>

 <h1>MAIL SEND</h1>
