<?php
//Cambior el logo de inicio de Sesion
add_action('login_head', 'custom_login_logo');
include('library/login-logo.php');
//Funciones para crear post y Caetegory personalizados
add_action('init', 'theme_custom_types');
include('library/custom-post-type.php');
//Texto de desarrollado por y el enlace a web de desarrollo
add_filter('admin_footer_text', 'left_admin_footer_text_output');
add_filter('update_footer', 'right_admin_footer_text_output', 11);
include('library/copyright.php');
//borrar dashboard y mensaje de actualizacion
//add_action('wp_dashboard_setup', 'custom_dashboard_widgets');
include('library/widget-delete.php');
//Debug para las consultas
include('library/debug.php');
//opciones del themplate
include('library/options.php');
//generar las portadas
include('library/portada.php');
//funcion para extraer la url del thumbnail
include('library/imgurl.php');
//funcion para acortar cadenas
include('library/limited-caracter.php');
show_admin_bar( false );
add_theme_support('post-thumbnails');

//Crear Post Personalizados
function theme_custom_types() {

    add_custom_post_type(array(
        'type' => 'nosotros',
        'singular' => 'Nosotro'
    ));
    add_custom_post_type(array(
        'type' => 'planes',
        'singular' => 'plane'
    ));
    
    add_custom_post_type(array(
        'type' => 'servicios',
        'singular' => 'servicio'
    ));
    add_custom_post_type(array(
        'type' => 'portafolio',
        'singular' => 'portafolio'
    ));

    add_custom_post_type(array(
        'type' => 'paginas-web',
        'singular' => 'paginas-web'
    ));
    add_custom_post_type(array(
        'type' => 'plantillas',
        'singular' => 'plantilla'
    ));
    add_custom_post_type(array(
        'type' => 'portada',
        'singular' => 'portada'
    ));

    add_custom_taxonomy(array(
        'name' => 'categoria',
        'singular' => 'categoria',
        'genero' => 'f',
        'post_type' => 'portada',
        'hierarchical' => true
    ));

    add_custom_taxonomy(array(
        'name' => 'categorias',
        'singular' => 'categoria',
        'genero' => 'f',
        'post_type' => 'nosotros',
        'hierarchical' => true
    ));
    add_custom_taxonomy(array(
        'name' => 'proyecto',
        'singular' => 'proyecto',
        'genero' => 'f',
        'post_type' => 'portafolio',
        'hierarchical' => true
    ));
    add_custom_taxonomy(array(
        'name' => 'categoria-plantilla',
        'singular' => 'Plantilla',
        'genero' => 'f',
        'post_type' => 'plantillas',
        'hierarchical' => true
    ));
}

?>