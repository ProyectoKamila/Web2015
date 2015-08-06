<?php get_header('');?>
<?php pk_portada('servicios'); 
wp_reset_query();
?>
<section class="archive-servicios">
	<div class="container">
		<div class="row">
			 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-gris">
                     <h1>Nuestros Servicios</h1>
                     <?php echo $db->servicios; ?>
<!--                     <p class="centrado">
                     	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printing and typesetting industry. Lorem Ipsum has been the industry's 
                     </p>-->
                </div>
		</div>
	</div>   
        <article id="servicios" data-type="parallax" data-speed="210">
        <div class="container">
            <div class="row">
                <?php $s = query_posts(array('post_type' => 'servicios','posts_per_page'=>6 ));?>
                <?php if(!empty($s)) {?>
                    <?php while(have_posts()) {?>
                    <?php the_post(); ?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="container-fluid">
                    <div class="row">
                        <?php $icon = get_field('icono_de_servicio');?>
                        <?php if(!empty($icon)){?>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 middle-line">
                            <div class="circle"><img src="<?php echo $icon; ?>" class="icono_servicio" alt="<?php the_title(); ?>"/></div>
                        </div>
                        <?php }?>
                    </div>
                    </div>
                    <a href="<?php the_permalink(); ?>"><h3 class="services-title"><?php the_title(); ?></h3></a>
                    <div class="services-excerpt">
                        <p><?php echo max_charlength(get_the_content(), 320);?></p>
                    </div>
                </div>
                    <?php } ?>
                <?php } ?>
            </div>
        </div>
        </article>
        <div class="image-bar fondo-left" style="background: url('<?php bloginfo('template_url');?>/images/bar.jpg') top center;">
    <div class="cover" ></div>
