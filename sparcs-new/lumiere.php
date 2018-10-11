
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
<section id="portfolio-section1" style="background:url('img/lumiere/bg.jpg');">
   <div class="container-fluid cf-padding">
      <div class="row">
         <div class="col-lg-6"  style="padding: 130px 0px 0px 0px;">
            <div class="portfolio-section1-imgholder text-center">
               <img src="img/huts/combined3.png" alt="" class="img-responsive wow fadeInLeft" style="">
            </div>
         </div>
         <div class="col-lg-6"  style="padding: 80px 80px 0px 80px;">
            <div class="portfolio-section1-textholder">
               <img src="img/lumiere/lumiere-white-logo.png" alt="" class="img-responsive wow fadeInLeft"style="height:100px;width: auto;margin-bottom: 20px">
               <p class="wow fadeInRight ">"Creating Awareness is creating Value" Soft Image augmentation strategies for a Bangalore based Organic Store Chain Brand ,Lumiere Organic Home Stores.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Creating powerful content in Blog format with various approaches to the Organic Life,Values.Products,Events etc. supported by on-site photography.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Creating Ambience  is creating Value - Setting up Lumiere Organic Home Store Franchisee store in Trivandrum with Public awareness messages inbuilt into decor.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <a href="http://www.hutsrestaurant.com/"" class="btn btn-readmore-outline">Visit Website</a>
            </div>
         </div>
      </div>
   </div>
</section>

   <!--==========================
   portfolio  Section3
   ============================-->
<section id="portfolio-section3" style="background-color: #fff">
  <div class="cf-padding">
    <div class="row">
      <div class="col-lg-5">
        <div class="text-holder wow fadeInLeft" style="padding-top: 400px;padding-left: 100px">
           <p class="text-muted">Story Boards</p>
           <h2>Interior Designs.</h2>
           <p class="text-muted">With powerful content and appealing illustrations,turning  all earmarked surfaces  from table mats to the wall decor  into educative messages about the benefits of Organic Agriculture & Food .</p>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="img-holder">
               <img src="img/lumiere/lumiere-poster.png" class="img-responsive wow fadeInRight auto-margin" style="height:750px;width: auto;;">
        </div>
      </div>
    </div>
  </div>
</section>

   <!--==========================
   portfolio section5
   ============================-->
   <section id="portfolio-section7" style="background: #404040">
   <div class="container">
      <div class="row">
         <div class="col-lg-7">
            <div class="img-holder" style="padding: 0px">
               <img src="img/lumiere/invitation.png" class="img-responsive wow fadeInLeft">
            </div>
         </div>
         <div class="col-lg-5">
            <div class="text-holder wow fadeInRight" style="padding-top: 200px">
               <h2>Managed Social Media including Facebook , Instagram and Google Plus that improved public reception to the makeover to 100% Organic.</h2>
            </div>
         </div>
      </div>
   </div>
</section>
 

<section id="portfolio-section8" style="background-color: #fff;">
  <div class="container-fluid cf-padding">
    <div class="row">
      <div class="col-lg-6">
        <div class="img-holder">
          <img src="img/lumiere/wall-slider1.jpg" class="img-responsive" style="margin-bottom: 30px;">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="img-holder">
          <img src="img/lumiere/wall-slider2.jpg" class="img-responsive"  style="margin-bottom: 30px;">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="img-holder">
          <img src="img/lumiere/wall-slider3.jpg" class="img-responsive">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="img-holder">
          <img src="img/lumiere/wall-slider4.jpg" class="img-responsive">
        </div>
      </div>
    </div>
  </div>
</section>

   <!--==========================
   portfolio section9
   ============================-->
   <section id="portfolio-section9" style="background: #eaeaea">
   <div class="container">
      <div class="row">
         
         <div class="col-lg-5">
            <div class="text-holder wow fadeInLeft" style="padding-top: 300px;">
               <p class="text-muted">Story Boards</p>
               <h2>Interior Designs.</h2>
               <p class="text-muted">With powerful content and appealing illustrations,turning  all earmarked surfaces  from table mats to the wall decor  into educative messages about the benefits of Organic Agriculture & Food .</p>
            </div>
         </div>
         <div class="col-lg-7">
            <div class="img-holder" style="padding: 0px">
               <img src="img/lumiere/pylon.png" class="img-responsive wow fadeInRight">
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

