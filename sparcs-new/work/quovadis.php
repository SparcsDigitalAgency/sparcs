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

<!--==========================
   portfolio  Section1
   ============================-->
<section id="quovadis-portfolio-section1">
   <div class="container">
      <div class="row">
         <div class="col-lg-6 paddingtop50only">
            <div class="portfolio-section-imgholder text-center">
               <img src="<?php echo $path; ?>img/quovadis/responsive.png" alt="" class="img-responsive wow fadeInLeft">
            </div>
         </div>
         <div class="col-lg-6 paddingsides80">
            <div class="portfolio-section-textholder wow fadeInRight">
               <img src="<?php echo $path; ?>img/quovadis/quovadis-logo.png" alt="" class="img-responsive wow fadeInRight">
               <p class="wow fadeInRight " >A brand new website for a US based Travel Company that speaks to Devotional Christian Hearts ,the world over </p>
            </div>
            <div class="portfolio-section-textholder wow fadeInRight">
               <div class="icon" ><i class="fa fa-check-circle"></i></div>
               <p class="description" >Giving  the Home page Full screen highly attractive visuals of projected destinations.</p>
            </div>
            <div class="portfolio-section-textholder wow fadeInRight">
               <div class="icon" ><i class="fa fa-check-circle"></i></div>
               <p class="description" >Creating easy to open & browse Gallery of Destinations and Travel packages  with all details.</p>
            </div>
            <div class="portfolio-section-textholder wow fadeInRight">
               <div class="icon" ><i class="fa fa-check-circle"></i></div>
               <p class="description">Creating Perfectly validated easy to use booking forms smoothly integrated with Payment gateway.</p>
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
<section id="quovadis-portfolio-section2">
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
   Footer
   ============================-->
<?php include_once('../partials/footer.php')?>
<!-- end footer -->