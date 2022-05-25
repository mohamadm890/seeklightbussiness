<?php
    require_once "PHPMailer\PHPMailer.php";
    require_once "PHPMailer\SMTP.php";
    require_once "PHPMailer\Exception.php";
        
    
     use PHPMailer\PHPMailer\PHPMailer;

    if (isset($_POST['name']) && isset($_POST['email'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $body = $_POST['body'];
        $language = $_POST['language'];
        $city  =  $_POST['city'];
        $phone  =  $_POST['phone'];
        $name  =  $_POST['name'];

        $mail = new PHPMailer(true);

        
        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "smtp.gmail.com";
        $mail->SMTPAuth = true;
        $mail->Username = "ragoolio777@gmail.com";
        $mail->Password = 'nzhblrqmxuufltdg';
        $mail->Port = 465; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom($email, $name);
        $mail->addAddress("mohamad890098@gmail.com");
        $mail->Subject = $subject ;
        $mail->Body = "<h1>Name: </h1>".  $name ."<h1>Test results :</h1> " . $subject ."<br></br>". "<h1>Course:</h1> ". $language ."<br></br>".  "<h1>City:</h1> " .   $city.    "<br></br>". "<h1>Phone Number:</h1> " . $phone;
        if ($mail->send()) {
            $status = "success";
            $response = "Email is sent!";
        } else {
            $status = "failed";
            $response = "Something is wrong: <br><br>" . $mail->ErrorInfo;
        }

        exit(json_encode(array("status" => $status, "response" => $response)));
    }
?>
