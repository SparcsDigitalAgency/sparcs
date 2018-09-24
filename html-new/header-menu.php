
<header class="s-header">
   <!--  header logo-->
   <div class="header-logo" id="change-logo">
      <a class="site-logo" href="index.php">
      <?php
      if (stripos($_SERVER['REQUEST_URI'], 'portfolio.php')){
           ?><img src="img/logo-white.png" alt="Homepage">
      <?php
      }
      else { ?>
           <img src="img/logo-red.png" alt="Homepage">
      <?php } ?>
      </a>
   </div>
   <!-- end header-logo -->
   <!--  header navigation-->
   <nav class="header-nav">
      <div class="header-nav__content">
         <div class="toggle-logo">
            <a href="index.php">
            <img src="img/toggle-icon.png" alt="Homepage">
            </a>
         </div>
         <ul class="header-nav__list">
            <li class="current"><a href="index.php" title="home">Home</a></li>
            <li><a href="company.php" title="company">Company</a></li>
            <li><a href="services.php" title="services">Services</a></li>
            <li><a href="works.php" title="works">Works</a></li>
            <li><a href="contact-us.php" title="contact">Contact</a></li>
         </ul>
         <p>1st floor, Thachil Tower, <br>Pottakuzhi Jn, Kaloor,<br>Kochi - 682017<br>
            info@sparcsdigital.com
            <br>+91 98 95 98 63 97
         </p>
         <ul class="header-nav__social">
            <li>
               <a href="#0"><i class="fa fa-facebook"></i></a>
            </li>
            <li>
               <a href="#0"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
               <a href="#0"><i class="fa fa-linkedin"></i></a>
            </li>
            <li>
               <a href="#0"><i class="fa fa-instagram"></i></a>
            </li>
         </ul>
      </div>
   </nav>
   <!--  end header navigation-->
   <a class="header-menu-toggle" href="#0">
      <div class="nav-icon3">
         <span></span>
         <span></span>
         <span></span>
         <span></span>
      </div>
   </a>
</header>