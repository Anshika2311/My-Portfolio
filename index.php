<?php
    if(isset($_POST['submit'])){
        $name= $_POST["name"];
        $email = $_POST["email"];
        $sub = $_POST["sub"];
        $msg = $POST["msg"];

        $to = "anshikamaheshwari94123@gmail.com";
        $subject = "Form Submission";
        $message = "Name: ".$name."\n"."Subject: ".$sub."\n". "Wrote the following: " ."\n\n". $msg;
        $headers = "From: ".$email;

        if(mail($to, $subject , $message, $headers)){
            echo "<h1>Sent Successfully! Thank You, We will contact you shortly!</h>" ;
        }
        else{
            echo "Something went wrong!";
        }
    }

?>