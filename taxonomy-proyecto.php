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
            </div>
        </div>
<article id="portafolio">
	
            <div class="container-fluid content-item sin-padding">
                <div class="row">
                
                    <?php while(have_posts()) { ?>
                        <?php the_post();?>
 
                    <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 item">
                        <div class="title-folio">
                          <h4><?php the_title(); ?></h4>
                        </div>
                        <?php $image_url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );?>
                        <a href="<?php the_permalink();?>">
                        <div class="folio">
                            <div class="image" style="background-image: url(<?php echo $image_url; ?>) ;"></div>
                            <div class="cover-image"></div>
                        </div>
                        </a>
                    </div>
                <?php } ?>
                </div>
            </div>
            
</archive>
</section>
<?php
wp_reset_query();
?>
<?php get_footer();?>