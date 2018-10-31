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
   portfolio  Section1
   ============================-->
<section id="lumiere-portfolio-section1" class="dark-section">
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
               <h2>Print Designs.</h2>
               <p class="text-muted">Designed attractive invites, fliers.. etc to encourage public to switch over to safe organic options in food & other home products. Generic label for certain sets of products were re-designed to reflect a distinct earthy aesthetic.</p>
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
         <div class="col-md-8 col-sm-12 text-holder auto-margin wow fadeIn">
            <h2>Wall Illustrations</h2>
            <p> We chose to illustrate this text using the entire 360 degrees wallspace above shelf height in a freehand playful style to appeal to families with children about the benefits of Organic Food & Agriculture.</p>
         </div>
      </div>
   </div>
   <div class="">
      <div class=" auto-margin lumiere-slider">
         <div>
            <img src="<?php echo $path; ?>img/lumiere/slider-2.jpg">
         </div>
         <div>
            <img src="<?php echo $path; ?>img/lumiere/slider-1.jpg">
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
               <h2>Paper Pylon.</h2>
               <p class="text-muted">Eco friendly collapsible Pylons where paper replaced flex, were designed to be used in pop-up stalls.</p>
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