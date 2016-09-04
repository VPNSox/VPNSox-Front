(function($){

    if ($.cookie('no-partners') === undefined){

        $(document).ready(function() {
            $('#myModal').modal('show');
        });

        $('#no-partners').click(function(e){
        e.preventDefault();
        $('#no-partners').fadeOut();
        $.cookie('no-partners', "viewed", {expires : 30 * 12});
        });
    }

    if ($.cookie('no-partners') === "viewed"){

    }


})(jQuery);