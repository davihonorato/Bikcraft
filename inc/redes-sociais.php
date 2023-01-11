<ul>

    <?php if(have_rows('redes_sociais')):

        while(have_rows('redes_sociais')): 

            the_row(); ?>

                <li>
                    <a href="<?php the_sub_field('url_rede_social') ?>" target="_blank">
                        <img src="<?php the_sub_field('icone_rede_social') ?>" alt="<?php the_sub_field('nome_da_rede_social') ?> Bikcraft">
                    </a>
                </li>

        <?php endwhile;
        
    endif; ?>

</ul>