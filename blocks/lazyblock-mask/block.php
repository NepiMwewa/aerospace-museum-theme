<?php if ( isset( $attributes['image']) && isset( $attributes['mask']) ) : ?>
    <style>
        .masked-image-<?php echo $attributes['mask']['title']; ?>{
            -webkit-mask-image: url(<?php echo esc_url( $attributes['mask']['url'] ); ?>);
            mask-image: url(<?php echo esc_url( $attributes['mask']['url'] ); ?>);
            filter: blur(<?php echo $attributes['image-blur']; ?>px);
            -webkit-mask-size: contain;
            mask-size: contain;
            -webkit-mask-repeat: no-repeat;
            mask-repeat: no-repeat;
            -webkit-mask-position: <?php echo $attributes['mask-x-position']?>% <?php echo $attributes['mask-y-position']?>%;
            mask-position: <?php echo $attributes['mask-x-position']?>% <?php echo $attributes['mask-y-position']?>%;
            width: 100%;
            height: 100%;
                  
        }
        .masked-figure-<?php echo $attributes['mask']['title']; ?>{
            filter:
                drop-shadow(-1px -1px 0px #fff)  
                drop-shadow(1px -1px 0px #fff)
                drop-shadow(-1px 1px 0px #fff)
                drop-shadow(1px 1px 0px #fff)
                drop-shadow(
                    <?php echo $attributes['drop-shadow-x-offset']; ?>px
                    <?php echo $attributes['drop-shadow-y-offset']; ?>px 
                    <?php echo $attributes['drop-shadow-blur']; ?>px
                    <?php echo $attributes['drop-shadow-color']; ?>)
                    ;
        }
        figcaption{
            display: none;
        }
    </style>
    <figure class="masked-figure-<?php echo $attributes['mask']['title']; ?>">
        <img class="masked-image-<?php echo $attributes['mask']['title']; ?>" src="<?php echo esc_url( $attributes['image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['image']['alt'] ); ?>">
        <figcaption> <?php echo $attributes['image']['caption']; ?> </figcaption>
    </figure>
<?php else: ?>
    <p>Image is required to show this block content.</p>

<?php endif; ?>