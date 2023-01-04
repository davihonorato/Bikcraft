<?php
// Template Name: Início

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="introducao">
			<div class="container">
				<h1><?php the_field('titulo_da_introducao'); ?></h1>
				<blockquote class="quote-externo">
					<p><?php the_field('citacao_da_introducao'); ?></p>
					<cite><?php the_field('autor_da_citacao'); ?></cite>
				</blockquote>
				<a href="/produtos" class="btn"><?php the_field('texto_do_botao_da_introducao'); ?></a>
			</div>
		</section>
		
		<section class="produtos container animar">
			<h2 class="subtitulo">Produtos</h2>
			<ul class="produtos_lista">

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/passeio.png" alt="Bikcraft Passeio">
					</div>
					<h3>Passeio</h3>
					<p>Muito melhor do que passear pela orla a vidros fechados.</p>
				</li>

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/esporte.png" alt="Bikcraft Esporte">
					</div>
					<h3>Esporte</h3>
					<p>Mais rápida do que Forrest Gump, ninguém vai pegar você.</p>
				</li>

				<li class="grid-1-3">
					<div class="produtos_icone">
						<img src="<?php echo get_template_directory_uri(); ?>/img/produtos/retro.png" alt="Bikcraft Retrô">
					</div>
					<h3>Retrô</h3>
					<p>O passado volta para lembrarmos o que devemos fazer no futuro.</p>
				</li>

			</ul>

			<div class="call">
				<p><?php the_field('chamada_para_produtos'); ?></p>
				<a href="/produtos" class="btn btn-preto"><?php the_field('texto_do_botao'); ?></a>
			</div>

		</section>
		<!-- Fecha Produtos -->

		<section class="portfolio">
			<div class="container">
				<h2 class="subtitulo">Portfólio</h2>

				<?php include(TEMPLATEPATH . "/inc/section-portifolio.php"); ?>
				
			</div>
		</section>

		<?php include(TEMPLATEPATH . "/inc/section-qualidade.php"); ?>
		
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>