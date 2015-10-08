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
                       <p></p>
                    </div>

                    <?php get_template_part('subcategories');?>
                </div>
            </div>
        </div>
<article id="portafolio">
	   <?php $p = query_posts(array('post_type'=>'portafolio','posts_per_page'=>12,'orderby'=>'rand'));?>
                <?php if(!empty($p)){?>
            <div class="container content-item ">
                <div class="row">
                    <div class="portafolio-item">
                    <?php while(have_posts()) { ?>
                        <?php the_post();?>
 
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 item">
                        <div class="portafolio">
                        <?php $image_url = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) );?>
						<a href="<?php the_permalink();?>">
                        <div class="folio">
                            <div class="image2">
                                <img src="<?php echo $image_url; ?>" class="img-responsive"/>
                            </div>
                            <div class="cover-image2">
                                <div class="title">
                                    <h4><?php the_title();?></h4>
                                    </div>
                                    <hr>
                                    <p>
                                             <?php
                                        $terms = get_the_terms($post->ID, 'proyecto' );
                                            if ($terms && ! is_wp_error($terms)) :
                                            	$term_slugs_arr = array();
                                            	foreach ($terms as $term) {
                                            	    $term_slugs_arr[] = $term->name;
                                            	}
                                            	$terms_slug_str = join( " ", $term_slugs_arr);
                                            endif;
                                            
                                            echo "<strong>" . $terms_slug_str . "</strong>";
                                        ?>
                                    </p>
                                    <a href="<?php the_permalink();?>" class="btn btn-default">Ver más</a>
                            </div>
                            <div class="info-folio">
                                <div class="title">
                                    <h4>
                                        <?php the_title();?></h4>
                                    </div>
                                    <hr>
                                    <p>
                                              <?php
                                        $terms = get_the_terms($post->ID, 'proyecto' );
                                            if ($terms && ! is_wp_error($terms)) :
                                            	$term_slugs_arr = array();
                                            	foreach ($terms as $term) {
                                            	    $term_slugs_arr[] = $term->name;
                                            	}
                                            	$terms_slug_str = join( " ", $term_slugs_arr);
                                            endif;
                                            
                                            echo "<strong>" . $terms_slug_str . "</strong>";
                                        ?>
                                        </p>
                                        <a href="<?php the_permalink();?>" class="btn btn-default">Ver más</a>
                            </div>
                        </div>
                        </a>
                        </div>
                    </div>
                <?php } ?>
                </div>
                <div class="col-xs-12">
                    <nav>
                      <ul class="pager">
                        <li class="previous "><?php previous_posts_link( 'Nuevos' ); ?></li>
                        <li class="next "><?php next_posts_link( 'Antiguos' ); ?></li>

                      </ul>
                    </nav>
                      
                </div>
                </div>
            </div>
            <?php } ?>
          
</archive>
</section>
<?php
wp_reset_query();
?>
<?php get_footer();?>