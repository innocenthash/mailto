
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php             Cviews::getcss(array("bootstrap.css","bootstrap.min.css","Accueil.css","all.min.css")) ;?>
    <title>Document</title>
</head>
<body>

    <div class="container">
        <h3 >ENVOIE MAIL</h3>
        <div class="table-responsive" >
            <table class="table table-bordered table-striped" id="mail">

                
            

           </table>

        </div>

    </div>
    <?php   Cviews::getjs(array("jquery.js","email.ajax.js","inscription.ajax.js","bootstrap.js","bootstrap.min.js","sweetalert2.all.min.js","all.min.js")) ; ?>
</body>
</html>


