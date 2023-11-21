<?php

class Croot
 {

    public function index(){

     Cviews::getview("home-view.php") ;
    }
 public function connecter(){
    echo "mandeha" ;
 }
 public function appelle($nom,$prenom){

    echo "nom ".$nom."prenom ".$prenom ;
 }



}






?>