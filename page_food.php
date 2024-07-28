<?php
		/**
		* Template name: Page - Food
		 */

get_header();
?>

<?php if( get_field('home_hero_image') ): ?>
   <img class="hero-image" src="<?php the_field('home_hero_image'); ?>" />
<?php endif; ?>
<?php if( get_field('food_welcome_message') ): ?>
   <p>
	   <?php echo esc_html( get_field('welcome_body') ); ?>
   </p>
<?php endif; ?>
<div class="container menu-container">
	<?php if( get_field('brunch_menu') ): ?>
	<div class="row">
		<div class="col-md-12">
			    <h1>Brunch Menu</h1>
    			<img src="<?php the_field('brunch_menu'); ?>" />
		</div>
	</div>
	<?php endif; ?>
	<?php if( get_field('lunch_menu') ): ?>
	<div class="row">
		<div class="col-md-12">
			    <h1>Lunch Menu</h1>
    			<img src="<?php the_field('lunch_menu'); ?>" />
		</div>
	</div>
	<?php endif; ?>
	<?php if( get_field('dinner_menu') || get_field('dinner_menu_page_2') ): ?>
	<div class="row">
		<div class="col-md-12">
			    <h1>Dinner Menu</h1>
			<?php if( get_field('dinner_menu') ): ?>
    			<img src="<?php the_field('dinner_menu'); ?>" />
			<?php endif; ?>
			<?php if( get_field('dinner_menu_page_2') ): ?>
    			<img src="<?php the_field('dinner_menu_page_2'); ?>" />
			<?php endif; ?>
		</div>
	</div>
	<?php endif; ?>
</div>

<?php get_footer(); ?>