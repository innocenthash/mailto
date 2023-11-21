<?php
//Rooting
class Root {
   
    public static function executer($url,$page=null){
        // var_dump($url) ;
        $nomclass  = "" ;
        $nommethode = "" ;
        // verifiena hoe misy slash ve 
        if(strpos($url , "/")>-1){
             $tab = explode("/",$url);
            //  echo (count($tab));
             $nomclass= $tab[0] ;
            //  echo $nomclass ;
              $nommethode = $tab[1] ;
              if(count($tab)==2){
    // test hoe mi existe ve lay class sy methode
        if(file_exists("Control/".$nomclass.".class.php")){
         // echo "misy" ;
            if(method_exists($nomclass,$nommethode)){
                // echo "misy" ;
                // execution zay ao anatiny lay class sy methode hahafahany maka zay ao anatiny
                $reflect = new ReflectionMethod($nomclass,$nommethode) ;
                $reflect->invoke(new $nomclass) ;
            }else{
                Cviews::gettemplate("erreur404.php");
            }
        }else{
            Cviews::gettemplate("erreur404.php");

        }
    
              }
              else{
                   $params = array() ;
                   $j=0 ;
                   for($i=2;$i<count($tab);$i++){
                       $params[$j]= $tab[$i];
                       $j++;
                    //    var_dump($params) ;

                   }

                   if(file_exists("Control/".$nomclass.".class.php")){
                    //echo "misy" ;
                      if(method_exists($nomclass,$nommethode)){
                          // echo "misy" ;
                          // execution zay ao anatiny lay class sy methode hahafahany maka zay ao anatiny
                          $reflect = new ReflectionMethod($nomclass,$nommethode) ;
                          $reflect->invokeArgs(new $nomclass,$params) ;
                      }else{
                        Cviews::gettemplate("erreur404.php");
                      }
                  }else{
                    Cviews::gettemplate("erreur404.php");
          
                  }

              }


        }
        
        else{
          
            if(file_exists("Control/".$url.".class.php")){
               
                 
                      // echo "misy" ;
                      // execution zay ao anatiny lay class sy methode hahafahany maka zay ao anatiny
                      $reflect = new ReflectionMethod($url,"index") ;
                      $reflect->invoke(new $url) ;
              
              }else{
                Cviews::gettemplate("erreur404.php");
              }

        }
    }
}
    

















?>