<?php get_header(''); ?>
<?php pk_portada('portafolio'); ?>
<section class="archive-portafolio content-mision">
		<div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-line">
                     <h1><strong>PORTAFOLIO</strong></h1>
                </div>
                 <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="textual center">
                       <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem</p>
                    </div>
                    <ul class="nav nav-pills portafolio">
					  <li role="presentation" class="active"><a href="#">Home</a></li>
					  <li role="presentation"><a href="#">Profile</a></li>
					  <li role="presentation"><a href="#">Messages</a></li>
					</ul>
                </div>
</section>
<?php
wp_reset_query();
?>
<?php get_footer();?>