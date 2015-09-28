<?php get_header(''); ?>

<?php pk_portada('index'); 
wp_reset_query();
?>
        
        <article id="servicios" data-type="" data-speed="">
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
        <article class="kamila-messenger">
            <div class="row">
                <div class="container-fluid">
                    <div class="col-xs-12 text-center">
                    <h1><strong>¿Por qué preferirnos? </strong></h1>
                    <br/>
            </div>
            <section class="col-xs-3">
                <div class="icono">
                    <img src="<?php bloginfo("template_url");?>/images/compu/compu.svg" alt="Computadora svg" title="" />
                </div>
                <br/>
                <div class="content-sms">
                    <p>Cada día <strong>innovamos</strong> en nuestros <strong>productos y servicios</strong></p>
                </div>
            </section>
            <section class="col-xs-3">
                <div class="icono">
                    <img src="<?php bloginfo("template_url");?>/images/cere/cere.svg" alt="Computadora svg" title="" />
                </div>
                <br/>
                <div class="content-sms">
                    <p>Somos <strong>nerd</strong>, encontramos la <strong>solución a tus problemas</strong></p>
                </div>
            </section>
            <section class="col-xs-3">
                <div class="icono">
                    <img src="<?php bloginfo("template_url");?>/images/interactive/mug.svg" alt="Computadora svg" title="" />
                </div>
                <br/>
                <div class="content-sms">
                    <p>Tómatelo con calma recuerda;<strong> el método garantiza el éxito</strong></p>
                </div>
            </section>
            <section class="col-xs-3">
                <div class="icono">
                    <img src="<?php bloginfo("template_url");?>/images/mundo/mundo.svg" alt="Computadora svg" title="" />
                </div>
                <br/>
                <div class="content-sms">
                    <p>Trabaja con nosotros <strong>la fórmula del éxito </strong>, juntos podemos cambiar <strong> el mundo</strong></p>
                </div>
            </section>
                </div>
            </div>            
        </article>
        <?php $p= query_posts(array('post_type'=>'planes','posts_per_page'=>3));?>
        <?php if(!empty($p)){?>
        <article id="planes" data-type="parallax" data-speed="210">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-line">
                        <h1><strong>PLANES</strong></h1>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 subtitle">
                        <p>Tenemos un plan que se ajusta a ti</p>
                    </div>
                    <?php while(have_posts()){
                        the_post();
                        ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 plan">
                        <header>
                            <h2><?php the_title(); ?></h2>
                            <h3><?php echo get_field('dirigido')?></h3>
                            <?php $n= get_field('nuevo');
                                if(!empty($n)){
                            ?>

                            <span> Nuevo</span>
                            <?php } ?>
                        </header>
                        <section class="price">
                            <p><?php echo get_field('precio')?></p>
                        </section>
                        <section class="caracteristicas">
                        <ul>
                            <li><p><strong><?php echo get_field('publicidad_pk')?></strong> Clic en publicidad</p></li>
                            <li><p><strong><?php echo get_field('facilidad_de_pago')?></strong> Cuotas</p></li>
                            <li><p><strong><?php echo get_field('hosting')?></strong> Hosting</p></li>
                            <li><p><strong><?php echo get_field('dominio')?></strong> Dominio</p></li>
                        </ul>
                        <a href="<?php the_permalink(); ?>" class="btn btn-default">Adquirir Ahora</a>
                        </section>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </article>
        <?php } ?>
        <article id="portafolio">
            <div class="fondo" data-type="" data-speed="">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title">
                        <h1><strong>PORTAFOLIO</strong></h1>
                        <img src="<?php bloginfo('template_url');?>/images/general/liston-home.png" alt="Separador" class="img-responsive">
                        <h2>Experiencia respaldada en nuestros clientes</h2>
                        <h1> Todo es <strong>&iexcl;WEB!</strong></h1>
                    </div>

                </div>
            </div>
            </div>
                <?php $p = query_posts(array('post_type'=>'portafolio','posts_per_page'=>6,'orderby'=>'rand'));?>
                <?php if(!empty($p)){?>
            <div class="container-fluid content-item">
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
            <?php } ?>
        </article>
        <article class="marketing-interno">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <h1><strong>No se puede detener el tiempo</strong></h1>
                        <h3>Dise&ntilde;o limpio, moderno y minimalista. Proyecto Kamila es un nuevo camino a seguir</h3>
                        <img src="<?php bloginfo('template_url');?>/images/general/compu.png" alt="">
                    </div>
                </div>
            </div>
        
        <div class="kamila-messenger">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-8 col-xs-12 col-lg-offset-3 col-md-offset-3 col-sm-offset-2 content-sms">
                        <img src="<?php bloginfo('template_url');?>/images/general/tecnologia.png" alt="">
                        <img src="<?php bloginfo('template_url');?>/images/general/liston-home.png" alt="Separador" class="img-responsive">
                        <p> En la tecnologia no hay dimensiones limitadas <br>
                            La Creatividad es la base de tus sue&ntilde;os</p>
                    </div>
                </div>
            </div>
        </div>
        </article>
        <?php if(!$_SESSION['PantallaAncho'] < 768){  ?> 
        <section class="blog">
            <h1><strong>DESDE EL BLOG</strong></h1>
            <div class="container">
                <div class="row">
                           <?php // Get RSS Feed(s)

include_once( ABSPATH . WPINC . '/feed.php' );

// Get a SimplePie feed object from the specified feed source.
$rss = fetch_feed( 'http://proyectokamila.com/blog/feed' );

$maxitems = 3;

if ( ! is_wp_error( $rss ) ) : // Checks that the object is created correctly

    // Figure out how many total items there are, but limit it to 5. 
    $maxitems = $rss->get_item_quantity( 3 ); 

    // Build an array of all the items, starting with element 0 (first element).
    $rss_items = $rss->get_items( 0, $maxitems );

endif;
$i=0;
?>
    <?php if ( $maxitems == 0 ) : ?>
        
    <?php else : ?>
        <?php // Loop through each feed item and display each item as a hyperlink. ?>
        <?php foreach ( $rss_items as $item ) : ?>

                   <?php 

                   ?> 
            <div class="col-lg-4 col-md-4 col-sm 4 col-xs-12">
                <div class="noticia-blog">
                   <a href="<?php echo esc_url( $item->get_permalink() ); ?>"
                    title="<?php printf( __( 'Publicado %s', 'my-text-domain' ), $item->get_date('j F Y | g:i a') ); ?>"><img src="<?php echo $item->feed->data['child']['']['rss'][0]['child']['']['channel'][0]['child']['']['item'][$i]['child']['']['image'][0]['data']; ?>" alt="$item->get_title()" class="img-blog">
                </a>
              
                <a href="<?php echo esc_url( $item->get_permalink() ); ?>"
                    title="<?php printf( __( 'Posted %s', 'my-text-domain' ), $item->get_date('j F Y | g:i a') ); ?>">
                    <h2><?php echo esc_html( $item->get_title() ); ?></h2>
                </a>
                <p>
                    <?php echo esc_html( $item->get_content() ); ?>
                </p>
                <div class="dates">
                    <span>
                        <img src="<?php bloginfo('template_url');?>/images/home/usuario.png" alt="usuario icon">
                     <?php echo $item->feed->data['child']['']['rss'][0]['child']['']['channel'][0]['child']['']['item'][$i]['child']['http://purl.org/dc/elements/1.1/']['creator'][0]['data']; $i++;?>
                 </span>
                  <span>
                        <img src="<?php bloginfo('template_url');?>/images/home/calendario.png" alt="usuario icon">
                     <?php echo $item->get_date('j F Y'); ?>
                 </span>
                   <span>
                        <img src="<?php bloginfo('template_url');?>/images/home/comentario.png" alt="usuario icon">
                     <a href="<?php echo esc_url( $item->get_permalink() ); ?>" class="rojo"> Leer mas</a>
                 </span>
                </div>
                </div>
            </div>
            <?php ?>
        <?php endforeach; ?>
    <?php endif; ?>
<?php } ?>
            </div>
  
        </section>
      
<?php get_footer(''); ?>