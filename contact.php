<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Contact Submitted</title>
        <link rel='stylesheet' href='css/style.css'>
    </head>
    <body>
        <header>
            <img src='images/logo.png' alt='Arohan Health Care Logo' style='height:50px;'>
            <h1>Thank You, $name!</h1>
            <nav>
                <a href='frontend.html'>Home</a> |
                <a href='contact.html'>Contact</a>
            </nav>
        </header>
        <main>
            <p>We received your message:</p>
            <blockquote>$message</blockquote>
            <p>We will contact you at <strong>$email</strong>.</p>
        </main>
        <footer>
            <p>&copy; 2026 Arohan Health Care. All rights reserved.</p>
        </footer>
    </body>
    </html>";
} else {
    header("Location: contact.html");
    exit();
}
?>
