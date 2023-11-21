$(document).ready(function() {
    afficher();
    //affichermail();
    $("#btn-inscription").click(function() {
        afficher();
        //affichermail();
        if ($("#pseudo").val() != "" && $("#email").val() != "" && $("#pass").val() != "") {
            //eto no manao ajax 
            // hi envoyer na donner makan aminy php


            $.ajax({
                url: "http://localhost/Mailto/CMembre/insererMembre",
                type: "post",
                data: { "pseudo": $("#pseudo").val(), "email": $("#email").val(), "pass": $("#pass").val(), },
                //    donner miverina

                success: function(data) {
                    if (data.trim() == "success") {

                        afficher();
                        // affichermail();
                        location.href = "http://localhost/Mailto/Caccueil/indexmail";

                    } else if (data.trim() == "success") {

                    } else if (data.trim() == "Cette membre existe deja !") {
                        //    alert("Ce membre existe deja !!!") ;
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'Votre Pseudo existe déjà !',
                            showConfirmButton: false,
                            timer: 2000,
                        });
                    }



                },

                error: function() {
                    alert("Erreur de connexion au serveur !!!");
                }



            })

        } else {
            // alert("Veuillez remplir tous les champs !!! ") ;
            $("form input").css("border", "1px solid red");
            Swal.fire({
                position: 'center',
                icon: 'error',
                title: ' Veiullez remplir tous les champs !!! ',
                showConfirmButton: false,
                timer: 2000,
            });
        }
    });
    // connection 
    $("#btn-connect").click(function() {
        if ($("#pseudo").val() != "" && $("#pass").val() != "") {
            $.ajax({
                url: "seconnecter",
                type: "post",
                data: { "pseudo": $("#pseudo").val(), "pass": $("#pass").val() },
                //    donner miverina
                success: function(data) {
                    if (data.trim() == "success") {

                        location.href = "http://localhost/Mailto/Caccueil/index";



                    } else if (data.trim() == "notexiste") {
                        //alert("inscrivez-vous!!!") ;
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: ' Votre Pseudo ou Mot de pass est incorrect ',
                            showConfirmButton: true,
                            timer: 20000,
                        });

                    } else if (data.trim() == "okey") {
                        alert("okey");
                    }

                },
                error: function() {
                    alert("Erreur de connexion au serveur !!!");
                }




            })

        } else {
            // alert("Veiullez remplir tous les champs !!!") ;

            Swal.fire({
                position: 'center',
                icon: 'error',
                title: ' Veiullez remplir tous les champs !!! ',
                showConfirmButton: false,
                timer: 2000,
            });
        }

    });

    //Delete


    $(document.body).on('click', '.supp', function() {

        //alert("okey") ;

        var that = $(this);
        var id = that.attr('id');
        var donne = 'idpers=' + id;

        $.ajax({

            url: "http://localhost/Mailto/CMembre/delet",
            type: "post",
            data: donne,
            //    donner miverina
            success: function(data) {

                if (data.trim() == "success") {


                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: ' Supprimer ',
                        showConfirmButton: false,
                        timer: 2000,
                    });
                }
                afficher();
            },

        });


    });
    $(document.body).on('click', '#mis', function() {
        var that = $('.supp');
        var id = that.attr('id');
        var donne = 'idpers=' + id;
        $.ajax({

            url: "http://localhost/Mailto/CMembre/delet1",
            type: "post",
            data: donne,
            //    donner miverina
            success: function(data) {
                afficher();
            }
        });


        $.ajax({
            url: "http://localhost/Mailto/CMembre/updat",
            type: "post",
            data: {


                //"idpers" : $('#idpers').val(),
                "pseudo": $('#pseudo').val(),
                "email": $('#email').val(),
                "pass": $('#pass').val(),
            },
            success: function(data) {
                $('#myModal').modal('hide');
                if (data.trim() == "success") {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: ' Membre Bien Modifier ! ',

                        showConfirmButton: true,
                        timer: 2000,
                    })
                }
                afficher();

            },
        })
    })
})

function afficher() {
    $.ajax({

        url: "http://localhost/Mailto/CMembre/show",
        type: "post",
        dataType: "json",
        //    donner miverina
        success: function(data) {

            var table = " <tbody><thead><tr><th>id</th><th>pseudo</th><th>e-mail</th><th>mot de pass</th></tr></thead>";
            for (let i = 0; i < data.length; i++) {
                var s = ' <td colspan="3"></td><tr><td> < button type = "button" class = "btn btn-info email_button"   id = "bulk_email"   data - action = "bulk" > send bulk < /button></td > < /tr>';
                var table = table + "<tr><td>" + data[i].idpers + "</td><td>" + data[i].pseudo + "</td><td>" + data[i].email + "</td><td>" + data[i].pass + "</td><td><input type='checkbox'  class='single_select'  data-pseudo = '" + data[i].pseudo + "'  data-email = '" + data[i].email + "'></td><td><button  type ='button' id='button' class='btn btn-info email_button' data-pseudo = '" + data[i].pseudo + "' data-email = '" + data[i].email + "'  data-action='single' >send single</button></td></tr>";
            }

            $("#mail").html(table + s + "</tbody>");
        }
    });
}


//pour mail
// function affichermail() {
//     $.ajax({

//         url: "http://localhost/Mailto/CenvoiMail/sendmailto",
//         type: "post",
//         dataType: "json",
//         //    donner miverina
//         success: function(data) {

//             var table = " <tbody><thead><tr><th>id</th><th>pseudo</th><th>e-mail</th><th>mot de pass</th></tr></thead>";
//             for (let i = 0; i < data.length; i++) {
//                 var table = table + "<tr><td>" + data[i].idpers + "</td><td>" + data[i].pseudo + "</td><td>" + data[i].email + "</td><td>" + data[i].pass + "</td><td><input type='checkbox'  class='single_select'  data-pseudo = '" + data[i].pseudo + "'  data-email = '" + data[i].email + "'></td><td><button  type ='button' id='button' class='btn btn-info email_button' data-pseudo = '" + data[i].pseudo + "' data-email = '" + data[i].email + "'  data-action='single' >send single</button></td></tr>";
//             }

//             $("#mail").html(table + "</tbody>");
//         }
//     });
// }