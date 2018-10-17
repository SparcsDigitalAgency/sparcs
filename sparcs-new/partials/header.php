<?php 

include_once('config.php')
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<!-- amitha-->
<meta http_equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name=viewport content="width=device-width, initial-scale=1">
<title><?php echo $meta_tags['title']; ?></title>
<meta name="keywords" content="<?php echo $meta_tags['keywords']; ?>">
<meta name="description" content="<?php echo $meta_tags['description']; ?>">
<meta property="og:title" content="Sparcs, an interactive digital agency."/>
<meta property="og:type" content="company"/>
<meta property="og:url" content="http://www.sparcsdigital.com"/>
<meta property="og:image" content="http://www.sparcsdigital.com/images/logo.png"/>
<meta property="og:site_name" content="Sparcs"/>
<meta property="fb:admins" content="1301551246"/>
<?php if ($meta_tags['no-index'] ): ?> 
	<meta name="robots" content="noindex">
	<meta name="robots" content="nofollow">
	<meta name="robots" content="noarchive">
<?php endif; ?>
	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo $path; ?>img/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo $path; ?>img/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo $path; ?>img/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo $path; ?>img/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo $path; ?>img/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo $path; ?>img/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo $path; ?>img/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo $path; ?>img/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo $path; ?>img/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $path; ?>img/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo $path; ?>img/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo $path; ?>img/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo $path; ?>img/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php echo $path; ?>img/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo $path; ?>/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">
	<link href="http://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700" rel="stylesheet" type="text/css">
	<!-- Bootstrap CSS File -->
	<link href="<?php echo $path; ?>css/bootstrap.css" rel="stylesheet">
	<!-- Libraries CSS Files -->
	<link href="<?php echo $path; ?>css/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="<?php echo $path; ?>lib/ionicons/css/ionicons.min.css" rel="stylesheet">
	<link href="<?php echo $path; ?>css/animate.css" rel="stylesheet">
	<link href="<?php echo $path; ?>css/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<!-- Main Stylesheet File -->
	
	<link href="<?php echo $path; ?>css/style.css" rel="stylesheet">
   <link href="<?php echo $path; ?>css/portfolio.css" rel="stylesheet">
</head>
<body>

<!--==========================
   header-menu
============================-->

	<header class="s-header">
   <!--  header logo-->
   <div class="header-logo" id="change-logo">
      <a class="site-logo" href="<?php echo $path; ?>/">
      
      <!--<img src="img/logo-white.png" alt="Homepage">-->
     
           <img src="<?php echo $path; ?>img/logo-red.png" alt="Homepage">
      
      </a>
   </div>
   <!-- end header-logo -->
   <!--  header navigation-->
   <nav class="header-nav">
      <div class="header-nav__content">
         <div class="toggle-logo">
            <a href="<?php echo $path; ?>/">
            <img src="<?php echo $path; ?>img/toggle-icon.png" alt="Homepage">
            </a>
         </div>
         <ul class="header-nav__list">

            <li <?php echo (preg_match("/index.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="current"': '');?>>
               <a  href="<?php echo $path; ?>" title="Portfolio">Home</a></li>
            <li <?php echo (preg_match("/company.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="current"': '');?>>
               <a  href="<?php echo $path; ?>company" title="Portfolio">Company</a></li>
            <li <?php echo (preg_match("/services.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="current"': '');?>>
               <a  href="<?php echo $path; ?>services" title="Portfolio">Services</a></li>
            <li <?php echo (preg_match("/works.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="current"': '');?>>
               <a  href="<?php echo $path; ?>works" title="Portfolio">Works</a></li>
            <li <?php echo (preg_match("/contact.php/",$_SERVER['SCRIPT_FILENAME']) ? 'class="current"': '');?>>
               <a  href="<?php echo $path; ?>contact" title="Portfolio">Contact</a></li>
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

<!--==========================
 end of header-menu
============================-->