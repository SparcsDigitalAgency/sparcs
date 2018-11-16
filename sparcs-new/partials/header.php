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
<meta property="og:url" content="<?php echo $path; ?>"/>
<meta property="og:image" content="<?php echo $path; ?>/images/logo.png"/>
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
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,400i,500,600,700" rel="stylesheet" type="text/css">
	<!-- Bootstrap CSS File -->
	<link href="<?php echo $path; ?>css/bootstrap.css" rel="stylesheet">
	<!-- Libraries CSS Files -->
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo $path; ?>css/animate.css" rel="stylesheet">
   <link rel="stylesheet" href="https://rawgit.com/lykmapipo/themify-icons/master/css/themify-icons.css">
   <link href="<?php echo $path; ?>lib/owl-carousel/owl.carousel.min.css" rel="stylesheet">
   <link href="<?php echo $path; ?>lib/slick/slick.css" rel="stylesheet">
   <link href="<?php echo $path; ?>lib/slick/slick-theme.css" rel="stylesheet">
	<!-- Main Stylesheet File -->
	
	<link href="<?php echo $path; ?>css/style.css" rel="stylesheet">
   <link href="<?php echo $path; ?>css/portfolio.css" rel="stylesheet">

   
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-P2FTJFB');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-24740586-7"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-24740586-7');
</script>


<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '1259669547498612');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=1259669547498612&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->


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
     
           <img src="<?php echo $path; ?>img/logo-red.svg" alt="Homepage">
      
      </a>
   </div>
   <!-- end header-logo -->
   <!--  header navigation-->
   <nav class="header-nav">
      <div class="header-nav__content">
         <div class="toggle-logo">
            <a href="<?php echo $path; ?>/">
            <img src="<?php echo $path; ?>img/toggle-icon.svg" alt="Homepage">
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