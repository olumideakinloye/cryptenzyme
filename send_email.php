<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "olumideakinloye24@gmail.com";  // Replace with your company's email address
    $subject = "Contact Form Message";
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars($_POST["message"]);
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    $fullMessage = "Message from: $email\n\n$message";
    echo "Message sent successfully!";
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
<!-- <?php
// Default email address to receive messages
// $default_email = 'olumideakinloye24@gmail.com';

// Check if the form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    // $name = htmlspecialchars(trim($_POST['user_name']));
    // $link = htmlspecialchars(trim($_POST['link']));
    // $email = filter_var(trim($_POST['user_email']), FILTER_SANITIZE_EMAIL);
    // $message = htmlspecialchars(trim($_POST['message']));

    // Validate email address
    // if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Subject of the email
        // $subject = 'Contact Form Message from ' . $name;

        // Message body
        // $email_message = "Name: $name\n";
        // $email_message = "Link: $link\n";
        // $email_message .= "Email: $email\n";
        // $email_message .= "Message:\n$message\n";

        // Headers
        // $headers = 'From: ' . $email . "\r\n" .
        //            'Reply-To: ' . $email . "\r\n" .
        //            'X-Mailer: PHP/' . phpversion();

        // Send the email
//         if (mail($default_email, $subject, $email_message, $headers)) {
//             echo 'Message sent successfully.';
//             header("Location: landing_page.html");
//         } else {
//             echo 'Failed to send message.';
//         }
//     } else {
//         echo 'Invalid email address.';
//     }
// } else {
//     echo 'Invalid request method.';
// }
?> -->
<!--<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CryptEnzyme</title>
    <link rel="stylesheet" href="Landing_page_stylesheet.css" />
    <link
      rel="shortcut icon"
      href="QFYI4569.PNG"
      type="image/x-icon"
      style="border-radius: 50%"
    />
  </head>
  <body>
      <header>
        <h1>Crypt<span>Enzyme</span></h1>
        <ul>
            <li>About us</li>
            <li>Home</li>
            <li>Service</li>
            <li>Career</li>
            <li>Contact us</li>
        </ul>
      </header>
    <section class="Welcome_section">
        <img src="IFON9061.JPG" alt="">
        <h1>Crypt<span>Enzyme</span></h1>
        <div class="home_botton">
            <a href="SYNERGWAVE LIMITEDt.html"><img id="forward" src="forward.png" alt="" ></a>
        </div>
    </section>
  </body>
</html> -->
