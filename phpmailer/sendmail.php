<?php
require('PHPMailerAutoload.php');


$mail = new PHPMailer();

//$mail -> IsSMTP();
$mail -> From = "admin@krakowskim-targiem.pl";
$mail -> FromName = "X Project dla Krakowskie Inwestycje - Test";
$mail -> Host = "krakowskim-targiem.pl";
$mail -> Mailer = "smtp";
$mail -> Username = "admin@krakowskim-targiem.pl";
$mail -> Password = "jotpena100prO";
$mail -> SMTPAuth = true;
$mail -> Port = 587;
$mail -> SetLanguage("pl", "/language/");

$mail -> Subject = "Temaciątko(#subject)";
$mail -> Body = "TEST(#message)";

$mail -> AddAddress("admin@krakowskim-targiem.pl", "Test Testowy(#imie_nazwisko)");

if($mail->Send())
{
echo "Mail wysłany";
}
else
echo "Mail nie wysłany z powodu ".$mail -> ErrorInfo;


?>