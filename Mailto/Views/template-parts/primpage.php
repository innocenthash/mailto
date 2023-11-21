<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php             Cviews::getcss(array("bootstrap.css","bootstrap.min.css","Accueil.css","all.min.css")) ;?>
    <title>DevOn'Click</title>
</head>
<body>
   <header>
        <!-- barre de navigation -->
        <nav class="navbar navbar-expand-md bg-rgb(145, 145, 145) navbar-dark fixed-top" id="nav">
            <a class="navbar-brand" href="#"><span>  DevOn'</span>Click</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span> 
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav ml-auto">
                
                <li class="nav-item">
                  <a class="nav-link"  id="a"  href="#">A propos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="a" href="#">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="a" href=" <?php echo 'http://localhost/Mailto/CMembre/inscription' ?>">S'inscrire</a>
                </li>    

              </ul>
            </div>  
          </nav>
   </header>

   <!-- contenue -->

   
   <div class="container-fuid">
       <!-- contenue1 -->
       <div class="row">
           <div class="col-md-4">

           </div>
           <div class="col-md-4">
            <div class="jumbotron">
                <p>SendMail</p>
            </div>
           </div>
           <div class="col-md-4">

        </div>
       </div>
 
           <!-- contenue 2 -->
           <div class="row">
               <div class="col">
                        
               </div>
           </div>

   </div>
   
       
          

   
  


   










   <footer>

   </footer>
   <?php             Cviews::getjs(array("jquery.js","inscription.ajax.js","bootstrap.js","bootstrap.min.js","sweetalert2.all.min.js","all.min.js")) ; ?>
</body>
</html>