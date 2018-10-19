
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

include_once('../partials/header.php')
?>
<style type="text/css">
   .nav-icon3 span{
      background: white;
   }
   .change-color2 span{
      background: #c9252c;
   }
</style>




   <!--==========================#f94617
   portfolio  Section1
   ============================-->
<section id="portfolio-section1" style="background:#ff663e">
   <div class="container-fluid cf-padding">
      <div class="row">
         <div class="col-lg-6"  style="padding: 50px 0px 0px 0px;">
            <div class="portfolio-section1-imgholder text-center">
               <img src="<?php echo $path; ?>img/gloria/combined2.png" alt="" class="img-responsive wow fadeInLeft" style="max-height: 550px;width: auto;">
            </div>
         </div>
         <div class="col-lg-6"  style="padding: 80px 80px 0px 80px;">
            <div class="portfolio-section1-textholder">
               <img src="<?php echo $path; ?>img/gloria/gloria-logo-w.png" alt="" class="img-responsive wow fadeInLeft"style="height:70px;width: auto;margin-bottom: 20px">
               <p class="wow fadeInRight ">A brand new website for a US based Travel Company that speaks to Devotional Christian Hearts ,the world over.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Giving the Home Page the feel of a real window to the most attractive panoramic views of  well known Christian Pilgrimage sites.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Making Pilgrimage packages visually attractive and user friendly.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Ensuring  that fully validated sign up forms open smoothly  in accordance with the number or travelers clicked.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Ensuring that the completed booking forms are well integrated with the payment portal for hassle free remittance.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <a href="http://www.gloriatravels.org/"" class="btn btn-readmore-outline">Visit Website</a>
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio  Section1
   ============================-->

   <!--==========================
   portfolio section2
   ============================-->
<section id="portfolio-section2" style="background-color: #f2f2f2;">
   <div class="container-fluid cf-padding">
      <div class="row">
          <div class="text-holder auto-margin wow fadeInUp">
             <h2>Swipe right</h2>
             <p>The simplicity of swiping increases user engagement. Swipe right to save a trip and left to discard a trip.</p>
          </div>
      </div>
   </div>
   <div class="container-fluid wow fadeInUp">
      <div class="row">
          <div class="img-holder auto-margin">
            <img src="<?php echo $path; ?>img/gloria/tile.png" alt="" class="style2-pic img-responsive " data-wow-duration="2s">
          </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio section2
   ============================-->
<!--==========================
   end of works  Section2
   ============================-->
<!--==========================
Footer
============================-->
<?php include_once('../partials/footer.php')?>
<!-- end footer -->

 