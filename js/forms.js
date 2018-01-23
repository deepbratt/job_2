$(function(){
   $.fn.select2.defaults.set( "theme", "bootstrap" );
   
   $('.select2').each(function(){
      var select = $(this);
      
      select.select2({
          placeholder: select.attr('placeholder')
      });
      
   });
   
});