<?php 
// echo 'test'; die();
    $name=''; $phone=''; $email=''; $query='';
    function test_input($data) 
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    
    $name= test_input($_POST['name']);
    $phone= test_input($_POST['phone']);
    $email= test_input($_POST['email']);
    $query= test_input($_POST['query']);
    $admin_name= test_input($_POST['admin_name']);
    $admin_mail= test_input($_POST['admin_mail']);
    // echo 'test';die();
    
    // error_reporting(E_ALL);
    // ini_set('display_errors', '1');
    require("../vendor/autoload.php");
    
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    
    $mail = new PHPMailer(true);
    
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    try {
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        
        $mail->Host = "smtp.gmail.com";
        // $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;
        
        $mail->Username = "prateek@wowevents.in";
        $mail->Password = "pr@teek4";
        
        $mail->setFrom('prateekpppp4@gmail.com', 'Prateek');
        $mail->addAddress($admin_mail, $admin_name);
        $mail->IsHTML(true);
        $mail->Subject = 'Form Submitted on Website';
        $mail->Body = 'Name:'.$name.'<br>Phone:'.$phone.'<br>Email: '.$email.'<br>Query:'.$query;
        
        $mail->send();
        echo 'Submitted';
    } catch (Exception $e) {
        echo 'Something Went Wrong !';
    }

?>