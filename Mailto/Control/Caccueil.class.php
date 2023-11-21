<?php
    class Caccueil {

      public function indexmail(){
        if(isset($_SESSION["pseudo"])){

          Cviews::gettemplate("mail.php") ;
        }
      }
      public function mailalefa(){
        Cviews::gettemplate("send.php") ;
      }
        public function index(){
      if(isset($_SESSION["pseudo"])){
        Cviews::gettemplate("adminpage.php") ;
        Cviews::gettemplate("listmembre.php") ;
        Cviews::gettemplate("envoiemail.php") ;
      }else{
        header("location:".BASE_URL) ;
      }

        }
        public function formulaire(){
          Cviews::gettemplate("formulaire.php") ;
        }
        public function envoiemail(){
          Cviews::gettemplate("envoiemail.php");
        }
        public function listmembre(){
          Cviews::gettemplate("listmembre.php") ;
        }
        public function conn(){
          if(isset($_SESSION["pseudo"])){
            Cviews::gettemplate(".php") ;
          }else{
            header("location:".BASE_URL) ;
          }
        }
    }










?>