<?php
   class CenvoiMail {
       public function AfficheMail(){
      $data =  EnvoiMail::selectMail() ;
      echo json_encode($data) ;
       }

       public function Sendmailto(){
           Cviews::gettemplate("send.php") ;
       }
   }









?>