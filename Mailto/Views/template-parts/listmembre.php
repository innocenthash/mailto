<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   
    <?php       Cviews::getcss(array("all.min.css","adminpage.css","listmembre.css","bootstrap.css","bootstrap.min.css")) ?>
    <?php             Cviews::gettemplate("Modal.php") ?>
</head>
<body>
   <header>
        <!-- barre de navigation -->
        <nav class="navbar navbar-expand-md bg-orange navbar-dark fixed-top " id="nav">
            <a class="nav-link" href="<?php    echo 'http://localhost/Mailto/Caccueil/index'?>" style="color: white;"><span id="dev">  DevOn'</span>Click</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: black;font-size: 20px">A propos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#" style="color: black;font-size: 20px">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php  echo BASE_URL."/CMembre/deconnexion"        ?>" style="color: black;font-size: 20px;">Deconnexion</a>
                </li>    
              </ul>
            </div>  
          </nav>
   </header>

<div class="container-fluid">
   <div class="row" >
          <div class="col-md-12" id="colrow1">
               <p id="prow1">Membre</p>
          </div>
   </div>
   

 
    <div class="row">
        <div class="col-md-3">
            <h1 id="myadmin">MyAdmin</h1>
          <div>
              <ul >
                  <li><span><a href="http://localhost/Mailto/Caccueil/envoiemail" id="a" class="active"><p>Envoie Mail</p><i></i></a></span></li>
                  <li><span><a href="http://localhost/Mailto/Caccueil/listmembre"id="a"><p>Liste Membre</p><i></i></a></span></li>
              </ul>
          </div>
        </div>
        <div class="col-md-1">
        
        </div>
        <div class="col-md-8">
        <!-- table fampidirana liste -->
     
            <h2 class="membre">Enregistrement Membre</h2>
            <input class="form-control" id="myInput" type="text" placeholder="Search..">            
            <div class="table-responsive">
                <table class="table table-striped" id="tabe">
                    





                </table>
            </div>
          </div>
        </div>
      

 </div>
 </div>





    
<?php       Cviews::getjs(array("jquery.js","all.minjs","jquery.min.js","inscription.ajax.js","liste.js","bootstrap.js","bootstrap.min.js","sweetalert2.all.min.js")) ?>
</body>
</html>