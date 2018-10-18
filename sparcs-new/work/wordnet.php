
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
         
         <div class="carousel-inner " role="listbox">
            <div class="carousel-item active">
               <div class="carousel-background"><img src="<?php echo $path; ?>img/wordnet/bg.jpg" alt=""></div>
               <div class="carousel-container">
                  <div class="carousel-content col-md-8">
                     <h2 class="wow fadeInUp white f64">Wordnet Productions</h2>
                     <p class="wow fadeInUp white">Wordnet TV is today a successful  digital evangelisation ministry - an initiative of Society for the Divine Word of God, whose activities are spread over 72 countries.</p>
                     <p class="wow fadeInUp white">
We provided cutting edge technical support and quality design inputs from A-Z  into Wordnet’s  transformation from a website with a blog into a full fledged popular live webcasting channel  supported by extensive OTT application development over ROKU, Apple TV, Amazon Fire TV, Chromecast  and Android TV.
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
   <div class="container">
      <div class="row">
          <div class="col-xs-12 col-md-8 auto-margin text-holder auto-margin wow fadeIn marginbottom" style="visibility: visible; animation-name: fadeIn;">
                <h2>WordNet TV Identity </h2>
                <p>To visually sum up the identity of Wordnet TV as a digital evangelising platform through which the Divine Word of God is spread like a gift across the globe, we developed the logo using the image of the gift ribbon. </p>
                  <p>In the contrast color  of sunshine yellow, it travels around and across a spinning blue globe set on a starry sky in a slightly asymmetric way expressing the feeling of being securely held and protected while also evoking the image of the Holy Cross.</p>
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
        <div class="row">
            <div class="col-lg-12 no-padding text-center">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/2QURjCh9xqo?controls=0&rel=0&showinfo=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
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
          <div class="col-lg-12 text-holder auto-margin wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <h2>OTT App Development</h2>
                <p>Developing OTT Applications for Worldnet on Apple TV, Chromecast, Android TV, Roku, Amazon Fire TV</p>
            </div>
      </div>
      <div class="col-md-6 col-md-offset-3 auto-margin">
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
   <div class="container ">
      <div class="row">
          <div class="col-md-12 text-holder auto-margin wow fadeIn" style="visibility: visible; animation-name: fadeIn;">
                <h2>Swipe right</h2>
                <p>The simplicity of swiping increases user engagement. Swipe right to save a trip and left to discard a trip.</p>
            </div>
      </div>
      <div class="col-xs-12 col-md-6 auto-margin app-screens">
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

