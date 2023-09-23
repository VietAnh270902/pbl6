<?php
/**
 * Template Name: Home Custom Page
 */
?>

<?php get_header(); ?>

<main id="main" role="main">
  <?php do_action( 'cake_bakery_above_slider' ); ?>

  <?php if( get_theme_mod('cake_bakery_slider_hide_show', false) != ''){ ?> 

    <section id="slider" class="m-0 mw-100">
      <div class="container">
       
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel"> 
        <?php $cake_bakery_content_pages = array();
          for ( $count = 1; $count <= 4; $count++ ) {
            $mod = intval( get_theme_mod( 'cake_bakery_slider_page' . $count ));
            if ( 'page-none-selected' != $mod ) {
              $cake_bakery_content_pages[] = $mod;
            }
          }
          if( !empty($cake_bakery_content_pages) ) :
            $args = array(
              'post_type' => 'page',
              'post__in' => $cake_bakery_content_pages,
              'orderby' => 'post__in'
            );
            $query = new WP_Query( $args );
          if ( $query->have_posts() ) :
            $i = 1;
        ?>     
        <div class="carousel-inner" role="listbox">
          <?php  while ( $query->have_posts() ) : $query->the_post(); ?>
            <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>             
              <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="slider-content">
                      <div class="inner_carousel">
                        <h1><?php the_title(); ?></h1>
                        <p>
                          <?php $cake_bakery_excerpt = get_the_excerpt(); echo esc_html( cake_bakery_string_limit_words( $cake_bakery_excerpt,20 ) ); ?>
                        </p>
                        <div class="read-btn">
                          <a class="btn1" href="<?php echo esc_url(get_permalink()); ?>"><span><?php esc_html_e( 'Read More', 'cake-bakery' ); ?></span><span class="screen-reader-text"><?php esc_html_e( 'Contact Us', 'cake-bakery' );?></span></a>
                          <a class="btn2" href="<?php echo esc_html(get_theme_mod('cake_bakery_sliderbtn_link')); ?>"><span><?php esc_html_e( 'Buy Now', 'cake-bakery' ); ?></span><span class="screen-reader-text"><?php esc_html_e( 'Buy Now', 'cake-bakery' );?></span></a>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                  <div class="sliderbg-img">
                      <?php the_post_thumbnail(); ?>
                  </div>
                </div>
              </div>
            </div>
          <?php $i++; endwhile; 
          wp_reset_postdata();?>

        </div>
        <?php else : ?>
          <div class="no-postfound"></div>
        <?php endif;
        endif;?>
        <a class="carousel-control-prev" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev" role="button">
          <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-angle-left"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Previous', 'cake-bakery' );?></span>
        </a>
        <a class="carousel-control-next" data-bs-target="#carouselExampleCaptions" data-bs-slide="next" role="button">
          <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-angle-right"></i></span><span class="screen-reader-text"><?php esc_html_e( 'Next', 'cake-bakery' );?></span>
        </a>
      </div>   
      <div class="clearfix"></div>
    </div>
    </section>
  <?php }?>

  <?php do_action( 'cake_bakery_below_slider' ); ?>
  
  <div class="featured-product-section">
    <div class="container">
    <div class="ribbontitle head_center">
      <?php esc_html_e( 'Popular Products', 'cake-bakery' ); ?>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
      <i></i>
    </div>
    <div class="row">  
      <?php
      if(function_exists('woocommerce_template_loop_add_to_cart') && function_exists('WC')){
        $meta_query   = WC()->query->get_meta_query();
        $tax_query   = WC()->query->get_tax_query();
        $tax_query[] = array(
          'taxonomy' => 'product_visibility',
          'field'    => 'name',
          'terms'    => 'featured',
          'operator' => 'IN',
        );
        $args = array(
          'post_type'   =>  'product',
          'stock'       =>  1,
          'posts_per_page' => 6, 
          'orderby'     =>  'date',
          'order'       =>  'DESC',
          'meta_query'  =>  $meta_query,
          'tax_query'   => $tax_query,
        );
        $loop = new WP_Query( $args );
        if($loop->post_count > 0){
          while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
      <div class="col-lg-4 col-md-4 col-sm-6 product-bx ">  
        <div class="product-grid ">
          <!-- <div class="probg"></div> -->
          <div class="product-image">
            <?php the_post_thumbnail(); ?>
          </div>
          <div class="productcontent-wrap">
            <?php
              $productbutton = get_theme_mod('product_txt', 'Add to cart'); 
            ?>

            <div class="pcontent">
              <a class="add-to-cart" id="id-<?php the_id(); ?>" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">	
                <h3><?php the_title(); ?></h3>
              </a>
              <span class="price"><?php echo wp_kses_post($product->get_price_html()); ?></span>
              <?php if( get_theme_mod('product_button_display','show' ) == 'show') :?>	
              <div class="sec-btn">
                <li class="add-to-cart">
                  <a href="<?php echo esc_url(get_permalink()); ?>" class="more-button"><span></span><?php echo esc_html($productbutton);  ?> <i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
                </li>
              </div>
              <?php endif ?>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div> 
      <?php
        endwhile; 
          }else{ ?>
        <div class="alert alert-warning text-center">
          <strong><?php esc_html_e( 'Sorry, no featured products to show.', 'cake-bakery' ); ?></strong>
        </div>
        <?php
            }
            ?>
        <?php
        
      }?>
    </div> 	
  </div>
  </div>
      

  <?php do_action( 'cake_bakery_below_best_sellers' ); ?>

  <div class="container entry-content py-4">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
  </div>
</main>
<?php get_footer(); ?>