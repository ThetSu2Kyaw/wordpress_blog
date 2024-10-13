<?php get_header(); ?>

<!-- Content -->
<div class="container mt-5" id="content">
	<div class="row justify-content-center">
		<!-- Share buttons -->
		<div class="col-lg-1 text-left mb-3 fixed" id="social-share">
			<a class="btn  btn-light m-2" href="https://www.facebook.com/flymyatravels" target="_blank"><i class="fab fa-facebook-f"></i></a>
			<a class="btn  btn-light m-2" href="https://flymya.com" target="_blank"><i class="fab fa-google"></i></a>
			<a class="btn  btn-light m-2" href="https://x.com/flymyatravels?lang=en&mx=2" target="_blank"><i class="fab fa-twitter"></i></a>
		</div>

		<!-- the content -->
		<div class="col-xl-7 col-lg-10 col-md-12">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; else: endif; ?>
		</div>

		<div class="col-lg-10 mt-3">
			<hr>
		</div>
	</div>
</div>


<!-- Related Article Grid -->

<!-- <div class="container mt-3 mb-5" id="article-grid">
	<div class="row"> -->

		<!-- <div class="col-xl-6 col-lg-12 text-center">
			<a href="./single.html">
			<div class="article-card">
			<div class="article-img">
				<img src="./img/5.jpeg">
			</div>

				<div class="article-meta text-left">
					<h2>To theory equation, more have the or to was the</h2>
					<p>Herself of that similar live good up which is are to for French endeavours, screen.</p>
				</div>
			</div>
			</a>
		</div> -->
	
		<!-- <div class="col-xl-6 col-lg-12 text-center">
			<a href="./single.html">
			<div class="article-card">
			<div class="article-img">
				<img src="./img/6.jpeg">
			</div>

				<div class="article-meta text-left">
					<h2>Morning, it mouth. Harder of </h2>
					<p>Explain the in fly tone research volunteers and both only the drew cleaning to each language trial.</p>
				</div>
			</div>
			</a>
		</div> -->

	<!-- </div>
</div> -->

<!-- Footer section  -->
<?php get_footer(); ?>