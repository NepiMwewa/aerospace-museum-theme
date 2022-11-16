<?php if ( isset( $attributes['images']) ) : ?>
    <figure>
        <img class="carousel" src="<?php echo esc_url( $attributes['images'][1]['url'] ); ?>" alt="<?php echo esc_attr( $attributes['images'][1]['alt'] ); ?>">
        <figcaption> <?php echo $attributes['images'][1]['caption']; ?> </figcaption>
    </figure>

<?php endif; ?>