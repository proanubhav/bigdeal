<script src="assets/js/core.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/script-min.js"></script>
<script src="assets/js/form-ajax-min.js" defer async></script>

<script>
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();

    if (scroll >= 100) {
      $(".header").addClass("scrolledHeader");
      $('.navbar-light.navbar_two .navbar-toggler-icon').css('background-image', 'url(assets/img/black-menu.svg)');
    } else {
      $(".header").removeClass("scrolledHeader");
      $('.navbar-light.navbar_two .navbar-toggler-icon').css('background-image', 'url(assets/img/black-menu.svg)');
    }
  });

  $(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideDown("400");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).not('.in .dropdown-menu').stop(true,true).slideUp("400");
            $(this).toggleClass('open');       
        }
    );
});

</script>