<?php
 $name =$_POST["name"];
 $email = $_POST["email"];
 $tel = $_POST["tel"];
 $webSite = $_POST["webSite"];
 $message = $_POST["message"];
// echo $name;
 use PHPMailer\PHPMailer\PHPMailer;
include_once 'vendor/autoload.php';
/* if(!empty($email)&& !empty($message)){ //if email end message not empty
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){ //if user entred email is valid
        $receiver = "mailto:bilel.m@hosteur.pro"; //email address receiver
        $subject = "Form: $name <$email>"; //subject of the email.Subject looks like form: bilel <missawi.bile123@gmail.com>
        $body = "Name: $name\nEmail: $email\nPhone: $tel\nWebsite: $webSite\n\nMessage: $message\n\nRegards,\n$name";
        $sender = "form: $email"; //sender email
        $mail=mail($receiver,$subject,$body,$sender);
        if($mail== true){ //mail() is inbuilt php function to send mail
            echo "Your message has been sent";
        }else{
            echo"Sorry, failed to send your message!";
        }
    }
    else{
        echo "Enter a valid email adress!";
    }
 }else{
    echo "email end message field is required!";
 }*/
 if(!empty($email)&& !empty($message)){
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
 $mail = new PHPMailer;
 $mail->isSMTP();
// $mail->SMTPDebug = 3;
 $mail->Host ="smtp.exchange-swiss.ch";
 //if($boite_mail_client["mail_ssl"]==1){
   $mail->SMTPSecure='tls';
 //}*
 //$mail->SMTPSecure='tls';

 $mail->Port =587;
 $mail->SMTPAuth = true;
 $mail->Username =$email;
 $mail->Password ="pknm4E3e!kVc";
 $mail->setFrom($email);
 $mail->addreplyto('test@hostinger-tutorials.fr', 'Votre nom');
 $mail->addAddress("fotoyar@mexcool.com");
 $mail->Subject =$message;
 //$mail->msgHTML(utf8_decode($S_TEMPLATE));
 $mail->Body = 'Ceci est le contenu du message en texte clair';
 //var_dump($mail);

 //$mail->addAttachment('test.txt');
// $mail->addCustomHeader('MIME-Version: 1.0');
 //$mail->addCustomHeader('Content-Type: text/html; charset=ISO-8859-1');
 if (!$mail->send()) {
  // echo json_encode(array('result'=>'erreur_mail'));
  echo "Sorry, failed to send your message";
  //echo"$mail->ErrorInfo";

 } else {
   //echo json_encode(array('result'=>"ok"));
   echo "your message is sent";
 }
}else{
    echo "Enter a valid email adress";
}
}
else{
    echo "email and message feild is required ";
}
?>