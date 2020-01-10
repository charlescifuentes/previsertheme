<?php
/**
 * About Us Partial template
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
		
		<div class="row">
			<div class="col-md-6">
				<div class="d-flex justify-content-center my-4"><h1 class="main-title"><?php the_field( 'titulo_1' ); ?></h1></div>
				<p class="text-justify"><?php the_field( 'descripcion_1' ); ?></p>	
			</div>		
			<div class="col-md-6 pt-5">
				<?php $imagen_1 = get_field( 'imagen_1' ); ?>
				<?php if ( $imagen_1 ) { ?>
					<img src="<?php echo $imagen_1['url']; ?>" alt="<?php echo $imagen_1['alt']; ?>" />
				<?php } ?>
			</div>
		</div>
		<div class="row mt-4">
				<div class="col-md-6">
					<div class="d-flex justify-content-center my-4"><h1 class="main-title"><?php the_field( 'titulo_2' ); ?></h1></div>
					<p class="text-justify"><?php the_field( 'descripcion_2' ); ?></p>
					<?php $imagen_2 = get_field( 'imagen_2' ); ?>	
				</div>
				<div class="col-md-6">
					<div class="d-flex justify-content-center my-4"><h1 class="main-title"><?php the_field( 'titulo_3' ); ?></h1></div>
					<p class="text-justify"><?php the_field( 'descripcion_3' ); ?></p>
				</div>
		</div>

		<?php the_content(); ?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
