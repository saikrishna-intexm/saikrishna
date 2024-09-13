<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["type"];

    $to = "contact@intexmmedia.com";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    echo "Thank you for your submission!";
}
?>
