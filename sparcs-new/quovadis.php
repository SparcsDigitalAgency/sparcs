
<!-- header styles-->
<?php include_once('partials/header-styles.php')?>
<style type="text/css">
   .nav-icon3 span{
      background: white;
   }
   .change-color2 span{
      background: #c9252c;
   }
</style>
<!--==========================
   header-menu
============================-->
<?php include_once('partials/header-menu.php')?>
<!--==========================
 end of header-menu
============================-->



   <!--==========================
   portfolio  Section1
   ============================-->
<section id="portfolio-section1" style="background-color: #222;">
   <div class="portfoliopage-container">
      <div class="row">
         <div class="col-lg-6">
            <div class="portfolio-section1-imgholder" style="height: 100vh">
               <img src="img/combined1.png" alt="" class="img-responsive wow fadeInLeft" >
            </div>
         </div>
         <div class="col-lg-6" style="padding-left: 50px;">
            <div class="portfolio-section1-textholder">
               <img src="img/quovadis-logo-w.png" alt="" class="img-responsive wow fadeInLeft"style="height:70px;width: auto;margin-bottom: 30px">
               <p class="wow fadeInRight "> A brand new website for a US based Travel Company that speaks to Devotional Christian Hearts ,the world over</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Giving  the Home page Full screen highly attractive visuals of projected destinations.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Creating easy to open & browse Gallery of Destinations and Travel packages  with all details.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Creating Perfectly validated easy to use booking forms smoothly integrated with Payment gateway.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <a href="http://quovadis.travel/"" class="btn btn-readmore">Visit Website</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio  Section1
   ============================-->

   <!--==========================
   portfolio section2
   ============================-->
<section id="portfolio-section2" style="background-color: #f2f2f2;">
   <div class="portfoliopage-container">
      <div class="row">
         <div class="">
            <div class=" wow fadeIn">
               <h2>Window to Europe</h2>
               <p>Brand new user-friendly website for a UK based Destination Management Company.</p>
            </div>
            <img src="img/quovadis-pic1.png" alt="" class="style2-pic img-responsive wow zoomIn" data-wow-duration="2s">
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio section2
   ============================-->
         <!--==========================
   portfolio section3
   ============================-->
<section id="portfolio-section3" style="background-color: #fff;">
   <div class="container">
      <div class="container">
        <h2>Window to Europe</h2>
        <p>Brand new user-friendly website for a UK based Destination Management Company.</p>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/slider1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/slider1.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/slider1.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio section3
   ============================-->
<!--==========================
contact-us Section
============================-->
<?php include_once('partials/contact.php')?>
<!--==========================
end of contact-us Section
============================-->
<!-- scroll-top -->
<?php include_once('partials/scroll-top.php')?>

<!-- JavaScript Libraries -->
<?php include_once('partials/footer-scripts.php')?>

 <!-- Jnavicon portfolio special -->     
<script type="text/javascript">
   var portfolio_section2 = $("#portfolio-section2").offset().top;
   var contact = $("#contact").offset().top;
   var $w = $(window).scroll(function(){
       if ( $w.scrollTop() > portfolio_section2 && $w.scrollTop() < contact ) {   
           $('.nav-icon3').addClass('change-color2');
       } else {
           $('.nav-icon3').removeClass('change-color2');
       }
   });
</script>

<!-- change navbrand logo class-->
<script type="text/javascript">
    $(window).scroll(function() {
    if ($(this).scrollTop() > 500) {
      $('#change-logo').addClass('logo-changed');
      $('.logo-changed img').attr('src', 'img/toggle-icon.png');
    } else {
      $('.header-logo img').attr('src', 'img/logo-white.png');
      $('#change-logo').removeClass('logo-changed');
    }
  });
</script>