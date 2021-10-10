<?php

include "config.php";

if (isset($_POST['submit_order'])){
    $email = trim($_POST['email']);
    $nameOfPurchaser = trim($_POST['nameOfPurchaser']);
    $deliveryAddress = $_POST['deliveryAddress'];
    $contectPerson = $_POST['contectPerson'];
    $chooseBottle = $_POST['chooseBottle'];
    $quantity = $_POST['quantity'];

    $qy = " insert into tblorders(email,purchaser,deliveryAddress,contactPerson,bottleSize,bottleQuantity) values ('$email','$nameOfPurchaser','$deliveryAddress','$contectPerson','$chooseBottle','$quantity') ";
    mysqli_query($con,$qy);


    $email = trim($_POST['email']);
    $name = trim($_POST['nameOfPurchaser']);
    $msg = "$name has sent you an order.";

    // Check for Header Injections
    function has_header_injection($str) {
        return preg_match( "/[\r\n]/", $str );
    }

    // Check to see if $name or $email have header injections
    // if (has_header_injection($name) || has_header_injection($email)) {
        
    //     die(); // If true, kill the script
        
    // }

    // Add the recipient email to a variable
    $to	= "engrjunaidali0@gmail.com";
    
    // Create a subject
    $subject = "$name sent a message via your contact form";    

    // Construct the message
    $message .= "Name: $name\r\n";
    $message .= "Email: $email\r\n\r\n";
    $message .= "Message:\r\n$msg";

    $message = wordwrap($message, 72); // Keep the message neat n' tidy

    // Set the mail headers into a variable
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "From: " . $name . " <" . $email . ">\r\n";
    $headers .= "X-Priority: 1\r\n";
    $headers .= "X-MSMail-Priority: High\r\n\r\n";

    
    // Send the email!
    mail($to, $subject, $message, $headers);
			
    

    header('location:orderSubmit.php');
    
}

?>