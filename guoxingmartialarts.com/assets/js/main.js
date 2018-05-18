$(document).ready(function(){


    $('.parallax').parallax();
    $(".button-collapse").sideNav();
    $('.scrollspy').scrollSpy();

    $('.table-of-contents').pushpin({
        //sets distance of menu from top of viewport
        top: 40,
        //The offset from the top the element will be fixed at.
        offset: 60
    });

    $('.collapsible').collapsible();


    $(".cuptable").mouseover(function (e) {
        $(this).attr("src", $(this).attr("src").replace("small", "tilt"));
    }).mouseout(function (e) {
        $(this).attr("src", $(this).attr("src").replace("tilt", "small"));
    });

    $(".confirm-button").on('click', function(e) {
        e.preventDefault;
        // console.log('confirm clicked');
    });

    $(".btn-contact").on("click", function(e) {
        $(".contact-us").validate({
            submitHandler: function() {
                var form_data = new FormData(this.currentForm); //constructs key/value pairs representing fields and values
                // for (var pair of form_data.entries()) {
                //     console.log(pair[0]+ ', ' + pair[1]);
                // };
                $.ajax({
                url: "./assets/ajax/rjseo-mail.php",
                type: "POST",
                data : form_data,
                contentType: false,
                cache: false,
                processData:false,
                }).done(function(res){ //fetch server "json" messages when done
                    // console.log(res);
                    if (res) {
                         $(".messageSent").show();
                    }
                    else {
                        $(".messageError").show();
                    }
                });
            }
        });
    });
});