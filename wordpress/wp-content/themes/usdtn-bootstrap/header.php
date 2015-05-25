<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('-',1,'right'); ?> <?php bloginfo('name'); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="icon" type="image/x-icon" href="favicon.ico"/>
	<meta name="description" content="">
	<meta name="author" content="">
	
	<!-- Le styles -->
	<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
	
	<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
</head>

<body>
<div class="pseudo-bg"></div>
<div id="content">
	
		<div id="header" class="header">

				<nav class="navbar navbar-default">
					<div class="container">
						<div class="container-fluid">
							<!-- Brand and toggle get grouped for better mobile display -->
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-target">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<div class="logo">
									<a href="<?php echo site_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/images/usdtn-logo.png" alt="<?php bloginfo('name'); ?>" class="logo-img"></a>
								</div>
							</div>
							<!--End .navbar-header-->
					
							<?php wp_nav_menu( array( 'theme_location' => 'header-menu', 'container_class' => 'collapse navbar-collapse', 'menu_class' => 'nav navbar-nav', 'container_id'    => 'nav-target', ) ); ?>
					
						</div><!-- .container-fluid -->
					</div><!--End .container-->
				</nav>
		</div>



