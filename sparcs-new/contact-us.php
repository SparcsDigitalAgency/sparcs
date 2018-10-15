
<!-- header styles-->
<?php include_once('partials/header-styles.php')?>
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
   header-menu
============================-->
<?php include_once('partials/header-menu.php')?>
<!--==========================
 end of header-menu
============================-->
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
                        <button class="contact100-form-btn submit_btn pull-right" id="submit_btn" >Send us an enquiry</button><div style="display:none; float:left; margin:5px;" id="dvloader"><img src="img/ajax-loader.gif" /></div>
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
contact-us Section
============================-->
<?php include_once('partials/contact.php')?>
<!--==========================
end of contact-us Section
============================-->

<!-- scroll-top -->
<?php include_once('partials/scroll-top.php')?>

<!-- map Script Libraries -->
<?php include_once('partials/map-styles.php')?>

<!-- JavaScript Libraries -->
<?php include_once('partials/footer-scripts.php')?>
<script type="text/javascript">
   $(function() {
   $.scrollify({
   section : "section",
   });
   });
</script>