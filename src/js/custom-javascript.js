// moving div into sidebar for post theme

jQuery(document).ready(function($){
    $("#chapter-sidebar").appendTo($("#sidebar"));

    $(window).resize(function() {
        if ($(this).width() < 780) {
          $('#navbarNavDropdown').appendTo($("#col-sm-5-navbar"));
        } else
        {
            $('#navbarNavDropdown').appendTo($(".navbar-menu"));
        }
      
      });
});



