
<?php
// sudo php code to be used later 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars($_POST['name']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST['message']);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email address.";
        exit;
    }

    // Email details
    $to = "techandgadgets005@gmail.com"; // Replace with your email address
    $subject = "Message from $name via Contact Form";
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "Content-Type: text/plain; charset=UTF-8";

    // Construct the email body
    $email_body = "You have received a new message:\n\n";
    $email_body .= "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message\n";

    // Send the email
    if (mail($to, $subject, $email_body, $headers)) {
        echo "Thank you, $name. Your message has been sent!";
    } else {
        echo "Sorry, there was an error sending your message. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
