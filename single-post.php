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

<!-- banner -->
<section 
class="l-template-content__banner d-flex justify-content-center align-items-center u-bg-cover u-bg-no-repeat"
style="background-image: url(<?php echo get_template_directory_uri()?>/../wp-bootstrap-starter-child/assets/images/template-content-banner.png)">

    <div class="container">

        <div class="row">

            <div class="col-12 px-0">
                <h1 class="l-template-content__banner__title position-relative u-font-weight-bold u-font-family-cinzel-decorative text-center u-color-folk-white pb-4">
                    Notícias
                </h1>
            </div>
        </div>
    </div>
</section>
<!-- end banner -->

<section class="py-5">

	<div class="container">

		<div class="row">

			<div class="col-12">

				<div class="row">

					<div class="col-8">
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
							<?php echo get_date_format('d/m/Y', $post)?>
						</p>

						<p class="u-font-size-18 u-font-family-lato">
							<span class="u-font-weight-bold u-color-folk-dark-gray">Categorias: </span><?php
								$cats = array();
								$count = 0;

								foreach (get_the_category( get_the_ID() ) as $c) {
									$cat = get_category($c);
									array_push($cats, $cat);
								}

								foreach( $cats as $cat ) :
									$count++;
							?>
									<span class="u-font-weight-regular u-color-folk-dark-golden">
										<?php echo $cat->name; ?>	
									</span>
							<?php 
									if( $count == 3 )
										break;
								endforeach; 
							?>
						</p>

						<h1 class="u-font-size-32 xxl:u-font-size-45 u-font-weight-bold u-font-family-cinzel u-color-folk-bold-marron mb-4">
							<!-- A Redenção na vocação dos Mercedários -->
							<?php the_title() ?>
						</h1>
						
						<span class="l-single-post">
							<?php the_content() ?>
						</span>
					</div>

					<div class="col-4 pt-3">
                
						<div class="row">

							<div class="col-12">

								<div class="border py-4 px-3">

									<div class="row">

									<div class="col-12 mb-3">

										<form method="GET" action="<?php echo get_home_url( null, '/' ) ?>">
											<input
											class="c-input-search py-3 px-2"
											type="search"
											name="s">
											
											<input 
											class="d-none"
											type="submit"
											id="submit">

											<label 
											class="c-input-search__icon"
											for="submit">
												Ícone pesquisa
											</label>
										</form>
									</div>

									<div class="col-12 my-2">
										<h5 class="u-font-size-18 xxl:u-font-size-20 u-font-weight-bold u-font-family-cinzel text-center text-uppercase u-color-folk-dark-golden">
											Categorias
										</h5>
									</div>

									<!-- loop -->
									  
									<div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/noticias/?cat=institucional' ) ?>">
                                        Institucional
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/noticias/?cat=vocacional' ) ?>">
                                        Vocacional
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/noticias/?cat=educacao' ) ?>">
                                        Educação
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/noticias/?cat=paroquias' ) ?>">
                                        Paróquias
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/noticias/?cat=caridade' ) ?>">
                                        Caridade
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/noticias/?cat=dom-inocencio' ) ?>">
                                        Dom Inocêncio
                                    </a>
                                </div>
                                <div class="col-12 my-1">
                                    <a
                                    class="w-100 d-block u-font-size-14 xxl:u-font-size-16 u-font-weight-regular u-font-family-lato text-center text-decoration-none u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-2"
                                    href="<?php echo get_home_url( null, '/noticias/?cat=pastoral' ) ?>">
                                        Pastoral
                                    </a>
                                </div>
									<!-- end loop -->
									</div>
								</div>
							</div>
						</div>

						<div class="row">

							<div class="col-12 mt-3">

								<div class="border pt-5 px-3">

									<div class="row mx-0">

										<!-- loop -->
										<?php  $args = array(
                            'posts_per_page' => 5,
                            'post_type'      => 'post',
                            'category_name'  => $cat->name,
                            'order'          => 'DESC',
                           
                        );

                        $contents = new WP_Query( $args );

                        if( $contents->have_posts()):
                            while ($contents->have_posts()) : $contents->the_post();
                                
                    ?>
											<a 
											class="col-12 u-border-b-1 last:u-border-none u-border-color-light-gray d-flex text-decoration-none mb-3 pb-3"
											href="<?php the_permalink() ?>">

												<div class="col-4 px-0">
													<?php
														$alt_title = get_the_title();
														the_post_thumbnail('post-thumbnail', 
															array(
															'class' => 'img-fluid w-100 h-100',
															'alt'   => $alt_title
														));
													?>
												</div>

												<div class="col-8">
													<p class="u-font-size-9 u-font-weight-bold u-font-family-lato u-color-folk-dark-golden mb-0">
													<?php echo get_date_format('d/m/Y', $post)?>
													</p>

													<h4 class="u-font-size-12 u-font-weight-bold u-font-family-cinzel u-color-folk-dark-gray">
													<?php echo the_title()?>
													</h4>

													<div class="row justify-content-end">

														<div class="col-7">
															<p class="w-100 u-font-size-7 u-font-weight-bold u-font-family-nunito text-center u-color-folk-white u-bg-folk-dark-marron hover:u-bg-folk-dark-golden py-1">
																Ler mais
															</p>
														</div>
													</div>
												</div>
											</a>
										<?php 
										endwhile;
										endif;
										wp_reset_query(); 
										 ?>
										<!-- end loop -->
									</div>
								</div>
							</div>
						</div>
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
