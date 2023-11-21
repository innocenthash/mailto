<?php

function charger($classe){
  if(file_exists("Control/".$classe.".class.php")){
      require "Control/".$classe.".class.php" ;
  }
  else if(file_exists("Core/".$classe.".class.php")){
    require "Core/".$classe.".class.php" ;
}
else if(file_exists("Models/".$classe.".class.php")){
    require "Models/".$classe.".class.php" ;
}
else if(file_exists("Publics/".$classe.".class.php")){
    require "Publics/".$classe.".class.php" ;
}
else if(file_exists("Views/".$classe.".class.php")){
    require "Views/".$classe.".class.php" ;
}
else if(file_exists("includes/".$classe.".class.php")){
    require "includes/".$classe.".class.php" ;
}



}
spl_Autoload_register("charger") ;
define("BASE_URL","http://localhost/Mailto/");








?>