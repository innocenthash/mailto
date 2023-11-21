<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php             Cviews::getcss(array("bootstrap.css","bootstrap.min.css")) ?>
    
</head>
<body>
  
<div class="container">
  <h2>Inscription</h2>
  <form >
    <div class="form-group">
      <label >Pseudo:</label>
      <input type="text" class="form-control" id="pseudo" placeholder="Enter Pseudo" >
    </div>
    <div class="form-group">
      <label >Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter Email" >
    </div>
    <div class="form-group" >
      <label >Mot de pass</label>
      <input type="password" class="form-control" id="pass" placeholder="Enter password" >
    </div>
   <a href="#" class="btn btn-primary" id="btn-inscrition">enregistrement</a>
   <a href= "<?php echo BASE_URL.'CMembre/connection'           ?>"    >Se connecter</a>
  </form>
</div>







    <?php             Cviews::getjs(array("jquery.js","inscription.ajax.js","bootstrap.js","bootstrap.min.js","sweetalert2.all.min.js")) ?>
</body>
</html>