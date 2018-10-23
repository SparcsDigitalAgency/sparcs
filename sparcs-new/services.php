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
                  <div class="services-icon" >
                     <img src="img/services/service-icon1.png" alt="" class="img-responsive">
                  </div>
                  <h2>Strategy & Consulting</h2>
                  <span>We build brands with razor-sharp strategy. We analyze every aspect of your industry and apply our digital expertise to provide a roadmap for success.</span>
               </div>
               <ul>
                   <li><i class="fa fa-check-circle"></i>Business Analysis &amp; Consulting</li>
                     <li><i class="fa fa-check-circle"></i>Information Architecture &amp; User Experience</li>
                     <li><i class="fa fa-check-circle"></i>Brand Strategy</li>
                     <li><i class="fa fa-check-circle"></i>Campaign Strategy</li>
                     <li><i class="fa fa-check-circle"></i>Content Strategy &amp; Copywriting</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>


<section id="services-section3" class="">
   <div class="container">
      <div class="row">
         <div class="col-lg-7 bottommargin paddingleft200">
            <div class="text-holder">
               <div class="heading-block">
                  <div class="services-icon" >
                     <img src="img/services/service-icon2.png" alt="" class="img-responsive">
                  </div>
                  <h2>Creative Design</h2>
                  <span>Our perfectly executed inspired creatives bring Ideas to Life. Our websites, videos, campaigns and copywriting help build a winning brand story.</span>
               </div>
               <ul>
                   <li><i class="fa fa-check-circle"></i>Logo &amp; Branding</li>
                     <li><i class="fa fa-check-circle"></i>Web &amp; Mob App Design</li>
                     <li><i class="fa fa-check-circle"></i>User Interface Design</li>
                     <li><i class="fa fa-check-circle"></i>Print Design</li>
                     <li><i class="fa fa-check-circle"></i>Digital Photography</li>
                     <li><i class="fa fa-check-circle"></i>Motion Graphics</li>
               </ul>
            </div>
         </div>
         <div class="col-lg-5">
            <div class="img-holder">
               
            </div>
         </div>
      </div>
   </div>
</section>

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
                  <div class="services-icon" >
                     <img src="img/services/service-icon3.png" alt="" class="img-responsive">
                  </div>
                  <h2>Web & Mobile Development</h2>
                  <span>Our developers use cutting edge technology to provide avant garde  solutions and build you high performance apps and websites.</span>
               </div>
               <ul>
                   <li><i class="fa fa-check-circle"></i>Web Application Development</li>
                     <li><i class="fa fa-check-circle"></i>Mobile Application Development</li>
                     <li><i class="fa fa-check-circle"></i>Ecommerce Development</li>
                     <li><i class="fa fa-check-circle"></i>Content Management System</li>
                     <li><i class="fa fa-check-circle"></i>Live Video Streaming</li>
                     <li><i class="fa fa-check-circle"></i>Web Hosting</li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="services-section3" class="">
   <div class="container">
      <div class="row">
         <div class="col-lg-7 bottommargin paddingleft200">
            <div class="text-holder">
               <div class="heading-block">
                  <div class="services-icon" >
                     <img src="img/services/service-icon4.png" alt="" class="img-responsive">
                  </div>
                  <h2>Digital Marketing</h2>
                  <span>Our marketing team are go-getters who build relevant content and apply  customized strategies and tactics to increase qualified traffic to your business.</span>
               </div>
               <ul>
                   <li><i class="fa fa-check-circle"></i>Search Engine Optimization</li>
                     <li><i class="fa fa-check-circle"></i>Pay-Per-Click Marketing</li>
                     <li><i class="fa fa-check-circle"></i>Email Marketing</li>
                     <li><i class="fa fa-check-circle"></i>Social Media Marketing</li>
                     <li><i class="fa fa-check-circle"></i>Conversion Rate Optimization</li>
                     <li><i class="fa fa-check-circle"></i>Display Advertising</li>
                     <li><i class="fa fa-check-circle"></i>Online Public Relations</li>
               </ul>
            </div>
         </div>
         <div class="col-lg-5">
            <div class="img-holder">
               
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