<?php
$headers  = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: ". "admin@ongc.com". "\r\n";
$headers .= "Reply-To: ". "admin@ongc.com". "\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();
$headers .= "X-Priority: 1" . "\r\n";
$message="Congratulations, You have been Selected For ONGC Training 2016. ";
$subject="ONGC Training";
mail('doctergarg@gmail.com', $subject, $message, $headers);
echo"Mail Sent Successfully!!!";
echo '<button type="submit" name="Register"><a href="logout.php">Logout</a></button>';
?>