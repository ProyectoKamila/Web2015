<?php get_header('');?>
<?php pk_portada('servicios'); 
wp_reset_query();
?>
        <?php the_post(); ?>
<section class="archive-servicios single-servicios">
    <div class="container">
        <div class="row">
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-gris">
                     <h1> <?php the_title(); ?></h1>
                     <p class="centrado">
                        <?php echo get_field('intro');?>
                     </p>

             </div>
             <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
             <div class="content">
                 <?php the_content(); ?>
             </div>
             <?php $c = get_field('subtitulo');?>
                <?php if(!empty($c)){?>
             <div class="caracteristicas">
               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-line">
                        <h1><strong><?php echo get_field('subtitulo');?></strong></h1>
                  </div>
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                      <?php echo get_field('caracteristicas');?>
                    </div>
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                       <img src="<?php echo get_field('imagen_baja');?>" alt="" class="img-responsive">  
                    </div>
                  </div>
                </div>
             </div>
             <?php } ?>
        </div>
    </div>   
</section>
<?php get_footer(); ?>