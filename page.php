<?php get_header(); ?>
<section id="primary" class="content-area">
    <main id="main" class="site-main full-section">
        <?php 
            while ( have_posts() ) : the_post();          

                the_content(); 

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile;
        ?>

    </main>
</section>

<?php get_footer(); ?>