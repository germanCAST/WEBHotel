<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';
//Load Composer's autoloader
//require 'vendor/autoload.php';
//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'hotelumg123@gmail.com';                     //SMTP username
    $mail->Password   = 'acionadhvhkqdlhl';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    //Recipients
    $mail->setFrom('hotelumg123@gmail.com', 'Administrador');
    $mail->addAddress($_SESSION["sesion2"], $_SESSION["sesion_val2"]);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    $mail->addReplyTo('hotelumg123@gmail.com', 'Informacion');
    $mail->addCC('gcasatellanose@miumg.edu.gt');
    $mail->addBCC('germancastellanos2017@gmail.com');
    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'RESERVACION - UMG';
    $mail->Body    = 'Hola, gracias por preferirnos, cualquier duda puedes comunicarte a este correo ;)';
    $mail->AltBody = 'Att: Hotel UMG';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}