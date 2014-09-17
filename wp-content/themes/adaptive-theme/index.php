<?php get_header(); ?>

    <!-- MAIN CONTENT -->
    <div class="container">
    
        <div class="row">
        
            <div class="span9 article-container-fix">
                
                <div class="articles">
                
                    <?php if ( have_posts() ) : 
                        // start the loop
                        while( have_posts() ) : the_post(); 

                            /*
                             * Include the post format-specific template for the content. If you want to
                             * use this in a child theme, then include a file called called content-___.php
                             * (where ___ is the post format) and that will be used instead.
                             */
                            get_template_part( 'content', get_post_format() );

                        endwhile; 
                    ?>

                        <div class="articles-nav clearfix">
                            
                            <p class="articles-nav-prev"><?php next_posts_link( __('&larr; Older Posts', 'adaptive-framework') ); ?></p>
                            <p class="articles-nav-next"><?php previous_posts_link( __('Newer Posts &rarr;', 'adaptive-framework') ); ?></p>
                            
                        </div> <!-- end articles-nav -->

                    <?php else: ?>

                        <h1><?php _e('No posts were found!', 'adaptive-framework'); ?></h1>

                    <?php endif; ?>
                    
                    
                    
                </div> <!-- end articles -->
                
            </div> <!-- end span9 -->
            
            <aside class="span3 main-sidebar">
                
                <?php get_sidebar(); ?>

            </aside>
            
        </div> <!-- end row -->
        
    </div> <!-- end container -->

<?php get_footer(); ?>
