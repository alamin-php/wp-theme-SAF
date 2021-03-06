<?php 
    $saf_layout_class = "col-md-8";
    if( !is_active_sidebar( "sidebar-1" )){
        $saf_layout_class ="col-md-12";
        $saf_text_center = "text-center";
    }
?>
<?php get_header(); ?>
<body <?php body_class(  ); ?>>
<?php get_template_part( "template-parts/hero" ) ?>
<div class="container">
    <div class="row">
        <div class="<?php echo $saf_layout_class; ?>">
        <div class="posts">
    <?php 
        if(have_posts(  )){
            while(have_posts(  )){
                the_post(  );?>
                <div class="post" <?php post_class(  ); ?>>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 <?php echo $saf_text_center ?>">
                                <h2 class="post-title"><?php the_title(  ); ?></h2>
                                <p>
                                <strong><?php the_author(  ); ?></strong><br/>
                                <?php echo get_the_date( "jS M, Y" ); ?>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                            <div class="slider">
                                        <?php 
                                        if(class_exists('Attachments')){
                                            $attachments = new Attachments('slider');
                                            if($attachments->exist()){
                                                while($attachment = $attachments->get()){?>
                                                <div>
                                                    <?php echo $attachments->image('large'); ?>
                                                    <?php echo $attachments->field('title'); ?>
                                                </div>
                                                <?php

                                                }
                                            }
                                        }
                                        ?>
                                    </div>
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
                                <?php the_content(  ); ?>
                                <div class="authorsection my-5">
                                    <div class="row">
                                    <div class="col-md-2 authorimg">
                                        <?php echo get_avatar( get_the_author_meta( "ID")); ?>
                                    </div>
                                    <div class="col-md-10">
                                        <strong><?php echo get_the_author_meta( "display_name" ); ?></strong>
                                        <p><?php echo get_the_author_meta( "description" ); ?></p>
                                    </div>
                                    </div>
                                </div>
                                <div class="post-pag-wrap">
                                <div class="post-pag-container prev">
                                    <?php previous_post_link('<span>Previous</span><h3>%link</h3>', '%title', false);?>
                                </div>                                
                                <div class="post-pag-container next">
                                    <?php next_post_link('<span>Next</span><h3>%link</h3>', '%title', false);?>
                                </div>
                            </div>
                            </div>
                        </div>

                    </div>
                </div>
                <?php
            }
        }
    ?>
</div>
        </div>
        <?php if(is_active_sidebar( "sidebar-1" )): ?>
        <div class="col-md-4">
            <?php 
                if(is_active_sidebar( "sidebar-1" )){
                    dynamic_sidebar( "sidebar-1" );
                }
            ?>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer( ); ?>