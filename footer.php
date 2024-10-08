<footer>
        <script src="<?php echo get_template_directory_uri() ?>/js/scripts.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
        <script src="<?php echo get_template_directory_uri() ?>/js/aos.js"></script>
        <script src="https://kit.fontawesome.com/04ace31e72.js" crossorigin="anonymous"></script>
        <div class="container">
            <div class="top">
                <div class="logo-redes-social">
                    <img class="logo-footer" src="<?php the_field ('acf_logo_smarter_rodape', 'options')?>" alt="">
                    <p><?php the_field ('acf_titulo_redes_sociais', 'options')?></p>
                    <ul class="redes-sociais">
                        <?php if( have_rows('acf_repeater_redes_sociais', 'options') ): while ( have_rows('acf_repeater_redes_sociais', 'options') ) : the_row(); ?>
                            <li><a target="_blank" href="<?php the_sub_field ('acf_link_rede_social', 'options')?>"><img src="<?php the_sub_field ('repeater_icone_redes_sociais', 'options')?>" alt=""></a></li>
                        <?php endwhile; else : endif;?>
                    </ul>
                </div>
                <ul>
                    <li><h3><?php the_field ('acf_titulo_do_repeater_01', 'options'); ?></h3></li>
                    <?php
                        $args = array(
                        'menu' => 'Menu Rodape 1',
                        'theme_location' => 'menu-rodape-1',
                        'container' => false
                        );
                        wp_nav_menu( $args );
                    ?>
                </ul>
                <ul>
                    <li><h3><?php the_field ('acf_titulo_do_repeater_2', 'options'); ?></h3></li>
                    <?php
                        $args = array(
                        'menu' => 'Menu Rodape 2',
                        'theme_location' => 'menu-rodape-2',
                        'container' => false
                        );
                        wp_nav_menu( $args );
                    ?>
                </ul>
                <ul>
                    <li><h3><?php the_field ('acf_titulo_do_repeater_3', 'options'); ?></h3></li>
                    <?php
                        $args = array(
                        'menu' => 'Menu Rodape 3',
                        'theme_location' => 'menu-rodape-3',
                        'container' => false
                        );
                        wp_nav_menu( $args );
                    ?>
                </ul>
            </div>
            <div class="bottom">
                <p class="copyright"><?php the_field ('acf_texto_copyright', 'options')?></p>
                <div class="icone">
                    <a href="#SessaoHero"><img src="<?php echo get_template_directory_uri( ) ?>/img/arrow-up.png" alt=""></a>
                </div>
                <div class="desenvolvedor">
                    <p>Desenvolvido por </p>
                    <a target="_blank" href="<?php the_field ('acf_link_para_jotapix', 'options')?>"><img src="<?php the_field ('acf_logo_jotapix', 'options')?>" alt=""></a>
                </div>
            </div>
        </div>
</footer>

    <?php wp_footer() ?>
</body>
</html>