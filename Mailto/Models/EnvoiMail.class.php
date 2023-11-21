<?php

class EnvoiMail{
      public static function selectMail(){
          $db = new Database() ;
          $res = $db->select("membre") 
                    ->execute(null)  ;
           return $res ;
      }


}










?>