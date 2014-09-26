<?php get_header(); ?>
    <section class="presentation">
        <h1 class="hidden">Ma présentation</h1>
        <img src="<?php echo get_template_directory_uri(); ?>/images/photo.png" alt="Une photo de jérémy Evrard" class="photo">
        <p class="accroche">J'utilise la technologie, le graphisme et le design pour faire vivre vos idées &hellip;<!--Transformer vos idées en communication visuelle, c'est mon métier Technologie, graphisme et design, ce qu'internet vous offre pour communiquez.--></p><!--Je suis Jérémy Evrard, Webdesigner, webdevelloper et intégrateur.Je fais principalement des projets web, toute fois il m’arrive de m’engager dans divers projets-->
    </section>
    <section class="projets">
        <h1>Mes projets récents</h1>
        <div class="projSlider js-projSlider">
        <?php
            $posts = array(
                'post_type' => 'creations',
                'ordy_by' => 'date_du_projet',
                'order' => 'ASC',
                'posts_limit' => '3'
            );
        ?>
        <?php $the_query = new WP_Query($posts) ?>
        <?php if($the_query->have_posts()): ?>
            <div class="conteneur">
        
            <?php while ( $the_query->have_posts() ) : $the_query->the_post();?>
                <article>
                    <a href="<?php the_permalink();?>">
                        <div class="info">
                            <h2><?php the_title(); ?></h2>
                            <p><?php the_field('introduction') ?></p>
                        </div>
                        <figure>
                            <img src="<?php the_field('image_mockup') ?>"> 
                        </figure>
                    </a>
                </article><!--
                -->
            <?php endwhile ?>
        <?php endif ?>
        <?php wp_reset_postdata(); ?>
            </div>
            <!--<button class="prev"><span class="del">projet </span>Précédent</button>
            <button class="next"><span class="del">projet </span>Suivant
            </button>-->
        </div>
        <a href="http://localhost:8888/wordpress/mes-projets/">Voir plus de projets</a>
    </section>
    <section class="lastDoc">
        <h1>Mes dernières documentations</h1>
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