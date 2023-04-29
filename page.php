<?php
get_header();
the_post();

?>
<main>

    <div class="jumbotron jumbotron-fluid text-center">
		<h1><?php echo the_title() ?></h1>
		<p class="lead">Get to know more about our team of expert astrologers</p>
	</div>
	<!-- Main Content -->
	<div class="container">
		<div class="row">
                <?php the_content() ; ?>
				<!-- <h2>Our Team</h2>
				<p>Our team of expert astrologers have years of experience in providing accurate astrological predictions and solutions to our clients. We are dedicated to helping people achieve their goals and overcome their challenges through the power of astrology.</p>
				<p>Our team is composed of individuals who have a passion for astrology and a deep understanding of its principles. We take pride in the quality of our work and the satisfaction of our clients.</p>
			 -->
		</div>
	</div>
	
	





</main>






<?php get_footer() ?>