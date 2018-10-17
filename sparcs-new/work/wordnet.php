
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
   Intro Section
============================-->
<section id="intro">
   <div class="intro-container">
      <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">
         <ol class="carousel-indicators"></ol>
         <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
               <div class="carousel-background"><img src="<?php echo $path; ?>img/wordnet/bg.jpg" alt=""></div>
               <div class="carousel-container">
                  <div class="carousel-content ">
                     <h2 class="wow fadeInUp white f64">Driven by Design</h2>
                     <p class="wow fadeInUp white">A responsive artistic professional team of hands-on perfectionists.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!--==========================
   end of Intro Section
============================-->

   <!--==========================
   portfolio section2
   ============================-->
<section id="portfolio-section10" style="background-color: #fff;">
   <div class="container-fluid">
      <div class="row">
          <div class="text-holder auto-margin wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <h2>Swipe right</h2>
                <p>The simplicity of swiping increases user engagement. Swipe right to save a trip and left to discard a trip.</p>
            </div>
      </div>
      <div class="row">
            <div class="col-lg-4 no-padding">
               <div class="img-holder">
                  <img src="<?php echo $path; ?>img/wordnet/scribble.jpg" alt="" class="img-responsive">
               </div>
            </div>
            <div class="col-lg-4 no-padding">
               <div class="img-holder">
                  <img src="<?php echo $path; ?>img/wordnet/wireframe.jpg" alt="" class="img-responsive">
               </div>
            </div>
            <div class="col-lg-4 no-padding">
               <div class="img-holder">
                  <img src="<?php echo $path; ?>img/wordnet/logo.jpg" alt="" class="img-responsive">
               </div>
            </div>
      </div>
   </div>
</section>
<!--==========================
   end of portfolio section2
   ============================-->
      <!--==========================
   portfolio  Section11
   ============================-->
<section id="portfolio-section11" style="background-color: #f4f4f4;">
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
               <img src="<?php echo $path; ?>img/wordnet/telecast.png" class="img-responsive wow fadeInRight auto-margin" style="height:750px;width: auto;;">
        </div>
      </div>
    </div>
  </div>
</section>

<!--==========================
Footer
============================-->
<?php include_once('../partials/footer.php')?>
<!-- end footer -->

 