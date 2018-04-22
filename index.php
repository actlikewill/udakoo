

<?php get_header(); ?>

<div class="main m-auto">
 

 <section class="top-story">
 <div class="container text-white">

<?php $my_query = new WP_Query('category_name=Featured&posts_per_page=1');
while ($my_query->have_posts() ) : $my_query->the_post();
$do_not_duplicate[] = $post->ID; ?>
                
                <div class="col main-card" style="background-image:url('<?php the_post_thumbnail('post-thumbnail', array('class'=>'img-fluid card-img d-inline')) ?>')>
                
                    <div class="card-img-overlay">                       
                            <h5 class="display-4"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h5>
                    </div>
                </div>
                </a>
<?php endwhile; ?>
</div>

</section>
<hr>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post();
if ( in_array($post->ID, $do_not_duplicate) ) continue; ?>

<h4 class="display-5"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

<small>Written on <?php the_time('F jS, Y'); ?></small><br>
<small>By <?php the_author_posts_link(); ?></small>

<?php endwhile;  ?>

<?php endif; ?>



</div>

<?php get_footer(); ?>


