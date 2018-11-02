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

<!--==========================#
   portfolio  Section1
   ============================-->
<section id="esmart-portfolio-section1">
   <div class="container">
      <div class="row">
         <div class="text-holder auto-margin wow fadeInDown">
            <h2>Branding Identity</h2>
            <p> The inspiring story of a daring entrepreneurship that was looking <br>for a website revamp to reflect its Global Aspirations.</p>
         </div>
         <div class="img-holder auto-margin">
            <img src="<?php echo $path; ?>img/esmart/esmart-logo.png" alt="" class="style2-pic img-responsive wow fadeInDown" data-wow-duration="2s">
         </div>
      </div>
   </div>
</section>
<!--==========================#
   end of portfolio  Section1
   ============================-->

<!--==========================
   portfolio section5
   ============================-->
<section id="esmart-portfolio-section2">
   <div class="container no-padding">
       <div class="row">
         <div class="text-holder auto-margin wow fadeInDown">
            <h2>Print Meterials</h2>
            <p> The inspiring story of a daring entrepreneurship that was looking <br>for a website revamp to reflect its Global Aspirations.</p>
         </div>
      </div>
      <div class="row no-gutters">
         <div class="col-lg-6">
            <div class="img-holder auto-margin wow fadeIn">
               <img src="<?php echo $path; ?>img/esmart/1.jpg" alt="" class="img-responsive wow fadeIn" style="">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="img-holder auto-margin wow fadeIn">
               <img src="<?php echo $path; ?>img/esmart/2.jpg" alt="" class="img-responsive wow fadeIn" style="">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="img-holder auto-margin wow fadeIn">
               <img src="<?php echo $path; ?>img/esmart/3.jpg" alt="" class="img-responsive wow fadeIn" style="">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="img-holder auto-margin wow fadeIn">
               <img src="<?php echo $path; ?>img/esmart/4.jpg" alt="" class="img-responsive wow fadeIn" style="">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="img-holder auto-margin wow fadeIn">
               <img src="<?php echo $path; ?>img/esmart/5.jpg" alt="" class="img-responsive wow fadeIn" style="">
            </div>
         </div>
         <div class="col-lg-6">
            <div class="img-holder auto-margin wow fadeIn">
               <img src="<?php echo $path; ?>img/esmart/6.jpg" alt="" class="img-responsive wow fadeIn" style="">
            </div>
         </div>
      </div>
   </div>
</section>

<!--==========================
   end of portfolio section5
   ============================-->
 


<!--==========================
   Footer
   ============================-->
<?php include_once('../partials/footer.php')?>
<!-- end footer -->

