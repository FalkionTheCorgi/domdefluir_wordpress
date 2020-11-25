<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
		<!-- <section class="top-bar">
			<div class="container">
				<div class="row">
					<div class="social-media-icons col-xl-9 col-sm-7 col-6">
						<?php 

						if( is_active_sidebar( 'social-media' ) ){
							dynamic_sidebar( 'social-media' );
						}

						?>
					</div>
				</div>
			</div>
		</section> -->
		<section class="menu-area">
			<div class="container">
				<div class="row">
					<div class="logo col-lg-1 col-2">
						<a href = "<?php echo get_home_url(); ?>/index.php">
							<img class = "img-fluid" src = "<?php echo get_template_directory_uri(); ?>/images/logo.png">
						</a>
					</div>
					<nav class="main-menu col-lg-8 col-10 text-center">
						<?php 
						wp_nav_menu( 
							array( 
								'theme_location' => 'my_main_menu' 
							) 
						); 
						?>
					</nav>
					<div class="col-lg-3 hide" id = "search-menu" >
						<div class="search"><?php get_search_form(); ?></div>
					</div>					
				</div>
			</div>
		</section>
	</header>