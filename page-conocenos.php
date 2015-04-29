<?php get_header(); ?>
<div class="container-fluid cover"  id="nosotros" data-type="parallax" data-speed="20" >
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 portada" >
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col-lg-offset-1 col-md-offset-1 logo">
                            <img src="<?php bloginfo('template_url');?>/images/general/pk.png" alt="Proyecto Kamila Agencia Web" class="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs menu">
                          <ul class="nav nav-pills">
                            <li role="presentation"><a href="#">Contacto</a></li>
                            <li role="presentation"><a href="#">Blog</a></li>
                            <li role="presentation"><a href="#">Portafolio</a></li>
                            <li role="presentation"><a href="#">Productos y Servicios</a></li>
                             <li role="presentation" ><a href="<?php echo home_url('conocenos');?>">Conócenos</a></li>                          
                        </ul>  
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 titulo">
                            <h1>&iexcl;HOLA&excl; SOMOS <strong>PROYECTO KAMILA</strong></h1>
                            <h2 class="hidden-xs"><strong>Dise&ntilde;amos y desarrollamos</strong> aplicaciones web Impresionantes</h2>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 contenido">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                            </p>
                            <a class="btn btn-default"> Planes de Servicio</a>
                            <nav>
                                <ul class="pager">
                                    <li><a href="#"><</a></li>
                                    <li><a href="#">></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php $mi = query_posts(array('post_type'=>'nosotros', 'categorias'=>'mision' , 'posts_per_page'=>1));?>        
<?php if(!empty($mi)){?>
<?php while(have_posts()){?>
    <section class="content-mision">
        <?php the_post(); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-line">
                     <h1><strong><?php the_title(); ?></strong></h1>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="textual">
                       <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
<?php } ?>
<div class="image-bar" style="background: url('https://scontent-lga.xx.fbcdn.net/hphotos-xat1/v/t1.0-9/1509999_802477163139566_3091797848003757166_n.jpg?oh=f5cd3a8da0fec598d418363afd97227b&oe=55D9339D') top center;">
    <div class="cover" ></div>
</div>
     <div class="kamila-messenger">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 content-sms">
                        <img src="<?php bloginfo('template_url');?>/images/general/tecnologia.png" alt="" class="icono">
                        <img src="<?php bloginfo('template_url');?>/images/general/liston-home.png" alt="Separador" class="img-responsive">
                        <p> En la tecnologia no hay dimensiones limitadas <br>
                            La Creatividad es la base de tus sue&ntilde;os</p>
                    </div>
                </div>
            </div>
        </div>
<?php $mi = query_posts(array('post_type'=>'nosotros', 'categorias'=>'vision' , 'posts_per_page'=>1));?>        
<?php if(!empty($mi)){?>
    <?php while(have_posts()){?>
        <section class="content-mision">
            <?php the_post(); ?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-line">
                     <h1><strong><?php the_title(); ?></strong></h1>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="textual">
                       <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php } ?>
<?php } ?>
<?php $mi = query_posts(array('post_type'=>'nosotros', 'categorias'=>'introduccion' , 'posts_per_page'=>1));?>        
<?php if(!empty($mi)){?>
    <?php while(have_posts()){?>
        <article id="portafolio" class="sangrado-bajo">
            <?php the_post(); ?>
          <div class="fondo" data-type="parallax" data-speed="210">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title">
                                <h1><strong><?php the_title();?></strong></h1>
                                <img src="<?php bloginfo('template_url');?>/images/general/liston-home.png" alt="Separador" class="img-responsive">
                                <h2><?php echo max_charlength(get_the_content(), 253);?></h2>
                                
                            </div>

                        </div>
                    </div>
                    </div>
        </article>
        <?php } ?>
<?php } ?>
<section class="team-grid">
    <div class="container-flui">
        <div class="row">
            <?php 
            $i=0;
            query_posts(array('post_type'=>'nosotros', 'categorias'=>'galeria' , 'posts_per_page'=>-1));
            while(have_posts()) {  the_post();?>
                
            
            <div class="col-lg-2 col-md-2 col-sm-3 col-xs-6">
                <div class="profile">
                    <?php echo get_the_post_thumbnail( $post_id, 'thumbnail', array( 'class' => 'img-responsive' ) ); ?>
            </div>
            <p class="name"><?php the_title(); ?> </p>
            <p class="name"><?php echo get_field('cargo');?></p>
            </div>
            <?php $i++; if($i==6){?>
            <div class="clearfix"></div>
            <?php } ?>

            <?php } ?>
        </div>
    </div>
</section>
<?php get_footer();?>