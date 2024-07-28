<?php
		/**
		* Template name: Page - Location Home
		 */

get_header();
?>

<?php

/* Get location name for links */

require_once("copper-blues-methods.php");
	
$locationName = getLocation();

?>
<?php if( get_field('home_hero_image') ): ?>
   <img class="hero-image" src="<?php the_field('home_hero_image'); ?>" />
<?php endif; ?>
<div class="container">
	<div class="row welcome">
		<div class="col-md-6">
			<?php if( get_field('welcome_thumbnail') ): ?>
    			<img class="wooden-frame" src="<?php the_field('welcome_thumbnail'); ?>" />
			<?php endif; ?>
		</div>
		<div class="col-md-6">
			<h1>Brews. Grubs. Tunes.</h1>
			<p>
				<?php echo esc_html( get_field('welcome_body') ); ?>
			</p>
		</div>
	</div>
	<div class="row food-and-drink">
		<div class="col-md-6">
			<h1>Food</h1>
			<?php if (strpos($locationName, 'tempe') === false) {
             ?>
				<a href="/<?php echo $locationName ?>/food">
				<?php if( get_field('food_thumbnail') ): ?>
    			<img src="<?php the_field('food_thumbnail'); ?>" />
				<?php endif; ?>
			</a>	
			<?php
				}
			else {
             ?>
				<?php if( get_field('food_thumbnail') ): ?>
    			<img src="<?php the_field('food_thumbnail'); ?>" />
				<?php endif; ?>
			<?php
				}
			?>	
		</div>
		<div class="col-md-6">
			<h1>Drink</h1>
			<?php if (strpos($locationName, 'tempe') === false) {
             ?>
				<a href="/<?php echo $locationName ?>/drink">
				<?php if( get_field('drink_thumbnail') ): ?>
    			<img src="<?php the_field('drink_thumbnail'); ?>" />
				<?php endif; ?>
			</a>	
			<?php
				}
			else {
			?>	
				<?php if( get_field('drink_thumbnail') ): ?>
    			<img src="<?php the_field('drink_thumbnail'); ?>" />
				<?php endif; ?>
			<?php
				}
			?>	
		</div>
	</div>
	<div class="row music">
		<div class="col-md-6">
			<?php if( get_field('music_thumbnail') ): ?>
    			<img class="wooden-frame" src="<?php the_field('music_thumbnail'); ?>" />
			<?php endif; ?>
		</div>
		<div class="col-md-6">
			<h1>Music</h1>
			<p>
				<?php echo esc_html( get_field('music_body') ); ?>
			</p>
		</div>
	</div>
</div>

<?php get_footer(); ?>