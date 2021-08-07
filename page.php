<?php get_header(); ?>
<body <?php body_class(  ); ?>>
<?php get_template_part( "template-parts/hero" ) ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h4><?php the_title(); ?></h4>
        </div>
    </div>
</div>

<?php get_footer( ); ?>