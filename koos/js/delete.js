$(document).ready(function() {


    $('#deleteForm').validate({
        rules: {
            email: {
                required: true,
                email: true
            }
        },
        messages: {
            email:  {
                required: "Palun sisestage meiliaadress.",
                email: "Palun sisestage korrektne meiliaadress."
            }
        },
        errorPlacement: function(error, element) {
            // If input name is "storage", then error is appended to a class called "error-storage"
            // This system applies to all input elements stated in rules above
            error.appendTo( $('.error-' + element.attr("name")));
        }
    });


});