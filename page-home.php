<?php
    //Template name: Home
?>

<?php get_header(); ?>

    <?php if ( have_posts(  )) : while ( have_posts(  ) ) : the_post( ); ?>

    <section id="SessaoHero" class="s-hero">
        <div class="container">
          <div class="text" data-aos="zoom-in">
            <span class="subtitulo"><?php the_field ('acf_subtitulo_da_sessao_inicial'); ?></span>
            <h1><?php the_field ('acf_titulo_da_sessao_inicial'); ?></h1>
            <p><?php the_field ('acf_texto_da_sessao_inicial'); ?></p>
            <a target="_blank" href="<?php the_field ('acf_link_do_botao_de_orcamento'); ?>">
                <button class="btn-primary">
                    <i class="fa-brands fa-whatsapp fa-shake fa-2xl" style="color: #ffff; margin-right: 1rem;"></i>
                    <p><?php the_field ('acf_texto_do_botao_de_orcamento'); ?></p>
                </button>
            </a>
          </div>
    </section>
    <section id="SobreNós" class="s-sobre-nos">
        <div class="container">
            <div class="left">
                <div class="quadrado-verde" data-aos="fade-right"></div>
                <img class="imagem-section-sobre-nos" data-aos="fade-left" src="<?php the_field ('acf_imagem_principal_da_sessao_sobre_nos'); ?>" alt="">
                <div class="icones">
                    <div class="icone-01"><i class="fa-regular fa-building fa-fade fa-2xl" style="color: #ffffff;"></i></div>
                    <div class="icone-02"><i class="fa-solid fa-building fa-fade fa-2xl" style="color: #ffffff;"></i></div>
                </div>
            </div>
            <div class="right">
                <div class="top">
                    <div class="text" data-aos="fade-right">
                        <span><?php the_field ('acf_subtitulo_da_sessao_sobre_nos'); ?></span>
                        <h2><?php the_field ('acf_titulo_da_sessao_sobre_nos'); ?></h2>
                    </div>
                    <div class="elipse-icone" data-aos="zoom-in">
                        <img class="circular-text" src="<?php the_field ('acf_texto_redondo_imagem'); ?>" alt="">
                        <!-- <img class="ellipse" src="<?php the_field ('acf_icone_redondo_imagem'); ?>" alt=""> -->
                        <img class="predios-icone" src="<?php the_field ('acf_icone_smarter_imagem'); ?>" alt="">
                    </div>
                </div>
                <div class="bottom" data-aos="fade-right">
                <?php if( have_rows('repeater_dos_textos_da_sessao') ): while ( have_rows('repeater_dos_textos_da_sessao') ) : the_row(); ?>
                    <p><?php the_sub_field ('repeater_texto_da_sessao'); ?></p>
                <?php endwhile; else : endif;?>
                </div>
            </div>
        </div>
    </section>
    <section id="Serviços" class="s-nossos-servicos">
        <div class="container">
            <ul>
                <li class="inicio-o-que-oferecemos" data-aos="flip-right">
                    <span><?php the_field ('acf_subtitulo_inicial_da_sessao'); ?></span>
                    <h2><?php the_field ('acf_titulo_inicial_da_sessao'); ?></h2>
                    <p><?php the_field ('acf_texto_inicial_da_sessao'); ?></p>
                    <i class="fa-solid fa-arrow-right fa-fade fa-2xl" style="color: #17aa61;"></i>
                </li>
                <?php if( have_rows('acf_repeater_box_servicos') ): while ( have_rows('acf_repeater_box_servicos') ) : the_row(); ?>
                    <li class="box-informacoes"  data-aos="flip-right">
                        <div class="circle-fundo"><img src="<?php the_sub_field ('acf_icone_da_box'); ?>" alt=""></div>
                        <h3><?php the_sub_field ('acf_titulo_da_box'); ?></h3>
                        <p><?php the_sub_field ('acf_texto_da_box'); ?></p>
                    </li>
                <?php endwhile; else : endif;?>
                <li class="box-contato" data-aos="flip-right">
                    <div class="circle-fundo-white"> <i class="fa-brands fa-whatsapp fa-shake fa-2xl" style="color: #17AA61;"></i></div>
                    <h3><?php the_field ('acf_titulo_da_box_de_contato'); ?></h3>
                    <p class="texto-contato"><?php the_field ('acf_texto_da_box_de_contato'); ?></p>
                    <a target="_blank" href="<?php the_field ('acf_link_solicite_proposta'); ?>">
                        <div class="solicite-proposta">
                            <p class="texto-solicitacao"><?php the_field ('acf_texto_solicite_proposta'); ?></p>
                            <img class="arrow" src="<?php echo get_template_directory_uri( ) ?>/img/formkit_arrowright-2.png" alt="">
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section id="AplicativoSmarter" class="s-aplicativo">
        <div class="container">
            <div class="content">
                <div class="text" data-aos="fade-right">
                    <span><?php the_field ('acf_subtitulo_da_sessao_aplicativo'); ?></span>
                    <h2><?php the_field ('acf_titulo_da_sessao_aplicativo'); ?></h2>
                    <p><?php the_field ('acf_texto_da_sessao_aplicativo'); ?></p>
                    <div class="botoes">
                        <a target="_blank" href="<?php the_field ('acf_link_do_botao_app_store'); ?>"><img src="<?php the_field ('acf_imagem_do_botao_app_store'); ?>" alt=""></a>
                        <a target="_blank" href="<?php the_field ('acf_link_do_botao_google_play'); ?>"><img src="<?php the_field ('acf_imagem_do_botao_google_play'); ?>" alt=""></a>
                    </div>
                </div>
                <div class="mockups">
                    <img src="<?php the_field ('acf_imagem_celulares'); ?>" alt="">
                </div>
            </div>
        </div>
    </section>
    <section id="FaleConosco" class="s-fale-conosco">
        <div class="container">
            <div class="left" data-aos="fade-left">
                <span class="subtitulo"><?php the_field ('acf_subtitulo_sessao_fale_conosco'); ?></span>
                <h2><?php the_field ('acf_titulo_sessao_fale_conosco'); ?></h2>
                <p class="texto-formulario"><?php the_field ('acf_texto_sessao_fale_conosco'); ?></p>
                <ul>
                    <li>
                        <div class="icone">
                            <i class="fa-brands fa-whatsapp fa-2xl" style="color: #17aa61;"></i>
                        </div>
                        <a target="blank" href="https://api.whatsapp.com/send?phone=<?php the_field ('acf_numero_de_contato_1'); ?>"><p><?php the_field ('acf_numero_de_contato_visivel_1'); ?></p></a>
                    </li>
                    <li>
                        <div class="icone">
                            <i class="fa-solid fa-phone fa-2xl" style="color: #17aa61;"></i>
                        </div>
                        <a href="tel:+<?php the_field ('acf_numero_de_contato_2'); ?>"><p><?php the_field ('acf_numero_de_contato_visivel_2'); ?></p></a>
                    </li>
                    <li>
                        <div class="icone">
                            <i class="fa-solid fa-location-dot fa-2xl" style="color: #17aa61;"></i>
                        </div>
                        <a target="_blank" href="<?php the_field ('acf_link_do_endereco'); ?>"><p class="endereco"><?php the_field ('acf_endereco'); ?></p></a>
                    </li>
                    <li>
                        <div class="icone">
                            <i class="fa-regular fa-envelope fa-2xl" style="color: #17aa61;"></i>
                        </div>
                        <a href="mailto:<?php the_field ('acf_email'); ?>"><p class="email"><?php the_field ('acf_email'); ?></p></a>                      
                    </li>
                </ul>
            </div>
            <div class="formulario">
                <?php
                    // Verifica se a função do_shortcode() está disponível
                    if (function_exists('do_shortcode')) {
                        // Substitua 'your_shortcode_here' pelo shortcode real do seu formulário
                        $form_shortcode = '[contact-form-7 id="bcb79de" title="Formulário Contato Smarter"]';
                        
                        // Usando a função do_shortcode() para renderizar o formulário
                        echo do_shortcode($form_shortcode);
                    }
                ?>
            </div>
        </div>
    </section>

    <?php endwhile; else: endif; ?>

<?php get_footer(); ?>

