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

<!--==========================
   portfolio section1
   ============================-->
<section id="mrlight-portfolio-section1">
   <div class="container">
      <div class="row">
         <div class="text-holder auto-margin wow fadeInUp">
            <h2>Mr.Light</h2>
            <p><b>Re-imaging  MrLightGlobal -</b> The inspiring story of a daring entrepreneurship that was looking <br>for a website revamp to reflect its Global Aspirations.</p>
         </div>
         <div class="img-holder auto-margin">
            <img src="<?php echo $path; ?>img/mrlight/mrlight-1.png" alt="" class="style2-pic img-responsive wow fadeInUp" data-wow-duration="2s">
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio section1
   ============================-->
<!--==========================
   portfolio  Section2
   ============================-->
<section id="mrlight-portfolio-section2" class="dark-section">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 no-padding">
            <div class="portfolio-section-imgholder text-center">
               <img src="../img/mrlight/combined.png" alt="" class="img-responsive wow fadeInLeft">
            </div>
         </div>
         <div class="col-lg-6 paddingsides80">
            <div class="portfolio-section-textholder">
               <img src="../img/mrlight/mrlight-logo.png" alt="" class="img-responsive wow fadeInRight">
            </div>
            <div class="portfolio-section-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Giving the site a modern ,clear cut fresh appeal meeting client preferences on middle ground.</p>
            </div>
            <div class="portfolio-section-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Correcting serious errors in product showcasing by  redesigning site all over on Wordpress framework.</p>
            </div>
            <div class="portfolio-section-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Converting static pages to Content Management System(CMS) by which Client is enabled to keep adding new products from backend.</p>
            </div>
            <div class="portfolio-section-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Writing Content afresh adding catchy copy to attractive sliders drawing consumer attention to products.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio  Section2
   ============================-->
<!--==========================
   portfolio section3
   ============================-->
<section id="mrlight-portfolio-section3">
   <div class="container">
      <div class="row">
         <div class="text-holder auto-margin ">
            <h2 class="wow fadeInUp">Re-imaging  MrLightGlobal</h2>
            <p class="wow fadeInUp">The inspiring story of a daring entrepreneurship that was looking <br>for a website revamp to reflect its Global Aspirations.</p>
         </div>
         <div class="img-holder auto-margin">
            <img src="<?php echo $path; ?>img/mrlight/mrlight-screens.png" alt="" class="style2-pic img-responsive wow zoomIn" data-wow-duration="2s">
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio section3
   ============================-->
<!--==========================
   Footer
   ============================-->
<?php include_once('../partials/footer.php')?>
<!-- end footer -->
