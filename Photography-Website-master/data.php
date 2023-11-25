<?php

session_start();
if (isset($_POST['name'])) {

    if (empty($_POST['name']) || empty($_POST['service']) || empty($_POST['contact-email'])) {
        $error = "All the field is required";
        $_SESSION['error'] = $error;
        header("Location: u.php");
    } else if (!filter_var($_POST['contact-email'], FILTER_VALIDATE_EMAIL)) {
        $error = "Enter your valid email address";
        $_SESSION['error'] = $error;
        header("Location: index.php");
    } 
     else {

        //connect to the database
        $conn = mysqli_connect("localhost", "root", "", "photography");
        $name = $_POST['name'];
        $email = $_POST['contact-email'];
        $service = $_POST['service'];
        
        $is_done = $conn->query("INSERT INTO `contact_us`( `name`, `email`, `service` ) VALUES( '$name','$email','$service' )");
        if ($is_done == TRUE) {
            $success = "success";
            $_SESSION['success'] = $success;
            header("Location: index.php");
        }
    }
}
