<?php
    /*
        Template Name: Képzés oldal
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
	<div class="col-md-8 col-md-offset-2 page-wrapper">
		<?php the_content(); ?>
		<div class="row">
			<div class="col-md-3">
				<h5>Időpontok:</h5>
			</div>
			<div class="col-md-9">
				<p><?php echo get_post_meta($post->ID, 'dátum1', true); ?></p>
				<p><?php echo get_post_meta($post->ID, 'dátum2', true); ?></p>
				<p><?php echo get_post_meta($post->ID, 'dátum3', true); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<h5>Létszám:</h5>
			</div>
			<div class="col-md-9">
				<p><?php echo get_post_meta($post->ID, 'létszám', true); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<h5>Ára:</h5>
			</div>
			<div class="col-md-9">
				<p><?php echo get_post_meta($post->ID, 'ár', true); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<h5>Bónusz:</h5>
			</div>
			<div class="col-md-9">
				<p><?php echo get_post_meta($post->ID, 'bónusz', true); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<h5>Megjegyzés:</h5>
			</div>
			<div class="col-md-9">
				<p><?php echo get_post_meta($post->ID, 'megjegyz', true); ?></p>
			</div>
		</div>
		<div class="row">
			<div class="well ">
            	<p class="register-heading">Regisztráció</p>
            	<form name="register_form" id="register_form" method="post" action="">
					<div id="reg_success" class="success"><i class="fa fa-check"></i> Üzenetét sikeresen továbbítottuk.</div>
					<div id="reg_fail" class="error"><i class="fa fa-exclamation-circle"></i> Hiba lépett fel az üzenet küldése során.</div>
						
					<input type="hidden"  name="title" id="title" value="<?php the_title(); ?>">
					<!--<input type="hidden"  name="date" id="date" value="<?php echo get_post_meta($post->ID, 'date', true); ?>">-->
							
					<div id="name_error" class="error"><i class="fa fa-exclamation-circle"></i>Kérjük adja meg a nevét</div>
					<input type="text"  name="name" id="name" class="form-control" placeholder="Számlázási név">
                       
                    <div id="address_error" class="error"><i class="fa fa-exclamation-circle"></i>Kérjük adja meg a címét</div>
					<input type="text"  name="address" id="address" class="form-control" placeholder="Számlázási cím">
                        
                    <div id="phone_error" class="error"><i class="fa fa-exclamation-circle"></i>Kérjük adja meg telefonszámát</div>
					<input type="number" name="phone" id="phone" class="form-control" placeholder="Telefonszám">
							
					<div id="email_error" class="error"><i class="fa fa-exclamation-circle"></i>Kérjük adjon meg egy érvényes email címet</div>
					<input type="email" name="emailaddress" id="emailaddress" class="form-control push-down-s" placeholder="Email">
                    
                    <div id="date_error" class="error"><i class="fa fa-exclamation-circle"></i> Kérjük adja meg a dátumot.</div>
                    <select name="date" id="date" class="form-control">
                      	<option>Dátum</option>
                       	<option><?php echo get_post_meta($post->ID, 'dátum1', true); ?></option>
                        <option><?php echo get_post_meta($post->ID, 'dátum2', true); ?></option>
                        <option><?php echo get_post_meta($post->ID, 'dátum3', true); ?></option>
                    </select>
                    
                    <div id="check_error" class="error"><i class="fa fa-exclamation-circle"></i>Kérjük adjon meg egy érvényes email címet</div>
                    <div>
						<input type="checkbox" name="check" id="check" class="checkbox"/><label for="">A <a href="#">felhasználási / lemondási feltételeket</a> elfogadom.</label>
					</div>
														
					<button class="btn btn-default" id="send_message" type="submit" >Regisztrálok</button>
            	</form>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>