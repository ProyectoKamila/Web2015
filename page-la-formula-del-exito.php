<?php get_header(''); ?>
<div id="wrapper1">
    <ul id="slider1">
        <?php for($i = 1; $i <= 1; $i++): ?>
        <li><?php pk_portada_landing('formula-del-exito', $i); ?></li>
        <?php endfor; ?>
    </ul>
</div>
<div class="clearfix"></div>
<div class="container-fluid">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1></h1>
            <h5></h5>
            <p></p>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="col-lg-3">
                <img src=""/>
                <h3></h3>
                <p></p>
            </div>
            <div class="col-lg-3">
                <img src=""/>
                <h3></h3>
                <p></p>
            </div>
            <div class="col-lg-3">
                <img src=""/>
                <h3></h3>
                <p></p>
            </div>
            <div class="col-lg-3">
                <img src=""/>
                <h3></h3>
                <p></p>
            </div>
        </div>
    </div>
</div>
<?php
// pk_portada('index'); 
wp_reset_query();
?>

<?php
get_footer('landing');
