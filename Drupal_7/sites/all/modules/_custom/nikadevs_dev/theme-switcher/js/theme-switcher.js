if(top.location != location) {
  top.location.href = document.location.href;
}
function capitaliseFirstLetter(string) {
  return string.charAt(0).toUpperCase() + string.slice(1);
}

jQuery(function($){
  
  $(document).ready(function () {

    $('#active_theme').click(function() {
      $('#themes-list').toggle();
      return false;
    });

    $('#themes-list li').hover(function() {
      $('.preview').show();
      var preview = 'http://nikadevs.com/files/TF_' + capitaliseFirstLetter($(this).find('a').text()) + '/preview.png';
      $('.preview img').attr('src', preview);
    }, function() {
      $('.preview').hide();
    });

    $(window).resize(function () {
      $("#iframe").attr("height", (($(window).height()) - $("#theme-switcher").height()) + 'px');
    }).resize();
  
  });

});