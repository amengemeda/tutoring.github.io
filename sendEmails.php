<?php
        //Load dependencies from composer
        require_once(__DIR__."/vendor/autoload.php");

        // Alias the League Google OAuth2 provider class
        use League\OAuth2\Client\Provider\Google;
        //Import PHPMailer classes into the global namespace
        use PHPMailer\PHPMailer\OAuth;
        use PHPMailer\PHPMailer\PHPMailer;

        //SMTP needs accurate times, and the PHP time zone MUST be set
        date_default_timezone_set('Etc/UTC');
        
        //Creating a PHPmailer Instance
        $mail = new PHPMailer();

        //Tell PHPMailer to use SMTP
        $mail->isSMTP();

        //Enable SMTP debugging
        // 0 = off (for production use)
        $mail->SMTPDebug = 0;

        //Set the hostname of the mail server
        $mail->Host = 'smtp.gmail.com';

        //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
        $mail->Port = 587;

        //Set the encryption system to use - ssl (deprecated) or tls
        $mail->SMTPSecure = 'tls';

        //Use SMTP authentication
        $mail->SMTPAuth = true;

        //Set AuthType
        $mail->AuthType = 'XOAUTH2';


        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );

        //Ask for HTML-friendly debug output
        //Not needed under production
        $mail->Debugoutput = 'html';

        //authentication details
        //User Email to use for SMTP authentication - user who gave consent to our app
        $email = "amentamene777@gmail.com";

        //Obtained From Google Developer Console
        $clientId = "1008901332551-0impplcg7srjp8hq8p7dvu5hp8pt6iav.apps.googleusercontent.com";

        //Obtained From Google Developer Console
        $clientSecret = "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";

        //Obtained By running get_oauth_token.php after setting up APP in Google Developer Console.
        //Set Redirect URI in Developer Console as [https/http]://<yourdomain>/<folder>/get_oauth_token.php
        // eg: http://localhost/phpmail/get_oauth_token.php
        $refreshToken = "1//03_qRwZOeoxoRCgYIARAAGAMSNwF-L9IrGOWoS7jdPigL-ld53_sKAcbiGylmU8fodKM4Ft1BHKPhbbHFdKQU_pbDKSXYl_7wsYo";
        
        ## No longer needed
        // $mail->Username = "shopcarata@gmail.com";
        // $mail->Password = "Carata is ready 1";

        //Set who the message is to be sent from
        $mail->setFrom($email, 'EthioTutoring');


        //Create a new OAuth2 provider instance
        $provider = new Google(
            [
                'clientId' => $clientId,
                'clientSecret' => $clientSecret,
            ]
        );

        //Pass the OAuth provider instance to PHPMailer
        $mail->setOAuth(
            new OAuth(
                [
                    'provider' => $provider,
                    'clientId' => $clientId,
                    'clientSecret' => $clientSecret,
                    'refreshToken' => $refreshToken,
                    'userName' => $email,
                ]
            )
        );
       
        function save_mail($mail) {
            //You can change 'Sent Mail' to any other folder or tag
            $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";

            //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
            $imapStream = imap_open($path, $mail->Username, $mail->Password);

            $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
            imap_close($imapStream);

            return $result;
        }

        //send sending email
        //the receiver, the reciever email, the subject, message, and the attachment, and replyto
        function sendEmail($recName, $recEmail, $sub, $MsgToSend, $attachment = false, $replyTo = false){
            $mail = $GLOBALS['mail'];
            $mail->addAddress($recEmail, $recName);
            $mail->Subject = $sub;
            if($replyTo !== false && !preg_match('/^\s*$/', $replyTo)){
                $mail->addReplyTo($replyTo);
            }
            $mail->msgHTML($MsgToSend);

            $mail->AltBody = $mail->html2text($MsgToSend);
            if($attachment !== false && !preg_match('/^\s*$/', $attachment)){
                $mail->addAttachment($attachment);
            }

            if($mail->send()){
                return true;
            }else{
                return false;
            }
        }


?>