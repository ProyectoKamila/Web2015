<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="<?php bloginfo('template_url');?>/scripts/main.js"></script>
    <script>window.jQuery || document.write('<script src="<?php bloginfo('template_url'); ?>/scripts/AnythingSlider/js/jquery.min.js"><\/script>')</script>
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/scripts/AnythingSlider/css/anythingslider.css">
	<script src="<?php bloginfo('template_url'); ?>/scripts/AnythingSlider/js/jquery.anythingslider.js"></script>
	<script>
	$(function () {
		$('#slider1').anythingSlider({
//			theme : 'metallic',
			expand       : true,
			autoPlay     : true,
                        hashTags     : false,
                        buildArrows  : true,      
                        buildNavigation     : false,
                        buildStartStop      : false 
		});

		
	});
	</script>

    <style>
        #wrapper1 {
    width: 100%;
    height: 100%;
    margin: 0 auto;
}
.portada .menu ul li a{
    font-size: 12px;
}
.col-lg-6.col-md-6.col-sm-6.hidden-xs.menu {
    margin-top: 30px;
}
    </style>
</html>