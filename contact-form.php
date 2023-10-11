<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST["name"];
//     $email = $_POST["email"];
//     $subject = $_POST["subject"];
//     $message = $_POST["message"];


//     // Set the recipient's email address
//     $to = "samet.akalin@kod.com.tr"; // Replace with the actual email address.

//     // Email headers
//     $headers = "From: $email\r\n";
//     $headers .= "Reply-To: $email\r\n";
//     $headers .= "MIME-Version: 1.0\r\n";
//     $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

//     // Compose the email message
//     $email_message = "Name: $name<br>";
//     $email_message .= "Email: $email<br>";
//     $email_message .= "Subject: $subject<br><br>";
//     $email_message .= "Message:<br>$message";

//     // Send the email
//     if (mail($to, $subject, $email_message, $headers)) {
//         // Email sent successfully
//         echo "success"; // You can customize this response as needed.
//     } else {
//         // Email sending failed
//         echo "error"; // You can customize this response as needed.
//     }
// }
if($_POST["message"]) {
    mail("your@email.address", "Form to email message", $_POST["message"], "From: an@email.address");
}

?>
