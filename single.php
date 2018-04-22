<?php get_header() ?>


<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

<p><?php the_content(); ?></p>

<p><?php the_post_thumbnail(); ?></p>



<p class="postmetadata">
Posted in <?php the_category(', ') ?> 
<strong>|</strong>
<?php edit_post_link('Edit','','<strong>|</strong>'); ?>  
<?php comments_popup_link('No Comments »', '2 Comment »', '% Comments »'); ?></p>


<?php endwhile;  ?>

<?php endif; ?>


<?php get_footer() ?>