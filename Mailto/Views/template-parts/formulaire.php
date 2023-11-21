<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>
    <?php       Cviews::getcss(array("Formulaire.css","bootstrap.css","bootstrap.min.css")) ?>
</head>
<body class="body">


    


<!-- formulaire -->
         
<div class="container">
   <div class="row">
      <div class="col-3">

      </div>
      <div class="col-6">
        <form class="was-validated" >
         <h2 class="inscrition">INSCRIPTION</h2>
            <div class="form-group">
                <label for="pwd">Pseudo:</label>
                <input type="text" class="form-control" id="pseudo" placeholder=" votre pseudo"  required>
                <!-- <div class="valid-feedback">Valid.</div> -->
                
              </div>
        
            <div class="form-group">
              <label for="uname">Email:</label>
              <input type="email" class="form-control" id="email" placeholder="Votre email"  required>
              <!-- <div class="valid-feedback">Valid.</div> -->
              
            </div>
            <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pswd" required>
              <!-- <div class="valid-feedback">Valid.</div> -->
             
            </div>
        
            
        
            
           <a href="#" class="  btn btn-success btn-block" id="btn-inscription">ENREGISTRER</a>
           <a href="<?php    echo 'http://localhost/Mailto/CMembre/connect'        ?>" class="btn" id="btn-connect" style="color: white;">Se connecter</a>
           <a href="#" class="btn btn-danger" id="btnmdp">Mot de pass oublié</a>
          </form>
          
        
      </div>
      <div class="col-3">

    </div>
   </div> 
</div>













<?php       Cviews::getjs(array("jquery.js","inscription.ajax.js","bootstrap.js","bootstrap.min.js","sweetalert2.all.min.js")) ?>

    
</body>
</html>