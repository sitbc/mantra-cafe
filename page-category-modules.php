<?php
    /*
        Template Name: Kategória oldal - Modulok
    */
?>

<?php get_header(); the_post(); ?>

<header class="<?php echo get_post_meta($post->ID, 'háttér', true); ?>">
	<div class="bkg-filter"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-4 heading">
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
					<img src="<?php bloginfo('template_url'); ?>/images/sub-cat/sub-cat-theory.jpg" alt="alap barista képzés" class="img-responsive">
				</div>
				<div class="sub-cat-text">
					<h3>Elméleti képzések</h3>
					<p class="border-bottom">Ha nagyon gyorsan szeretnéd megismerni a kávé útját cserjétől a csészéig.</p>
					<div class="courses">
						<h4>Elérhető képzéseink:</h4>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/modulok/elmeleti-kepzes/">Elméleti képzés <i class="fa fa-angle-double-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="sub-cat">
				<div class="sub-cat-img">
					<img src="<?php bloginfo('template_url'); ?>/images/sub-cat/sub-cat-making-espresso.jpg" alt="alap barista képzés" class="img-responsive">
				</div>
				<div class="sub-cat-text">
					<h3>Espresso képzések</h3>
					<p class="border-bottom">Minden, amit az espresso-ról, valamint a készítéséről tudni kell.</p>
					<div class="courses">
						<h4>Elérhető képzéseink:</h4>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/modulok/eszpresszo-keszites-alapismeretek/">Eszpresszó készítés alapismeretek <i class="fa fa-angle-double-right"></i></a></p>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/modulok/ujhullamos-eszpresszo-kepzes/">Újhullámos eszpresszó képzés <i class="fa fa-angle-double-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="sub-cat">
				<div class="sub-cat-img">
					<img src="<?php bloginfo('template_url'); ?>/images/sub-cat/sub-cat-chemex.jpg" alt="alap barista képzés" class="img-responsive">
				</div>
				<div class="sub-cat-text">
					<h3>Filterkávé képzések</h3>
					<p class="border-bottom">Hogyan készíts drága eszközök nélkül finom kávét?</p>
					<div class="courses">
						<h4>Elérhető képzéseink:</h4>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/modulok/filterkave-keszites">Filterkávé készítés <i class="fa fa-angle-double-right"></i></a></p>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/modulok/filter-1-eszkoz-kepzes">Filter 1 eszköz képzés <i class="fa fa-angle-double-right"></i></a></p>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/modulok/ujhullamos-filterkave-keszites">Újhullámos filterkávé készítés <i class="fa fa-angle-double-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="sub-cat">
				<div class="sub-cat-img">
					<img src="<?php bloginfo('template_url'); ?>/images/sub-cat/sub-cat-latteart.jpg" alt="alap barista képzés" class="img-responsive">
				</div>
				<div class="sub-cat-text">
					<h3>Latte art képzések</h3>
					<p class="border-bottom">Tökéletes tejkrém készítéstől a különböző minták öntéséig.</p>
					<div class="courses">
						<h4>Elérhető képzéseink:</h4>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/modulok/latte-alapok">Latte alapok <i class="fa fa-angle-double-right"></i></a></p>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/modulok/latte-art-sziv">Latte Art Szív <i class="fa fa-angle-double-right"></i></a></p>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/modulok/latte-art-tulipan">Latte Art Tulipán <i class="fa fa-angle-double-right"></i></a></p>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/modulok/latte-art-rosetta">Latte art Rosetta <i class="fa fa-angle-double-right"></i></a></p>
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
