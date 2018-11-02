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
                     <p class="wow fadeInUp">At SPARCS work is an opportunity to re-imagine and to create fresh new relationships.
                     </p>
                     <a href="#works-section2" id="workseemore" class="btn btn-readmore wow fadeInUp">See more</a>
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
<section id="works-section2" class="">
   <div class="container">
      
         <div class="row">
            <div class="col-lg-6 items">
               <div class="portfolio-item white wow fadeInLeft">
                  <a href="<?php echo $path ?>work/wordnet" class="portfolio-popup">
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >Wordnet Productions</h2>
                           <p >Web/Mobile Development, Webcasting, OTT Apps, Channel Identity</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/wordnet/cover.jpg" alt="" class="img-responsive">
                  </a>
               </div>
            </div>
            
            <div class="col-lg-6 items">
               <div class="portfolio-item black wow fadeInRight">
                  <a href="<?php echo $path ?>work/mr-light" class="portfolio-popup">
                        
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >Mr.Light</h2>
                           <p >Web Design & Developent, Responsive Design</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/mrlight/cover.jpg" alt="" class="img-responsive">
                  </a>
               </div>
            </div>
            <div class="col-lg-6 items">
               <div class="portfolio-item black wow fadeInLeft">
                  <a href="<?php echo $path ?>work/quovadis" class="portfolio-popup">
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >Quovadis Travel</h2>
                           <p >Web Design & Developent, Responsive Design</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/quovadis/cover.jpg" alt="" class="img-responsive">
                  </a>
               </div>
            </div>
            <div class="col-lg-6 items">
               <div class="portfolio-item white wow fadeInRight">
                  <a href="<?php echo $path ?>work/omg" class="portfolio-popup">
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >One More Game</h2>
                           <p >Web Development, Branding, Print Design</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/omg/cover.jpg" alt="" class="img-responsive">
                  </a>
               </div>
            </div>
            <div class="col-lg-6 items">
               <div class="portfolio-item black wow fadeInLeft">
                  <a href="<?php echo $path ?>work/genex" class="portfolio-popup">
                        
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >Genex Automation</h2>
                           <p >Web Design & Developent, Branding, Print Design</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/genex/cover.jpg" alt="" class="img-responsive">
                  </a>
               </div>
            </div>
            <div class="col-lg-6 items">
               <div class="portfolio-item white wow fadeInRight">
                  <a href="<?php echo $path ?>work/gloria" class="portfolio-popup">
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >Gloria Travels</h2>
                           <p >Web Design & Developent, Responsive Design</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/gloria/cover.jpg" alt="" class="img-responsive">
                  </a>
               </div>
            </div>
            <div class="col-lg-6 items">
               <div class="portfolio-item black wow fadeInLeft">
                  <a href="<?php echo $path ?>work/lumiere" class="portfolio-popup">
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >Lumiere Organic</h2>
                           <p >Content, Social Media, Branding, Photography, Illustrations, Print Materials, Package Designs</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/lumiere/cover.jpg" alt="" class="img-responsive">
                  </a>
               </div>
            </div>

            <div class="col-lg-6 items">
               <div class="portfolio-item black wow fadeInRight">
                  <a href="<?php echo $path ?>work/huts" class="portfolio-popup">
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >Huts Organic Restaurant</h2>
                           <p >Web Development, Content, Social Media, Photography, Illustrations, Print Materials</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/huts/cover.jpg" alt="" class="img-responsive">
                  </a>
               </div>
            </div>
            <div class="col-lg-6 items">
               <div class="portfolio-item white wow fadeInLeft">
                  <a href="<?php echo $path ?>work/esmart" class="portfolio-popup">
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >eSmart</h2>
                           <p>Branding and Print Materials</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/esmart/cover.jpg" alt="" class="img-responsive">
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



