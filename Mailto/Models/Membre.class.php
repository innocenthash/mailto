<?php
  class Membre {
public static  function enregistrement ($pseudo , $email , $pass){
    $pseudo= htmlspecialchars(trim($pseudo)) ;
    $email= htmlspecialchars(trim($email)) ;
    $pass= sha1($pass) ;
    $db = new Database() ;
    $db->insert("membre")
    ->parametters(array("pseudo","email","pass")) 
    ->execute(array($pseudo , $email , $pass)) ;


}
// verification hoe efa ao ve lay olona 
public  static function VerifierMembre($pseudo){
$pseudo = htmlspecialchars(trim($pseudo)) ;
$db = new Database() ;
   $res = $db->select("membre")
    ->where("pseudo","=") 
    ->execute(array($pseudo)) ;
    return count($res)  ;
}
public  static function VerifierConnect($pseudo ,  $pass){
  $pseudo = htmlspecialchars(trim($pseudo)) ;
 $pass = sha1($pass) ; 
  $db = new Database() ;
     $res = $db->select("membre")
      -> where ("pseudo","=") 
      -> and ("pass","=")
      -> execute ([$pseudo , $pass]) ;
      return $res  ;
  }
  public static function selecttous(){
    $db = new Database() ;
 $res = $db->select("membre") 
           ->execute(null)  ;


 // var_dump($res) ;
  return $res ;
  }
  public static function delete($id){
    $id = htmlspecialchars(trim($id)) ;
$db = new Database() ;
$res  = $db->delete("membre")
        -> where ("idpers","=")

       -> execute([$id]) ;
return $res  ;

  }
//   public static function deletesel($id){
//     $id = htmlspecialchars(trim($id)) ;
// $db = new Database() ;
// $res  = $db->select("membre")
//         -> where ("idpers","=")

//        -> execute([$id]) ;
// return $res  ;

//   }


//   public static function delete($id){
//     $id = htmlspecialchars(trim($id)) ;
// $db = new Database() ;
// $res  = $db->delete("membre")
//         -> where ("idpers","=")

//        -> execute([$id]) ;
// return $res  ;

//   }
  

  public static  function enregistrement1 ($pseudo , $email , $pass){
    $pseudo= htmlspecialchars(trim($pseudo)) ;
    $email= htmlspecialchars(trim($email)) ;
    $pass= sha1($pass) ;
    $db = new Database() ;
    $db->insert("membre")
    ->parametters(array("pseudo","email","pass")) 
    ->execute(array($pseudo , $email , $pass)) ;


}

}







?>