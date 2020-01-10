<?php
/**
 * Content empty partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
} ?>

<section class="main-slider">
	<?php
		the_content();
	?>
</section>
<!-- Credenciales -->
<section class="py-3">
	<div class="container">
		<div class="d-flex justify-content-center"><h1 class="main-title"><?php the_field( 'titulo_credenciales' ); ?></h1></div>
		<div class="row">
			<div class="col-md-4">
			<div class="grid">
				<a href=<?php the_field( 'enlace_credencial_1' ); ?>>
				<figure class="effect-zoe"><?php $imagen_credencial_1 = get_field( 'imagen_credencial_1' ); ?>
					<?php if ( $imagen_credencial_1 ) { ?>
						<img src="<?php echo $imagen_credencial_1['url']; ?>" alt="<?php echo $imagen_credencial_1['alt']; ?>" />
					<?php } ?>
				<figcaption>
					<h2><?php the_field( 'titulo_credencial_1' ); ?></h2>
					<p class="icon-links"><i class="fa fa-link fa-3x"></i></p>
				</figcaption>
				</figure>
				</a>
			</div>
			</div>
			<div class="col-md-4">
			<div class="grid">
				<a href=<?php the_field( 'enlace_credencial_2' ); ?>>
				<figure class="effect-zoe"><?php $imagen_credencial_2 = get_field( 'imagen_credencial_2' ); ?>
					<?php if ( $imagen_credencial_2 ) { ?>
						<img src="<?php echo $imagen_credencial_2['url']; ?>" alt="<?php echo $imagen_credencial_2['alt']; ?>" />
					<?php } ?>
				<figcaption>
					<h2><?php the_field( 'titulo_credencial_2' ); ?></h2>
					<p class="icon-links"><i class="fa fa-link fa-3x"></i></p>
				</figcaption>
				</figure>
				</a>
			</div>
			</div>
			<div class="col-md-4">
			<div class="grid">
				<a href=<?php the_field( 'enlace_credencial_3' ); ?>>
				<figure class="effect-zoe"><?php $imagen_credencial_3 = get_field( 'imagen_credencial_3' ); ?>
					<?php if ( $imagen_credencial_3 ) { ?>
						<img src="<?php echo $imagen_credencial_3['url']; ?>" alt="<?php echo $imagen_credencial_3['alt']; ?>" />
					<?php } ?>
				<figcaption>
					<h2><?php the_field( 'titulo_credencial_3' ); ?></h2>
					<p class="icon-links"><i class="fa fa-link fa-3x"></i></p>
				</figcaption>
				</figure>
				</a>
			</div>
			</div>
		</div>
	</div>
</section>
<!-- Latest Post -->
<section class="bg-primary py-5 text-white">
	<div class="container">
		<div class="d-flex justify-content-center"><h1 class="main-title"><?php the_field( 'titulo_ultimas_publicaciones' ); ?></h1></div>
			<div class="row">
				<?php
				global $post;

				$last_posts = get_posts(array('posts_per_page' => 3));
				foreach ( $last_posts as $post ) :
					setup_postdata( $post );?>

					<div class="col-md-4">
						<div class="grid">
							<figure class="effect-bubba">
								<?php the_post_thumbnail();?>
								<figcaption>
									<h2><?php the_title();?></h2>
									<p><?php the_excerpt();?></p>
									<a href="<?php the_permalink();?>"></a>
								</figcaption>			
							</figure>
						</div>
					</div>

				<?php endforeach;
				wp_reset_postdata();
				?>
			</div>
		</div>
	</div>
</section>
<!-- Directory Search form -->
<section class="bg-light py-5">
	<div class="container">
		<div class="d-flex mb-3 justify-content-center">
			<h1 class="main-title"><?php the_field( 'titulo_formulario_busqueda_directorio' ); ?></h1>
		</div>
		<div class="d-flex justify-content-center text-white">
			<p class="bg-secondary p-2">Busca nuestros aliados por Categoria o Ciudad</p>
		</div>
		<div class="row">
			<div class="col-sm-12"><?php the_field( 'shortcode_formulario_busqueda_directorio' ); ?></div>
		</div>
	</div>
</section> 
<!-- Call to action -->
<div class="container">
	<section class="as-cta-boxed-gradient my-4 p-5">
		<div class="row">
		<div class="col-sm-12 col-md-7 col-lg-8">
			<div class="as-cta-desc">
				<h2 class="font-weight-normal"><?php the_field( 'titulo_contactenos' ); ?></h2>
				<p class="mb-0"><?php the_field( 'descripcion_contactenos' ); ?></p>
			</div>
		</div>
		<div class="col-sm-12 col-md-5 col-lg-4 align-self-center">
			<div class="as-cta-btn">
				<a href="<?php the_field( 'enlace_boton_contactenos' ); ?>" class="btn btn-warning btn-lg">Contáctenos! <i class="fa fa-angle-right" aria-hidden="true"></i></a>
			</div>
		</div>
		</div>
	</section>
</div>
<!-- Carrusel Alianzas -->
<section class="bg-light py-3">
	<div class="container">
		<div class="d-flex mb-3 justify-content-center"><h1 class="main-title"><?php the_field( 'titulo_alianzas' ); ?></h1></div>
		<div class="row">
			<div class="col-sm-12">
				<?php the_field( 'shortcode_alianzas' ); ?>
			</div>
		</div>
	</div>
</section>
