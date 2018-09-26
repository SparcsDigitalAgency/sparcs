
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
<section id="portfolio-section1" style="background-color: #018cc5;">
   <div class="portfoliopage-container">
      <div class="row">
         <div class="col-lg-6">
            <div class="portfolio-section1-imgholder" style="height: 100vh">
               <img src="img/combined2.png" alt="" class="img-responsive wow fadeInLeft" >
            </div>
         </div>
         <div class="col-lg-6" style="padding-left: 50px;">
            <div class="portfolio-section1-textholder">
               <img src="img/gloria-logo-w.png" alt="" class="img-responsive wow fadeInLeft"style="height:70px;width: auto;margin-bottom: 30px">
               <p class="wow fadeInRight ">A brand new website for a US based Travel Company that speaks to Devotional Christian Hearts ,the world over.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Giving the Home Page the feel of a real window to the most attractive panoramic views of  well known Christian Pilgrimage sites.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Making Pilgrimage packages visually attractive and user friendly.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Ensuring  that fully validated sign up forms open smoothly  in accordance with the number or travelers clicked.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Ensuring that the completed booking forms are well integrated with the payment portal for hassle free remittance.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <a href="http://www.gloriatravels.org/"" class="btn btn-readmore">Visit Website</a>
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
            <img src="img/mrlight-1.png" alt="" class="style2-pic img-responsive wow zoomIn" data-wow-duration="2s">
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