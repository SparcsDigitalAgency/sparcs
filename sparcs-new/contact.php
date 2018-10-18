
<!-- header -->
<?php 

   $meta_tags=array(
         'title'        => 'Sparcs Digital Agency | Digital Agency in Kochi, Kerala',
      'description'  => 'Sparcs is a Digital Agency which delivers high quality, reliable and affordable services to our customer globally.',
      'keywords'=>'web development, web design, branding, digital marketing, SEO, kochi, Kerala',
      "no-index" => true,
      'no-follow' =>true,
      'no-archieve' =>true,

   );

include_once('partials/header.php')

?>
<style type="text/css">
   .nav-icon3 span{
      background: white;
   }
   #map{
      height: 100%;
      width: 100%;
   }
</style>

<!--==========================
      contact Section
      ============================-->
   <section id="contact-section1">
      <div class="container-fluid ">
         <div class="row">
            <div class="col-lg-6 nopadding">
               <div class="contact-content1" id="map">
                  
               </div>
            </div>
            <div class="col-lg-6 nopadding">
               <div class="contact-content2">
                  <div class="form-holder">
                     <h4 class="wow fadeInUp">We'd love to answer any questions you may have. Send us an email or come for a visit.</h4>
                     <fieldset id="contact_form" style="border:none;">
                           <input type="text" class="form-control"  name="name" placeholder="Full Name" required>
                           <input type="text" class="form-control"  name="email" placeholder="Email Address" required>
                           <input type="text" class="form-control"  name="phone" placeholder="Mobile Number" required>
                           <textarea class="form-control" name="message"  placeholder="Message" maxlength="140" rows="7"></textarea>  
                        <a class="btn btn-readmore  pull-right" id="submit_btn" >Send us an enquiry</a><div style="display:none; float:left; margin:5px;" id="dvloader"><img src="img/ajax-loader.gif" /></div>
                     </fieldset>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!--==========================
      end of CONTACT Section
      ============================-->
<!--==========================
Footer
============================-->
<?php include_once('partials/footer.php')?>
<!-- end footer -->