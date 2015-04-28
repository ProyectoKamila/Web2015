   <!doctype html>
<html lang="es">
    <head>
          <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href='<?php bloginfo('stylesheet_url'); ?>' rel='stylesheet' type='text/css'> 
        <?php wp_head(); ?>
        <?php
        require_once("widescreen.php");
        //echo "Resolucion de pantalla Ancho:".$_SESSION['PantallaAncho'].'<br>';
        //echo "Resolucion de pantalla Alto.:" . $_SESSION['PantallaAlto'] . '<br>';
        ?>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->        
    </head>
    <body>
   <header id="header-principal" class="principal" data-status="close">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2" >
                    <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 logo" >
                        <img src="<?php bloginfo('template_url');?>/images/general/logo-menu.png" alt="logo"/>
                    </div>
                    </div>
                    <div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
                        <ul class="nav nav-pills">
                             <li role="presentation" ><a href="<?php echo home_url('conocenos');?>">Conócenos</a></li>
                             <li role="presentation"><a href="#">Productos y Servicios</a></li>
                             <li role="presentation"><a href="#">Portafolio</a></li>
                             <li role="presentation"><a href="#">Blog</a></li>
                             <li role="presentation"><a href="#">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div id="switch-head" class="tab">
            <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
        </div>
        