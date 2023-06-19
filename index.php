<?PHP

 require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

$mailer =new PHPMailer();
$mailer->isSMTP();
$mailer->host = 'noha@gmiail.com';

$mailer->SMTPauth =true;
$mailer->username ='noha@gmiail.com';
$mailer->password = 'nooh33';
//$mailer->SMTPSecure = PHPMAILER::ENCRYPTION_SMTPS;
$mailer->SMTPSecure ='tls'; //or we can use ssl wher port equal to 465
$mailer->port = 587;


$mailer->setfrom (address:'noha@example.com',name:'ali');
$mailer->addreplyto (address:'noha@gmail.com',name:'noha');

$mailer->addaddress (address:'noha@gmail.com',name:'nona');
                        //////////////////

$mailer->subject ='this is s respond from us ';
$mailer->isHTML(true);
$mailer->Subject = "Subject Text";
$mailer->Body = "<i>Mail body in HTML</i>";
$mailer->AltBody = "This is the plain text version of the email content";
                          ////////////////
 $mailer->addAttachment('/Pictures/hhh.jpg', 'hhh.jpg');                          

if($mailer->send()){
  echo 'well';
}else{
  echo ' noo';
}

















