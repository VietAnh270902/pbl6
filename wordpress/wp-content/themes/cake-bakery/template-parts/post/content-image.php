<?php
/**
 * The template part for displaying post
 * @package Cake Bakery 
 * @subpackage cake_bakery
 * @since 1.0
 */
?>
<?php 
  $archive_year  = get_the_time('Y'); 
  $archive_month = get_the_time('m'); 
  $archive_day   = get_the_time('d'); 
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('inner-service'); ?>>
  <div class="post-wrap mb-4">
    <div class="box-image">
      <?php 
      if(has_post_thumbnail()) {
        the_post_thumbnail(); ?>
        <span class="entry-date"><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>
      <?php }?>
    </div>    
    <div class="post-main p-3 pb-0">
      <h2 class="section-title p-0 mb-0 text-start"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php the_title_attribute(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h2>
      <div class="adminbox py-2">        
        <span class="entry-author me-3 p-0"><i class="fas fa-user me-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
        <span class="entry-comments me-3 p-0"><i class="fas fa-comments me-2"></i><?php comments_number( __('0 Comment', 'cake-bakery'), __('0 Comments', 'cake-bakery'), __('% Comments', 'cake-bakery') ); ?> </span>
        <span class="entry-date me-3 p-0"><i class="far fa-calendar-alt me-2"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>  
      </div>    
      <div class="entry-content">
        <?php the_excerpt();?>
      </div>
      <div class="continue-read mt-3">
        <a href="<?php the_permalink(); ?>"><span><?php esc_html_e('Read More','cake-bakery'); ?></span><span class="screen-reader-text"><?php esc_html_e( 'Read More','cake-bakery' );?></span></a>
      </div>
    </div>
    <div class="adminbox">
      <span class="entry-date"><i class="fas fa-calendar-check me-2"></i><a href="<?php echo esc_url( get_day_link( $archive_year, $archive_month, $archive_day)); ?>"><?php echo esc_html( get_the_date() ); ?><span class="screen-reader-text"><?php echo esc_html( get_the_date() ); ?></span></a></span>        
      <span class="entry-author me-3 p-0"><i class="fas fa-user-plus me-2"></i><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' )) ); ?>"><?php the_author(); ?><span class="screen-reader-text"><?php the_author(); ?></span></a></span>
    </div> 
  </div>
</article>