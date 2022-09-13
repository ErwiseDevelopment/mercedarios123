<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header(); ?>

<section id="primary" class="content-area">
<div id="main" class="site-main" role="main">

<?php while ( have_posts() ) : the_post(); ?>

<section>

	<div class="container">

		<div class="row">

			<div class="col-12">

				<div class="row">

					<div class="col-9">
						<?php
							$alt_title = get_the_title();
							the_post_thumbnail( 'post-thumbnail',
								array(
									'class' => 'img-fluid w-100 u-object-fit-cover',
									'style' => 'height:460px',
									'alt'   => $alt_title
								));
						?>

						<p class="u-font-size-12 xxl:u-font-size-15 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden mt-4 mb-0">
							15 de março, 2022
						</p>

						<p class="u-font-size-18 u-font-family-lato">
							<span class="u-font-weight-bold u-color-folk-dark-gray">Categorias: </span><span class="u-font-weight-regular u-color-folk-dark-golden">Vocacional, Institucional</span>
						</p>

						<h1 class="u-font-size-32 xxl:u-font-size-45 u-font-weight-bold u-font-family-cinzel u-color-folk-bold-marron mb-4">
							<!-- A Redenção na vocação dos Mercedários -->
							<?php the_title() ?>
						</h1>
						
						<span class="l-single-post">
							<?php the_content() ?>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php endwhile; ?>

</div><!-- #main -->
</section><!-- #primary -->

<?php

get_footer();
