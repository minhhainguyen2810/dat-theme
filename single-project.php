
<?php get_header(); ?>

<div id="content-wrapper">
	<div id="content" class="site-content" role="main">



		<?php while ( have_posts() ) : the_post() ?>
			<?php
				$content  = get_the_content();
				$content = apply_filters('the_content', $content);
				echo '<div class="single-header"><div>';
				echo '<h1>'.get_the_title().'</h1>';
				echo '</div>';
				echo '</div>';
				echo $content;
			?>
		<?php endwhile; ?>





	</div>
</div>

<?php get_footer(); ?>
