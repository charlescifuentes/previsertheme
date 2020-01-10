<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<script>
		$(function () {
			$('[data-toggle="tooltip"]').tooltip()
		})
	</script>
</head>

<body <?php body_class(); ?>>

<div class="site" id="page">
	<section class="top-bar bg-secondary text-white py-2 d-flex">
		<div class="container">
			<div class="float-right">
				<li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-facebook-square" style="color:white;"></i></a></li>
				<li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-instagram" style="color:white;"></i></a></li>
				<li class="list-inline-item"><a href="#" target="_blank"><i class="fa fa-youtube" style="color:white;"></i></a></li>
				<li class="list-inline-item"><a href="https://www.pagosvirtualesavvillas.com.co/personal/pagos/6561%20%20%20%20%20%20%20" target="_blank"><i class="fa fa-money" style="color:white;"> Pago PSE</i></a></li>
				<li class="list-inline-item"><a href="/nuevositio/mi-cuenta/"><i class="fa fa-user" style="color:white;"> Ingresar</i></a></li>
				<li class="list-inline-item"><div data-toggle="tooltip" data-placement="bottom" title="Productos en el carrito de compras"> 
							<!--Custom cart start-->
							<?php if ( class_exists( 'WooCommerce' ) ) { ?>
									<a class="cart-customlocation" href="<?php echo wc_get_cart_url(); ?>" 
									title="<?php _e( 'View your shopping cart', 'understrap' ); ?>"><i class="fa fa-shopping-cart"></i>
									<?php echo sprintf ( _n( '%d item', '%d items', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> 
									- <?php echo WC()->cart->get_cart_total(); ?>
									</a>
								<?php } else {
							// you don't appear to have WooCommerce activated
							} ?>
							<!--Custom cart end-->
						</div></li>
			</div>
		</div>
	</section>

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" class="sticky-top" itemscope itemtype="http://schema.org/WebSite">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<nav class="navbar navbar-expand-sm bg-light navbar-light text-uppercase">

		<?php if ( 'container' == $container ) : ?>
			<div class="container">
		<?php endif; ?>

					<!-- Your site title as branding in the menu -->
					<?php if ( ! has_custom_logo() ) { ?>

						<?php if ( is_front_page() && is_home() ) : ?>

							<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a></h1>

						<?php else : ?>

							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><?php bloginfo( 'name' ); ?></a>

						<?php endif; ?>


					<?php } else {
						the_custom_logo();
					} ?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'understrap' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav ml-auto',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>
			<?php if ( 'container' == $container ) : ?>
			</div><!-- .container -->
			<?php endif; ?>

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
