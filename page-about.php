<?php
    /*
        Template Name: Bemutatkozás oldal
    */
?>
 
<?php get_header(); the_post(); ?>
 
<header class="about">
    <div class="bkg-filter"></div>
	    <div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-sm-6 heading">
					<h1><?php the_title(); ?></h1>
					<p class="heading-p"><?php echo get_post_meta($post->ID, 'alcim', true); ?></p>
	    		</div>
		    </div>
	    </div>
</header>

<div class="container">
	<div class="col-md-8 col-md-offset-2 page-wrapper">
		<?php the_content(); ?>
	</div>
</div>

<?php get_footer(); ?>