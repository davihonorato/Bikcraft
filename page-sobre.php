<?php
// Template Name: Sobre

get_header();
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php include(TEMPLATEPATH . "/inc/section-introducao.php"); ?>

		<section class="missao_sobre container animar-interno">
			<div class="grid-10">
				<h2 class="subtitulo-interno">História, Missão e Visão</h2>
				<p><? the_field('missao_texto') ?></p>
			</div>
			<div class="grid-6">
				<h2 class="subtitulo-interno">Valores</h2>
				<?php the_field('lista_valores') ?>
			</div>

			<div class="grid-16 foto-equipe">
				<img src="<?php the_field('equipe') ?>" alt="<?php the_field('texto_alternativo_equipe') ?>">
			</div>

		</section>

		<?php include(TEMPLATEPATH . "/inc/section-qualidade.php"); ?>
<?php endwhile; else: endif; ?>

<?php get_footer(); ?>