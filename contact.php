<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = 'md.mahahadi228@gmail.com'; // Replace with your email address
    $subject = 'Contact Form Submission';
    $headers = "From: ".$name." <".$email.">". "\r\n" .
                "Reply-To: ".$email."\r\n" .
                "X-Mailer: PHP/" . phpversion();
    $body = "Name: ".$name."\nEmail: ".$email."\nSubject: ".$subject."\nMessage: ".$message;
    
    if(mail($to, $subject, $body, $headers)) {
        echo '<div class="success">Thank you for contacting us!</div>';
    } else {
        echo '<div class="error">Sorry, there was an error sending your message. Please try again later.</div>';
    }
}
?>
