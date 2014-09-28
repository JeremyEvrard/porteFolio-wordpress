<?php get_header(); ?>    
    <section class="projetView">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="hidden"><?php the_title(); ?></h1>
        <article class="articleProjet">
            <div class="intro">
                <figure><img src="<?php the_field('image_presentation') ?>" alt="bibliosquare"></figure>
                <h2>Introduction</h2>
                <p><?php the_field('introduction') ?></p>
            </div>
            <?php echo the_content(); ?>
        </article>
    <?php endwhile ?>
    <?php endif ?>
    </section>
<?php get_footer(); ?>