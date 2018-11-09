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

<!--==========================#
   portfolio  Section1
   ============================-->
<section id="marian-portfolio-section1">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 paddingtop50only">
            <div class="portfolio-section-imgholder text-center">
               <img src="<?php echo $path; ?>img/marian/responsive.jpg" alt="" class="img-responsive wow fadeInLeft" style="">
            </div>
         </div>
         <div class="col-lg-6 paddingsidestop80">
            <div class="portfolio-section-textholder">
               <img src="<?php echo $path; ?>img/marian/logo.png" alt="" class="img-responsive wow fadeInRight">
               <p class="wow fadeInRight ">Built a responsive site with a trendy understated Gothic appeal using the the Brand colors of Black & Acid Green customised for the client.</p>
            </div>
            <div class="portfolio-section-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Creating a  website with content that highlights the Restaurant's  backward integration with Organic farms , attractive visuals of food and selecting customer testimonials relevant to the objective of public education.</p>
            </div>
            <div class="portfolio-section-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Suggested and executed changes in  design & color of uniform for personnel in accordance with Client budget. Supporting the change of official color from Orange to Brilliant Green.</p>
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
<section id="gloria-portfolio-section2" class="no-padding">
   <div class="container-fluid wow fadeInDown">
      <div class="row">
         <div class="img-holder auto-margin">
            <img src="<?php echo $path; ?>img/marian/tiles.jpg" alt="" class="style2-pic img-responsive " data-wow-duration="2s">
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio section2
   ============================-->
<!--==========================
   Footer
   ============================-->
<?php include_once('../partials/footer.php')?>
<!-- end footer -->