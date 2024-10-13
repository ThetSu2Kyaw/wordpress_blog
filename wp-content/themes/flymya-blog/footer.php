<footer class="container-fluid mt-1 p-4 text-center">
	<div class="container ">
		<div class="row pb-1"> 
		<!-- Footer logo -->
		<div class="col-lg-3 col-md-12">
		<?php
			$custom_logo_id = get_theme_mod('custom_logo');
			$logo = wp_get_attachment_image_src($custom_logo_id, 'full');

			if (has_custom_logo()) {
				echo '<a href="' . esc_url(home_url('/')) . '" class="custom-logo-link">';
				echo '<img src="' . esc_url($logo[0]) . '" height="50" width="140" alt="' . get_bloginfo('name') . '">';
				echo '</a>';
			}
        ?>
		</div>

		<!-- footer links -->
		<div class="col-lg-6 col-md-12 mt-2">
		<?php
			wp_nav_menu(array(
				'theme_location' => 'primary-menu', // Change this to the location you registered
				'menu_id'        => 'primary-menu',
				'menu_class'     => 'nav justify-content-center', // You can add your own class here
			));
		?>
			<!-- <ul class="nav justify-content-center">
			  <li class="nav-item">
			    <a class="nav-link active" href="#">Travel Tips</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Get Inspired</a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link" href="#">Cheap Airfare</a>
			  </li>			  
			  <li class="nav-item">
			    <a class="nav-link" href="#">About</a>
			  </li>
			</ul> -->
		</div>

		<!-- footer social links -->
		<div class="col-lg-3 col-md-12">
			<ul class="nav justify-content-end">
			  <li class="nav-item">
			    <a class="nav-link active btn btn-light" href="https://www.facebook.com/flymyatravels/" target="_blank"><i class="fab fa-facebook-f"></i></a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link active btn btn-light" href="http://flymya-blog.local.com/" target="_blank"><i class="fab fa-google"></i></a>
			  </li>
			  <li class="nav-item">
			    <a class="nav-link active btn btn-light" href="https://x.com/flymyatravels?lang=en&mx=2" target="_blank"><i class="fab fa-twitter"></i></a>
			  </li>
			</ul>

		</div>

		<hr>
		</div>
		<hr>
        <!-- copyright text -->
		<div class="row pt-2">
			<div class="col-lg-12 text-center">
				<span>&copy <a href="https://flymya.com/">Flymya.com</a> All Rights Received.</span>
			</div>
		</div>
	</div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>