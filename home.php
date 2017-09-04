<?php get_header(); ?>

    <div class="mask">			
      <div id="intro-loader">
      </div>		
    </div>
    
    <div class="background">
		<!--<img src="images/home.jpg" alt="kezdőkép">-->
		<div class="dots"></div>
	</div>
	
	<div class="container">
		<div class="row">
			<div class="col-md-6 header">
				<h1>Mantra Barista Iskola</h1>
				<p class="heading-p">Személyes odafigyelés.<br>Magas szakmai felkészültség.<br>A belváros közepén.</p>
			</div>	
		</div>
		<div class="row categ">
			<div class="col-md-4">
				<div class="main-cat">
					<img src="<?php bloginfo('template_url'); ?>/images/cat-present.jpg" alt="előadások" class="img-responsive">
					<div class="cat-desc">
						<a href="https://mantra-sitbc.c9users.io/kave-bemutatok-es-kostolok/"><h2>Kávé bemutatók és kóstolók <i class="fa fa-angle-double-right"></i></h2></a>
						<p>Gyere el hozzánk barátaiddal vagy kollégáiddal egy laza előadással egybekötött  kóstolásra, ahol többek között megkóstolhatod és megtudhatod mi a különbség.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="main-cat">
					<img src="<?php bloginfo('template_url'); ?>/images/cat-barista.jpg" alt="barista képzések" class="img-responsive">
					<div class="cat-desc">
						<a href="https://mantra-sitbc.c9users.io/barista-kepzesek/"><h2>Barista Képzések <i class="fa fa-angle-double-right"></i></h2></a>
						<p>Rengeteg lehetőség közül válogathatsz és ajánlásaink segítségével könnyen összeállíthatsz magadnak is egy érdeklődési körödnek megfelelő, mindenre kiterjedő képzés sorozatot.</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="main-cat">
					<img src="<?php bloginfo('template_url'); ?>/images/cat-cafe.jpg" alt="kávézó tulajdonosoknak" class="img-responsive">
					<div class="cat-desc">
						<a href="https://mantra-sitbc.c9users.io/kavehazi-alapkepzes/"><h2>Kávézó tulajdonosoknak <i class="fa fa-angle-double-right"></i></h2></a>
						<p>Gépek használata, takarítása, napi karbantartása, alap eszpresszó készítés, tejhab és tejkrém készítés, kávés italok receptúráinak ismerete. Minden, ami a sikeres működéshez kell.</p>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>