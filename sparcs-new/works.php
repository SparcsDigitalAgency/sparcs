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
<section id="works-section1">
   <div class="container marginbottom50">
      <div class="row">
         <div class="col-lg-8">
            <div class="works-content">
               <h2 class="wow fadeInUp">Our Works</h2>
               <p class="wow fadeInUp">Take a moment to view some of our latest work. While most of the sites below were built by us from the ground up, we experience a wide range of involvement with our client’s websites.</p>
            </div>
            <div class="button-holder">
               <a href="contact.php" class="btn btn-readmore wow fadeInUp">Get in Touch</a>
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
                  <a href="<?php echo $path ?>/work/mr-light" class="portfolio-popup">
                        
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
                  <a href="<?php echo $path ?>/work/quovadis" class="portfolio-popup">
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
                  <a href="<?php echo $path ?>work/mr-light" class="portfolio-popup">
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >Gloria Travels</h2>
                           <p >Web Developent, Responsive Design</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/gloria-travels/cover.jpg" alt="">
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

