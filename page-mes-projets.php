<?php get_header(); ?>
    <section class="Projets" itemscope itemtype="http://schema.org/WebPage">
        <h2 class="hidden">Mes projets</h2>
        <section>
            <h3>Mes projet Web</h3>
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
                <h4 itemprop="name"><?php the_title(); ?></h4>
                <figure itemprop="image">
                    <a title="Lien vers la page de description" href="<?php the_permalink(); ?>"><img src="<?php the_field('image_presentation'); ?>" alt="Plus d'info sur <?php the_title(); ?>"></a>
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
            <h3>Mes autres projets</h3>
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
                <h4 itemprop="name"><?php the_title() ?></h4>
                <figure itemprop="image">
                    <img src="<?php the_field('image_presentation') ?>" alt="">
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