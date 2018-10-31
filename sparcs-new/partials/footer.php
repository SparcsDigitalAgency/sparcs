<section id="contact" class="dark-section">
   <div class="container ">
      <div class="row">
         <div class="col-lg-12">
            <div class="contact-content text-center">
               <h2 class="wow fadeInUp">Get In Touch</h2>
               <p class="wow fadeInUp">Call: +91 88 48 78 47 32    |    info@sparcsdigital.com</p>
               <a href="<?php echo $path; ?>contact" class="btn btn-readmore wow fadeInUp">Talk to Us</a>
            </div>
         </div>
      </div>
      <div class="row text-center contactpadding">
         <div class="col-md-4 wow fadeInUp">
            <div class="contact-address">
               <i class="ion-ios-location-outline"></i>
               <h4>Kochi</h4>
               <p>1st floor, Thachil Tower<br>Pottakuzhi Jn, Kaloor, Kochi 682017.</p>
            </div>
         </div>
         <div class="col-md-4 wow fadeInUp" >
            <div class="contact-address middle" >
               <i class="ion-ios-location-outline"></i>
               <h4>Bangalore</h4>
               <p>#725, 21st Main Road,<br>2nd Phase JP Nagar, Banglore 560078.</p>
            </div>
         </div>
         <div class="col-md-4 wow fadeInUp">
            <div class="contact-address">
               <i class="ion-ios-location-outline"></i>
               <h4>Dublin</h4>
               <p>#12, Alderwood rise, Tallaght, Dublin 24<br>Ireland. Call +353 892 022 577</p>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12">
            <div class="copyright wow fadeInUp text-center">
               <p class="wow fadeInUp" style="margin-top: 50px;margin-bottom: 10px">Follow Us:</p>
               <div class="social-links" style="margin-bottom: 10px">
                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                  <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
               </div>
               &copy; Copyright 2014<strong> Sparcs</strong>. All Rights Reserved
            </div>
         </div>
      </div>
   </div>
</section>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<?php if ($contact): ?> 
    <!-- end map -->
<script>
         // Initialize and add the map
         function initMap() {
               var myLatlng = new google.maps.LatLng(10.0056691,76.2892194);
               var mapOptions = {
                 zoom: 16,
                 center: myLatlng,
                 disableDefaultUI: true,
                 styles:[
                          {
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#212121"
                              }
                            ]
                          },
                          {
                            "elementType": "labels.icon",
                            "stylers": [
                              {
                                "visibility": "off"
                              }
                            ]
                          },
                          {
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#757575"
                              }
                            ]
                          },
                          {
                            "elementType": "labels.text.stroke",
                            "stylers": [
                              {
                                "color": "#212121"
                              }
                            ]
                          },
                          {
                            "featureType": "administrative",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#757575"
                              }
                            ]
                          },
                          {
                            "featureType": "administrative.country",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#9e9e9e"
                              }
                            ]
                          },
                          {
                            "featureType": "administrative.land_parcel",
                            "stylers": [
                              {
                                "visibility": "off"
                              }
                            ]
                          },
                          {
                            "featureType": "administrative.locality",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#bdbdbd"
                              }
                            ]
                          },
                          {
                            "featureType": "poi",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#757575"
                              }
                            ]
                          },
                          {
                            "featureType": "poi.park",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#181818"
                              }
                            ]
                          },
                          {
                            "featureType": "poi.park",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#616161"
                              }
                            ]
                          },
                          {
                            "featureType": "poi.park",
                            "elementType": "labels.text.stroke",
                            "stylers": [
                              {
                                "color": "#1b1b1b"
                              }
                            ]
                          },
                          {
                            "featureType": "road",
                            "elementType": "geometry.fill",
                            "stylers": [
                              {
                                "color": "#2c2c2c"
                              }
                            ]
                          },
                          {
                            "featureType": "road",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#8a8a8a"
                              }
                            ]
                          },
                          {
                            "featureType": "road.arterial",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#373737"
                              }
                            ]
                          },
                          {
                            "featureType": "road.highway",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#3c3c3c"
                              }
                            ]
                          },
                          {
                            "featureType": "road.highway.controlled_access",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#4e4e4e"
                              }
                            ]
                          },
                          {
                            "featureType": "road.local",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#505050"
                              }
                            ]
                          },
                          {
                            "featureType": "transit",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#757575"
                              }
                            ]
                          },
                          {
                            "featureType": "water",
                            "elementType": "geometry",
                            "stylers": [
                              {
                                "color": "#000000"
                              }
                            ]
                          },
                          {
                            "featureType": "water",
                            "elementType": "labels.text.fill",
                            "stylers": [
                              {
                                "color": "#3d3d3d"
                              }
                            ]
                          }
                        ]
               }
               var map = new google.maps.Map(document.getElementById("map"), mapOptions);


               var marker = new google.maps.Marker({
                   position: myLatlng,
                   title:"Sparcs Digital Agency",
               });

               // To add the marker to the map, call setMap();
               marker.setMap(map);

          }
      </script>

      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCaIsaz7REopojTJjq5DUasz1MfioL8gTs&callback=initMap"
  type="text/javascript">
  </script>

  <!-- end map -->
  <?php endif; ?>

