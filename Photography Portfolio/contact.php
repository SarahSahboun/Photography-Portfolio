<?php
use PHPMailer\PHPMailer\phpmailer;

if(isset($_POST['name']) && isset($_POST['email'])){
    $name = filter_input(INPUT_POST, 'name');
    $email = filter_input(INPUT_POST, 'email');
    $subject = filter_input(INPUT_POST, 'subject');
    $message = filter_input(INPUT_POST, 'message');
    /*echo "subject".$subject;
    echo "name".$name;
    echo "email".$email;
    echo "message".$message; */ // used them to check the value-passing-thingy
    
    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();

    //smtp settings
    $mail->isSMTP();
    $mail->Host = "smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "YOUR GMAIL ACCOUNT@GMAIL.COM";
    $mail->Password = "YOUR GMAIL PASSWORD";
    $mail->Port = 587; //465
    $mail->SMTPSecire = "ssl";

    //email settings
    $mail->isHTML(true);
    $mail->SetFrom($email, $name);
    $mail->addAddress("YOUR GMAIL ACCOUNT@GMAIL.COM");
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $message;

    if($mail->send()){
        $status = "success";
        $response = "email was sent!";
    }
    else{
        $status = "failed";
        $response = "something is wrong : <br>" .$mail->ErrorInfo;
    }
    exit(json_encode(array("status" => $status, "response" => $response)));
}
?>