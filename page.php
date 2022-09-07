<?php
/*
   Template Name: Seite
*/
?>
<?php get_header(); ?>

<div id="content-wrapper">
	<div id="content" class="site-content" role="main">

		<div class="multiply-bar"></div>
		
<?php while ( have_posts() ) : the_post() ?>
			<?php
				$content  = get_the_content();
				$content = apply_filters('the_content', $content);
				
				echo $content;
			?>
		<?php endwhile; ?>




	</div>
</div>

<?php get_footer(); ?>
