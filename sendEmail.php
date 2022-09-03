<?php
session_start();


include "sendEmails.php";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$date = date("l, M-d-Y");
$sub = "A Potential email has been sent"; 
$body = "<!DOCTYPE html>
<html lang='en'>

<head>
<meta charset='UTF-8'>
<meta name='viewport' content='width=device-width, initial-scale=1.0'>
<meta name='author' content='Bobo Wab'>
<title>EthioTutoring Email</title>
</head>

<body style ='
height: 100%;
font: 400 15px/1.5 sans-serif;
'>

<header class='nonav' style='
background-color: #8f6210;
height: 100px;
color: #fff;
text-align: center;'>
    <div class='container' style='
    width: 94%;
    margin: 0 auto;
    max-width: 800px;'>
        <h1 style=' margin: 0;
        line-height: 100px;'>EthioTutoring</h1>
    </div>
</header>

<main style=' padding: 4rem 0 10rem 0;'>
    <div class='container' style='
    width: 94%;
    margin: 0 auto;
    max-width: 800px;'>

        <h1 class='pge__title' style='
        margin-top: 2rem;
        text-transform: uppercase;
        text-align: center;
        color: #393c50;
        font-size: 38px;
        line-height: 1.2;'>Potential Client Notification</h1>
        
        <div class='bg_light mb10' style='
        margin-bottom: 10px;
        background-color: #fffcfe;
        padding: .8rem;
        border-radius: 5px;
        border: 1px solid rgba(0, 0, 0, .1);'>
            <p style='margin-top: 0;
            padding: 1rem;The 
            text-align: left;'>Client name:<br>
                <span style='
                font-size: 25px;
                font-weight: 50;'>$name</span>.<br>
                Client Email: $email<br>
                This email was sent on: $date<br><br>
        
                $message
                <br>
            <br>Regards,<br>EthioTutoring System</p>
        </div>
    </div>
</main>

</body>

</html>";

sendEmail('Amen','amentamene@gmail.com',$sub,$body);
sendEmail('EthioTutoring','ethiotutoringcompany@gmail.com',$sub,$body);
$_SESSION['success'] = "Email Sent Successfully. We will get back to you <strong>ASAP</strong>.<br> Thanks";
$destination = $_SERVER['HTTP_REFERER']."#request";
header('Location: ' . $destination);
// }
?>