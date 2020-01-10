<?php
/**
 * Credencial Clásica Partial template
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
		<div class="row pb-3">
			<div class="col-md-7">
				<?php $imagen_credencial = get_field( 'imagen_credencial' ); ?>
				<?php if ( $imagen_credencial ) { ?>
					<img src="<?php echo $imagen_credencial['url']; ?>" alt="<?php echo $imagen_credencial['alt']; ?>" />
				<?php } ?>
			</div>
			<div class="col-md-5 py-5">
				<p style="font-size: 1.5rem;"><?php the_field( 'descripcion_credencial' ); ?></p>		
			</div>

		</div>

		<div class="row text-center pb-3">
			<div class="col-md-12">
				<div class="alert alert-warning" role="alert">
					<?php the_field( 'llamada_a_la_accion' ); ?>
				</div>
			</div>
		</div>
		
		<div class="row text-center pb-3">
			<div class="col-md-4 pb-3">
				<div class="card benefit">
					<?php $imagen_beneficio_1 = get_field( 'imagen_beneficio_1' ); ?>
					<?php if ( $imagen_beneficio_1 ) { ?>
						<img src="<?php echo $imagen_beneficio_1['url']; ?>" class="card-img-top" alt="<?php echo $imagen_beneficio_1['alt']; ?>" />
					<?php } ?>
					<div class="card-body bg-secondary benefit-body">
						<h5 class="card-title bg-warning benefit-title"><?php the_field( 'titulo_beneficio_1' ); ?></h5>
						<div class="overlay">
							<p class="card-text benefit-text"><?php the_field( 'descripcion_beneficio_1' ); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 pb-3">
				<div class="card benefit">
					<?php $imagen_beneficio_2 = get_field( 'imagen_beneficio_2' ); ?>
					<?php if ( $imagen_beneficio_2 ) { ?>
					<img src="<?php echo $imagen_beneficio_2['url']; ?>" alt="<?php echo $imagen_beneficio_2['alt']; ?>" />
					<?php } ?>
					<div class="card-body bg-secondary benefit-body">
						<h5 class="card-title bg-warning benefit-title"><?php the_field( 'titulo_beneficio_2' ); ?></h5>
						<div class="overlay">
							<p class="card-text benefit-text"><?php the_field( 'descripcion_beneficio_2' ); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 pb-3">
				<div class="card benefit">
					<?php $imagen_beneficio_3 = get_field( 'imagen_beneficio_3' ); ?>
					<?php if ( $imagen_beneficio_3 ) { ?>
						<img src="<?php echo $imagen_beneficio_3['url']; ?>" class="card-img-top" alt="<?php echo $imagen_beneficio_3['alt']; ?>" />
					<?php } ?>
					<div class="card-body bg-secondary benefit-body">
						<h5 class="card-title bg-warning benefit-title"><?php the_field( 'titulo_beneficio_3' ); ?></h5>
						<div class="overlay">
							<p class="card-text benefit-text"><?php the_field( 'descripcion_beneficio_3' ); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row text-center pb-3">
			<div class="col-md-4 pb-3">
				<div class="card benefit">
					<?php $imagen_beneficio_4 = get_field( 'imagen_beneficio_4' ); ?>
					<?php if ( $imagen_beneficio_4 ) { ?>
						<img src="<?php echo $imagen_beneficio_4['url']; ?>" class="card-img-top" alt="<?php echo $imagen_beneficio_4['alt']; ?>" />
					<?php } ?>
					<div class="card-body bg-secondary benefit-body">
						<h5 class="card-title bg-warning benefit-title"><?php the_field( 'titulo_beneficio_4' ); ?></h5>
						<div class="overlay">
							<p class="card-text benefit-text"><?php the_field( 'descripcion_beneficio_4' ); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 pb-3">
				<div class="card benefit">
					<?php $imagen_beneficio_5 = get_field( 'imagen_beneficio_5' ); ?>
					<?php if ( $imagen_beneficio_5 ) { ?>
					<img src="<?php echo $imagen_beneficio_5['url']; ?>" alt="<?php echo $imagen_beneficio_5['alt']; ?>" />
					<?php } ?>
					<div class="card-body bg-secondary benefit-body">
						<h5 class="card-title bg-warning benefit-title"><?php the_field( 'titulo_beneficio_5' ); ?></h5>
						<div class="overlay">
							<p class="card-text benefit-text"><?php the_field( 'descripcion_beneficio_5' ); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 pb-3">
				<div class="card benefit">
					<?php $imagen_beneficio_6 = get_field( 'imagen_beneficio_6' ); ?>
					<?php if ( $imagen_beneficio_6 ) { ?>
						<img src="<?php echo $imagen_beneficio_6['url']; ?>" class="card-img-top" alt="<?php echo $imagen_beneficio_6['alt']; ?>" />
					<?php } ?>
					<div class="card-body bg-secondary benefit-body">
						<h5 class="card-title bg-warning benefit-title"><?php the_field( 'titulo_beneficio_6' ); ?></h5>
						<div class="overlay">
							<p class="card-text benefit-text"><?php the_field( 'descripcion_beneficio_6' ); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row text-center pb-3">
			<div class="col-md-4 pb-3">
				<div class="card benefit">
					<?php $imagen_beneficio_7 = get_field( 'imagen_beneficio_7' ); ?>
					<?php if ( $imagen_beneficio_7 ) { ?>
						<img src="<?php echo $imagen_beneficio_7['url']; ?>" class="card-img-top" alt="<?php echo $imagen_beneficio_7['alt']; ?>" />
					<?php } ?>
					<div class="card-body bg-secondary benefit-body">
						<h5 class="card-title bg-warning benefit-title"><?php the_field( 'titulo_beneficio_7' ); ?></h5>
						<div class="overlay">
							<p class="card-text benefit-text"><?php the_field( 'descripcion_beneficio_7' ); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 pb-3">
				<div class="card benefit">
					<?php $imagen_beneficio_8 = get_field( 'imagen_beneficio_8' ); ?>
					<?php if ( $imagen_beneficio_8 ) { ?>
					<img src="<?php echo $imagen_beneficio_8['url']; ?>" alt="<?php echo $imagen_beneficio_8['alt']; ?>" />
					<?php } ?>
					<div class="card-body bg-secondary benefit-body">
						<h5 class="card-title bg-warning benefit-title"><?php the_field( 'titulo_beneficio_8' ); ?></h5>
						<div class="overlay">
							<p class="card-text benefit-text"><?php the_field( 'descripcion_beneficio_8' ); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 pb-3">
				<div class="card benefit">
					<?php $imagen_beneficio_9 = get_field( 'imagen_beneficio_9' ); ?>
					<?php if ( $imagen_beneficio_9 ) { ?>
						<img src="<?php echo $imagen_beneficio_9['url']; ?>" class="card-img-top" alt="<?php echo $imagen_beneficio_9['alt']; ?>" />
					<?php } ?>
					<div class="card-body bg-secondary benefit-body">
						<h5 class="card-title bg-warning benefit-title"><?php the_field( 'titulo_beneficio_9' ); ?></h5>
						<div class="overlay">
							<p class="card-text benefit-text"><?php the_field( 'descripcion_beneficio_9' ); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row text-center pb-3">
			<div class="col-md-4 pb-3">
				<div class="card benefit">
					<?php $imagen_beneficio_10 = get_field( 'imagen_beneficio_10' ); ?>
					<?php if ( $imagen_beneficio_10 ) { ?>
						<img src="<?php echo $imagen_beneficio_10['url']; ?>" class="card-img-top" alt="<?php echo $imagen_beneficio_10['alt']; ?>" />
					<?php } ?>
					<div class="card-body bg-secondary benefit-body">
						<h5 class="card-title bg-warning benefit-title"><?php the_field( 'titulo_beneficio_10' ); ?></h5>
						<div class="overlay">
							<p class="card-text benefit-text"><?php the_field( 'descripcion_beneficio_10' ); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 pb-3">
				<div class="card benefit">
				<?php $imagen_beneficio_11 = get_field( 'imagen_beneficio_11' ); ?>
				<?php if ( $imagen_beneficio_11 ) { ?>
					<img src="<?php echo $imagen_beneficio_11['url']; ?>" alt="<?php echo $imagen_beneficio_11['alt']; ?>" />
				<?php } ?>
				<div class="card-body bg-secondary benefit-body">
						<h5 class="card-title bg-warning benefit-title"><?php the_field( 'titulo_beneficio_11' ); ?></h5>
						<div class="overlay">
							<p class="card-text benefit-text"><?php the_field( 'descripcion_beneficio_11' ); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 pb-3">
				<div class="card benefit">
					<?php $imagen_beneficio_12 = get_field( 'imagen_beneficio_12' ); ?>
					<?php if ( $imagen_beneficio_12 ) { ?>
						<img src="<?php echo $imagen_beneficio_12['url']; ?>" class="card-img-top" alt="<?php echo $imagen_beneficio_12['alt']; ?>" />
					<?php } ?>
					<div class="card-body bg-secondary benefit-body">
						<h5 class="card-title bg-warning benefit-title"><?php the_field( 'titulo_beneficio_12' ); ?></h5>
						<div class="overlay">
							<p class="card-text benefit-text"><?php the_field( 'descripcion_beneficio_12' ); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row text-center pb-3">
			<div class="col-md-4 pb-3">
				<div class="card benefit">
					<?php $imagen_beneficio_13 = get_field( 'imagen_beneficio_13' ); ?>
					<?php if ( $imagen_beneficio_13 ) { ?>
						<img src="<?php echo $imagen_beneficio_13['url']; ?>" class="card-img-top" alt="<?php echo $imagen_beneficio_13['alt']; ?>" />
					<?php } ?>
					<div class="card-body bg-secondary benefit-body">
						<h5 class="card-title bg-warning benefit-title"><?php the_field( 'titulo_beneficio_13' ); ?></h5>
						<div class="overlay">
							<p class="card-text benefit-text"><?php the_field( 'descripcion_beneficio_13' ); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 pb-3">
				<div class="card benefit">
					<?php $imagen_beneficio_14 = get_field( 'imagen_beneficio_14' ); ?>
					<?php if ( $imagen_beneficio_14 ) { ?>
					<img src="<?php echo $imagen_beneficio_14['url']; ?>" alt="<?php echo $imagen_beneficio_14['alt']; ?>" />
					<?php } ?>
					<div class="card-body bg-secondary benefit-body">
						<h5 class="card-title bg-warning benefit-title"><?php the_field( 'titulo_beneficio_14' ); ?></h5>
						<div class="overlay">
							<p class="card-text benefit-text"><?php the_field( 'descripcion_beneficio_14' ); ?></p>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-4 pb-3">
				<div class="card benefit">
					<?php $imagen_beneficio_15 = get_field( 'imagen_beneficio_15' ); ?>
					<?php if ( $imagen_beneficio_15 ) { ?>
						<img src="<?php echo $imagen_beneficio_15['url']; ?>" class="card-img-top" alt="<?php echo $imagen_beneficio_15['alt']; ?>" />
					<?php } ?>
					<div class="card-body bg-secondary benefit-body">
						<h5 class="card-title bg-warning benefit-title"><?php the_field( 'titulo_beneficio_15' ); ?></h5>
						<div class="overlay">
							<p class="card-text benefit-text"><?php the_field( 'descripcion_beneficio_15' ); ?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row pt-5">
			<div class="col-md-6">
				<div class="text-calltoaction mx-auto">
					<h2 class="center"><?php the_field( 'llamada_a_la_accion_carrito_de_compras' ); ?></h2>
				</div>
			</div>
			<div class="col-md-6">
				<div class="product-calltoaction mx-auto">
					<?php the_field( 'boton_carrito_de_compras' ); ?>
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
