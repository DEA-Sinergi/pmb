(function($){
  $(function(){

    $('.sidenav').sidenav();
    $('.parallax').parallax();
    $('.scrollspy').scrollSpy({scrollOffset: 10});
    $('.slider').slider();
    $('.modal').modal();
    $('.tabs').tabs();
    $('select').formSelect();
    $('.datepicker').datepicker({selectYears: 100, format: 'yyyy-mm-dd'});

  }); // end of document ready
})(jQuery); // end of jQuery name space