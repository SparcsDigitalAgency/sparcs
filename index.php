<?php
	$meta_tags=array(
			'title'			=> 'Sparcs Digital Agency | Digital Agency in Kochi, Kerala',
		'description'	=> 'Sparcs is a Digital Agency which delivers high quality, reliable and affordable services to our customer globally.',
		'keywords'=>'web development, web design, branding, digital marketing, SEO, kochi, Kerala',
		"no-index" => true,
		'no-follow' =>true,
		'no-archieve' =>true,

	);

	include_once("header.php");		
?>
<header id="header" class="index-header">
    <div class="container">We are a fun mix of designers and strategists with a great passion for all things creative.
    <article>Have a project in mind? <a title="Get in touch" href="<?php echo $path ?>contact" data-text="Get in touch" class="button-hover">Get in touch</a></article>
</div>
    </header><!--header-->                           
                        
    <section id="infographics">
        <div class="container">
    <ul class="row">
    <li class="col-lg-3 col-md-6 col-sm-6">
    
    <img src="images/home-icon-1.png" width="100px">
    <h2>Brainstorm</h2> The first step would be to sit down and get to know you. We'll discuss goals and project objectives and any other relevant information.</li>
    
    <li class="col-lg-3 col-md-6 col-sm-6">
   
     <img src="images/home-icon-2.png" width="100px">
    <h2>Plan</h2> With the information gathered from our brainstorm session, wireframes would be developed defining layout, interactions and content structure.</li>
    
    <li class="col-lg-3 col-md-6 col-sm-6">
    
    <img src="images/home-icon-3.png" width="100px">
    <h2>Design</h2> Once the wireframes are finalized, detailed mock-ups of key pages will be designed to show the look and feel of your product.
    </li>
    
    <li class="col-lg-3 col-md-6 col-sm-6">
   
    <img src="images/home-icon-4.png" width="100px">
    <h2>Develop</h2> With the final creative concepts completed, the designs are then coded and transformed into a fully functional product.
    </li>
    </ul>
    </div>
    <div class="clear"></div>
    </section> <!--infographics-->  


    <section class="sec-padding section-light">
      <div class="container">
        <div class="row">
          
          <div class="col-sm-12">
            <div class="sec-title-container text-center"> 
             <h2 class="font-weight-6 less-mar-1 montserrat line-height-5">Who we are and what we do 
                <!-- <br>
               <span class="font-weight-3"> for successful business</span> -->
           </h2>
                <h6 class="ce-sub-text raleway opacity-7"><!-- Praesent mattis commodo augue Aliquam ornare hendrerit augue Cras tellus In pulvinar lectus a est Curabitur eget orci Cras laoreet ligula. Etiam sit amet dolor Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae Nullam tellus diam volutpat. --></h6>
            </div>
          </div>
          <div class="clearfix"></div>
          <!--end title-->
          
          <div class="col-md-3">
            <div class="ce-feature-box-16 text-center margin-bottom">
              <div class="text-box shadow">
                <div class="top-line"></div>
                <img src="images/service-icon-1.png" width="100px"><br><br>
                <h5 class="title font-weight-5">Startegy & Consulting</h5>
                <br>
                <p>We build brands with razor-sharp strategy. We analyze every aspect of your industry and apply our digital expertise to provide a roadmap for success.</p>
                <br>
                <br>
                <a href="<?php echo $path; ?>strategy_consulting" class="btn but">READ MORE 
                    <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i>  -->
                     
                </a> </div>
            </div>
          </div>
          <!--end item-->
          
          <div class="col-md-3">
            <div class="ce-feature-box-16 text-center margin-bottom">
              <div class="text-box shadow">
                <div class="top-line"></div>
                <img src="images/service-icon-2.png" width="100px"><br><br>
                <h5 class="title font-weight-5">Creative Design</h5>
                <br>
                <p>We bring ideas to life with perfectly executed creative. Our websites, videos, campaigns and copywriting build a brand story that will resonate.</p>
                <br>
                <br>
                <a href="<?php echo $path; ?>creative_design" class="btn but">READ MORE 
                    <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i>  -->
                </a> </div>
            </div>
          </div>
          <!--end item-->
          
          <div class="col-md-3">
            <div class="ce-feature-box-16 text-center margin-bottom">
              <div class="text-box shadow">
                <div class="top-line"></div>
                <img src="images/service-icon-3.png" width="100px"><br><br>
                <h5 class="title font-weight-5">Web & Mobile Development</h5>
                <br>
                <p>With a full team of developers working on cutting-edge solutions, we customize interactive development for every client need.</p>
                <br>
                <br>
                <a href="<?php echo $path; ?>web_mobile_development" class="btn but">READ MORE 
                    <!-- <i class="fas fa-long-arrow-alt-right" aria-hidden="true"></i> -->
                </a>
                </div>
            </div>

          </div>
          <div class="col-md-3">
            <div class="ce-feature-box-16 text-center margin-bottom">
              <div class="text-box shadow">
                <div class="top-line"></div>
                <img src="images/service-icon-4.png" width="100px" class="img-responsive"><br><br>
                <h5 class="title font-weight-5">Digital Marketing</h5>
                <br>
                <p>Our dynamic marketing team gets results. We apply a series of customized tactics to bring qualified traffic to your site and build relevant content that converts.</p>
                <br>
                <br>
                <a href="<?php echo $path; ?>digital_marketing" class="btn but">READ MORE
                    <!-- <i class="fa fa-long-arrow-right" aria-hidden="true"></i>  -->
                </a> 
            </div>
            </div>
            
          </div>
          <!--end item--> 

        </div>
      </div>
    </section>




    <section id="client-logo">
     <div class="container"><span>past Clients</span>
        <h3>Sparcs has been honored to partner up with these clients.</h3>
    <a href="<?php echo $path; ?>portfolio" title="See Our Portfolio">
    <img src="images/client-logo.png" alt="Leadpile, A4Add, Brook and Dale, SafeGuard, Shalom media, Shalom Media Club, Sophia Books, SVD World, Wordnet Productions, Sunny Diamonds, Tara, Genx Automation, One More Game, Handyman Kochi, " border="0">
    </a>
    </div>
    </section><!--client-logo-->    
    <?php include_once("footer.php"); ?>