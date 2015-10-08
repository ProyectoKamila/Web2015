<?php get_header('');?>
<?php the_post();?>
<span style=""><?php //debug($post->post_name);?></span>
<?php pk_portada($post->post_name);
wp_reset_query();
 ?>
   
        <div class="container">
            <div class="row">
             
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="container-fluid">
                    <div class="row">
                        <?php $icon = get_field('icono_de_caracteristica_1');?>
                        <?php if(!empty($icon)){?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 middle-line">
                            <div class="circle"><img src="<?php echo $icon; ?>" class="icono_servicio" alt="<?php the_title(); ?>"/></div>
                        </div>
                        <?php }?>
                    </div>
                    </div>
                    <a href="#"><h3 class="services-title"><?php the_field('titulo_caracteristica_1'); ?></h3></a>
                    <div class="services-excerpt">
                        <p><?php the_field('contenido_caracteristica_1');?></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="container-fluid">
                    <div class="row">
                        <?php $icon = get_field('icono_de_caracteristica_2');?>
                        <?php if(!empty($icon)){?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 middle-line">
                            <div class="circle"><img src="<?php echo $icon; ?>" class="icono_servicio" alt="<?php the_title(); ?>"/></div>
                        </div>
                        <?php }?>
                    </div>
                    </div>
                    <a href="#"><h3 class="services-title"><?php the_field('titulo_caracteristica_2'); ?></h3></a>
                    <div class="services-excerpt">
                        <p><?php the_field('contenido_caracteristica_2');?></p>
                    </div>
                </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="container-fluid">
                    <div class="row">
                        <?php $icon = get_field('icono_de_caracteristica_3');?>
                        <?php if(!empty($icon)){?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 middle-line">
                            <div class="circle"><img src="<?php echo $icon; ?>" class="icono_servicio" alt="<?php the_title(); ?>"/></div>
                        </div>
                        <?php }?>
                    </div>
                    </div>
                    <a href="#"><h3 class="services-title"><?php the_field('titulo_caracteristica_3'); ?></h3></a>
                    <div class="services-excerpt">
                        <p><?php the_field('contenido_caracteristica_3');?></p>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="container-fluid">
                    <div class="row">
                        <?php $icon = get_field('icono_de_caracteristica_4');?>
                        <?php if(!empty($icon)){?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 middle-line">
                            <div class="circle"><img src="<?php echo $icon; ?>" class="icono_servicio" alt="<?php the_title(); ?>"/></div>
                        </div>
                        <?php }?>
                    </div>
                    </div>
                    <a href="#"><h3 class="services-title"><?php the_field('titulo_caracteristica_4'); ?></h3></a>
                    <div class="services-excerpt">
                        <p><?php the_field('contenido_caracteristica_4');?></p>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="container-fluid">
                    <div class="row">
                        <?php $icon = get_field('icono_de_caracteristica_5');?>
                        <?php if(!empty($icon)){?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 middle-line">
                            <div class="circle"><img src="<?php echo $icon; ?>" class="icono_servicio" alt="<?php the_title(); ?>"/></div>
                        </div>
                        <?php }?>
                    </div>
                    </div>
                    <a href="#"><h3 class="services-title"><?php the_field('titulo_caracteristica_5'); ?></h3></a>
                    <div class="services-excerpt">
                        <p><?php the_field('contenido_caracteristica_5');?></p>
                    </div>
                </div>
                  <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="container-fluid">
                    <div class="row">
                        <?php $icon = get_field('icono_de_caracteristica_6');?>
                        <?php if(!empty($icon)){?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 middle-line">
                            <div class="circle"><img src="<?php echo $icon; ?>" class="icono_servicio" alt="<?php the_title(); ?>"/></div>
                        </div>
                        <?php }?>
                    </div>
                    </div>
                    <a href="#"><h3 class="services-title"><?php the_field('titulo_caracteristica_6'); ?></h3></a>
                    <div class="services-excerpt">
                        <p><?php the_field('contenido_caracteristica_6');?></p>
                    </div>
                </div>
            </div>
        </div>
        
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
<?php get_footer('');?>