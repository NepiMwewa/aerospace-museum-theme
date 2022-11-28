
<?php /* Template Name: collection */ ?>
<?php get_header();?>
<div class="index-content page-content">
  <?php 
  
  $args = array( 
    'post_type'               => 'post',
    'category_name'           => '',
    'order'                   => 'ASC',
    'orderby'                 => 'title',
  );
  
  /*$args = array(
    'post_type'              => array('post'), // use any for any kind of post type, custom post type slug for custom post type
    'post_status'            => array('publish'), // Also support: pending, draft, auto-draft, future, private, inherit, trash, any
    'posts_per_page'         => '5', // use -1 for all post
    'order'                  => 'DESC', // Also support: ASC
    'orderby'                => 'date', // Also support: none, rand, id, title, slug, modified, parent, menu_order, comment_count
    'tax_query'              => array(
        'relation' => 'OR', // Use AND for taking result on both condition true
        array(
            'taxonomy'         => 'category', // taxonomy slug
            'terms'            => array(1, 2), // term ids
            'field'            => 'term_id', // Also support: slug, name, term_taxonomy_id
            'operator'         => 'IN', // Also support: AND, NOT IN, EXISTS, NOT EXISTS
            'include_children' => true,
        ),
        array(
            'taxonomy'         => 'custom-category', // taxonomy slug
            'terms'            => array(1, 2), // term ids
            'field'            => 'term_id', // Also support: slug, name, term_taxonomy_id
            'operator'         => 'IN', // Also support: slug, name, term_taxonomy_id
            'include_children' => true,
        ),
    ),
    'meta_query'             => array(
        'relation' => 'OR', // Use AND for taking result on both condition true
        array(
            'key'     => 'meta-1', // any meta key
            'value'   => 'value-1', // value under that meta
            'compare' => 'LIKE', // Also support: =, !=, >, >=, <, <=, NOT LIKE, IN, NOT IN, BETWEEN, NOT BETWEEN, EXISTS, NOT EXISTS, REGEXP, NOT REGEXP, RLIKE
            'type'    => 'CHAR', // Also support: NUMERIC, BINARY, DATE, DATETIME, DECIMAL, SIGNED, UNSIGNED, TIME
        ),
        array(
            'key'     => 'meta-2', // any meta key
            'value'   => 'value-2', // value under that meta
            'compare' => 'LIKE', // Also support: =, !=, >, >=, <, <=, NOT LIKE, IN, NOT IN, BETWEEN, NOT BETWEEN, EXISTS, NOT EXISTS, REGEXP, NOT REGEXP, RLIKE
            'type'    => 'CHAR', // Also support: NUMERIC, BINARY, DATE, DATETIME, DECIMAL, SIGNED, UNSIGNED, TIME
        ),
    ),
);
*/
  $query = new WP_Query( $args );
  if($query->have_posts()){
    include("assets/breadcrumbs.php");
    
    ?> <div class="post-container"> <?php
    while ($query->have_posts()){
      $query->the_post();?>
      <article class="post">

        <section class="img-section">
          <?php if(has_post_thumbnail() ):?>
            <div class="thumbnail">
              <?php echo get_the_post_thumbnail();?>
            </div>
          <?php endif;?>
        </section>

        <section class="text-section">
          <h2><?php the_title();?></h2>
          <?php the_excerpt();?>
        </section>
        <div class="read-more-button">
            <a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">Learn More</a>
            </div>
      </article>
    <?php
    }
    ?> </div> <?php
  }
  else{
    echo '<p>No content found</p>';

  };?>
</div>

<?php get_footer();?>
