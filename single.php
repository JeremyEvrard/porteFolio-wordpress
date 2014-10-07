<?php get_header(); ?>    
    <section class="projetView" itemscope itemtype="http://schema.org/WebPage">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1 class="hidden" itemprop="headline"><?php the_title(); ?></h1>
        <article class="articleProjet">
            <div class="intro">
                <figure itemprop="image"><img src="<?php the_field('image_presentation') ?>" alt="bibliosquare"></figure>
                <h2 class="hidden">Introduction</h2>
                <p itemprop="description"><?php the_field('introduction') ?></p>
            </div>
            <div itemprop="text">
                <?php echo the_content(); ?>
            </div>
            <?php if (get_field('adresse_du_site')): ?>
            <div>
                <span>
                    <a class ="siteLink" target="_blank" href="<?php the_field('adresse_du_site') ?>">Accéder au site </a>
                </span>
            </div>
            <?php endif ?>
        </article>
    <?php endwhile ?>
    <?php endif ?>
    </section>
<?php get_footer(); ?>