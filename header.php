
<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=auto" rel="stylesheet">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<title>Depósito de Drogas Boyacá</title>
	<?php wp_head(); ?>

</head>

<body>

<script type="application/ld+json">
{
    "@context":"http://schema.org",
    "@type":"LocalBusiness",
    "name":"Depósito de Drogas Boyacá",
    "url":"https://ddb.com.co/",
    "address":{
        "@type":"PostalAddress",
        "addressCountry": "Colombia",
        "addressLocality":"Bogotá",
        "postalCode":"111071",
        "streetAddress":"Tv. 93 # 51-98 Bodega 18"
    },"image":{
        "@type":"ImageObject",
        "url":"https://ddb.com.co/wp-content/uploads/2020/07/deposito-de-drogas-boyaca-logo.png"
    },
    "geo":{
        "@type":"GeoCoordinates",
        "latitude":"4.6860751",
        "longitude":"-74.1213518"
        },
    "priceRange":"0.000000 - 47734769.000000",
    "openingHoursSpecification":[
        {"@type":"OpeningHoursSpecification",
        "dayOfWeek":"http://schema.org/Monday",
        "opens":"07:00",
        "closes":"16:00"
        },{
            "@type":"OpeningHoursSpecification",
            "dayOfWeek":"http://schema.org/Tuesday",
            "opens":"07:00",
            "closes":"16:00"
        },{
            "@type":"OpeningHoursSpecification",
            "dayOfWeek":"http://schema.org/Wednesday",
            "opens":"07:00",
            "closes":"16:00"
        },{
            "@type":"OpeningHoursSpecification",
            "dayOfWeek":"http://schema.org/Thursday",
            "opens":"07:00",
            "closes":"16:00"
        },{
            "@type":"OpeningHoursSpecification",
            "dayOfWeek":"http://schema.org/Friday",
            "opens":"07:00",
            "closes":"16:00"
        },{
            "@type":"OpeningHoursSpecification",
            "dayOfWeek":"http://schema.org/Saturday",
            "opens":"08:00",
            "closes":"13:00"
        }],
        "telephone":"(1)7432597",
		"email": "info@ddb.com.co"
        }
</script>
        

<div id="preloader">
		<div id="status">
	  </div> 
</div>


<header class="header">
	<section class="top-bar">
		<div class="container d-flex justify-content-center align-items-center">
			<div class="d-flex justify-content-center align-items-center">
				<div class="pr-3 d-flex align-items-center">
					<!-- <i class="far fa-clock"></i> -->
					<span class="ddb-icon icon-clock-white"></span>
					<span>Lun-Vie 8am - 5pm | Sab 8am - 1pm</span>
				</div>
				<div class="border-left border-light pl-3 pr-3 d-flex align-items-center">
					<span class="ddb-icon icon-phone-white"></span>
					<a href="tel:+576017432597" style="padding-right:10px">(601) 743 25 97</a>
					<span class="ddb-icon icon-phone-white"></span>
					<a href="tel:+573125237420" style="padding-right:10px">(+57) 312 523 74 20</a>
					<span class="ddb-icon icon-phone-white"></span>
					<a href="tel:+573007484272" style="padding-right:10px">(+57) 300 748 42 72</a>
				</div>
				<!-- <div class="pr-3 d-flex align-items-center"> -->
					<!-- <i class="fas fa-phone"></i> -->
					<!-- <span class="ddb-icon icon-phone-white"></span>
					<a href="tel:(+57)3007484272">(+57) 300 748 42 72</a> -->
				<!-- </div> -->
				<div class="border-left border-light pl-3 pr-3 d-flex align-items-center">
					<!-- <i class="far fa-envelope"></i> -->
					<span class="ddb-icon icon-mail-white"></span>
					<a href="mailto:info@ddb.com.co">info@ddb.com.co</a>
				</div>
				<address class="border-left border-light pl-3 d-flex align-items-center">
					<!-- <i class="fas fa-map-marker-alt"></i> -->
					<span class="ddb-icon icon-location-white"></span>
					<a href="https://www.google.com/maps/place/Dep%C3%B3sito+de+Drogas+Boyac%C3%A1/@4.6860751,-74.1213518,15z/data=!4m2!3m1!1s0x0:0x11fb3f84b9c80ffb?sa=X&ved=2ahUKEwilhevoqa_rAhUCjlkKHS7VAxgQ_BIwCnoECBUQCA" target="_blank" rel="noreferrer">
						Tv. 93 # 51-98 Bodega 18 Bogotá
					</a>
				</address>
			</div>
		</div>
	</section>

	
	<nav class="navbar navbar-expand-lg navbar-light" role="navigation">
    
		<div class="container d-flex justify-content-between remove-clearfix">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div>
				<a class="navbar-brand" href="<?php echo home_url(); ?>">
					<img src="/wp-content/uploads/2020/07/deposito-de-drogas-boyaca-logo.png" alt="" class="nav-logo">
				</a>
			</div>
			
			<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation"> 
				<span class="navbar-toggler-icon"></span>

				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			
			<div class="collapse navbar-collapse flex-grow-0" id="bs-example-navbar-collapse-1">
				<?php
				wp_nav_menu( array(
					'theme_location'    => 'primary',
					'depth'             => 3,
					'container'         => 'nav',
					'container_class'   => 'collapse navbar-collapse main-menu-ddb',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav text-right',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				));
				?>

				<div id="search-form-main">
					<?php echo do_shortcode('[wcas-search-form]'); ?>
				</div>
				
				<div>
					<div class="search-button-main d-flex align-items-center justify-content-center">
						<!-- <i class="fas fa-search"></i> -->
						<span class="ddb-icon icon-search-white"></span>
					</div>
				</div>
				
			</div>
			
			

		</div>
	</nav>

		
</header>
<div class="nav-placeholder"></div>