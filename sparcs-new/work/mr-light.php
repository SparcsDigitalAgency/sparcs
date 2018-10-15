
<!-- header styles-->
<?php 
$meta_tags=array(
         'title'        => 'Sparcs Digital Agency | Digital Agency in Kochi, Kerala',
      'description'  => 'Sparcs is a Digital Agency which delivers high quality, reliable and affordable services to our customer globally.',
      'keywords'=>'web development, web design, branding, digital marketing, SEO, kochi, Kerala',
      "no-index" => true,
      'no-follow' =>true,
      'no-archieve' =>true,

   );

include_once('../partials/header.php')
?>
<style type="text/css">
   .nav-icon3 span{
      background: white;
   }
   .change-color2 span{
      background: #c9252c;
   }
</style>

<!--==========================
   portfolio  Section1
   ============================-->
<section id="portfolio-section1" style="background:url('../img/mrlight/bg.jpg') no-repeat;background-size: cover;">
   <div class="container-fluid cf-padding">
      <div class="row">
         <div class="col-lg-6"  style="padding: 130px 0px 0px 0px;">
            <div class="portfolio-section1-imgholder text-center">
               
               <img src="../img/mrlight/combined.png" alt="" class="img-responsive wow fadeInLeft" style="">
            </div>
         </div>
         <div class="col-lg-6"  style="padding: 80px 80px 0px 80px;">
            <div class="portfolio-section1-textholder">
               <img src="../img/mrlight/mrlight-logo.png" alt="" class="img-responsive wow fadeInLeft"style="height:70px;width: auto;margin-bottom: 20px">
               <p class="wow fadeInRight ">Redesigning MrLightGlobal -The inspiring story of a daring entrepreneurship that was looking for a website revamp to reflect its Global Aspirations. </p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Gave the site a modern ,clear cut fresh appeal meeting client preferences on middle ground.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Corrected serious errors in product showcasing by  redesigning site all over on Wordpress framework.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Converted static pages to Content Management System(CMS) by which Client is enabled to keep adding new products from backend.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Content was written afresh and catchy copywriting added to attractive sliders drawing consumer attention to products.</p>
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
            <img src="<?php echo $path; ?>img/mrlight/mrlight-1.png" alt="" class="style2-pic img-responsive wow zoomIn" data-wow-duration="2s">
          </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio section2
   ============================-->

<!--==========================
   end of works  Section2
   ============================-->
<!--==========================
Footer
============================-->
<?php include_once('../partials/footer.php')?>
<!-- end footer -->

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
      $('.logo-changed img').attr('src', '../img/toggle-icon.png');
    } else {
      $('.header-logo img').attr('src', '../img/logo-white.png');
      $('#change-logo').removeClass('logo-changed');
    }
  });
</script>