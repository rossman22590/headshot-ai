<?php
    if(isset($_POST['btn-send']))
    {

        $subject = $_POST['subject'];
        $email = $_POST['email'];
        $message = "Name: " . $_POST['name'] . "\r\n\r\n";
        $message .= "Message: " . $_POST['message'] . "\r\n\r\n";
        $message .= "From: " . $_POST['email'] . "\r\n"; // this is the sender's Email address


        if(empty($email) || empty($subject) || empty($message))
        {
                header('location:contact-us.php?error');
        }
        else
        {
            $to = "brian@headshotai.studio";

            if(mail($to, $subject, $message, $email, $name))
            {
                header('location:contact-us.php?success');
            }
        }
    }

    else 
    {
        header('location:contact-us.php');
    }

?>