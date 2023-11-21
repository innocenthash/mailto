<?php
use PHPMailer\PHPMailer\PHPMailer ;
use PHPMailer\PHPMailer\SMTP ;
use PHPMailer\PHPMailer\Exception ;

if(isset($_POST['email_data'])){

require_once 'includes/PHPMailer.php';
require_once 'includes/SMTP.php' ;
require_once 'includes/Exception.php';


 
   
 
 $mail = new PHPMailer ;

 $output="" ;


 foreach($_POST['email_data'] as $row){
     //configuration 
    // $mail->SMTPDebug=SMTP::DEBUG_SERVER ;
     //ON CONFIGURE SMTP
     $mail->IsSMTP() ;
     $mail->HOST = "localhost" ;
     $mail->Port ="1025" ;
     $mail->Charset="utf-8";
     
     //desitinataire
     $mail->addAddress($row["email"],$row["pseudo"]) ;
     //expediteur
     $mail->SetFrom('innocent@gmail.com') ;
     $mail->Subject="compte rendu de la reunion d'hier" ;
     $mail->Body ="miaraha tompoko 
     manasa anao ampa,ajana izahay" ;
   if($mail->Send() ) {
       echo "message envoyé" ;
   }else{
       echo "message non envoyé" ;
   }
   
        
 

}


} 










?>
