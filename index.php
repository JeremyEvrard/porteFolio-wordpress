<?php get_header(); ?>
    <section class="presentation">
        <h1 class="hidden">Ma présentation</h1>
        <img src="images/photo.png" alt="Une photo de jérémy Evrard" class="photo">
        <p class="accroche">J'utilise la technologie, le graphisme et le design pour faire vivre vos idées &hellip;<!--Transformer vos idées en communication visuelle, c'est mon métier Technologie, graphisme et design, ce qu'internet vous offre pour communiquez.--></p><!--Je suis Jérémy Evrard, Webdesigner, webdevelloper et intégrateur.Je fais principalement des projets web, toute fois il m’arrive de m’engager dans divers projets-->
    </section>
    <section class="projets">
        <h1>Mes projets récents</h1>
        <div class="projSlider js-projSlider">
            <div class="conteneur">
                <article>
                    <a href="html/viewProjet.html">
                        <div class="info">
                            <h2>Bibliosquare</h2>
                            <p>Ce projet est une platforme de réportorisation de livre. L’idée était de faire une petite bibliothèque en ligne, elle permet de chercher des livres, mais également des auteurs et des éditeurs et permet de classer par genre. Avec ce projet nous avons fais un modèle laravel.</p>
                        </div>
                        <figure>
                            <img src="images/projet1.jpg" alt="projet Bibliosquare">
                        </figure>
                    </a>
                </article><!--
                --><article>
                    <a href="#">
                        <div class="info">
                            <h2>Casse brique minimaliste</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In minus, excepturi perspiciatis cupiditate, incidunt delectus! Porro omnis voluptate voluptatem blanditiis natus possimus neque dolores doloremque, reprehenderit iste, molestiae ipsam voluptatibus!</p>
                        </div>
                        <figure>
                            <img src="images/projet2.jpg" alt="projet casse brique minimaliste">
                        </figure>
                    </a>
                    
                </article><!--
                --><article>
                    <a href="#">
                        <div class="info">
                            <h2>Le pendu</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae officia, repudiandae fuga iure aliquam hic ullam quidem quisquam laborum molestiae dolore deserunt culpa animi repellendus, illo consequatur voluptatibus ipsa nesciunt.</p>
                        </div>
                        <figure>
                            <img src="images/projet3.jpg" alt="projet pendu">
                        </figure>
                    </a>
                </article>
            </div>
            <!--<button class="prev"><span class="del">projet </span>Précédent</button>
            <button class="next"><span class="del">projet </span>Suivant
            </button>-->
        </div>
        <a href="html/projets.html">Voir plus de projets</a>
    </section>
    <section class="lastDoc">
        <h1>Mes dernières documentations</h1>
        <ul>
            <li>
                <img src="images/sass.png" alt="sass">
            </li><!--
            --><li>
                <img src="images/NodeJS.png" alt="nodeJS">
            </li><!--
            --><li>
                <img src="images/Jquerry.png" alt="Jquerry">
            </li><!--
            --><li>
                <img src="images/PHP.png" alt="Php">
            </li>
        </ul>
    </section>
<?php get_footer(); ?>