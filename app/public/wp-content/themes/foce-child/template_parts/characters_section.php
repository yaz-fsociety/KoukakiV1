<article id="characters" class="fade-in">
    <h3><span class="slide-up">Les personnages</span></h3>
</article>

<!-- Début du carrousel Swiper -->
<div class="swiper-container">
    <div class="swiper-wrapper">
        <!-- Début de la boucle pour afficher les personnages -->
        <?php
        
        $args = array(
            'post_type' => 'characters',
            'posts_per_page' => -1,
            'meta_key'  => '_main_char_field',
            'orderby'   => 'meta_value_num',
        );
        $characters_query = new WP_Query($args);
        
        while ( $characters_query->have_posts() ) {
            $characters_query->the_post();
        ?>
        <div class="swiper-slide">
            <figure>
                <?php echo get_the_post_thumbnail( get_the_ID(), 'full' ); ?>
                <figcaption>
                    <?php the_title(); ?>
                </figcaption>
            </figure>
        </div>
        <?php
        } // Fin de la boucle
        wp_reset_postdata(); // Reset de la WP_Query
        ?>
    </div>
</div>
