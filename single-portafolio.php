<?php get_header(''); ?>
<?php pk_portada('portafolio'); ?>
<section class="archive-portafolio content-mision sin-padding">
		<div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-line">
                     <h1><strong>PORTAFOLIO</strong></h1>
                </div>
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="textual center">
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem</p>
                    </div>

                    <?php get_template_part('subcategories');?>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
                       <?php $image_url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );?>
                       <img src="<?php echo $image_url;?>" alt="<?php the_title();?>" class="img-responsive">
                </div>
                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
                    <?php the_content();?>
                    <!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5222322454942501" async="async"></script>
<!-- Go to www.addthis.com/dashboard to customize your tools -->
<div class="addthis_native_toolbox"></div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                       <img src="<?php echo get_field('imagen_1');?>" alt="<?php the_title();?>" class="img-responsive">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <img src="<?php echo get_field('imagen_2');?>" alt="<?php the_title();?>" class="img-responsive">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <img src="<?php echo get_field('imagen_3');?>" alt="<?php the_title();?>" class="img-responsive">
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <img src="<?php echo get_field('imagen_4');?>" alt="<?php the_title();?>" class="img-responsive">
                </div>
            </div>
        </div>
</section>
<?php get_footer();?>