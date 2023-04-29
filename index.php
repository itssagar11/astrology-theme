<?php
get_header();
?>

<main>
	<!-- DAILY ASTROLOGY -->
	<div class="container">
		<?php
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
		$args = array(
			'post_type' => 'post',
			'paged' => $paged,
			'posts_per_page' => 10,
		);
		$query = new WP_Query($args);
		while ($query->have_posts()) {
			$query->the_post();
			$featured_image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'thumbnail');
			$featured_image_url = $featured_image[0];
		?>
			<div class="card mb-3">
				<div class="row no-gutters">
					<div class="col-md-3">
						<img src="<?php echo $featured_image_url; ?>" class="card-img" alt="..." style="max-height:300px; max-width:250px;">
					</div>
					<div class="col-md-9">
						<div class="card-body">
							<h5 class="card-title"><?php the_title() ?> </h5>
							<p class="card-text"><?php the_excerpt() ?></p>
							<p class="card-text">
								<small class="text-muted">
									<?php if (has_tag()) : ?>
										<span class="tags-links">
											Tags: <?php the_tags('', ', ', ''); ?>
										</span>
										
									<?php endif; ?>
								</small>

							</p>
							<a type="button" href="<?php the_permalink()?>" class="btn btn-outline-warning">Read More</a>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>

		<!-- Pagination -->
		<div class="row">
			<div class="col-md-12">
				<?php
				echo paginate_links(array(
					'format' => '?paged=%#%',
					'current' => max(1, get_query_var('paged')),
					'total' => $query->max_num_pages
				));
				?>
			</div>
		</div>
	</div>
</main>

<?php get_footer() ?>
