<?php
  get_header();
?>
<div class="page-content single-post">
  <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="post-container">

      <section class="text-section">
        
        <section class="img-section">
          <?php if(has_post_thumbnail() ):?>
            <div class="single-thumbnail">
              <?php echo get_the_post_thumbnail();?>
            </div>
          <?php endif;?>
        </section>

        <h2><?php the_title();?></h2>
        <div class="single-content">
          <?php the_content();?>
        </div>
        <br>

        <div class="post-edit"><?php edit_post_link('Edit'); ?>
        </div>


      </section>
    </article>
    <?php
    endwhile;

    else:
      echo '<p>No content found</p>';

    endif;?>
</div>

<?php
  get_footer();
?>
