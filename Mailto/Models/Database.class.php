<?php
// resaka connection aminy base de donnee
class Database {
private $query , $db ;
private static  $host,$dbname,$user,$pass ;
public static function init($host,$dbname,$user,$pass){
// initialisation de base de donne
//"mysql:host=localhost;dbname=test" , "root" , ""
self::$host=htmlspecialchars(trim($host)) ;
self::$dbname=htmlspecialchars(trim($dbname)) ;
self::$user=htmlspecialchars(trim($user)) ;
self::$pass=htmlspecialchars(trim($pass)) ;


}
public function db(){
// pour se connecter au db 
if(!isset($this->db)){
    $this->db = new PDO ("mysql:host=".self::$host.";dbname=".self::$dbname,self::$user,self::$pass);
return $this->db ;

}

}
 public function select ($table){
//SELECT*FROM $table 
$table=htmlspecialchars(trim($table)) ;
$this->query =" SELECT*FROM " .$table ;
return $this ;

 }

 public function delete ($table){
   //DELETE FROM $table
   $table=htmlspecialchars(trim($table)) ;
   $this->query = " DELETE FROM " .$table ;
   return $this ;


 }


 public function where ($fields,$operand){
    //  where id = ?
  $fields = htmlspecialchars(trim($fields));
  $operand = htmlspecialchars(trim($operand));
  $this->query = $this->query." WHERE ".$fields." ".$operand." ? " ;
   return $this ;


 }
 public function and($fields,$operand){
  $fields = htmlspecialchars(trim($fields));
  $operand = htmlspecialchars(trim($operand));
  $this->query = $this->query." and ".$fields." ".$operand." ? " ;
   return $this ;

 }
 public function set($fields,$operand){
  $fields = htmlspecialchars(trim($fields));
  $operand = htmlspecialchars(trim($operand));
  $this->query = $this->query." SET ".$fields." ".$operand." ? " ;
   return $this ;
 }

 public function insert($table){
     //INSERT INTO $table
     $table=htmlspecialchars(trim($table)) ;
     $this->query = " INSERT INTO ".$table ;

     
return $this ;
 }
 public function update($table){
  //$table=htmlspecialchars(trim($table)) ;
  $this->query = " UPDATE " .$table;
  return $this ;
 }

 public function parametters($fields){
$champs = "(".$fields[0] ;
for($i=1;$i<count($fields);$i++){
     $champs.= ",".$fields[$i];
}
$trous = " VALUES (";
for($i=0;$i<count($fields);$i++){
$trous.= "?," ;
}
$trous = trim($trous,",").")" ;
$this->query =  $this->query .$champs." ) ".$trous ;
return $this  ;
 }
 public function execute($value){
  // manao requette preparer
    //testena lay requette hoe select ve sa insert update delete

    //testena voalohany hoe mi contenir insert ve 
if(strpos($this->query,"INSERT")>-1){
    if($value!=null){
        $req = $this->db()->prepare($this->query);
        $req->execute($value) ;
    }else{
        echo "Veuillez entrer les valeurs" ;
    }
}else if(strpos($this->query,"SELECT")>-1){
  if(strpos($this->query,"?")){
    $res = $this->db()->prepare($this->query);
    $res->execute($value) ;
    return $res->fetchAll(PDO::FETCH_OBJ) ;
  }else{
    $res = $this->db()->query($this->query);
    
  }
  return $res = $res->fetchAll(PDO::FETCH_OBJ) ;
  
} else if (strpos($this->query,"DELETE")){


  if(strpos($this->query,"?")){
    $res = $this->db()->prepare($this->query);
    $res->execute($value) ;
    return $res ;
  }else{
    $res = $this->db()->query($this->query);
    
  }
  
} 

 }





 

}
Database::init("localhost","espace","root","");
// $db = new Database() ;
//  $db->insert("personne")
//     ->parametters(array("nom","prenom","class")) 
//     ->execute(array("lita","koto","3")) ;

//  $db = new Database() ;
//  $res = $db->select("membre")
//            ->execute(null) ;
//   var_dump($res) ;


 

?>