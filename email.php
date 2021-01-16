<?php
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $phone=$_POST['number'];
        $msg=$_POST['comments'];

        $to='piyushj572@gmail.com'; // Receiver Email ID, Replace with your email ID
        $subject='Form Submission';
        $message="Name :".$name."\n"."Phone :".$phone."\n"."Wrote the following :"."\n\n".$msg;
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo '<script>alert("Thank You! Your Form is Submitted Successfully.")</script>';
        }
        else{
            echo '<script>alert("Something went wrong!")</script>';
        }
    }
?>