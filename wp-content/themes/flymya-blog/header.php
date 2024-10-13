<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Flymya Blog</title>
	<?php wp_head(); ?>
</head>

<body>

	<div class="container-fluid" id="header">

		<nav class="navbar navbar-expand-md navbar-light">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<a class="navbar-brand" href="#">
					<?php
					$custom_logo_id = get_theme_mod('custom_logo');
					$logo = wp_get_attachment_image_src($custom_logo_id, 'full');

					if (has_custom_logo()) {
						echo '<a href="' . esc_url(home_url('/')) . '" class="custom-logo-link">';
						echo '<img src="' . esc_url($logo[0]) . '" height="50" width="140" alt="' . get_bloginfo('name') . '">';
						echo '</a>';
					}
					?>
				</a>


				<div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo03">
					<?php
					wp_nav_menu(array(
						'theme_location' => 'primary-menu', // Change this to the location you registered
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'navbar-nav', // You can add your own class here
					));
					?>
					<?php

					global $query_string;

					wp_parse_str($query_string, $search_query);
					$search = new WP_Query($search_query);

					?>

					<form role="search" method="get" class="navbar-nav search-form -mt-2" action="<?php echo esc_url(home_url('/')); ?>">
						<div>
							<span class="screen-reader-text"><?php _x('Search for:', 'label'); ?></span>
							<input type="search" class="search-field" placeholder="<?php echo esc_attr_x('Search …', 'placeholder'); ?>" value="<?php echo get_search_query(); ?>" name="s" />

							<button type="submit" class="search-submit" class="input-group-text border-0">
								<?php echo '<i class="fas fa-search"></i>'; ?>
							</button>
						</div>
					</form>

					<!-- <ul class="navbar-nav">
		                    <li class="nav-item">
		                    <a class="nav-link" href="#">Travel Tips</a>
		                  </li>
		            	</ul> -->
				</div>
			</div>
		</nav>