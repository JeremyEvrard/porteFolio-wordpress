<?php get_header(); ?>
    <section class="presentation">
        <h2 class="hidden">Ma présentation</h2>
        <img src="<?php echo get_template_directory_uri(); ?>/images/photo.png" alt="Une photo de jérémy Evrard" class="photo">
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
                            <h3><?php the_title(); ?></h3>
                            <p><?php the_field('introduction') ?></p>
                        </div>
                        <figure>
                            <img src="<?php the_field('image_mockup') ?>"> 
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
        <h2 class="alpha">Mes dernières documentations</h2>
        <ul>
            <li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/sass.png" alt="sass">
            </li><!--
            --><li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/NodeJS.png" alt="nodeJS">
            </li><!--
            --><li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/Jquerry.png" alt="Jquerry">
            </li><!--
            --><li>
                <img src="<?php echo get_template_directory_uri(); ?>/images/PHP.png" alt="Php">
            </li>
        </ul>
    </section>
<?php get_footer(); ?>