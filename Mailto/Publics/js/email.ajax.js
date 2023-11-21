$(document).ready(function() {
    //  afficher();
    //
    $(document.body).on('click', '.email_button', function() {

        // rehef voakitika tsy mandeh inytsony
        $(this).attr('disabled', 'disabled');
        let id = $(this).attr("id");
        var action = $(this).data("action");
        //var donnee = 'customer_id=' + id;

        let email_data = [];

        if (action == 'single') {
            //manao parcours lay zavatr ilaina
            $('.single_select').each(function() {
                // //micibler anilay check
                if ($(this).prop("checked") == true) {
                    //  alert("lasa tsila") ;
                    email_data.push({
                        email: $(this).data("email"),
                        pseudo: $(this).data("pseudo")
                    });
                }

            });
        } //else if (action == 'bulk') {

        //     $('.single_select').each(function() {
        //         // //micibler anilay check
        //         if ($(this).prop("checked") == true) {
        //             //  alert("lasa tsila") ;
        //             email_data.push({
        //                 email: $(this).data("email"),
        //                 name: $(this).data("name")
        //             });
        //         }
        //     });
        // }
        // //manao ajax eto zany 
        $.ajax({
            url: "http://localhost/Mailto/Caccueil/mailalefa",

            method: "POST",
            data: { email_data: email_data },
            beforeSend: function() {
                $("#" + id).html('sending...');
                $("#" + id).addClass('btn-danger');

            },

            success: function(data) {
                if (data == "message envoyé") {
                    $("#" + id).text("success");
                    $("#" + id).removeClass("btn-danger");
                    $("#" + id).removeClass("btn-info");
                    $("#" + id).addClass("btn-success");

                } //else{
                //     $("#id").text(data) ;
                // }
                $("#" + id).attr('disabled', false);
            }
        });


    });

    //

});

// function afficher() {
//     $.ajax({

//         url: "http://localhost/Mailto/CenvoiMail/Sendmailto",
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