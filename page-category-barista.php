<?php
    /*
        Template Name: Kategória oldal - Barista
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
					<img src="<?php bloginfo('template_url'); ?>/images/sub-cat/sub-cat-grind.jpg" alt="alap barista képzés" class="img-responsive">
				</div>
				<div class="sub-cat-text">
					<h3>Alap barista képzések</h3>
					<p class="border-bottom">Neked ajánljuk ezt a képzést, ha nagyon gyorsan szeretnéd megtanulni a szakma alapjait, és azután elhelyezkedni baristaként.</p>
					<div class="courses">
						<h4>Elérhető képzéseink:</h4>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/alap-barista/alap-barista-kepzes-gyakorlat">Alap barista képzés - gyakorlati <i class="fa fa-angle-double-right"></i></a></p>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/alap-barista/alap-barista-kepzes">Alap barista képzés - elmélet és gyakorlat <i class="fa fa-angle-double-right"></i></a></p>
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
					<h3>Home barista képzések</h3>
					<p class="border-bottom">Hozd el hozzánk kedvenc otthoni kávékészítő eszközeidet és megmutatjuk, hogyan használd őket!</p>
					<div class="courses">
						<h4>Elérhető képzéseink:</h4>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/home-barista-kepzesek/eszpresszo-te-eszkozod-workshop/">Eszpresszó „Te eszközöd” workshop <i class="fa fa-angle-double-right"></i></a></p>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/home-barista-kepzesek/filterkave-te-eszkozod-workshop/">Filterkávé „Te eszközöd” workshop <i class="fa fa-angle-double-right"></i></a></p>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/home-barista-kepzesek/filterkave-keszites-workshop/">Filterkávé készítés home barista workshop <i class="fa fa-angle-double-right"></i></a></p>
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
					<h3>Újhullámos barista képzések</h3>
					<p class="border-bottom">Neked ajánljuk ezen képzéseket, ha már elvégezted az alap barista képzésünket, vagy rendelkezel barista alapismeretekkel.</p>
					<div class="courses">
						<h4>Elérhető képzéseink:</h4>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/ujhullamos-kepzesek/ujhullamos-barista-kepzes/">Újhullámos barista képzés <i class="fa fa-angle-double-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="sub-cat">
				<div class="sub-cat-img">
					<img src="<?php bloginfo('template_url'); ?>/images/sub-cat/sub-cat-grinder-temp.jpg" alt="alap barista képzés" class="img-responsive">
				</div>
				<div class="sub-cat-text">
					<h3>Speciális képzések</h3>
					<p class="border-bottom">Neked ajánljuk ezen a képzéseket, ha Te is úgy gondolod, hogy gyakorlatban lehet igazán megtanulni a lényeges dolgokat.</p>
					<div class="courses">
						<h4>Elérhető képzéseink:</h4>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/specialis-kepzesek/inas-program/">Inas program <i class="fa fa-angle-double-right"></i></a></p>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/specialis-kepzesek/egyeni-gyakorlas/">Egyéni gyakorlás <i class="fa fa-angle-double-right"></i></a></p>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/specialis-kepzesek/cupping-workshop/">Cupping workshop <i class="fa fa-angle-double-right"></i></a></p>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/specialis-kepzesek/cupping-berlet/">Cupping bérlet <i class="fa fa-angle-double-right"></i></a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-6">
			<div class="sub-cat">
				<div class="sub-cat-img">
					<img src="<?php bloginfo('template_url'); ?>/images/sub-cat/sub-cat-portafilter.jpg" alt="alap barista képzés" class="img-responsive">
				</div>
				<div class="sub-cat-text">
					<h3>Modulok</h3>
					<p class="border-bottom">Végezd el bármely modulunkat, ha csak most ismerkedsz a barista szakmával vagy már végeztél barista képzést, és speciálisan egy témakör érdekel.
</p>
					<div class="courses">
						<h4>Elérhető képzéseink:</h4>
						<p><a href="<?php echo home_url(); ?>/barista-kepzesek/modulok/">Tekintsd meg őket <i class="fa fa-angle-double-right"></i></a></p>
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
