<?php
    /*
        Template Name: Kapcsolat oldal
    */
?>
 
<?php get_header(); the_post(); ?>

<header class="feature map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d336.9994697716266!2d19.056913!3d47.489996!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x19f0778a1bf523ad!2sMantra+Espresso+Bar!5e0!3m2!1sen!2suk!4v1502215243497" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</header>

<div class="container">
	<div class="row contact-wrapper">
		<div class="col-md-6">
			<div class="border-bottom">
				<h1><?php the_title(); ?></h1>
			</div>
			<p><?php the_content(); ?></p>
			<address>
				<dl class="dl-horizontal">
					<dt>Cím:</dt>
					<dd><?php echo get_post_meta($post->ID, 'cim', true); ?></dd>
					<dt>Nyitva tartás:</dt>
					<dd><?php echo get_post_meta($post->ID, 'nyitva', true); ?></dd>
					<dt>Telefon:</dt>
					<dd><a href="callto:<?php echo get_post_meta($post->ID, 'telefon', true); ?>"><?php echo get_post_meta($post->ID, 'telefon', true); ?></a></dd>
				</dl>
			</address>
			
		</div>
		<div class="well col-md-6">
			<form name="register_form" id="register_form" method="post" action="">
				<div id="reg_success" class="success"><i class="fa fa-check"></i> Üzenetét sikeresen továbbítottuk.</div>
				<div id="reg_fail" class="error"><i class="fa fa-exclamation-circle"></i> Hiba lépett fel az üzenet küldése során.</div>

				<div id="name_error" class="error"><i class="fa fa-exclamation-circle"></i>Kérjük adja meg a nevét</div>
				<input type="text"  name="name" id="name" class="form-control" placeholder="név">

				<div id="email_error" class="error"><i class="fa fa-exclamation-circle"></i>Kérjük adjon meg egy érvényes email címet</div>
				<input type="email" name="emailaddress" id="emailaddress" class="form-control push-down-s" placeholder="Email">
				
				<div id="message_error" class="error"><i class="fa fa-exclamation-circle"></i> Kérjük írja le üzenetét.</div>
				<textarea name="message" id="message" class="form-control" placeholder="Üzenet"></textarea>

				<button class="btn btn-default" id="send_message" type="submit">Üzenet küldése</button>
			</form>
		</div>
	</div>
	
		
		<div class="row">
			
		</div>	
</div>

<?php get_footer(); ?>