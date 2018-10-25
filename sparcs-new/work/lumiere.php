
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
   .slick-dots{
    display: none!important;
   }
</style>

<!--==========================
   portfolio  Section1
   ============================-->
<section id="portfolio-section1" style="background-image: linear-gradient(#7b844b,#9ca954);">
   <div class="container">
      <div class="row">
         <div class="col-lg-6"  style="padding: 30px 0px 0px 0px;">
            <div class="portfolio-section1-imgholder text-center">
               <img src="<?php echo $path; ?>img/lumiere/social-lumiere.png" alt="" class="img-responsive wow fadeInLeft" style="">
            </div>
         </div>
         <div class="col-lg-6"  style="padding: 80px 80px 0px 80px;">
            <div class="portfolio-section1-textholder">
               <img src="<?php echo $path; ?>img/lumiere/lumiere-white-logo.png" alt="" class="img-responsive wow fadeInLeft"style="height:100px;width: auto;margin-bottom: 20px">
               <p class="wow fadeInRight ">"Creating Awareness is creating Value" Soft Image augmentation strategies for a Bangalore based Organic Store Chain Brand ,Lumiere Organic Home Stores.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Creating powerful content in Blog format with various approaches to the Organic Life,Values.Products,Events etc. supported by on-site photography.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Creating Ambience  is creating Value - Setting up Lumiere Organic Home Store Franchisee store in Trivandrum with Public awareness messages inbuilt into decor.</p>
            </div>
            
         </div>
      </div>
   </div>
</section>

   <!--==========================
   portfolio  Section3
   ============================-->
<section id="portfolio-section3" style="background-color: #fff">
  <div class="container">
    <div class="row">
      <div class="col-lg-5">
        <div class="text-holder wow fadeInLeft" style="padding-top: 300px;">
           <p class="text-muted">Story Boards</p>
           <h2>Interior Designs.</h2>
           <p class="text-muted">With powerful content and appealing illustrations,turning  all earmarked surfaces  from table mats to the wall decor  into educative messages about the benefits of Organic Agriculture & Food .</p>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="img-holder">
               <img src="<?php echo $path; ?>img/lumiere/lumiere-poster.jpg" class="img-responsive wow fadeInRight auto-margin" style="height:600px;width: auto;;">
        </div>
      </div>
    </div>
  </div>
</section>

<section id="portfolio-section12" style="background-color: #f7f7f7">
   <div class="container">
      <div class="row">
          <div class="col-md-12 text-holder auto-margin wow fadeIn">
                <h2>Wall Illustrations</h2>
                <p>The simplicity of swiping increases user engagement. Swipe right to save a trip and left to discard a trip.</p>
            </div>
      </div>
   </div>
   <div class="">
     <div class=" auto-margin lumiere-slider">
       <div>
         <img src="<?php echo $path; ?>img/lumiere/wall-slider1-1.jpg">
       </div>
       <div>
         <img src="<?php echo $path; ?>img/lumiere/wall-slider2-1.jpg">
       </div>
       <div>
         <img src="<?php echo $path; ?>img/lumiere/wall-slider3-1.jpg">
       </div>
       <div>
         <img src="<?php echo $path; ?>img/lumiere/wall-slider4-1.jpg">
       </div>
     </div>
   </div>
</section>
   <!--==========================
   portfolio section9
   ============================-->
   <section id="portfolio-section9" style="background: #eaeaea">
   <div class="container">
      <div class="row">
         
         <div class="col-lg-5">
            <div class="text-holder wow fadeInLeft" style="padding-top: 300px;">
               <p class="text-muted">Story Boards</p>
               <h2>Interior Designs.</h2>
               <p class="text-muted">With powerful content and appealing illustrations,turning  all earmarked surfaces  from table mats to the wall decor  into educative messages about the benefits of Organic Agriculture & Food .</p>
            </div>
         </div>
         <div class="col-lg-7">
            <div class="img-holder" style="padding: 0px">
               <img src="<?php echo $path; ?>img/lumiere/pylon.jpg" class="img-responsive wow fadeInRight">
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of works  Section2
   ============================-->
<!--==========================
Footer
============================-->
<?php include_once('../partials/footer.php')?>
<!-- end footer -->


</script>

