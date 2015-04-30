<?php get_header('');?>
<div class="container-fluid cover"  id="nosotros" data-type="parallax" data-speed="20" style="background:url(http://ironsummitmedia.github.io/startbootstrap-creative/img/header.jpg) top center no-repeat;">
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
             
        </div>
    </div>   
</section>
<?php get_footer(); ?>