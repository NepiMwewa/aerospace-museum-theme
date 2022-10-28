<?php
function debug($data) {
    $output = $data;
    if (is_array($output))
        $output = implode(',', $output);

    echo "<script>console.log('Debug Objects: " . $output . "' );</script>";
}
?>


<?php if ( isset( $attributes['image']) && isset( $attributes['mask']) ) : ?>
    <style>
        .masked-image{
            -webkit-mask-image: url(<?php echo esc_url( $attributes['mask']['url'] ); ?>);
            mask-image: url(<?php echo esc_url( $attributes['mask']['url'] ); ?>);
            filter: blur(<?php echo $attributes['image-blur']; ?>px);
            
        }
        figure{
            filter: 
                drop-shadow(
                    <?php echo $attributes['drop-shadow-x-offset']; ?>px
                    <?php echo $attributes['drop-shadow-y-offset']; ?>px 
                    <?php echo $attributes['drop-shadow-blur']; ?>px
                    <?php echo $attributes['drop-shadow-color']; ?>);
        }
        figcaption{
            display: none;
        }
    </style>
    <figure>
        <img class="masked-image" src="<?php echo esc_url( $attributes['image']['url'] ); ?>" alt="<?php echo esc_attr( $attributes['image']['alt'] ); ?>">
        <figcaption> <?php echo $attributes['image']['caption']; ?> </figcaption>
    </figure>
<?php else: ?>
    <p>Image is required to show this block content.</p>

<?php endif; ?>