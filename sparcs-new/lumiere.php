
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
               <img src="img/combined3.png" alt="" class="img-responsive wow fadeInLeft" style="    padding: 7rem 0rem 0rem 0rem;">
            </div>
         </div>
         <div class="col-lg-6" style="height: 100vh">
            <div class="portfolio-section1-textholder " style="margin-top: 30px;">
              <img src="img/lumiere-white-logo.png" alt="" class="img-responsive wow fadeInRight"style="height:100px;width: auto;">
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
               <a href="http://www.lumiere.co.in"" class="btn btn-readmore">Visit Website</a>
            </div>
         </div>
      </div>
   </div>
</section>

 <section id="about-section3" style="height: 500px;padding-top: 0px">
   <div class="container">
      <div class="row">
         <div class="col-lg-4">
            <div class="text-holder wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;padding-top: 350px;">
               <p class="text-muted" style="margin-bottom: 0px">Store Board</p>
               <h2>Design for Display </h2>
               <p class="text-muted">Reflecting the Brand's Green ethos doing the Store board with recycled pinewood slats and lettering cut out of sheet iron.</p>
            </div>
         </div>
         <div class="col-lg-8">
            <div class="img-holder">
               <img src="img/lumiere-board.png" class="img-responsive wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;    height: 425px;width: auto;float: right;margin-top: 50px">
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio  Section1
   ============================-->
   <section id="about-section2" style="height: 592.922px;">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="img-holder" style="padding-top: 20%">
               <img src="img/social-lumiere.png" class="img-responsive wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">
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
 
 <section id="about-section3" style="height: 500px;padding-top: 0px;background-color: #222">
   <div class="container">
      <div class="row">
         <div class="col-lg-5">
            <div class="text-holder wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;padding-top: 75%;">
               <p class="text-muted" style="margin-bottom: 0px;color: #fff">Wall Paintings</p>
               <h2 style="color: #fff">Appealing illustrations</h2>
               <p class="text-muted" style="color: #fff!important">By generating Content articulating the Brand's Vision Statement turned into large scale visually attractive illustration on the shop walls.</p>
            </div>
         </div>
         <div class="col-lg-7">
            <div class="img-holder">
               <img src="img/lumierw-wall.png" class="img-responsive wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;    height: 425px;width: auto;float: right;margin-top: 100px">
            </div>
         </div>
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