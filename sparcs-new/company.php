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
   About Us  Section1
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
   end of About Us  Section1
   ============================-->
<!--==========================
   About Us section2
   ============================-->
<section id="about-section2">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="img-holder">
               <img src="img/company/about1.png" class="img-responsive wow fadeInLeft">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="text-holder wow fadeInRight">
               <p>Sparcs is a Full Service Provider.</p>
               <h2> We offer Integrated UX Development, Live Streaming/Webcast, Branding & Digital Marketing Solutions, Mobile App/ OTT Development, Content Development and whatever it takes to provide apt solutions to grow your business.</h2>
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of About Us section 2
   ============================-->

<section class="section-company1 nopadding notopmargin nobg clearfix" style="border-top: 1px solid #EEE; border-bottom: 1px solid #EEE;">
   <div class="row common-height clearfix">
      <div class="col-lg-6 center col-padding" style="background: url('img/company/1.jpg') center center / cover no-repeat; height: 750px;">
         <div>&nbsp;</div>
      </div>

      <div class="col-lg-6 col-padding" style="height: 750px;">
         <div>
            <div style="position: relative;">
               <div class="heading-block noborder" data-heading="A">
                  <h3 class="nott ls0">About Us</h3>
               </div>
            </div>

            <!-- About Us Featured Boxes
            ============================================= -->
            <div class="row clearfix">
               <div class="col-lg-10 col-md-8 bottommargin">
                  <div class="feature-box fbox-plain">
                     <div class="fbox-icon">
                        <a href="#"><i class="icon-et-globe"></i></a>
                     </div>
                     <h3>Brainstorm mode on!</h3>
                     <p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
                  </div>
               </div>
               <div class="col-lg-10 col-md-8 bottommargin">
                  <div class="feature-box fbox-plain">
                     <div class="fbox-icon">
                        <a href="#"><i class="icon-et-gears"></i></a>
                     </div>
                     <h3>Wireframes finalised?</h3>
                     <p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
                  </div>
               </div>
               <div class="col-lg-10 col-md-8 bottommargin">
                  <div class="feature-box fbox-plain">
                     <div class="fbox-icon">
                        <a href="#"><i class="icon-et-globe"></i></a>
                     </div>
                     <h3>Satisfied?</h3>
                     <p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
                  </div>
               </div>
               <div class="col-lg-10 col-md-8">
                  <div class="feature-box fbox-plain">
                     <div class="fbox-icon">
                        <a href="#"><i class="icon-et-document"></i></a>
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
<section id="about-section3">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="text-holder wow fadeInLeft">
               <p class="text-muted" style="margin-bottom: 0px">Our Team</p>
               <h2>Sparcs is a'What If...?</h2>
               <p class="text-muted">Team of problem solvers who are game to search out solutions anywhere!Even in unusual places.By disposition we are Art Lovers who are also highly motivated innovative UX Designers, Graphic Designers, Web Developers, SEO Specialists, Content Writers and Professional Photographers.</p>
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