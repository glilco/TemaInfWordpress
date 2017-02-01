<?php get_header(); ?>

<section id="principal">
    <div id="conteudo">
        <h1>Área principal</h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article class="post-article">
            <header class="post-header"><?php the_title(); ?></header>
            <h4>Postado em <?php the_time('F jS, Y') ?></h4>
            <?php the_content(__('(more...)')); ?>
        </article>
        <hr> <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
        

    </div>
</section>


<?php get_footer(); ?>