<script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
<script src="<?php echo $path; ?>js/superfish.min.js"></script>
<script src="<?php echo $path; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $path; ?>js/easing.min.js"></script>
<script src="<?php echo $path; ?>js/wow.min.js"></script>
<script src="<?php echo $path; ?>js/custom.js"></script>
<script src="<?php echo $path; ?>js/scrollify.js"></script>
<script src="<?php echo $path; ?>lib/owl-carousel/owl.carousel.min.js"></script>
<script src="<?php echo $path; ?>lib/slick/slick.js"></script>


<?php if ($contact): ?> 
   <script type="text/javascript">
$(document).ready(function() {
    $("#submit_btn").click(function() { 
        //get input field values
        var subject         = $('input[name=subject]').val(); 
        var user_name       = $('input[name=name]').val(); 
        var user_email      = $('input[name=email]').val();
        var user_phone      = $('input[name=phone]').val();
        var user_message    = $('textarea[name=message]').val();
      
      
        
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if(user_name==""){ 
            $('input[name=name]').css('border-color','red'); 
            proceed = false;
        }
        if(user_email==""){ 
            $('input[name=email]').css('border-color','red'); 
            proceed = false;
        }
        if(user_phone=="") {    
            $('input[name=phone]').css('border-color','red'); 
            proceed = false;
        }
        if(user_message=="") {  
            $('textarea[name=message]').css('border-color','red'); 
            proceed = false;
        }

        //everything looks good! proceed...
        if(proceed) 
        {
            //data to be sent to server
            post_data = {'subject':subject,'userName':user_name, 'userEmail':user_email, 'userPhone':user_phone, 'userMessage':user_message};
            
         //Ajax loading gif
         $("#dvloader").show();
         
            //Ajax post data to server
            $.post('contact_me', post_data, function(response){ 
         
         $("#dvloader").hide(); 

                //load json data from server and output message     
            if(response.type == 'error')
            {
               output = '<div class="error">'+response.text+'</div>';
            }else{
                output = '<div class="success">'+response.text+'</div>';
               
               //reset values in all input fields
               $('#contact_form input').val(''); 
               $('#contact_form textarea').val('');
                     
                    //window.location.replace("./thank-you");
            }
            
            $("#result").hide().html(output).slideDown();

            }, 'json');

            
         
        }
    });
    
    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function() { 
        $("#contact_form input, #contact_form textarea").css('border-color',''); 
        $("#result").slideUp();
    });
    return false;
});
</script> 
<?php endif; ?>

 
<!-- toggle open-->
<script type="text/javascript">
   $(document).ready(function(){
      $('.nav-icon3').click(function(){
         $(this).toggleClass('opened');
         $('body').toggleClass('menu-is-open');
      });
   });
</script>

<script type="text/javascript">
    $(window).scroll(function() {
    if ($(this).scrollTop() > 50) {
      $('#change-logo').addClass('logo-changed');
      $('.logo-changed img').attr('src', '<?php echo $path; ?>img/toggle-icon.png');
    } else {
      $('#change-logo').removeClass('logo-changed');
      $('.header-logo img').attr('src', '<?php echo $path; ?>img/logo-red.png');
    }
  });
</script>

<script>
    var offset = 50;
    var $blackRows;
    var $nav;

        $blackRows = $(".dark-section");
        $nav = $(".nav-icon3");
        $nav.removeClass("white-color");
    
  $(window).scroll( function( e ){
        $blackRows.each(function(){
            var rect = this.getBoundingClientRect();
            if(rect.top - offset < 0 && rect.bottom - offset > 0){
                $nav.addClass("white-color");
                $('.header-logo img').attr('src', '<?php echo $path; ?>img/logo-white.png');
                $('.logo-changed img').attr('src', '<?php echo $path; ?>img/toggle-icon-white.png');
                return false;
            }else{
                $nav.removeClass("white-color");
            }
        });
    });


</script>



<!-- scrollify-->
<!-- <script type="text/javascript">
   $(function() {
   $.scrollify({
   section : "section",
   });
   });
</script> -->
      


<script type="text/javascript">
 $(document).ready(function(){
  $('.app-screens').slick({
    dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        centerMode: true,
        centerPadding: '50px',
        autoplay:true,
        autoplaySpeed:1000
  });

 $('.lumiere-slider').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  centerMode: true,
  variableWidth: true,
});

 $('.screen-slider').owlCarousel({
        loop: true,
        margin: 0,
        responsiveClass: true,
        nav: true,
        autoplay: true,
        autoplayTimeout: 2500,
        smartSpeed: 1000,
        navText: ['<i class="ti-arrow-left"></i>', '<i class="ti-arrow-right" ></i>'],
        items: 1,
        animateIn: 'fadeIn',
        animateOut: 'fadeOut',
        center: true,
    });

});
</script>

</body>
</html>
