
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
<section id="portfolio-section1" style="background:url('<?php echo $path; ?>img/lumiere/bg.jpg');">
   <div class="container-fluid cf-padding">
      <div class="row">
         <div class="col-lg-6"  style="padding: 130px 0px 0px 0px;">
            <div class="portfolio-section1-imgholder text-center">
               <img src="<?php echo $path; ?>img/huts/combined3.png" alt="" class="img-responsive wow fadeInLeft" style="">
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
            <div class="portfolio-section1-textholder wow fadeInRight">
               <a href="http://www.hutsrestaurant.com/"" class="btn btn-readmore-outline">Visit Website</a>
            </div>
         </div>
      </div>
   </div>
</section>

   <!--==========================
   portfolio  Section3
   ============================-->
<section id="portfolio-section3" style="background-color: #fff">
  <div class="cf-padding">
    <div class="row">
      <div class="col-lg-5">
        <div class="text-holder wow fadeInLeft" style="padding-top: 400px;padding-left: 100px">
           <p class="text-muted">Story Boards</p>
           <h2>Interior Designs.</h2>
           <p class="text-muted">With powerful content and appealing illustrations,turning  all earmarked surfaces  from table mats to the wall decor  into educative messages about the benefits of Organic Agriculture & Food .</p>
        </div>
      </div>
      <div class="col-lg-7">
        <div class="img-holder">
               <img src="<?php echo $path; ?>img/lumiere/lumiere-poster.png" class="img-responsive wow fadeInRight auto-margin" style="height:750px;width: auto;;">
        </div>
      </div>
    </div>
  </div>
</section>

   <!--==========================
   portfolio section5
   ============================-->
   <section id="portfolio-section7" style="background: #404040">
   <div class="container">
      <div class="row">
         <div class="col-lg-7">
            <div class="img-holder" style="padding:100px">
               <img src="<?php echo $path; ?>img/lumiere/invitation.png" class="img-responsive wow fadeInLeft">
            </div>
         </div>
         <div class="col-lg-5">
            <div class="text-holder wow fadeInRight" style="padding-top: 200px">
               <h2>Managed Social Media including Facebook , Instagram and Google Plus that improved public reception to the makeover to 100% Organic.</h2>
            </div>
         </div>
      </div>
   </div>
</section>
 

<section id="portfolio-section8" style="background-color: #fff;">
  <div class="container-fluid cf-padding">
    <div class="row">
      <div class="col-lg-6">
        <div class="img-holder">
          <img src="<?php echo $path; ?>img/lumiere/wall-slider1.jpg" class="img-responsive" style="margin-bottom: 30px;">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="img-holder">
          <img src="<?php echo $path; ?>img/lumiere/wall-slider2.jpg" class="img-responsive"  style="margin-bottom: 30px;">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="img-holder">
          <img src="<?php echo $path; ?>img/lumiere/wall-slider3.jpg" class="img-responsive">
        </div>
      </div>
      <div class="col-lg-6">
        <div class="img-holder">
          <img src="<?php echo $path; ?>img/lumiere/wall-slider4.jpg" class="img-responsive">
        </div>
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
               <img src="<?php echo $path; ?>img/lumiere/pylon.png" class="img-responsive wow fadeInRight">
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

