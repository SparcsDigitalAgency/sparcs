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
                     <p class="wow fadeInUp">We are a full-service and integrated UX Web Development, Live Streaming / Webcasting, Branding and Digital Marketing agency. We build brands with 360 degree solutions. A full service interactive digital agency approach to grow your brand online and amplify its reach.
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
               <h2>We are a full-service and integrated UX Web Development, Live Streaming/ Webcast, Branding and Digital Marketing agency.</h2>
               <p>We build brands with 360 degree solutions.A full service interactive digital agency approach to grow your brand online and amplify its reach.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of About Us section 2
   ============================-->
<!--==========================
   About Us section3
   ============================-->
<section id="about-section3">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="text-holder wow fadeInLeft">
               <p class="text-muted" style="margin-bottom: 0px">Our Team</p>
               <h2>See How We Do.</h2>
               <p class="text-muted">Our team comprises of highly motivated and innovative User Experience Designers, Graphic Designers, Web Developers, SEO Specialists, Technical Content Writers and Professional Photographers.</p>
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
   About Us section4
   ============================-->
<section id="about-section4">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="text-holder wow fadeInDown text-center">
               <h2>Brainstorm</h2>
               <p class="text-muted">The first step would be to sit down and get to know you.<br> We'll discuss goals and project objectives and any other relevant information.</p>
            </div>
         </div>
         <div class="col-lg-7" style="margin: 0 auto;">
            <div class="image-holder wow fadeInUp">
               <img src="img/company/about2.png" class="img-responsive">
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of About Us section 4
   ============================-->
      <!--==========================
   About Us section5
   ============================-->
<section id="about-section5">
   <div class="container">
      <div class="row">
         <div class="col-lg-12">
            <div class="text-holder wow fadeInDown text-center">
               <h2>Planning</h2>
               <p class="text-muted">With the information gathered from our brainstorm session, <br> wireframes would be developed defining layout, interactions and content structure.</p>
            </div>
         </div>
         <div class="col-lg-7" style="margin: 0 auto;">
            <div class="image-holder wow fadeInUp">
               <img src="img/company/about3.png" class="img-responsive">
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of About Us section 5
   ============================-->

   <!--==========================
   About Us section6
   ============================-->
<section id="about-section6">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="text-holder wow fadeInLeft">
               <h2>Designing</h2>
               <p class="text-muted">Once the wireframes are finalized, detailed mock-ups <br>of key pages will be designed to show the look and<br> feel of your product.</p>
            </div>
         </div>
         <div class="col-lg-6">
            <div class="img-holder">
               <img src="img/company/about4.png" class="img-responsive wow fadeInRight">
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of About Us section 6
   ============================-->
   <!--==========================
   end of About Us section 5
   ============================-->

   <!--==========================
   About Us section7
   ============================-->
<section id="about-section7">
   <div class="container">
      <div class="row">
         <div class="col-lg-6">
            <div class="img-holder">
               <img src="img/company/about-5.png" class="img-responsive wow fadeInLeft">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="text-holder wow fadeInRight ">
               <h2>Development</h2>
               <p class="text-muted">With the final creative concepts completed, the designs are then coded and transformed into a fully functional product.</p>
            </div>
         </div>
         
      </div>
   </div>
</section>
<!--==========================
   end of About Us section 7
   ============================-->

<!--==========================
Footer
============================-->
<?php include_once('partials/footer.php')?>
<!-- end footer -->