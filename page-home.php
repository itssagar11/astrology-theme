<?php

/**
 * Template Name: Home-Page
 * Description: A custom Home template for WordPress pages
 */
get_header('main');
?>

<main>
	<!-- dAILY aSTROLOGY -->
	<div class="card-body container daily-astro-container">

		<small class="text-danger">Daily Astrology</small>
		<center>
			<h1 class="card-title">Choose Your Zodiac Sign</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</p>
			<br><br>
		</center>
		<div class="row" style="display: flex; justify-content:space-around">


			<!-- 2 -->

			<!-- 3 -->
			<?php
			$HoroscopeCat = get_terms(['taxonomy' => 'horoscopetitle', 'hide_empty' => false]);
			foreach ($HoroscopeCat as $horoscopeData) {

				$icon = get_wp_term_image($horoscopeData->term_id);

			?>


				<div class="card card-astro" style="">
					<a href="<?php echo get_category_link($horoscopeData->term_id) ?>">
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

	<div class="container blog-card">
		<small class="text-success">Blogs</small>
		<h1 class="card-title"> Read what our Author Say</h1>
		<br>
		<br>
		<div class="row">

			<?php
			$args = array(
				'post_type' => 'post',
				'post_status'=>'publish',
				'posts_per_page' => 3,
				
			);
			$query = new WP_Query($args);
			while ($query->have_posts()) {
				$query->the_post();
				$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
				$featured_image_url = $featured_image[0];
			?>
				<div class="col-12 col-sm-12 col-md-12 col-lg-3">
					<div class="card">
						<img src="<?php  echo $featured_image_url ;?>" style="width:100%; height:210px;" alt="...">
						<div class="card-body">
							<h5 class="card-title h5-limit"><?php the_title() ?></h5>
							
							
						</div>
					</div>
					</div>
				<?php } ?>
				<div class="card" style="border:none;">
  <div class="card-body" style="margin-top:50%;" >
    
    <a href="<?php echo get_permalink() ?>/blog/" class="btn btn-outline-success">Checkout More...</a>
  </div>
</div>
				
		</div>
	</div>


	<!-- use reveiws -->

	<section class="container review-card">
		<div class="row d-flex justify-content-center">
			<div class="col-md-10 col-xl-8 text-center">
				<h3 class="mb-4">What My Client Says</h3>
				<h6 class="mb-4 pb-2 mb-md-5 pb-md-0">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit, error amet
					numquam iure provident voluptate esse quasi, veritatis totam voluptas nostrum
					quisquam eum porro a pariatur veniam.
			</h6>
			</div>
		</div>

		<div class="row text-center">
			<div class="col-md-4 mb-5 mb-md-0">
				<div class="d-flex justify-content-center mb-4">
					<img src="https://static.vecteezy.com/system/resources/previews/002/275/847/original/male-avatar-profile-icon-of-smiling-caucasian-man-vector.jpg" class="rounded-circle shadow-1-strong" width="150" height="150" />
				</div>
				<h5 class="mb-3">Maria Smantha</h5>
				
				<p class="px-xl-3 review-desc">
					Lorem ipsum dolor sit amet, consectetur
					adipisicing elit. Quod eos id officiis hic tenetur quae quaerat ad velit ab hic
					tenetur.
				</p>

			</div>
			<div class="col-md-4 mb-5 mb-md-0">
				<div class="d-flex justify-content-center mb-4">
					<img src="https://www.nicepng.com/png/detail/414-4143940_man-cartoon-character-profile-avatar-hair-smile-avatar.png" class="rounded-circle shadow-1-strong" width="150" height="150" />
				</div>
				<h5 class="mb-3">Lisa Cudrow</h5>
				
				<p class="px-xl-3 review-desc">
					Ut enim ad minima veniam, quis nostrum
					exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid commodi.
				</p>

			</div>
			<div class="col-md-4 mb-0">
				<div class="d-flex justify-content-center mb-4">
					<img src="https://previews.123rf.com/images/metelsky/metelsky1809/metelsky180900233/109815470-man-avatar-profile-male-face-icon-vector-illustration.jpg" class="rounded-circle shadow-1-strong" width="150" height="150" />
				</div>
				<h5 class="mb-3">John Smith</h5>
				
				<p class="px-xl-3 review-desc">
					At vero eos et accusamus et iusto odio
					dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti.
				</p>

			</div>
		</div>
	</section>

</main>





<?php get_footer() ?>