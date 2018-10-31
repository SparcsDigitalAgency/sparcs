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
                  <div class="carousel-content " style="width: 70%">
                     <h2 class="wow fadeInUp">Company</h2>
                     <p class="wow fadeInUp">SPARCS has over 15 years of rich experience with loyal, long term client relationships.We deliver high quality, reliable and affordable services to our customers globally:<br>Creative Campaigns, Website Design & Development, Mobile App/OTT Development, Branding and Digital Marketing, Content Development and more...
                     </p>
                     <a href="<?php echo $path; ?>works" class="btn btn-readmore wow fadeInUp">See Our Works</a>
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
               <p>We offer Integrated UI/UX Development, Live Streaming/Webcasting, Branding & Digital Marketing Solutions, Mobile App/ OTT Development, Content Development and whatever it takes to provide apt solutions to grow your business.</p>
               
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
      <div class="col-lg-6 center col-padding height750 wow fadeInLeft" style="background: url('img/company/1.jpg') center center / cover no-repeat;">
         <div>&nbsp;</div>
      </div>

      <div class="col-lg-6 col-padding ">
         <div>
            

            <!-- About Us Featured Boxes
            ============================================= -->
            <div class="row clearfix">
               <div class="col-lg-10 col-md-6 bottommargin">
                  <div class="featured-box fbox-plain wow fadeInRight">
                     <div class="fbox-icon">
                        <i class="fa fa-coffee"></i>
                     </div>
                     <h3>Brainstorm</h3>
                     <p>In a typical Sparcs free-for-all, think-tank session, amazing solutions always come up in response to Your needs.</p>
                  </div>
               </div>
               <div class="col-lg-10 col-md-6 bottommargin">
                  <div class="featured-box fbox-plain wow fadeInRight">
                     <div class="fbox-icon">
                        <i class="fa fa-cubes"></i>
                     </div>
                     <h3>Design</h3>
                     <p>Wireframes are swiftly finalised and that is when You step in again to take a look at the mock up of Your Key pages.</p>
                  </div>
               </div>
               <div class="col-lg-10 col-md-6 bottommargin">
                  <div class="featured-box fbox-plain wow fadeInRight">
                     <div class="fbox-icon">
                        <i class="fa fa-question-circle"></i>
                     </div>
                     <h3>Develope</h3>
                     <p>With Your feedback we finetune solutions and get down to deployment using the best & latest in technology.</p>
                  </div>
               </div>
               <div class="col-lg-10 col-md-6">
                  <div class="featured-box fbox-plain wow fadeInRight">
                     <div class="fbox-icon">
                        <i class="fa fa-handshake-o"></i>
                     </div>
                     <h3>Deliver</h3>
                     <p>Our greatest moment at Sparcs is the hand-over  of a  fully functional final product to you.</p>
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
               <h2>Sparcs is a<br> 'What if team of problem solvers'</h2>
               <p class="text-muted"> who are game to search out solutions anywhere! even in unusual places.By disposition we are Art Lovers who are also highly motivated innovative Designers, Developers, SEO Specialists and Content Writers.</p>
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

