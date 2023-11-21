<?php
 class CMembre {
    public function index(){
      Cviews::gettemplate("primpage.php");
    }
    public function inscription(){
      Cviews::gettemplate("formulaire.php");
    }
    public function connect(){
      Cviews::gettemplate("connexion.php");
    }

    public function modal(){
      Cviews::gettemplate("Modal.php");

    }

    public function insererMembre(){
      // echo $_POST["pseudo"] ;
       $n = Membre::VerifierMembre($_POST["pseudo"]) ;

if($n==0){
   Membre::enregistrement($_POST["pseudo"],$_POST["email"],$_POST["pass"]) ;
   
   // la personne se connect si se enregistrer on cree la session 
   $_SESSION["pseudo"]=$_POST["pseudo"] ;
   echo "success" ;
  }else{

   echo "Cette membre existe deja !" ;
  }
  //Membre::selecttous($_POST["pseudo"],$_POST["email"],$_POST["pass"]) ;
    }
    public function connection(){
       Cviews::gettemplate("connectionView.php");
    }
    public function deconnexion(){
       session_destroy() ;
       header("location:".BASE_URL);
    }
    public function seconnecter(){

       $m = count(Membre::VerifierConnect($_POST["pseudo"],$_POST["pass"])) ;
     if($m==0){
         echo "notexiste" ;
    }else{
       $_SESSION["pseudo"]=$_POST["pseudo"] ;
          echo "success" ;
   }


    }
    public function show(){
    $data =  Membre::selecttous() ;
       echo json_encode($data) ;
       
    }
    public function delet(){
    Membre::delete($_POST['idpers']) ;
    
      echo "success" ;
    
   
    }

    // public function deletsele(){
    //   Membre::deletesel($_POST['idpers']) ;
      
    //     echo "success" ;
      
     
    //   }
    public function delet1(){
      Membre::delete($_POST['idpers']) ;
    //echo "success" ;
    }
    public function updat(){
     Membre::enregistrement1($_POST['pseudo'],$_POST['email'],$_POST['pass']);
       echo "success" ;
      // var_dump($n) ;
    }
 }







?>