<?php
// Process the contact form data here
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Add your logic to handle the form data, such as sending emails or storing in a database
    // For demonstration purposes, let's just display the data for now
    echo "<h2>Thank you for your message, $name!</h2>";
    echo "<p>We'll get back to you at $email as soon as possible.</p>";
}
?>
