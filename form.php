<?php
$toEmail = "marcus@kandio.se,anton.jonsson@kandio.se";

$mailHeaders = "From: " . $_POST["firstName"] . "<". $_POST["email"] .">\r\n";
$messageBody = "First Name: " . $_POST["firstName"] ."\r\n". "Last Name: " . $_POST["lastName"] ."\r\n". "Email: " . $_POST["email"] ."\r\n". "Company: " . $_POST["company"] ."\r\n". "Phone: " . $_POST["phone"] ."\r\n". "Message: " . $_POST["message"];
if(mail($toEmail, 'Kandio Message notification', $messageBody, $mailHeaders)) {
//    print "<p class='success'>Contact Mail Sent.</p>";
} else {
//    print "<p class='Error'>Problem in Sending Mail.</p>";
}
?>