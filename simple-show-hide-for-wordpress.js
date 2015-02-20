(function($){
  $(document).ready(function() {
    $('*[class*="ssh-question"]').on('mousedown', function() {
      $this = $(this);
      var answer = $this.next();
      if(answer.hasClass("ssh-hide")) {
        answer.removeClass("ssh-hide");
        answer.addClass("ssh-show");
      } else {
        answer.removeClass("ssh-show");
        answer.addClass("ssh-hide");
      }
    });
  });
})(jQuery);
