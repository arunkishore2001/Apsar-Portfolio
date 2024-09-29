<pre>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "e.arunkishore@gmail.com";
    $subject = "New Contact Form Submission: $subject";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send email
    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Message could not be sent. Please try again later.";
    }
} else {
    echo "Error: Invalid request.";
}
?>
</pre>
