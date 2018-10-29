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
   .slick-dots{
   display: none!important;
   }
</style>
<!--==========================
   portfolio  Section1
   ============================-->
<section id="lumiere-portfolio-section1">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 paddingtop30only">
            <div class="portfolio-section-imgholder text-center">
               <img src="<?php echo $path; ?>img/lumiere/social-lumiere.png" alt="" class="img-responsive wow fadeInLeft" style="">
            </div>
         </div>
         <div class="col-lg-6 paddingsidestop80">
            <div class="portfolio-section-textholder">
               <img src="<?php echo $path; ?>img/lumiere/lumiere-white-logo.png" alt="" class="img-responsive wow fadeInLeft">
               <p class="wow fadeInRight ">"Creating Awareness is creating Value" Soft Image augmentation strategies for a Bangalore based Organic Store Chain Brand ,Lumiere Organic Home Stores.</p>
            </div>
            <div class="portfolio-section-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Creating powerful content in Blog format with various approaches to the Organic Life,Values.Products,Events etc. supported by on-site photography.</p>
            </div>
            <div class="portfolio-section-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Creating Ambience  is creating Value - Setting up Lumiere Organic Home Store Franchisee store in Trivandrum with Public awareness messages inbuilt into decor.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio  Section1
   ============================-->
<!--==========================
   portfolio  Section2
   ============================-->
<section id="lumiere-portfolio-section2">
   <div class="container">
      <div class="row">
         <div class="col-lg-5">
            <div class="text-holder wow fadeInLeft paddingtop300">
               <p class="text-muted">Story Boards</p>
               <h2>Interior Designs.</h2>
               <p class="text-muted">With powerful content and appealing illustrations,turning  all earmarked surfaces  from table mats to the wall decor  into educative messages about the benefits of Organic Agriculture & Food .</p>
            </div>
         </div>
         <div class="col-lg-7">
            <div class="img-holder">
               <img src="<?php echo $path; ?>img/lumiere/lumiere-poster.jpg" class="img-responsive wow fadeInRight auto-margin">
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio  Section2
   ============================-->
<!--==========================
   portfolio  Section3
   ============================-->
<section id="lumiere-portfolio-section3">
   <div class="container">
      <div class="row">
         <div class="col-md-12 text-holder auto-margin wow fadeIn">
            <h2>Wall Illustrations</h2>
            <p>The simplicity of swiping increases user engagement. Swipe right to save a trip and left to discard a trip.</p>
         </div>
      </div>
   </div>
   <div class="">
      <div class=" auto-margin lumiere-slider">
         <div>
            <img src="<?php echo $path; ?>img/lumiere/slider-1.jpg">
         </div>
         <div>
            <img src="<?php echo $path; ?>img/lumiere/slider-2.jpg">
         </div>
         <div>
            <img src="<?php echo $path; ?>img/lumiere/slider-3.jpg">
         </div>
         <div>
            <img src="<?php echo $path; ?>img/lumiere/slider-4.jpg">
         </div>
         <div>
            <img src="<?php echo $path; ?>img/lumiere/slider-5.jpg">
         </div>
         <div>
            <img src="<?php echo $path; ?>img/lumiere/slider-6.jpg">
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio  Section3
   ============================-->
<!--==========================
   portfolio section4
   ============================-->
<section id="lumiere-portfolio-section4">
   <div class="container">
      <div class="row">
         <div class="col-lg-5">
            <div class="text-holder wow fadeInLeft paddingtop300">
               <p class="text-muted">Story Boards</p>
               <h2>Interior Designs.</h2>
               <p class="text-muted">With powerful content and appealing illustrations,turning  all earmarked surfaces  from table mats to the wall decor  into educative messages about the benefits of Organic Agriculture & Food .</p>
            </div>
         </div>
         <div class="col-lg-7">
            <div class="img-holder no-padding">
               <img src="<?php echo $path; ?>img/lumiere/pylon.jpg" class="img-responsive wow fadeInRight">
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio  Section4
   ============================-->
<!--==========================
   Footer
   ============================-->
<?php include_once('../partials/footer.php')?>
<!-- end footer -->
</script>