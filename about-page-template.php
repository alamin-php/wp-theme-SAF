<?php 
/*
* Template Name: About Us
*/
get_header(); 
?>
<body <?php body_class(  ); ?>>
<?php get_template_part( "template-parts/hero-page" ) ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="post">
                    <?php if(have_posts(  )) : ?>
                        <?php while(have_posts(  )) : the_post(  ); ?>
                        <h2 class="post-title"><?php the_title(  ); ?></h2>
                            <?php the_content(  ); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer( ); ?>