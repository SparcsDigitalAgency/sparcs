
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
    .slick-slide {
      margin: 0px 20px;
    }

    .slick-slide img {
      width: 100%;
    }

    .slick-prev:before,
    .slick-next:before {
      color: black;
    }


    .slick-slide {
      transition: all ease-in-out .3s;
      opacity: .2;
    }
    
    .slick-active {
      opacity: 0.2;
    }

    .slick-current {
      opacity: 1;
    }
    .slick-center {
    -webkit-transform: scale(1.25);
    -moz-transform: scale(1.25);
    transform: scale(1.25);
}
.slick-next{
   display: none!important;
}
.slick-prev{
   display: none!important;
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
   end of portfolio section11
   ============================-->
   <section id="portfolio-section10" style="background-color: #fff;">
   <div class="container-fluid">
      <div class="row">
          <div class="text-holder auto-margin wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <h2>Swipe right</h2>
                <p>The simplicity of swiping increases user engagement. Swipe right to save a trip and left to discard a trip.</p>
            </div>
      </div>
      <div class="row margintop50">
            <div class="col-lg-2 no-padding auto-margin">
               <div class="img-holder">
                  <img src="<?php echo $path; ?>img/wordnet/apple-tv.png" alt="" class="img-responsive">
                  <img src="<?php echo $path; ?>img/wordnet/appletv-logo.png" alt="" class="img-responsive">
               </div>
            </div>
            <div class="col-lg-2 no-padding auto-margin">
               <div class="img-holder">
                  <img src="<?php echo $path; ?>img/wordnet/android-tv.png" alt="" class="img-responsive">
                  <img src="<?php echo $path; ?>img/wordnet/androidtv-logo.png" alt="" class="img-responsive">
               </div>
            </div>
            <div class="col-lg-2 no-padding auto-margin">
               <div class="img-holder">
                  <img src="<?php echo $path; ?>img/wordnet/roku-tv.png" alt="" class="img-responsive">
                  <img src="<?php echo $path; ?>img/wordnet/rokutv-logo.png" alt="" class="img-responsive">
               </div>
            </div>
            <div class="col-lg-2 no-padding auto-margin">
               <div class="img-holder">
                  <img src="<?php echo $path; ?>img/wordnet/chromecast.png" alt="" class="img-responsive">
                  <img src="<?php echo $path; ?>img/wordnet/chromecast-logo.png" alt="" class="img-responsive">
               </div>
            </div>
            <div class="col-lg-2 no-padding auto-margin">
               <div class="img-holder">
                  <img src="<?php echo $path; ?>img/wordnet/amazon-firetv.png" alt="" class="img-responsive">
                  <img src="<?php echo $path; ?>img/wordnet/amazontv-logo.png" alt="" class="img-responsive">
               </div>
            </div>
      </div>
   </div>
</section>

<section id="portfolio-section12">
   <div class="container cr-padding">
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="<?php echo $path; ?>img/wordnet/telecast-screen1.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo $path; ?>img/wordnet/telecast-screen2.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo $path; ?>img/wordnet/telecast-screen3.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
   </div>
</section>

<section id="portfolio-section12" style="background-color: #f7f7f7">
   <div class="container cr-padding2">
      <div class="row">
          <div class="text-holder auto-margin wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <h2>Swipe right</h2>
                <p>The simplicity of swiping increases user engagement. Swipe right to save a trip and left to discard a trip.</p>
            </div>
      </div>
      <div class="app-screens">
       <div>
         <img src="<?php echo $path; ?>img/wordnet/screen-1.jpg">
       </div>
       <div>
         <img src="<?php echo $path; ?>img/wordnet/screen-2.jpg">
       </div>
       <div>
         <img src="<?php echo $path; ?>img/wordnet/screen-3.jpg">
       </div>
       <div>
         <img src="<?php echo $path; ?>img/wordnet/screen-4.jpg">
       </div>
     </div>
   </div>
</section>
  
      <!--==========================
   portfolio  Section11
   ============================-->


<!--==========================
Footer
============================-->

<?php include_once('../partials/footer.php')?>
<!-- end footer -->

