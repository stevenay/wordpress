<?php  
// Template for standard post
?>

<article <?php post_class('clearfix'); ?> id="post-<?php the_ID(); ?>">
                        
    <header>

        <?php 
            // Display the comments link if comments are allowed and the post isn't pwd protected
            if (comments_open() && !post_password_required()) {
                comments_popup_link('0', '1', '%', 'article-meta-comments');
            }
        ?>
        <p class="article-meta-categories"><?php the_category('&nbsp;&nbsp;/&nbsp;&nbsp;'); ?></p>
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <p class="article-meta-extra"><?php the_time(get_option('date_format')); ?>, by <?php the_author_posts_link(); ?></p>
        
    </header>
    
    <?php if ( has_post_thumbnail() ) : ?>

        <figure class="article-preview-image">
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
        </figure>

    <?php endif; ?>
    
    <?php the_content( __('Read more &raquo;', 'adaptive-framework') ); ?>
    
</article>

<hr class="fancy-hr" />