
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
<section id="portfolio-section1" style="background:url('img/quovadis/bg.jpg') no-repeat;background-size: cover;">
   <div class="container-fluid cf-padding">
      <div class="row">
         <div class="col-lg-6"  style="padding: 100px 0px 0px 0px;">
            <div class="portfolio-section1-imgholder text-center">
               <img src="img/quovadis/combined1.png" alt="" class="img-responsive wow fadeInLeft" style="max-height: 550px;width: auto;">
            </div>
         </div>
         <div class="col-lg-6"  style="padding: 80px 80px 0px 80px;">
            <div class="portfolio-section1-textholder">
               <img src="img/quovadis/quovadis-logo-w.png" alt="" class="img-responsive wow fadeInLeft"style="height:70px;width: auto;margin-bottom: 20px">
               <p class="wow fadeInRight ">A brand new website for a US based Travel Company that speaks to Devotional Christian Hearts ,the world over </p>
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
               <a href="http://quovadis.travel/"" class="btn btn-readmore-outline">Visit Website</a>
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
   <div class="container-fluid cf-padding">
      <div class="row">
          <div class="text-holder auto-margin wow fadeIn">
             <h2>Swipe right</h2>
             <p>The simplicity of swiping increases user engagement. Swipe right to save a trip and left to discard a trip.</p>
          </div>
          <div class="img-holder auto-margin">
            <img src="img/quovadis/quovadis-pic1.png" alt="" class="style2-pic img-responsive wow zoomIn" data-wow-duration="2s">
          </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio section2
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