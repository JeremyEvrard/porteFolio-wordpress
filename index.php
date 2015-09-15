<?php get_header(); ?>
    <section class="presentation">
        <h2 class="hidden">Ma présentation</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/images/photo.png" alt="" class="photo">
        <p class="accroche">J'utilise la technologie, le graphisme et le design pour faire vivre vos idées&nbsp;&hellip;<!--Transformer vos idées en communication visuelle, c'est mon métier Technologie, graphisme et design, ce qu'internet vous offre pour communiquez.--></p><!--Je suis Jérémy Evrard, Webdesigner, webdevelloper et intégrateur.Je fais principalement des projets web, toute fois il m’arrive de m’engager dans divers projets-->
    </section>
    <section class="projets">
        <h2 class="alpha">Mes projets récents</h2>
        <div class="projSlider js-projSlider">
        <?php
            $posts = array(
                'post_type' => 'creations',
                'ordy_by' => 'date_du_projet',
                'order' => 'ASC',
            );
        ?>

        <?php $the_query = new WP_Query($posts) ?>
        <?php if($the_query->have_posts()): ?>
            <div class="conteneur">
        
            <?php $i = 0; while ( $the_query->have_posts() AND $i < 3) : $the_query->the_post();?>
                <article>
                    <a href="<?php the_permalink();?>">
                        <div class="info">
                            <h3 class="title"><?php the_title(); ?></h3>
                            <p class="paragraphe"><?php the_field('introduction') ?></p>
                        </div>
                        <figure>
                            <img src="<?php the_field('image_mockup') ?>" alt="">
                        </figure>
                    </a>
                </article><!--
                -->
            <?php $i++; endwhile ?>
        <?php endif ?>
        <?php wp_reset_postdata(); ?>
            </div>
            <!--<button class="prev"><span class="del">projet </span>Précédent</button>
            <button class="next"><span class="del">projet </span>Suivant
            </button>-->
        </div>
        <a href="http://jevrard.be/mes-projets/">Voir plus de projets</a>
    </section>
    <section class="lastDoc">
        <h2 class="alpha">Mes technologies préférées</h2>
        <?php
            $posts = array(
                'post_type' => 'technologies',
                'ordy_by' => 'order',
                'order' => 'DESC',
                'meta_key' => 'on_home',
                'meta_value' => true
            );
        ?>

        <?php $the_query = new WP_Query($posts) ?>
        <?php if($the_query->have_posts()): ?>
        <ul>
            <?php $iteration = 0; ?>
            <?php while ($the_query->have_posts()):$the_query->the_post();?>
            <?php if($iteration !== 0): ?>
            --><?php endif; ?><li>
                <img src="<?php the_field('image'); ?>" alt="<?php the_title(); ?>">
            </li><!--
            <?php $iteration += 1 ?>
            <?php endwhile ?>
            -->
        </ul>
        <?php endif; ?>
    </section>
<?php get_footer(); ?>