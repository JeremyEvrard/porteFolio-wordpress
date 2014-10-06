<?php get_header(); ?>
    <section class="Projets" itemscope itemtype="http://schema.org/WebPage">
        <h1 class="hidden">Mes projets</h1>
        <section>
            <h2>Mes projet Web</h2>
            <?php
            $posts = array(
                'post_type' => 'creations',
                'ordy_by' => 'date_du_projet',
                'order' => 'ASC',
                'meta_key' => 'projet_web',
                'meta_value' => 'projet web'
            );
            ?>
            <?php $the_query = new WP_Query($posts) ?>
            <?php if($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()):$the_query->the_post();?>
            <section>
                <h3 itemprop="name"><?php the_title(); ?></h3>
                <figure itemprop="image">
                    <img src="<?php the_field('image_presentation') ?>" alt="Site internet <?php the_title() ?>">
                </figure> 
                <p itemprop="description"><?php the_field('introduction') ?></p>
                <div class="links">
                    <span><a href="<?php the_permalink() ?>">Plus d'info </a></span>
                    <span><a target="_blank" href="<?php the_field('adresse_du_site') ?>">Accéder au site </a></span>
                </div>
            </section>
            <?php endwhile ?>
            <?php endif ?>
        </section>
        <section>
            <h2>Mes autres projets</h2>
            <?php
            $posts = array(
                'post_type' => 'creations',
                'ordy_by' => 'date_du_projet',
                'order' => 'ASC',
                'meta_key' => 'projet_web',
                'meta_value' => 'autre projet'
            );
            ?>
            <?php $the_query = new WP_Query($posts) ?>
            <?php if($the_query->have_posts()): ?>
                <?php while ($the_query->have_posts()):$the_query->the_post();?>
            <section>
                <h3 itemprop="name"><?php the_title() ?></h3>
                <figure itemprop="image">
                    <img src="<?php the_field('image_presentation') ?>" alt="image de présentation de <?php the_title() ?>">
                </figure> 
                <p itemprop="description"><?php the_field('introduction') ?></p>
                <div <?php if (!get_field('avec_site_web')):?>class="single"<?php else: ?>class="links"<?php endif ?>>
                    <span><a href="<?php the_permalink(); ?>">Plus d'info</a></span>
                        <?php if (get_field('avec_site_web')):?>
                    <span><a href="<?php the_field('adresse_du_site') ?>">Accéder au site </a></span>
                        <?php endif ?>
                </div>
            </section>
                <?php endwhile ?>
            <?php endif ?>
        </section>
    </section>
<?php get_footer(); ?>