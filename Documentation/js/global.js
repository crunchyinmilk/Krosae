jQuery(function($){
      // Smooth scroll
      $(document).ready(function() {
            $('.nav').bind('click', 'ul li a', function(e) {
                  e.preventDefault();
                  $.scrollTo(e.target.hash, 600, {offset:-100});
            });
      });
      window.prettyPrint && prettyPrint()
});  