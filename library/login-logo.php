<?php
//Funcion que permite Cambiar el logo al iniciar sesion

function custom_login_logo() {
    $path = explode('/', get_bloginfo('template_directory'));
    $path[] = 'images';
    $ruta = ABSPATH . implode('/', array_slice($path, count($path) - 4)) . '/';
    if (!(file_exists($ruta . 'login_logo.png'))) {

        if (!is_dir($ruta))
            mkdir($ruta, 0777, true);

        $is_copied = @copy('http://proyectokamila.com/logo_in.png', $ruta . 'login_logo.png');

        if (!$is_copied) {
            $source = file_get_contents('http://proyectokamila.com/logo_in.png');
            $destiny = @fopen($ruta . 'login_logo.png', 'w');
            @fwrite($destiny, $source);
            @fclose($destiny);
        }
    }
    echo '<style type="text/css">h1 a { background-image:url(' . get_bloginfo('template_directory') . '/images/login_logo.png) !important; }</style>';
}