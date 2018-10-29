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

include_once('partials/header.php')

?>



<!--==========================
   Intro Section
============================-->
<section id="intro" class="">
   <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
        
         <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
               <div class="carousel-background"><img src="img/intro-bg.png" alt=""></div>
               <div class="carousel-container">
                  <div class="carousel-content ">
                     <h2 class="wow fadeInUp">Driven by Design</h2>
                     <p class="wow fadeInUp">A responsive creative professional team of hands-on perfectionists.
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
   end of Intro Section
============================-->

<!--==========================
   About Us Section
============================-->
<section id="about" class="">
   <div class="container">
      <div class="row">
         <div class="col-lg-8">
            <div class="about-content">
               <h2 class="wow fadeInUp">Company</h2>
               <p class="wow fadeInUp">SPARCS delivers high quality, reliable and affordable services to customers globally: Creative Campaigns, Website Design & Development, Mobile App/OTT Development, Branding, Digital Marketing, Content development and more ...</p>
            </div>
            <div class="button-holder">
               <a href="<?php echo $path; ?>company#intro" class="btn btn-readmore wow fadeInUp">Read more</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of about us Section
============================-->

<!--==========================
Services Section
============================-->
<section id="services" class="">
   <div class="container">
      <div class="row">
         <div class="col-lg-5">
            <div class="services-content">
               <h2 class="wow fadeInUp">Services</h2>
               <p class="wow fadeInUp">Our full service interactive approach helps grow your brand online and to amplify its reach.</p>
            </div>
            <div class="button-holder mob-hide">
               <a href="<?php echo $path; ?>services#intro" class="btn btn-readmore wow fadeInUp">View more</a>
            </div>
         </div>
         <div class="col-lg-7">
            <div class="row">
               <div class="col-lg-6">
                  <div class="flip-card wow fadeInUp">
                     <div class="front no-after">
                        <div class="inner">
                           <div class="feature-box media-box">
                              <div class="fbox-icon position-relative mb-4" >
                                 <img src="img/services/service-icon1.png" class="noradius nobg tleft" alt="">
                              </div>
                              <div class="fbox-desc">
                                 <h3 class="nott">Strategy & Consulting</h3>
                                 <p class="t500">Good strategy builds great brands.We analyze every aspect of your industry , apply our expertise and help you hit target.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="flip-card wow fadeInUp">
                     <div class="front no-after">
                        <div class="inner">
                           <div class="feature-box media-box">
                              <div class="fbox-icon position-relative mb-4" >
                                 <img src="img/services/service-icon2.png" class="noradius nobg tleft" alt="">
                              </div>
                              <div class="fbox-desc">
                                 <h3 class="nott">Creative Design</h3>
                                 <p class="t500">Our perfectly executed inspired creatives bring Ideas to Life. Our websites, videos, campaigns and copywriting help build a winning brand story</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="flip-card wow fadeInUp">
                     <div class="front no-after">
                        <div class="inner">
                           <div class="feature-box media-box">
                              <div class="fbox-icon position-relative mb-4" >
                                 <img src="img/services/service-icon3.png" class="noradius nobg tleft" alt="">
                              </div>
                              <div class="fbox-desc">
                                 <h3 class="nott">Web & Mobile Development</h3>
                                 <p class="t500">Our developers use cutting edge technology to provide avant garde  solutions and build you high performance apps and websites.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-6">
                  <div class="flip-card wow fadeInUp">
                     <div class="front no-after">
                        <div class="inner">
                           <div class="feature-box media-box">
                              <div class="fbox-icon position-relative mb-4" >
                                 <img src="img/services/service-icon4.png" class="noradius nobg tleft" alt="">
                              </div>
                              <div class="fbox-desc">
                                 <h3 class=" nott">Digital Marketing</h3>
                                 <p class=" t500">Our marketing team are go-getters who build relevant content and apply  customized strategies and tactics to increase qualified traffic to your business.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="button-holder mob-only">
                  <a href="<?php echo $path; ?>services#intro" class="btn btn-readmore wow fadeInUp">View more</a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of Services Section
============================-->


<!--==========================
   works section2
   ============================-->
<section id="works-section2">
   <div class="container">
      
         <div class="row">
            <div class="col-lg-6 items">
               <div class="portfolio-item white">
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
               <div class="portfolio-item black">
                  <a href="<?php echo $path ?>work/mr-light" class="portfolio-popup">
                        
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >Mr.Light</h2>
                           <p >Web Design & Developent, Responsive Design</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/mrlight/cover.jpg" alt=""  class="img-responsive">
                  </a>
               </div>
            </div>
            <div class="col-lg-6 items">
               <div class="portfolio-item white">
                  <a href="<?php echo $path ?>work/omg" class="portfolio-popup">
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >One More Game</h2>
                           <p >Web Development, Branding, Print Design</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/omg/cover.jpg" alt=""  class="img-responsive">
                  </a>
               </div>
            </div>
            <div class="col-lg-6 items">
               <div class="portfolio-item black">
                  <a href="<?php echo $path ?>work/genex" class="portfolio-popup">
                        
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >Genex Automation</h2>
                           <p >Web Design & Developent, Branding, Print Design</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/genex/cover.jpg" alt=""  class="img-responsive">
                  </a>
               </div>
            </div>
            
            <div class="col-lg-6 items">
               <div class="portfolio-item black">
                  <a href="<?php echo $path ?>work/lumiere" class="portfolio-popup">
                     <div class="texts">
                        <div class="texts-head">
                           <h2 >Lumiere Organic</h2>
                           <p >Content, Social Media, Branding, Photography, Illustrations, Print Materials, Package Designs</p>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/lumiere/cover.jpg" alt=""  class="img-responsive">
                  </a>
               </div>
            </div>

            <div class="col-lg-6 items">
               <div class="portfolio-item black">
                  <a href="<?php echo $path ?>works" class="portfolio-popup">
                     <div class="texts see-all">
                        <div class="texts-head">
                           <h2 >See All Works <i class="fa fa-angle-right"></i></h2>
                        </div>
                        <div class="texts-icon"><i class="fa fa-angle-right"></i></div>
                     </div>
                     <img src="<?php echo $path ?>img/see-all-cover.jpg" alt=""  class="img-responsive">
                  </a>
               </div>
            </div>

          
         </div>
      </div>
</section>
<!--==========================
   end of works  Section2
   ============================-->


<!-- footer -->
<?php include_once('partials/footer.php')?>
<!-- end footer -->

