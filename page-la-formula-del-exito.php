<?php get_header(''); ?>
<div id="wrapper1">
    <ul id="slider1">
        <?php for ($i = 1; $i <= 2; $i++): ?>
            <li><?php pk_portada_landing('formula-del-exito', 1); ?></li>
        <?php endfor; ?>
    </ul>
</div>
<div class="clearfix"></div>
<div class="container-fluid fon1">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1></h1>
            <h5></h5>
            <p></p>
        </div>
        <div class="clearfix"></div>
        <!--            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <img src="<?php bloginfo('template_url'); ?>/images/bombillo.png" class="img-center"/>
                        <h3></h3>
                        <p></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <img src="<?php bloginfo('template_url'); ?>/images/desing.png" class="img-center"/>
                        <h3></h3>
                        <p></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <img src="<?php bloginfo('template_url'); ?>/images/develop.png" class="img-center"/>
                        <h3></h3>
                        <p></p>
                    </div>-->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-0 col-xs-offset-0">
            <img src="<?php bloginfo('template_url'); ?>/images/launch.png" class="img-center"/>
            <h3></h3>
            <p></p>
        </div>
        <div class="col-xs-12">
            <div class="pre-title">
                <h1>Te estabamos esperando</h1>    
                <p>Completa todos los campos y haz click en <strong>Completar Inscripcion</strong></p>
            </div>
            <form action="action" method="POST">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                        <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3"></div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3"></div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3"></div>
            </form>
        </div>
    </div>
</div>
<?php
// pk_portada('index'); 
wp_reset_query();
?>

<?php
get_footer('landing');
?>

<style>
    .anythingSlider-default .forward a {
        background-position: right -189px !important;
    }
    .anythingSlider-default .back a {
        background-position: left -189px !important;
    }
    .anythingSlider-default .arrow a{
        height: 50px !important;
        margin: -20px 0 0 0 !important;
    }
</style>