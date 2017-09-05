<?php
    /*
        Template Name: Kategória oldal - Bemutatók
    */
?>

<?php get_header(); the_post(); ?>

<header class="<?php echo get_post_meta($post->ID, 'háttér', true); ?>">
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
	<div class="row sub-categ">
		<div class="col-md-4 col-sm-6">
			<div class="sub-cat">
				<div class="sub-cat-img">
					<img src="<?php bloginfo('template_url'); ?>/images/sub-cat/sub-cat-presentation.jpg" alt="alap barista képzés" class="img-responsive">
				</div>
				<div class="sub-cat-text">
					<h3>Bemutató és kóstoló</h3>
					<p class="border-bottom">Gyere el hozzánk barátaiddal vagy kollégáiddal egy laza előadással egybekötött  kóstolásra, ahol többek között megkóstolhatod és megtudhatod mi a különbség.</p>
					<div class="courses">
						<p><a href="<?php echo home_url(); ?>/kave-bemutatok-es-kostolok/bemutato-es-kostolo">Részletek <i class="fa fa-angle-double-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="sub-cat">
				<div class="sub-cat-img">
					<img src="<?php bloginfo('template_url'); ?>/images/sub-cat/sub-cat-apdrip.jpg" alt="alap barista képzés" class="img-responsive">
				</div>
				<div class="sub-cat-text">
					<h3>Belső utazás a külső alkímia világában</h3>
					<p class="border-bottom">Különleges utazás a koffein birodalmában, ahol az úti cél egy örömteli, intenzív éber tudatállapot.</p>
					<div class="courses">
						<p><a href="<?php echo home_url(); ?>/kave-bemutatok-es-kostolok/belso-utazas-a-kulso-alkimia-vilagaban/">Részletek <i class="fa fa-angle-double-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
    $('body').css('background-color', '#cfcdbf');
</script>

<?php get_footer(); ?>
