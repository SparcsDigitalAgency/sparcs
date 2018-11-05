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
         <div class="text-holder auto-margin wow fadeInUp">
            <h2>Identity and Branding</h2>
            <p>For eSmart, a high end retail store specialising in State-of-the-Art Security products & systems, we created an identity based on ‘hidden eye’ of the Security Camera, a quintessential symbol of the concept of Security.The letter E stands for Electronic and is connected with all Smart Technologies.The Red color was selected to evoke the fiery martial nature of Security : the act of guarding.</p>
         </div>
         <div class="img-holder auto-margin">
            <img src="<?php echo $path; ?>img/esmart/logo1.jpg" alt="" class="style2-pic img-responsive wow fadeInUp" data-wow-duration="2s">
         </div>
         <div class="img-holder auto-margin">
            <img src="<?php echo $path;  ?>img/esmart/logo2.jpg"alt="" class="style2-pic img-responsive wow fadeInUp" data-wow-duration="2s">
         </div>
         <div class="img-holder auto-margin">
            <img src="<?php echo $path;  ?>img/esmart/logo3.jpg" alt="" class="style2-pic img-responsive wow fadeInUp" data-wow-duration="2s">
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

            <h2>Branding Accessories</h2>
            <p>Created Identity, Stationery and  Branded Accessories for eSmart - a High end single retail outlet of security products & systems.</p>
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

