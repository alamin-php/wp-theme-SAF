<?php get_header(); ?>
<body <?php body_class(  ); ?>>
<?php get_template_part( "template-parts/hero" ) ?>
<div class="posts">
    <?php 
        if(have_posts(  )){
            while(have_posts(  )){
                the_post(  );?>
                    <div class="post" <?php post_class(  ); ?>>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="post-title"><?php the_title(  ); ?></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <p>
                        <strong><?php the_author(  ); ?></strong><br/>
                        <?php echo get_the_date( "jS M, Y" ); ?>
                    </p>
                    <?php 
                        $tag_list = get_the_tag_list( '<ul class="list-unstyled tag-list"><li>', '</li><li>', '</li></ul>' );
                        if ( $tag_list && ! is_wp_error( $tag_list ) ) {
                            echo $tag_list;
                        }
                    ?>
                </div>
                <div class="col-md-8">
                    <?php 
                        if(has_post_thumbnail(  )){
                            the_post_thumbnail( "learg", array("class" => "img-fluid") );
                        }else{
                            ?>
                                <p>
                                    <img class="img-fluid" src="<?php echo get_template_directory_uri(  ) ?>/assets/images/default/no_image.png"
                                    alt="Post Title">
                                </p>
                            <?php
                        }
                    ?>
                    <?php the_excerpt(  ); ?>
                </div>
            </div>

        </div>
    </div>
        <?php
            }
        }
    ?>
</div>
<?php get_template_part( "template-parts/posts-pagination"); ?>
<?php get_footer( ); ?>