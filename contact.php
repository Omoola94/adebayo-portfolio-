<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim(htmlspecialchars($_POST['name']));
    $email = trim(htmlspecialchars($_POST['email']));
    $message = trim(htmlspecialchars($_POST['message']));

    // Replace with your actual email
    $to = "akinolaemmanueladebayo@gmail.com";
    $subject = "Portfolio Contact Form: Message from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // For demo/local testing (uncomment mail() on live server)
    // mail($to, $subject, $body, $headers);

    echo "<h2>Thank You, $name!</h2>";
    echo "<p>Your message has been sent successfully. I'll get back to you soon at <strong>$email</strong>.</p>";
    echo "<p><a href='index.php'>← Back to Portfolio</a></p>";
} else {
    header("Location: index.php");
    exit();
}
?>
