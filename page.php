<!-- include header -->
<?php get_header(); ?>

        <!-- the loop -->
        <?php while (have_posts()){
            the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
            <p><?php the_time('F jS, Y') ?> by <?php the_author() ?> </p>
            <p><?php the_category(); ?></p>
        <?php } ?>
        <hr>

<!-- include footer -->
<?php get_footer(); ?>