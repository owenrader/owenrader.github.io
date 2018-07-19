<?php

if (isset($_POST['submit'])) {
    $name = $_POST['submit'];
    $mailFrom = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $mailTo = "andersen@ticalun.net";
    $headers = "From: ".$mailFrom;
    $txt = "you got an email from ".$name.".\n\n".$message;
    
    mail($mailTo, $subject, $txt, $headers);
    header("Location: contact.html");
}
?>