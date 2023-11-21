<?php
 class Cviews {

   public static function gettemplate($name){
  include ("Views/template-parts/".$name) ;
   }
   public static function getview($page){
include("Views/".$page) ; 
   }
   public static function getjs($js){
       for($i=0 ; $i<count($js) ; $i++){
           echo "<script src='".BASE_URL."PublicS/js/".$js[$i]."'></script>" ;
       }
   }
   public static function getcss($css){
    for($i=0 ; $i<count($css) ; $i++){
        echo "<link rel='stylesheet' href='".BASE_URL."PublicS/css/".$css[$i]."'>" ;
    }
}



 }






?>
