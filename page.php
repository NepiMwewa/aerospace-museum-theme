<?php
  get_header();
?>

  <div class="page-content">
      <?php if(have_posts()) :
        while (have_posts()) :the_post();
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
          }

          $childArgs = array(
            'sort_column' => 'menu_order',
            'child_of' => get_the_ID()
          );
          $children = get_pages($childArgs);
          if(count($children) > 1){
            ?> 
            <nav class="upper-sub-menu"><ul> <?php
              
              foreach($children as $child){ ?>

                <li><a href="/<?php echo $child -> post_name; ?>">
                  <?php echo $child -> post_title; ?>
                </a></li>
                <?php
              } ?>
            </ul></nav> <?php
          }

          ?><h1><?php the_title(); ?></h1><?php

          if(has_post_thumbnail() ):
          ?> <div class="page-img"><?php echo get_the_post_thumbnail();?></div><?php
          endif;

          ?> <div class="content-column"><?php the_content();?></div><?php

        endwhile;

        else:
          echo '<p>No content found</p>';

        endif;
      ?>
  </div>


<?php
  get_footer();
?>
