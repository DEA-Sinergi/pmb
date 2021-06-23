(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.slider').slider();
    $('.modal').modal();
    $('.tabs').tabs();
    $('select').formSelect();
    $('.datepicker').datepicker({selectYears: 100, format: 'yyyy-mm-dd'});

  }); // end of document ready
})(jQuery); // end of jQuery name space
