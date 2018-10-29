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
         
         <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
               <div class="carousel-background"><img src="img/intro-bg.png" alt=""></div>
               <div class="carousel-container">
                  <div class="carousel-content ">
                     <h2 class="wow fadeInUp">Company</h2>
                     <p class="wow fadeInUp">SPARCS has over 15 years of rich experience with loyal,long term client relationships . We deliver high quality, reliable and affordable services to our customers globally- Creative Campaigns, Website Design & Development, Mobile App/OTT Development, Branding and Digital Marketing, Content Development and more ...
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
   About Us section2
   ============================-->
<section id="about-section2">
   <div class="container">
      <div class="row">
         
         <div class="col-lg-6">
            <div class="text-holder wow fadeInLeft">
               <h2> Sparcs is a Full Service Provider.</h2>
               <p>We offer Integrated UX Development, Live Streaming/Webcast, Branding & Digital Marketing Solutions, Mobile App/ OTT Development, Content Development and whatever it takes to provide apt solutions to grow your business.</p>
               
            </div>
         </div>
         <div class="col-lg-6">
            <div class="img-holder">
               <img src="img/company/about1.png" class="img-responsive wow fadeInRight">
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of About Us section 2
   ============================-->

<section class="section-company1 nopadding notopmargin nobg clearfix" >
   <div class="row common-height clearfix">
      <div class="col-lg-6 center col-padding bottommargin" style="background: url('img/company/1.jpg') center center / cover no-repeat; height: 750px;">
         <div>&nbsp;</div>
      </div>

      <div class="col-lg-6 col-padding" style="height: 750px;">
         <div>
            

            <!-- About Us Featured Boxes
            ============================================= -->
            <div class="row clearfix">
               <div class="col-lg-10 col-md-8 bottommargin">
                  <div class="featured-box fbox-plain">
                     <div class="fbox-icon">
                        <i class="fa fa-coffee"></i>
                     </div>
                     <h3>Brainstorm mode on!</h3>
                     <p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
                  </div>
               </div>
               <div class="col-lg-10 col-md-8 bottommargin">
                  <div class="featured-box fbox-plain">
                     <div class="fbox-icon">
                        <i class="fa fa-cubes"></i>
                     </div>
                     <h3>Wireframes finalised?</h3>
                     <p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
                  </div>
               </div>
               <div class="col-lg-10 col-md-8 bottommargin">
                  <div class="featured-box fbox-plain">
                     <div class="fbox-icon">
                        <i class="fa fa-question-circle"></i>
                     </div>
                     <h3>Satisfied?</h3>
                     <p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
                  </div>
               </div>
               <div class="col-lg-10 col-md-8">
                  <div class="featured-box fbox-plain">
                     <div class="fbox-icon">
                        <i class="fa fa-handshake-o"></i>
                     </div>
                     <h3>On time and just right.</h3>
                     <p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </section>













<!--==========================
   About Us section3
   ============================-->
<section id="about-section3" style="background-color: #eaeaea">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="text-holder wow fadeInLeft">
               <p class="text-muted" style="margin-bottom:2%">Our Team</p>
               <h2>Sparcs is a 'What If Team...?</h2>
               <p class="text-muted">of problem solvers who are game to search out solutions anywhere!Even in unusual places.By disposition we are Art Lovers who are also highly motivated innovative UX Designers, Graphic Designers, Web Developers, SEO Specialists, Content Writers and Professional Photographers.</p>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="img-holder">
               <img src="img/company/ourteam.png" class="img-responsive wow fadeInRight">
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of About Us section 3
   ============================-->

<!--==========================
Footer
============================-->
<?php include_once('partials/footer.php')?>
<!-- end footer -->

