<?php

    require 'admin/connect.php';


    if ( !empty($_POST)) {
         $name = $_POST['name'];
         $email = $_POST['email'];
         $subject = $_POST['subject'];
         $message = $_POST['message'];



        $sql = "INSERT INTO messages (name,email,subject,message)
        VALUES ('$name','$email','$subject','$message')";

        if ($conn->query($sql) === TRUE) {
          echo "New record created successfully";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

        

    }
        
header("Location:contact.php");
?>
