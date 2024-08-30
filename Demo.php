<?php 
      // session_start();
      // require_once("../require/database.php");
     require_once("mailer_library.php");
       
            // mailling fuction in start-------------------------------
            //Set who the message is to be sent from
            $mail->setFrom('tauseefchoohan3@gmail.com', 'Sender');
            //Set an alternative reply-to address
            // $mail->addReplyTo('hidayatrust1788@gmail.com', 'Hidaya Trust');
            // $mail->AddCc('phpbasic2k22@gmail.com','cc');
            // $mail->AddBcc('phpbasic2k22@gmail.com','bcc');
            //Set who the message is to be sent to
            $email = "tauseefchoohan000@gmail.com";
            $mail->addAddress($email,'Reciever');
            //Set the subject line
            $mail->Subject = 'Testing Email';
            //Read an HTML message body
            $mail->msgHTML("Dear  your request has been accepted.");
            //Attach an image file (optional)
            // $mail->addAttachment('image.jpg');
            //send the message, check for errors
            if (!$mail->send()) {
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo "Congratulation mail send Successfully!";
                // header('location:index.php?deshboard&message=Mail  !&color=danger');
            ?>
            <?php
            }
        
        // mailling fuction in end---------------------------------
       ?>