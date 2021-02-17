<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTO = "lipnicanmilos@gmail.com";
    $headers = "From: StrankaAdamkovo";
    $txt = "Odosielateľ: ".$name."\nKontakt: ".$mailFrom."\nTel. číslo: ".$subject."\n\nSpráva: \n".$message;

    mail($mailTO, $mailFrom, $txt, $headers);
    header("Location: index.html?mailsend");
}
?> 
