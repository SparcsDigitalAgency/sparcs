
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
<section id="portfolio-section1" style="background-color: #522516;">
   <div class="portfoliopage-container">
      <div class="row">
         <div class="col-lg-6">
            <div class="portfolio-section1-imgholder">
               <img src="img/lumiere/social-lumiere.png" alt="" class="img-responsive wow fadeInLeft" style="    padding: 3rem 0rem 0rem 0rem;">
            </div>
         </div>
         <div class="col-lg-6" style="height: 100vh">
            <div class="portfolio-section1-textholder " style="margin-top: 30px;">
              <img src="img/lumiere/lumiere-white-logo.png" alt="" class="img-responsive wow fadeInRight"style="height:100px;width: auto;">
               <p class="wow fadeInRight " style="margin-top: 10px">"Creating Awareness is creating Value" Soft Image augmentation strategies for a Bangalore based Organic Store Chain Brand ,Lumiere Organic Home Stores </p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description " style="text-align: justify;">Creating powerful content in Blog format with various approaches to the Organic Life,Values.Products,Events etc. supported by on-site photography .</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description " style="text-align: justify;">Creating Ambience  is creating Value - Setting up Lumiere Organic Home Store Franchisee store in Trivandrum with Public awareness messages inbuilt into decor .</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description " style="text-align: justify;">Managed Social Media including Facebook, Twitter, Instagram and Google Plus that improved public reception to the makeover to 100% Organic.</p>
            </div>
         </div>
      </div>
   </div>
</section>

 <section id="about-section3" style="padding-top: 0px">
   <div class="container">
      <div class="row">
         <div class="col-lg-5">
            <div class="text-holder wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;padding-top:90%;">
               <p class="text-muted" style="margin-bottom: 0px">Store Board</p>
               <h2>Design for Display </h2>
               <p class="text-muted">Reflecting the Brand's Green ethos doing the Store board with recycled pinewood slats and lettering cut out of sheet iron.</p>
            </div>
         </div>
         <div class="col-lg-7">
            <div class="img-holder" style="padding-top: 10%">
               <img src="img/lumiere/lumiere-poster.png" class="img-responsive wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;    height: 650px;width: auto;float: right;margin-top: 50px">
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio  Section1
   ============================-->

 
 <section id="about-section2" style="background-color: #fff">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="img-holder" style="padding-top: 0%">
               <img src="img/lumiere/lumiere-invitation.png" class="img-responsive wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="text-holder wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">
               <h2>Managed Social Media including Facebook, Twitter, Instagram and Google Plus that improved public reception to the makeover to 100% Organic.</h2>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="portfolio-section3" style="background-color: #fff;">
      <div class="container-fluid">
        <h2>Window to Europe</h2>
        <p>Brand new user-friendly website for a UK based Destination Management Company.</p>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/lumiere/wall-slider1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/lumiere/wall-slider2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/lumiere/wall-slider3.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/lumiere/wall-slider4.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
</section>
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

