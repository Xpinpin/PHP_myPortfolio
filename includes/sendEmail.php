
<?php

$htmlBody = '<html> <body> <h1 style="color: #AA3333;">Thank You</h1> <p>Thank you for contacting 
    <a href="http://www.example.com/">The Widget Company</a>. 
    <p>We\'ll be in touch shortly.</p><p>' . $_POST['message'] . '</p></body> </html>';




$to = "sonnguyenpham@gmail.com";
$subject = $_POST['subject'];
$from = $_POST['from_email'];
$message = $_POST['message'];
$message = wordwrap($message, 70);
// $headers = "From: {$from}";
$headers = "MIME-Version: 1.0 \r\n";
$headers .= "Content-type: text/html; charset=utf-8 \r\n";
$headers .= "From: $from \r\n";
$headers .= "Cc:bob@test.com \r\n";


// $result = mail($to_email, $subject, $body, $headers);
$result = mail($to, $subject, $htmlBody, $headers);
if ($result == 1) {
    echo '<p>Thank you for your email. I will reply to you back as soon as possible. See you then</p>';
} else {
    echo "Mail failed to send.";
}





?>