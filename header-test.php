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
	<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
	<title>Document</title>
	<?php wp_head(); ?>

</head>
<body>

<div id="preloader">
		<div id="status">
	  </div> 
</div>

<div class="preloader-wrapper big active">
  <div class="spinner-layer spinner-red-only">
    <div class="circle-clipper left">
      <div class="circle"></div>
    </div>
    <div class="gap-patch">
      <div class="circle"></div>
    </div>
    <div class="circle-clipper right">
      <div class="circle"></div>
    </div>
  </div>
</div>

<header class="header">
		<div class="top-bar">
			<div class="container d-flex justify-content-between align-items-center">
				<div>
					<span class="pr-3">
						<i class="far fa-clock"></i>
						Mar - Sab 7am - 4pm
					</span>
					<span class="border-left border-light pl-3 pr-3">
						<i class="fas fa-phone"></i>	
						<a href="tel:(1)7432597">(1) 743 25 97</a>
					</span>
					<span class="border-left border-light pl-3 pr-3">
						<i class="far fa-envelope"></i>
						<a href="mailto:info@ddb.com.co">info@ddb.com.co</a>
					</span>
					<span class="border-left border-light pl-3">
						<i class="fas fa-map-marker-alt"></i>
						<a href="https://www.google.com/maps/place/Parque+Empresarial+Puerta+del+Sol/@4.6861636,-74.1238557,17z/data=!3m1!4b1!4m5!3m4!1s0x8e3f9b451d6a85f3:0x7213b2e152566ddf!8m2!3d4.6861583!4d-74.121667" target="_blank">
							Tv. 93 # 51-98 Bodega 18 Bogotá
						</a>
					</span>
				</div>
				<div>
					<span class="header-social">
						<?php echo do_shortcode('[wcas-search-form]'); ?>
					</span>
				</div>

			</div>
	</div>


	<nav class="navbar navbar-expand-lg navbar-dark" role="navigation">
	<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<a class="navbar-brand" href="<?php echo home_url(); ?>">
				<img src="<?php echo(get_site_url() . '/wp-content/uploads/2020/05/ddb-logo_blanco.png');?>" alt="" class="nav-logo">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-controls="bs-example-navbar-collapse-1" aria-expanded="false" aria-label="Toggle navigation"> 
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
					'container_class'   => 'collapse navbar-collapse',
					'container_id'      => 'bs-example-navbar-collapse-1',
					'menu_class'        => 'nav navbar-nav text-right',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker(),
				));
				?>
		</div>
		</div>
	</nav>

		
</header>
