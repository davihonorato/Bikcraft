<?php $sobre = get_page_by_title('sobre') ?>

<section class="qualidade container">
    <h2 class="subtitulo"><?php the_field('titulo_qualidade', $sobre) ?></h2>
    <img src="<?php the_field('imagem_qualidade', $sobre) ?>" alt="Bikcraft">
    <ul class="qualidade_lista">
        <?php if(have_rows('diferenciais_qualidade', $sobre)): while(have_rows('diferenciais_qualidade', $sobre)): the_row(); ?>
        <li class="grid-1-3">
            <h3><?php the_sub_field('titulo_diferencial', $sobre); ?></h3>
            <p><?php the_sub_field('texto_diferencial', $sobre); ?></p>
        </li>
        <?php endwhile; else : endif; ?>
    </ul>

    <?php if (!is_page('sobre')) { ?>
    <div class="call">
        <p><?php the_field('texto_chamada', $sobre); ?></p>
        <a href="/sobre" class="btn btn-preto"><?php the_field('botao_chamada', $sobre); ?></a>
    </div>
    <?php } ?>
</section>