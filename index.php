<?php

if($_POST["submit"]) {
    $recipient="seon5.sc@gmail.com";
    $subject="Rental request for Chevrolet Cruze Sedan";
    $FirstName=$_POST["fname"];
    $LastName=$_POST["lname"];
    $email=$_POST["email"];

    $mailBody="First Name: $fname\n Email: $email\n\n Date in: $datein \n Date Out: $dateout";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p> Confirmed. </p>";
}

?>
	
