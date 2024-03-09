<?php

if (isset($_POST['Email'])) {

    $email_to = "bkb.109001@gmail.com";
    $email_subject = "Request quote";

    function problem($error)
    {
        echo "We're sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br><br>";
        echo $error . "<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }

    if (
        !isset($_POST['name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        !isset($_POST['request'])
    )
        problem('Were sorry, but there appears to be a problem with the form you submitted.');
}

$name = $_POST['name']; // required
$email = $_POST['email']; // required
$phone = $_POST['phone']; // required
$request = $_POST['request']; // required

$error_message = "";
$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

if (!preg_match($email_exp, $email)) {
    $error_message .= 'The Email address you entered does not appear to be valid.<br>';
}

$string_exp = "/^[A-Za-z .'-]+$/";

if (!preg_match($string_exp, $name)) {
    $error_message .= 'The name you entered does not appear to be valid.<br>';
}

if (strlen($phone) < 10) {
    $error_message .= 'The phone you entered do not appear to be valid.<br>';
}

if (strlen($request) < 2) {
    $error_message .= 'The request you entered do not appear to be valid.<br>';
}

if (strlen($error_message) > 0) {
    problem($error_message);
}

$email_message = "Form details below.\n\n";

function clean_string($string)
{
    $bad = array("content-type", "bcc:", "to:", "cc:", "href");
    return str_replace($bad, "", $string);
}

$email_message .= "name: " . clean_string($name) . "\n";
$email_message .= "email: " . clean_string($email) . "\n";
$email_message .= "phone: " . clean_string($phone) . "\n";
$email_message .= "request: " . clean_string($request) . "\n";

$headers = 'From: ' . $email . "\r\n" .
    'Reply-To: ' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>

<!-- INCLUDE YOUR SUCCESS MESSAGE BELOW -->

Thanks for reaching out. We'll get back to you for an accurate quote shortly.

<?php

require("quote.php");
//like
include("quote.php");
?>
