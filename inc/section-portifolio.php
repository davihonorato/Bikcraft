<?php $portfolio = get_page_by_title('portfolio'); ?>

<ul class="portfolio_lista rslides_portfolio">

    <?php if(have_rows('slides_portfolio', $portfolio)): while(have_rows('slides_portfolio', $portfolio)): the_row(); ?>
    <li>
        <div class="grid-8"><img src="<?php the_sub_field('imagem_1', $portfolio) ?>" alt="<?php the_sub_field('texto_alternativo_1', $portfolio) ?>"></div>
        <div class="grid-8"><img src="<?php the_sub_field('imagem_2', $portfolio) ?>" alt="<?php the_sub_field('texto_alternativo_2', $portfolio) ?>"></div>
        <div class="grid-16"><img src="<?php the_sub_field('imagem_3', $portfolio) ?>" alt="<?php the_sub_field('texto_alternativo_3', $portfolio) ?>"></div>
    </li>
    <?php endwhile; endif; ?>

</ul>

<?php if(!is_page('portfolio')) { ?>
<div class="call">
    <p><?php the_field('chamada_portfolio', $portfolio); ?></p>
    <a href="/portifolio" class="btn"><?php the_field('botao_portfolio', $portfolio); ?></a>
</div>
<?php } ?>