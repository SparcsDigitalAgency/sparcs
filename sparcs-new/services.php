<!-- header -->
<?php 

   $meta_tags=array(
         'title'        => 'Sparcs Digital Agency | Digital Agency in Kochi, Kerala',
      'description'  => 'Sparcs is a Digital Agency which delivers high quality, reliable and affordable services to our customer globally.',
      'keywords'=>'web development, web design, branding, digital marketing, SEO, kochi, Kerala',
      "no-index" => true,
      'no-follow' =>true,
      'no-archieve' =>true,

   );

include_once('partials/header.php')

?>


<!--==========================
   services  Section1
   ============================-->
<section id="intro">
   <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
         <ol class="carousel-indicators"></ol>
         <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
               <div class="carousel-background"><img src="img/intro-bg.png" alt=""></div>
               <div class="carousel-container">
                  <div class="carousel-content ">
                     <h2 class="wow fadeInUp">Our Services</h2>
                     <p class="wow fadeInUp">A responsive artistic professional team of hands-on perfectionists.
                     </p>
                     <a href="<?php echo $path; ?>contact" class="btn btn-readmore wow fadeInUp">Get In Touch</a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of services  Section1
   ============================-->

<!--==========================
   services  Section2
   ============================-->
<section id="services-section2" class="">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="img-holder">
               
            </div>
         </div>
         <div class="col-lg-6 bottommargin">
            <div class="text-holder">
               <div class="heading-block">
                  <h2>Retina Device Ready.</h2>
                  <span>Fabulously Sharp &amp; Intuitive on your HD Devices.</span>
               </div>
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus deserunt, nobis quae eos provident quidem. Quaerat expedita dignissimos perferendis, nihil quo distinctio eius architecto reprehenderit maiores.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of services Section2
   ============================-->

<!--==========================
Footer
============================-->
<?php include_once('partials/footer.php')?>
<!-- end footer -->