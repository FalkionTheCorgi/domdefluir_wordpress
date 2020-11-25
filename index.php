<?php get_header(); ?>

<img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />

	<div class="content-area">
		<main>
			<section class="middle-area">
				<section class="carousel">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12" id = "slider">
								<?php get_template_part( 'template-parts/content-slider' ); ?>
							</div>
						</div>
					</div>	
				</section>
				<!--<div class="container">
					<div class="row">
						<div class="news col-md-8">
							<?php /*
							// Se houver algum post
							if( have_posts() ):
								// Enquanto houver posts, mostre-os pra gente
								while( have_posts() ): the_post();

							?>

							<?php get_template_part( 'template-parts/content', get_post_format() ); ?>

							<?php 
								endwhile;

								?>
	

								<?php
							else:
							?>

							 <p>There's nothing yet to be displayed...</p>

							<?php endif; */?>

						</div>
						<?php //get_sidebar( 'blog' ); ?>						
					</div>
				</div>-->
				<section class="noticias">
					<div class="container-fluid">
						<div class="row">
							<div class="col-12 text-center" id = "noticias-title">
								<h1>NOTÍCIAS</h2>
							</div>
						</div>
						<div class="row">
						<?php
							$args = array( 'category' => 6, 'post_type' =>  'post' ); 
							$postslist = get_posts( $args );    
							foreach ($postslist as $post) :  setup_postdata($post); 
						?>  
								<div class = "col-xl-3 col-lg-3 col-12">
									<a href="<?php echo get_permalink(); ?>">
										<div class="imagem_title">
											<?php the_post_thumbnail(); ?>
										</div>
										<div class="titulo_noticias">
											<?php the_title(); ?>
										</div>
									</a>
								</div>
								<?php endforeach; ?> 
							</div>			
						</div>
					</div>			
				</section>	
				<section class="fale-conosco">
					<div class="container-fluid">
						<div class="row" id = "contact_row">
							<div class="col-lg-3 col-md-6 col-sm-12 width">
								<div class="address">
									<h3>Contato</h3>
									<ul class="locarion_icon">
										<li><img src="<?php echo get_template_directory_uri(); ?>/icon/1.png" alt="icon" />Casa de Querida</li>
										<li><img src="<?php echo get_template_directory_uri(); ?>/icon/2.png" alt="icon" />Phone : ( +71 xxxxxxxxx )</li>
										<li><img src="<?php echo get_template_directory_uri(); ?>/icon/3.png" alt="icon" />Email : admin@domdefluir.com</li>

									</ul>

									<ul class="contant_icon">
										<li><img src="<?php echo get_template_directory_uri(); ?>/icon/fb.png" alt="icon" /></li>
										<li><img src="<?php echo get_template_directory_uri(); ?>/icon/tw.png" alt="icon" /></li>
										<li><img src="<?php echo get_template_directory_uri(); ?>/icon/lin(2).png" alt="icon" /></li>
										<li><img src="<?php echo get_template_directory_uri(); ?>/icon/instagram.png" alt="icon" /></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 col-sm-12 width">
								<div class="address">
									<h3>Fale Conosco</h3>
									<form>
										<div class="row">
											<div class="col-sm-12">
												<input class="contactus" placeholder="Nome" type="text" name="Name">
											</div>
											<div class="col-sm-12">
												<input class="contactus" placeholder="Telefone" type="text" name="Email">
											</div>
											<div class="col-sm-12">
												<input class="contactus" placeholder="Email" type="text" name="Email">
											</div>
											<div class="col-sm-12">
												<textarea class="textarea" placeholder="Mensagem" type="text" name="Message"></textarea>
											</div>
											<div class="col-sm-12">
												<button class="send">Send</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</section>	
			</section>
		</main>
	</div>
<?php get_footer(); ?>