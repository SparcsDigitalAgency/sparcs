
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
   portfolio section2
   ============================-->
<section id="portfolio-section2" style="background-image: linear-gradient(#c1c1c1,#fff );">
   <div class="container">
      <div class="row">
          <div class="text-holder auto-margin wow fadeIn">
             <h2>Mr.Light</h2>
             <p><b>Re-imaging  MrLightGlobal -</b> The inspiring story of a daring entrepreneurship that was looking <br>for a website revamp to reflect its Global Aspirations.</p>
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
   portfolio  Section1
   ============================-->
<section id="portfolio-section1" style="background:#e1343b;">
   <div class="container">
      <div class="row">
         <div class="col-lg-6"  style="padding: 0px 0px 0px 0px;">
            <div class="portfolio-section1-imgholder text-center">
               
               <img src="../img/mrlight/combined.png" alt="" class="img-responsive wow fadeInLeft" style="">
            </div>
         </div>
         <div class="col-lg-6"  style="padding: 0px 80px 0px 80px;">
            <div class="portfolio-section1-textholder">
               <img src="../img/mrlight/mrlight-logo.png" alt="" class="img-responsive wow fadeInLeft"style="height:70px;width: auto;margin-bottom: 20px">
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Giving the site a modern ,clear cut fresh appeal meeting client preferences on middle ground.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Correcting serious errors in product showcasing by  redesigning site all over on Wordpress framework.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Converting static pages to Content Management System(CMS) by which Client is enabled to keep adding new products from backend.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Writing Content afresh adding catchy copy to attractive sliders drawing consumer attention to products.</p>
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
<section id="portfolio-section2" style="background-image: linear-gradient(#c1c1c1,#fff );">
   <div class="container">
      <div class="row">
          <div class="text-holder auto-margin wow fadeIn">
             <h2>Re-imaging  MrLightGlobal</h2>
             <p>The inspiring story of a daring entrepreneurship that was looking <br>for a website revamp to reflect its Global Aspirations.</p>
          </div>
          <div class="img-holder auto-margin">
            <img src="<?php echo $path; ?>img/mrlight/mrlight-screens.png" alt="" class="style2-pic img-responsive wow zoomIn" data-wow-duration="2s">
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