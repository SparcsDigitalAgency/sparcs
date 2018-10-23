
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


 <!--==========================
   portfolio  Section1
   ============================-->
<section id="portfolio-section1" style="background:#eee;">
   <div class="container-fluid cf-padding">
      <div class="row">
         <div class="col-lg-6"  style="padding: 50px 0px 0px 0px;">
            <div class="portfolio-section1-imgholder text-center">
               <img src="<?php echo $path; ?>img/quovadis/responsive.png" alt="" class="img-responsive wow fadeInLeft" style="width:110%">
            </div>
         </div>
         <div class="col-lg-6"  style="padding: 80px 80px 0px 80px;">
            <div class="portfolio-section1-textholder">
               <img src="<?php echo $path; ?>img/quovadis/quovadis-logo.png" alt="" class="img-responsive wow fadeInLeft"style="height:70px;width: auto;margin-bottom: 20px">
               <p class="wow fadeInRight " style="color: #222">A brand new website for a US based Travel Company that speaks to Devotional Christian Hearts ,the world over </p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon" ><i class="fa fa-check-circle" style="color: #222"></i></div>
               <p class="description" style="color: #222">Giving  the Home page Full screen highly attractive visuals of projected destinations.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon" ><i class="fa fa-check-circle" style="color: #222"></i></div>
               <p class="description" style="color: #222">Creating easy to open & browse Gallery of Destinations and Travel packages  with all details.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon" ><i class="fa fa-check-circle" style="color: #222"></i></div>
               <p class="description" style="color: #222">Creating Perfectly validated easy to use booking forms smoothly integrated with Payment gateway.</p>
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
<section id="portfolio-section2" style="background-color: #444;padding: 0px">
   <div class="container-fluid no-padding">
      <div class="row">
          <div class="img-holder auto-margin">
            <img src="<?php echo $path; ?>img/quovadis/sheets.jpg" alt="" class="style2-pic img-responsive wow fadeIn" data-wow-duration="2s">
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

