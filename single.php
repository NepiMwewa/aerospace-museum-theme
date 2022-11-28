<?php
  get_header();
?>
<div class="page-content single-post">
  <?php if(have_posts()) : while (have_posts()) : the_post();
      if( has_post_parent()){ ?>
            <div class="bread-crumbs">
            <?php $ancestors = get_post_ancestors(get_the_ID());
              for ($x = count($ancestors) - 1; $x >= 0 ; $x--) {
                ?>  
                  <a href=" <?php echo get_permalink($ancestors[$x]);?>">
                    <?php echo get_the_title($ancestors[$x]);?>
                  </a>
                  <p>></p>
                <?php
              } 
            ?>
            <a> <?php echo get_the_title(); ?></a>
            </div>
          <?php
          } ?>
    <article class="post-container">
        
      <section class="img-section">
        <?php if(has_post_thumbnail() ):?>
          <div class="single-thumbnail">
            <?php echo get_the_post_thumbnail();?>
          </div>
        <?php endif;?>
      </section>
      
      <section class="text-section">
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
