<?php get_header('');?>
<?php pk_portada('servicios'); 
wp_reset_query();
?>
<section class="archive-servicios">
	<div class="container">
		<div class="row">
			 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-gris">
                     <h1>Nuestros Servicios</h1>
                     <p class="centrado">
                     	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printing and typesetting industry. Lorem Ipsum has been the industry's 
                     </p>
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
<?php $p = query_posts(array('post_type'=>'planes','posts_per_page'=>3));?>
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
                        </th>
                        
                        <th>
                            <img src="" alt="" class="icon-planes">
                        </th>
                        <th>
                            <img src="" alt="" class="icon-planes">
                        </th>
                            <th>
                            <img src="" alt="" class="icon-planes">
                        </th>
                            <th>
                            <img src="" alt="" class="icon-planes">
                        </th>
                            <th>
                            <img src="" alt="" class="icon-planes">
                        </th>
                    <tr class="first">
                        <td><p>Beneficios</p></td>
                        <td><p>Bronce <br/> 18.000Bsf</p></td>
                        <td><p>Plata <br/> 28.000Bsf</p></td>
                        <td><p>Oro <br/> 49.000Bsf</p></td>
                        <td><p>Platinium<br/> 68.000Bsf</p></td>
                        <td><p>Diamante<br/> 98.000Bsf</p></td>
                    </tr>
                   <tr >
                        <td><p>Beneficios</p></td>
                        <td><p>Bronce <br/> 18.000Bsf</p></td>
                        <td><p>Plata <br/> 28.000Bsf</p></td>
                        <td><p>Oro <br/> 49.000Bsf</p></td>
                        <td><p>Platinium<br/> 68.000Bsf</p></td>
                        <td><p>Diamante<br/> 98.000Bsf</p></td>
                    </tr>
                    <tr >
                        <td><p>Beneficios</p></td>
                        <td><p>Bronce <br/> 18.000Bsf</p></td>
                        <td><p>Plata <br/> 28.000Bsf</p></td>
                        <td><p>Oro <br/> 49.000Bsf</p></td>
                        <td><p>Platinium<br/> 68.000Bsf</p></td>
                        <td><p>Diamante<br/> 98.000Bsf</p></td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
</section>
<?php get_footer('');?>