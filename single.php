<?php
//Template name: Single Page
?>

<?php get_header(); ?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="s-inicial-single">
        <div class="container">
          <div class="titulos">
            <h1 class="entry-title"><?php the_title(); ?></h1>
            <p class="data-de-postagem"><?php the_time('j F, Y'); ?></p>
          </div>
        </div>
    </section>

    <section class="s-content">
        <div class="container">
            <div class="conteudo-interno">
                <?php the_content(); ?>
            </div>
        </div>
    </section>

    <?php endwhile; else : ?>
        <p><?php _e( 'Desculpe, nenhum post encontrado.' ); ?></p>
    <?php endif; ?>

<?php get_footer(); ?>