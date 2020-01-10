<?php
/**
 * Directory Partial template
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
			<div class="col-md-12">
				<div class="d-flex justify-content-center my-4">
					<h1 class="main-title"><?php the_field( 'titulo' ); ?></h1>
				</div>
				<div class="d-flex justify-content-center text-white">
					<p class="bg-secondary p-2"><?php the_field( 'descripcion' ); ?></p>	
				</div>
			</div>
		</div>
		<div class="row py-5">
			<div class="col-sm-12">
				<?php the_field( 'shortcode_directory_search_form' ); ?>
			</div>
		</div>
		<div class="row py-5">
			<div class="col-sm-12">
				<?php the_content(); ?>
			</div>
		</div>
		

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
