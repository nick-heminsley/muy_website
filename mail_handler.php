<?php 
if(isset($_POST['submit'])){
    $to = $_POST['email']; // this is senders Email address
    $from = "nickh@hotmail.co.uk"; // this is my
    $first_name = $_POST['fname'];
    $subject = "Welcome To nickheminsley.co.uk";
    $message = "Hello " . $first_name .  ",\n\n" . "Thank you for signing up for my daily new letter" .  "\n\n" . "Kind Regards, ".  "\n\n" . "Nick Heminsley ";
    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>