<?php


get_header(); ?>

<section class="home-page">
	<div class="main-content">
		<div class="content">
			<?php while ( have_posts() ): the_post(); ?>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
				<div class="social-btns">  <!-- populate or remove as many of these as you want -->
					<a href="https://twitter.com/kahnwebdev" class="soc-icon tw"><span class="screen-reader-text">Twitter</span></a>
					<a href="" class="soc-icon fb"><span class="screen-reader-text">Facebook</span></a>
					<a href="https://www.linkedin.com/in/shari-kahn-1308801b3/" class="soc-icon ln"><span class="screen-reader-text">LinkedIn</span></a>
					<a href="https://github.com/kahn-s" class="soc-icon gh"><span class="screen-reader-text">GitHub</span></a>
				</div>
				<a href="<?php echo site_url('/blog/'); ?>" class="btn">View My Blog</a>
			<?php endwhile; ?>
		</div>
	</div>
</section>

<?php get_footer(); ?>
