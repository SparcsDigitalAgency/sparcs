<section id="contact">
   <div class="container ">
      <div class="row">
         <div class="col-lg-12">
            <div class="contact-content text-center">
               <h2 class="wow fadeInUp">Get In Touch</h2>
               <a href="<?php echo $path; ?>contact" class="btn btn-readmore wow fadeInUp">Contact Us</a>
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

<script src="<?php echo $path; ?>js/jquery.min.js"></script>
<script src="<?php echo $path; ?>js/superfish.min.js"></script>
<script src="<?php echo $path; ?>js/bootstrap.bundle.min.js"></script>
<script src="<?php echo $path; ?>js/easing.min.js"></script>
<script src="<?php echo $path; ?>js/wow.min.js"></script>
<script src="<?php echo $path; ?>js/owl.carousel.min.js"></script>
<script src="<?php echo $path; ?>js/scrollify.js"></script>
<script src="<?php echo $path; ?>js/main.js"></script>

<!-- toggle open-->
<script type="text/javascript">
   $(document).ready(function(){
      $('.nav-icon3').click(function(){
         $(this).toggleClass('opened');
         $('body').toggleClass('menu-is-open');
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
      
<!-- change navbrand logo class-->
<script type="text/javascript">
    $(window).scroll(function() {
    if ($(this).scrollTop() > 500) {
      $('#change-logo').addClass('logo-changed');
      $('.logo-changed img').attr('src', 'img/toggle-icon.png');
    } else {
      $('#change-logo').removeClass('logo-changed');
      $('.header-logo img').attr('src', 'img/logo-red.png');
    }
  });
</script>
   
<!-- change toggle icon color when reaches the contact section-->
<script type="text/javascript">
  var targetOffset = $("#contact").offset().top;
   var $w = $(window).scroll(function(){
       if ( $w.scrollTop() > targetOffset ) {   
           $('.nav-icon3').addClass('change-color');
       } else {
          $('.nav-icon3').removeClass('change-color');

       }
   });
</script>

<!-- <script type="text/javascript">
   $(function() {
   $.scrollify({
   section : "section",
   });
   });
</script> -->

<!-- Jnavicon portfolio special -->     
<script type="text/javascript">
   var portfolio_section2 = $("#portfolio-section2").offset().top;
   var contact = $("#contact").offset().top;
   var $w = $(window).scroll(function(){
       if ( $w.scrollTop() > portfolio_section2 && $w.scrollTop() < contact ) {   
           $('.nav-icon3').addClass('change-color2');
       } else {
           $('.nav-icon3').removeClass('change-color2');
       }
   });
</script>

<!-- change navbrand logo class-->
<!-- <script type="text/javascript">
    $(window).scroll(function() {
    if ($(this).scrollTop() > 500) {
      $('#change-logo').addClass('logo-changed');
      $('.logo-changed img').attr('src', '<?php echo $path; ?>img/toggle-icon.png');
    } else {
      $('.header-logo img').attr('src', '<?php echo $path; ?>img/logo-white.png');
      $('#change-logo').removeClass('logo-changed');
    }
  });
</script> -->


</body>
</html>