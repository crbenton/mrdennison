$(document).ready(function(){
    /*
    * Switching active class in the navbar
    */
    $("ul.nav>li").on('click', function(){
       $('div.navbar-collapse').find('li.active').removeClass('active');
        $(this).addClass('active');
    });

});