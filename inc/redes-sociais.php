<?php $contato = get_page_by_title('contato') ?>

<ul>

<?php if(have_rows('redes_sociais', $contato)):

    while(have_rows('redes_sociais', $contato)): 

        the_row(); ?>

            <li>
                <a href="<?php the_sub_field('url_rede_social', $contato) ?>" target="_blank">
                    <img src="<?php the_sub_field('icone_rede_social', $contato) ?>" alt="<?php the_sub_field('nome_da_rede_social') ?> Bikcraft">
                </a>
            </li>

    <?php endwhile;
    
endif; ?>

</ul>