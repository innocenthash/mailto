<?php
session_start() ;
include("Core/Autoload.php") ;

if(isset($_GET["action"])){
Root::executer($_GET["action"],"erreur404.php") ;
}else{
   Cviews::gettemplate("primpage.php");
}





?>