</div>
<<<<<<< HEAD
<?php $p = query_posts(array('post_type'=>'planes','posts_per_page'=>5));?>
=======
<?php $p = query_posts(array('post_type'=>'planes','posts_per_page'=>3));?>
>>>>>>> 6521d9467ae5f892f15c25d2dfa9f33f8e8f64f3
<?php if(!empty($p)){?>
    <article id="planes" data-type="parallax" data-speed="210">
            <div class="container-fluid">
                <div class="row">
                    <?php while(have_posts()) { the_post();?>
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 plan">
                        <header>
                            <h2><?php the_title();?></h2>
                            <h3><?php echo get_field('dirigido');?></h3>
                            <span> Nuevo</span>
                        </header>
                        <section class="price">
                            <p><?php echo get_field('precio');?> Bs</p>
                        </section>
                        <section class="caracteristicas">
                        <ul>
                            <li><p><strong><?php echo get_field('publicidad');?></strong> Clic en publicidad</p></li>
                            <li><p><strong><?php echo get_field('facilidad_de_pago');?></strong> Cuotas</p></li>
                            <li><p><strong><?php echo get_field('Hosting');?></strong> Hosting</p></li>
                            <li><p><strong><?php echo get_field('dominio');?></strong> Dominio</p></li>
                        </ul>
                        <a hred="<?php the_permalink();?>" class="btn btn-default">Adquirir Ahora</a>
                        </section>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </article>
        <?php } ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 tabla">

                    <table class="table table-striped  table-condensed table-responsive">
                        <th>
                            <p>
                            Planes
                        </p>
                        <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>

                        </th>
                        <?php while(have_posts()){ the_post();?>
                        <th>
                            <img src="<?php echo get_field('icono_plan');?>" alt="" class="icon-planes">
                        </th>
                        <?php }?>
                       
                    <tr class="first">
                        <td><p>Beneficios</p></td>
                       <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>
                        <?php while(have_posts()){ the_post();?>
                        <td><p><?php the_title(); ?> <br/> <?php echo get_field('precio');?></p></td>
                        <?php } ?>
                       
                    </tr>
                   <tr >
                        <td><p>Logo</p></td>
                       <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>
                        <?php while(have_posts()){ the_post();?>
                        <td><p><?php the_title(); ?> <br/> <?php echo get_field('logo');?></p></td>
                        <?php } ?>
                       
                    </tr>
                    <tr>
                        <td><p>Galeria</p></td>
                       <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>
                        <?php while(have_posts()){ the_post();?>
                        <td><p><?php the_title(); ?> <br/> <?php echo get_field('galeria');?></p></td>
                        <?php } ?>
                       
                    </tr>
                    <tr>
                        <td><p>Tienda Virtual</p></td>
                       <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>
                        <?php while(have_posts()){ the_post();?>
                        <td><p><?php the_title(); ?> <br/> <?php echo get_field('tienda_virtual');?></p></td>
                        <?php } ?>
                       
                    </tr>
                        <tr>
                        <td><p>Facilidad de pago</p></td>
                       <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>
                        <?php while(have_posts()){ the_post();?>
                        <td><p><?php the_title(); ?> <br/> <?php echo get_field('facilidad_de_pago');?></p></td>
                        <?php } ?>
                       
                    </tr>
                    <tr>
                        <td><p>Autoadministrable</p></td>
                       <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>
                        <?php while(have_posts()){ the_post();?>
                        <td><p><?php the_title(); ?> <br/> <?php echo get_field('autoadministrable');?></p></td>
                        <?php } ?>
                       
                    </tr>
                    <tr>
<<<<<<< HEAD
                        <td><p>Diseño único</p></td>
=======
                        <td><p>Diseño unico</p></td>
>>>>>>> 6521d9467ae5f892f15c25d2dfa9f33f8e8f64f3
                       <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>
                        <?php while(have_posts()){ the_post();?>
                        <td><p><?php the_title(); ?> <br/> <?php echo get_field('diseno_unico');?></p></td>
                        <?php } ?>
                       
                    </tr>
<<<<<<< HEAD
                     <tr>
                        <td><p>Diseño Responsive</p></td>
                       <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>
                        <?php while(have_posts()){ the_post();?>
                        <td><p><?php the_title(); ?> <br/> <?php echo get_field('diseno_responsive');?></p></td>
                        <?php } ?>
                       
                    </tr>
                    
                         <tr>
                        <td><p>Social media</p></td>
                       <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>
                        <?php while(have_posts()){ the_post();?>
                        <td><p><?php the_title(); ?> <br/> <?php echo get_field('social_media');?></p></td>
                        <?php } ?>
                       
                    </tr>
=======
>>>>>>> 6521d9467ae5f892f15c25d2dfa9f33f8e8f64f3
                    <tr>
                        <td><p>Portafolio Proyecto Kamila</p></td>
                       <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>
                        <?php while(have_posts()){ the_post();?>
                        <td><p><?php the_title(); ?> <br/> <?php echo get_field('portafolio_pk');?></p></td>
                        <?php } ?>
                       
                    </tr>
                           <tr>
                        <td><p>Publicidad Proyecto Kamila</p></td>
                       <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>
                        <?php while(have_posts()){ the_post();?>
                        <td><p><?php the_title(); ?> <br/> <?php echo get_field('publicidad_pk');?></p></td>
                        <?php } ?>
                       
                    </tr>
       <tr>
                        <td><p>SEO</p></td>
                       <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>
                        <?php while(have_posts()){ the_post();?>
                        <td><p><?php the_title(); ?> <br/> <?php echo get_field('seo');?></p></td>
                        <?php } ?>
                       
                    </tr>
                           <tr>
                        <td><p>SEM</p></td>
                       <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>
                        <?php while(have_posts()){ the_post();?>
                        <td><p><?php the_title(); ?> <br/> <?php echo get_field('sem');?></p></td>
                        <?php } ?>
                       
                    </tr>
                           <tr>
                        <td><p>Cambios</p></td>
                       <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>
                        <?php while(have_posts()){ the_post();?>
                        <td><p><?php the_title(); ?> <br/> <?php echo get_field('cambios');?></p></td>
                        <?php } ?>
                       
                    </tr>
                           <tr>
                        <td><p>Hosting</p></td>
                       <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>
                        <?php while(have_posts()){ the_post();?>
                        <td><p><?php the_title(); ?> <br/> <?php echo get_field('hosting');?></p></td>
                        <?php } ?>
                       
                    </tr>
                           <tr>
                        <td><p>Correo</p></td>
                       <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>
                        <?php while(have_posts()){ the_post();?>
                        <td><p><?php the_title(); ?> <br/> <?php echo get_field('correo');?></p></td>
                        <?php } ?>
                       
                    </tr>
                           <tr>
                        <td><p>Dominio</p></td>
                       <?php query_posts(array('post_type'=>'planes','posts_per_page'=>5))?>
                        <?php while(have_posts()){ the_post();?>
                        <td><p><?php the_title(); ?> <br/> <?php echo get_field('dominio');?></p></td>
                        <?php } ?>
                       
                    </tr>   
                    </table>
                </div>
            </div>
        </div>
</section>
<?php get_footer('');?>