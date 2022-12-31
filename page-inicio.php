<?php
// Template Name: Início

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="introducao">
			<div class="container">
				<h1>Bicicletas Feitas a Mão</h1>
				<blockquote class="quote-externo">
					<p>“não tenha nada em sua casa que você não considere útil ou acredita ser bonito”</p>
					<cite>WILLIAM MORRIS</cite>
				</blockquote>
				<a href="produtos.html" class="btn">Orçamento</a>
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
				<p>clique aqui e veja os detalhes dos produtos</p>
				<a href="/produtos" class="btn btn-preto">Produtos</a>
			</div>

		</section>
		<!-- Fecha Produtos -->

		<section class="portfolio">
			<div class="container">
				<h2 class="subtitulo">Portfólio</h2>

				<?php include(TEMPLATEPATH . "/inc/section-portifolio.php"); ?>

				<div class="call">
					<p>conheça mais o nosso portfólio</p>
					<a href="/portifolio" class="btn">Portfólio</a>
				</div>
			</div>
		</section>

		<?php include(TEMPLATEPATH . "/inc/section-qualidade.php"); ?>
		
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>