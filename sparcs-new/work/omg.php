
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

<section id="portfolio-section1" style="background:#68ab44">
   <div class="container-fluid cf-padding">
      <div class="row">
         <div class="col-lg-6"  style="padding: 50px 0px 0px 0px;">
            <div class="portfolio-section1-imgholder text-center">
               <img src="<?php echo $path; ?>img/omg/responsive.png" alt="" class="img-responsive wow fadeInLeft" style="">
            </div>
         </div>
         <div class="col-lg-6"  style="padding: 80px 80px 0px 80px;">
            <div class="portfolio-section1-textholder">
               <img src="<?php echo $path; ?>img/omg/logo-w.png" alt="" class="img-responsive wow fadeInLeft"style="height:100px;width: auto;margin-bottom: 20px">
               <h2 class=" wow fadeInRight" style="display: inline-block;margin-left: 20px">One More Game</h2>
               <p class="wow fadeInRight ">"Creating Awareness is creating Value" The story of a shoestring budget makeover of a highly popular Highway side eatery into a 100 percent Organic Restaurant.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Creating a  website with content that highlights the Restaurant's  backward integration with Organic farms , attractive visuals of food and selecting customer testimonials relevant to the objective of public education.</p>
            </div>
            <div class="portfolio-section1-textholder wow fadeInRight">
               <div class="icon"><i class="fa fa-check-circle"></i></div>
               <p class="description">Suggested and executed changes in  design & color of uniform for personnel in accordance with Client budget. Supporting the change of official color from Orange to Brilliant Green.</p>
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio  Section1
   ============================-->

<!--==========================
   end of works  Section2
   ============================-->
<!--==========================
Footer
============================-->
<?php include_once('../partials/footer.php')?>
<!-- end footer -->

 