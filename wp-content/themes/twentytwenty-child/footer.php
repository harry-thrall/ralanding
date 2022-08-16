<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Twentytwentychild
 */

?>


<div class="footer-block">
	<div class="row-container">
	<div class="footer-inner">
<img src="/wp-content/uploads/2022/08/logo.png" alt="pink brand logo" class="footer-logo"/>
	<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
	</div>		
	</div>
</div>
<!-- #page -->
<div class="menu-overlay"></div>
<?php wp_footer(); ?>

</body>
</html>
