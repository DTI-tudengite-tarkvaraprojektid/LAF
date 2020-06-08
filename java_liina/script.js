$(document).ready(function() {
    
    $('[name="add_new_found_form"]').validate({
        rules: {
            storage: {
                required: true,
            },
            date : {
                required: true
            },
            image: {
                required: true
            },
            category : {
                required: true
            },
            description : {
                required: true
            }

        },
        messages: {
            storage:  "Palun valige hoiupaik",
            date: "Palun valige leidmise kuupäev",
            image: "Palun valige eseme pilt",
            category: "Palun valige eseme kategooria",
            description: "Palun sisestage kirjeldus"
        },
        errorPlacement: function(error, element) {
            // If input name is "storage", then error is appended to a class called "error-storage"
            // This system applies to all input elements stated in rules above
            error.appendTo( $('.error-' + element.attr("name")));
        }
    });


	$('textarea').autoheight();

});