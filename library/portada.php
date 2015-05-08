<?php function pk_portada($pk_category){
    
    if($pk_category != null){
    ?>
                        <?php
                        query_posts(array('post_type'=>'portada', 'posts_per_page'=>1, 'paged' => $paged,'categoria'=>$pk_category));
                        while(have_posts()){the_post();
                        ?>
<div class="container-fluid cover"  id="" data-type="parallax" data-speed="20" style="background: url('<?php echo get_field("imagen_de_fondo");?>') top center; background-size:cover; background-repeat: no-repeat;" >
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 portada" >
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 col-lg-offset-1 col-md-offset-1 logo">
                            <img src="<?= pk_thumbnail($post_id); ?>" alt="Proyecto Kamila Agencia Web" class="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 hidden-xs menu">
                          <ul class="nav nav-pills">
                             <li role="presentation"><a href="<?php if(get_field("quinto_enlace") != null){echo get_field("quinto_enlace");} ?>"><?php echo get_field("nombre5");?></a></li>
                             <li role="presentation"><a href="<?php if(get_field("cuarto_enlace") != null){echo get_field("cuarto_enlace");} ?>"><?php echo get_field("nombre4");?></a></li>
                             <li role="presentation"><a href="<?php if(get_field("tercer_enlace") != null){echo get_field("tercer_enlace");} ?>"><?php echo get_field("nombre3");?></a></li>
                             <li role="presentation"><a href="<?php if(get_field("segundo_enlace") != null){echo get_field("segundo_enlace");} ?>"><?php echo get_field("nombre2;")?></a></li>
                             <li role="presentation" ><a href="<?php if(get_field("primer_enlace") != null){echo get_field("primer_enlace");} ?>"><?php echo get_field("nombre1");?></a></li>
                        </ul>  
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 titulo">
                            <h1><?= get_field("titulo_primera")?> <strong><?= get_field("titulo_segunda")?></strong></h1>
                            <h2 class="hidden-xs"><strong><?= get_field("sustitulo")?></strong> <?= get_field("sustitulo2")?></h2>
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 col-lg-offset-1 col-md-offset-1 contenido">
                            <?php the_content(); ?>
                            <a href="<?php if(get_field("enlaceb") != null){echo get_field("enlaceb");} ?>" class="btn btn-default"> <?php echo get_field("nombreb");?></a>
                           <nav>
                                <ul class="pager">
                                    <li><?php previous_posts_link('<') ?></li>
                                    <li><?php next_posts_link('>') ?></li>
                                </ul>
                            </nav> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
}
}
}
?>