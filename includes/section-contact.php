 <?php
// $query = new WP_Query('category' => 'lets-talk');
 $args = array(
    'category_name'=>'lets-talk',
);
query_posts($args);
if(have_posts()):
while (have_posts()) : the_post();
?>
<div class="section greenBackground homeContactSection">
    <div class="contactSectionHead"><?php the_title(); ?></div>
    <div class="contactSectionBody">
        <div><?php the_content(); ?></div>
        <a href="<?php echo get_post_meta( $post->ID, 'lets_talk_link', true ) ?>" class="subBtn">
            Start Here &#10141
        </a>
    </div>
</div>
 <?php
// Reset things, for good measure
endwhile;
endif;
wp_reset_postdata();
?>