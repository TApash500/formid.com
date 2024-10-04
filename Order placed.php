<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Replace with your actual email address
    $to = "shikhamazumder361@gmail.com";

    // Retrieve form data
    $name = $_POST["name"];
    $address = $_POST["address"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $size = $_POST["size"];

    // Create email content
    $subject = "New Order from $name";
    $message = "Order Details:\n\n";
    $message .= "Name: $name\n";
    $message .= "Address: $address\n";
    $message .= "Phone: $phone\n";
    $message .= "Email: $email\n";
    $message .= "Size: $size\n";

    // Send the email
    $headers = "From: $email";
    $result = mail($to, $subject, $message, $headers);

    if ($result) {
        echo '<script>alert("Thank you! Your order has been received.");</script>';
    } else {
        echo '<script>alert("Oops! Something went wrong. Please try again later.");</script>';
    }
}
?>
