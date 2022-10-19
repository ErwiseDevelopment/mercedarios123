<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */

?>

<!-- <article class="col-12" id="post-<?php the_ID(); ?>" <?php post_class(); ?>> -->
<a 
class="col-12 d-block text-decoration-none my-4"
href="<?php the_permalink() ?>">

	<div class="row">

		<div class="col-md-5 pr-md-0">
			<?php
				$alt_title = get_the_title();

				the_post_thumbnail( 'post-thumbnail',
					array(
						'class' => 'img-fluid w-100 h-100 u-object-fit-cover',
						'alt'   => $alt_title
					));
			?>
		</div>

		<div class="col-md-7 pl-md-0">
			
			<div class="l-template-blog__box py-4 px-3 px-md-5">

				<p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold text-uppercase u-color-folk-golden mb-0">
					<!-- 10 de dezembro de 2021 -->
					<?php echo get_the_date( 'd/m/Y', $post->ID ) ?>
				</p>

				<h4 class="l-template-blog__title u-font-weight-bold u-color-folk-dark-marron">
					<?php the_title() ?>
				</h4>

				<span class="d-block u-font-size-14 xxl:u-font-size-18 u-font-weight-regular u-color-folk-gray pb-3">
					<?php the_excerpt(); ?>
				</span>

				<div class="row">

					<div class="col-6 col-lg-4">
						<p class="w-100 d-block u-font-weight-medium text-center text-decoration-none u-color-folk-white u-bg-folk-golden hover:u-bg-folk-dark-marron mb-0 p-3">
							Ler mais
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</a>
	<!-- <header class="entry-header">
		<php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

		<php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<php wp_bootstrap_starter_posted_on(); ?>
		</div>
		<php endif; ?>
	</header>

	<div class="entry-summary">
		<php the_excerpt(); ?>
	</div>
	<footer class="entry-footer">
		<php wp_bootstrap_starter_entry_footer(); ?>
	</footer> -->
<!-- </article> -->