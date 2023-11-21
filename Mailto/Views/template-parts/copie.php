<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <?php       Cviews::getcss(array("connexion.css","bootstrap.css","bootstrap.min.css","all.min.css")); ?>
</head>
<body class="body">

    <header>
        <!-- barre de navigation -->
       
   </header>



    <div class="container">
        <div class="row">
           <div class="col-3">
     
           </div>
           <div class="col-6">
             <form class="was-validated" >
                <h3 class="seconnecter" > se connecter</h3>
                 <div class="form-group">
                     <label for="pwd">Pseudo:</label>
                     <input type="text" class="form-control" id="pseudo" placeholder=" votre pseudo"  required>
                     <div class="valid-feedback">Valid.</div>
                     
                   </div>
             
                
              
                 <div class="form-group">
                   <label for="pwd">Password:</label>
                   <input type="password" class="form-control" id="pass" placeholder="Enter password" required>
                   <div class="valid-feedback">Valid.</div>
                  
                 </div>
             
                 
             
                 
                <a href="" class="btn btn-success btn-block" id="btn-connect"> Se Connecter</a>
               </form>
             
           </div>
           <div class="col-3">
     
         </div>
        </div>
     </div>
     <?php             Cviews::getjs(array("jquery.js","inscription.ajax.js","bootstrap.js","bootstrap.min.js","sweetalert2.all.min.js","all.min.js")) ;?>
</body>
</html>