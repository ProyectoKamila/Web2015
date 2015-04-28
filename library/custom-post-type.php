<?php 
//Funcion que permite crear los Post Type
function add_custom_post_type($params, $generic = false) {


    if (is_int($params)) {
        global $post_types;
        $params = $post_types[$params];
    }

    if (!is_array($params)) {
        $params = array('type' => $params);
    }

    if ($generic) {
        $params = array_merge($params, array('singular' => 'publicaci&oacute;n',
            'plural' => 'publicaciones',
            'genero' => 'f'));
        if (!isset($params['supports'])) {
            $params['supports'] = array('title', 'editor', 'thumbnail');
        }
    }

    $type = $params['type'];
    $singular = (@$params['singular']) ? $params['singular'] : $type;
    $plural = (@$params['plural']) ? $params['plural'] : $singular . 's';
    $genero = (@$params['genero']) ? $params['genero'] : 'm';
    $supports = (@$params['supports']) ? $params['supports'] : array('title', 'editor', 'thumbnail');
    $menu_name = (@$params['menu_name']) ? $params['menu_name'] : ucfirst($plural);

    $labels = array(
        'name' => _x(ucfirst($plural), 'post type general name'),
        'singular_name' => _x(ucfirst($singular), 'post type singular name'),
        'add_new' => _x('A&ntilde;adir ' . (($genero == 'm') ? 'Nuevo' : 'Nueva'), $singular),
        'add_new_item' => 'A&ntilde;adir ' . (($genero == 'm') ? 'Nuevo' : 'Nueva') . ' ' . ucfirst($singular),
        'edit_item' => 'Editar ' . ucfirst($singular),
        'new_item' => (($genero == 'm') ? 'Nuevo' : 'Nueva') . ' ' . ucfirst($singular),
        'all_items' => (($genero == 'm') ? 'Todos los' : 'Todas las') . ' ' . ucfirst($plural),
        'view_item' => 'Ver ' . ucfirst($singular),
        'search_items' => 'Buscar ' . ucfirst($plural),
        'not_found' => 'No se encontaron ' . $plural,
        'not_found_in_trash' => 'No se encontaron ' . $plural . ' en la papelera',
        'parent_item_colon' => '',
        'menu_name' => $menu_name
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'supports' => $supports
    );
    register_post_type($params['type'], $args); //muestra la barra de la categoria, debe ser el mismo nombre del archivo php
}
//Funcion que permite crear las Categorias de los Post Type

function add_custom_taxonomy($params) {
    if (!is_array($params)) {
        $params = array('name' => $params);
    }
    $name = $params['name'];
    $singular = ($params['singular']) ? $params['singular'] : $name;
    $plural = isset($params['plural']) ? $params['plural'] : $singular . 's';
    $genero = ($params['genero']) ? $params['genero'] : 'm';
    $menu_name = isset($params['menu_name']) ? $params['menu_name'] : ucfirst($plural);

    $labels = array(
        'name' => _x(ucfirst($plural), 'taxonomy general name'),
        'singular_name' => _x(ucfirst($singular), 'taxonomy singular name'),
        'search_items' => __('Buscar ' . $plural),
        'all_items' => (($genero == 'm') ? 'Todos los' : 'Todas las') . ' ' . ucfirst($plural),
        'parent_item' => __('Parent ' . $singular),
        'parent_item_colon' => __('Parent ' . $singular . ':'),
        'edit_item' => 'Editar ' . ucfirst($singular),
        'update_item' => 'Actualizar ' . $singular,
        'add_new_item' => (($genero == 'm') ? 'Nuevo' : 'Nueva') . ' ' . ucfirst($singular),
        'new_item_name' => (($genero == 'm') ? 'Nuevo' : 'Nueva') . ' ' . ucfirst($singular),
        'menu_name' => $menu_name
    );


    if (isset($params['post_type']) && !is_array($params['post_type'])) {
        $post_type = array($params['post_type']);
    } elseif (isset($params['post_type']) && is_array($params['post_type'])) {
        $post_type = $params['post_type'];
    } else {
        $post_type = 'post';
    }

    $hierarchical = ($params['hierarchical']) ? $params['hierarchical'] : false;

    register_taxonomy($name, $post_type, array(
        'hierarchical' => $hierarchical,
        'labels' => $labels,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => array('slug' => $name),
    ));
}
