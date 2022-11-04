<?php
  get_header();
?>

  <div class="page-content">
  
    <?php if(have_posts()) :
      while (have_posts()) :the_post();
        ?><h1 style="display: none;"><?php the_title(); ?></h1><?php
        if(has_post_thumbnail() ):
        ?> <div class="front-page-img"><?php echo get_the_post_thumbnail();?></div>
      <hr> <?php
        endif;
        the_content();

      endwhile;

      else:
        echo '<p>No content found</p>';

      endif;
    ?>
    </div>

<?php
  get_footer();
?>
