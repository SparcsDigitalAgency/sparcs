<!-- header-->
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
   works  Section1
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
                     <h2 class="wow fadeInUp">Our Works</h2>
                     <p class="wow fadeInUp">A reliable responsive creative hands-on team of creative no-frills perfectionists.
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
   end of works  Section1
   ============================-->
<!--==========================
   works section2
   ============================-->
<section id="works-section2">
   <div class="container">
      
         <div class="row">
            <div class="col-lg-6 items">
               <div class="portfolio-item black">
                  <a href="<?php echo $path ?>work/mr-light" class="portfolio-popup">
                        
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >Mr.Light</h2>
                           <p >Web Design & Developent, Responsive Design</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/mrlight/cover.jpg" alt="">
                  </a>
               </div>
            </div>
            <div class="col-lg-6 items">
               <div class="portfolio-item white">
                  <a href="<?php echo $path ?>work/quovadis" class="portfolio-popup">
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >Quovadis Travel</h2>
                           <p >Web Design & Developent, Responsive Design</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/quovadis/cover.jpg" alt="">
                  </a>
               </div>
            </div>
            <div class="col-lg-6 items">
               <div class="portfolio-item white">
                  <a href="<?php echo $path ?>work/gloria" class="portfolio-popup">
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >Gloria Travels</h2>
                           <p >Web Developent, Responsive Design</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/gloria/cover.jpg" alt="">
                  </a>
               </div>
            </div>
            <div class="col-lg-6 items">
               <div class="portfolio-item black">
                  <a href="<?php echo $path ?>work/lumiere" class="portfolio-popup">
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >Lumiere Organic</h2>
                           <p >Content, Social Media, Branding</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/lumiere/cover.jpg" alt="">
                  </a>
               </div>
            </div>

          
         </div>
      </div>
</section>
<!--==========================
   end of works  Section2
   ============================-->
<!--==========================
Footer
============================-->
<?php include_once('partials/footer.php')?>
<!-- end footer -->

