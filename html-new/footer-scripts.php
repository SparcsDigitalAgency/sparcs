<script src="js/jquery.min.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/easing.min.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/scrollify.js"></script>
<script src="js/main.js"></script>

<!-- toggle open-->
<script type="text/javascript">
   $(document).ready(function(){
      $('.nav-icon3').click(function(){
         $(this).toggleClass('opened');
         $('body').toggleClass('menu-is-open');
      });
   });
</script>

<!-- scrollify-->
<script type="text/javascript">
   $(function() {
   $.scrollify({
   section : "section",
   });
   });
</script>
      
<!-- change navbrand logo class-->
<script type="text/javascript">
    $(window).scroll(function() {
    if ($(this).scrollTop() > 500) {
      $('#change-logo').addClass('logo-changed');
      $('.logo-changed img').attr('src', 'img/toggle-icon.png');
    } else {
      $('#change-logo').removeClass('logo-changed');
      $('.header-logo img').attr('src', 'img/logo-red.png');
    }
  });
</script>
   
<!-- change toggle icon color when reaches the contact section-->
<script type="text/javascript">
  var targetOffset = $("#contact").offset().top;
   var $w = $(window).scroll(function(){
       if ( $w.scrollTop() > targetOffset ) {   
           $('.nav-icon3').addClass('change-color');
       } else {
          $('.nav-icon3').removeClass('change-color');

       }
   });
</script>

</body>
</html>