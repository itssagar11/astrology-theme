<?php

/**
 * Template Name: Home-Page
 * Description: A custom Home template for WordPress pages
 */
get_header('main');
?>

<main>
	<!-- dAILY aSTROLOGY -->
	<div class="card-body container">
		<h1 class="card-title">Daily Astrology</h1>
		<div class="row">


			<!-- 2 -->
			
			<!-- 3 -->
			<?php
			$HoroscopeCat = get_terms(['taxonomy' => 'horoscopetitle', 'hide_empty' => false]);
			foreach ($HoroscopeCat as $horoscopeData) {
				
				$icon=get_wp_term_image($horoscopeData->term_id)

				?>


<div class="card" style="width: 100px; height: 110px; border:none;">
				<a href="<?php echo get_category_link($horoscopeData->term_id)?>">
					<img src="<?php echo $icon ?>" style="width: 100px; height: 110px;">
				</a>
				<div class="card-body">
					<small class="card-title"><?php echo $horoscopeData->name ?></small>

				</div>
			</div>
			<?php 	
			}
			?>

			<!-- 4 -->

		</div>
	</div>
	<!-- blogs -->
	<h1> Blogs</h1>
	<div class="container">

		<div class="row">
			<div class="col-12 col-sm-8 col-md-6 col-lg-4">
				<div class="card">
					<img class="card-img" src="https://s3.eu-central-1.amazonaws.com/bootstrapbaymisc/blog/24_days_bootstrap/pasta.jpg" alt="Bologna">
					<div class="card-img-overlay">
						<a href="#" class="btn btn-light btn-sm">Cooking</a>
					</div>
					<div class="card-body">
						<h4 class="card-title">Pasta with Prosciutto</h4>
						<small class="text-muted cat">
							<i class="far fa-clock text-info"></i> 30 minutes
							<i class="fas fa-users text-info"></i> 4 portions
						</small>
						<p class="card-text">I love quick, simple pasta dishes, and this is one of my favorite.</p>
						<a href="#" class="btn btn-info">Read Recipe</a>
					</div>
					<div class="card-footer text-muted d-flex justify-content-between bg-transparent border-top-0">
						<div class="views">Oct 20, 12:45PM
						</div>
						<div class="stats">
							<i class="far fa-eye"></i> 1347
							<i class="far fa-comment"></i> 12
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- use reveiws -->

	<section class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-10 col-xl-8 text-center">
				<h3 class="mb-4">Testimonials</h3>
				<p class="mb-4 pb-2 mb-md-5 pb-md-0">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
					numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
					quisquam eum porro a pariatur veniam.
				</p>
			</div>
		</div>

		<div class="row text-center">
			<div class="col-md-4 mb-5 mb-md-0">
				<div class="d-flex justify-content-center mb-4">
					<img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp" class="rounded-circle shadow-1-strong" width="150" height="150" />
				</div>
				<h5 class="mb-3">Maria Smantha</h5>
				<h6 class="text-primary mb-3">Web Developer</h6>
				<p class="px-xl-3">
					Lorem ipsum dolor sit amet, consectetur
					adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
					tenetur.
				</p>

			</div>
			<div class="col-md-4 mb-5 mb-md-0">
				<div class="d-flex justify-content-center mb-4">
					<img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp" class="rounded-circle shadow-1-strong" width="150" height="150" />
				</div>
				<h5 class="mb-3">Lisa Cudrow</h5>
				<h6 class="text-primary mb-3">Graphic Designer</h6>
				<p class="px-xl-3">
					Ut enim ad minima veniam, quis nostrum
					exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid commodi.
				</p>

			</div>
			<div class="col-md-4 mb-0">
				<div class="d-flex justify-content-center mb-4">
					<img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp" class="rounded-circle shadow-1-strong" width="150" height="150" />
				</div>
				<h5 class="mb-3">John Smith</h5>
				<h6 class="text-primary mb-3">Marketing Specialist</h6>
				<p class="px-xl-3">
					At vero eos et accusamus et iusto odio
					dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.
				</p>

			</div>
		</div>
	</section>

</main>





<?php get_footer() ?>