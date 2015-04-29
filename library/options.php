<?php
// Hook for adding admin menus
add_action('admin_menu', 'mt_add_pages');

// action function for above hook
function mt_add_pages() {
    // Add a new submenu under Settings:
//    add_options_page(__('Test Settings','menu-test'), __('Test Settings','menu-test'), 'manage_options', 'testsettings', 'mt_settings_page');

    // Add a new submenu under Tools:
//    add_management_page( __('Test Tools','menu-test'), __('Test Tools','menu-test'), 'manage_options', 'testtools', 'mt_tools_page');

    // Add a new top-level menu (ill-advised):
    add_menu_page(__('Informaci&oacute;n','menu-test'), __('Informaci&oacute;n','menu-test'), 'manage_options', 'configuraciones', 'mt_toplevel_page' );

    // Add a submenu to the custom top-level menu:
//    add_submenu_page('configuraciones', __('Test Sublevel','menu-test'), __('Test Sublevel','menu-test'), 'manage_options', 'sub-page', 'mt_sublevel_page');
//
//    // Add a second submenu to the custom top-level menu:
//    add_submenu_page('configuraciones', __('Test Sublevel 2','menu-test'), __('Test Sublevel 2','menu-test'), 'manage_options', 'sub-page2', 'mt_sublevel_page2');
}
// mt_toplevel_page() displays the page content for the custom Test Toplevel menu
function mt_toplevel_page() {
    //must check that the user has the required capability 
    if (!current_user_can('manage_options')) {
        wp_die(__('Usted no tiene los permisos necesarios para acceder a esta página.'));
    }
    
    // variables for the field and option names 
    $opt_name = 'mt_pkconfig';
    
    //nosotros
//    $nosotros = 'nosotros';
//    $nosotros1 = 'nosotros1';
//    $slogan = 'slogan';
//    $mision = 'mision';
//    $vision = 'vision';
//    $valores = 'valores';
//    
//    $facebook = 'facebook';
//    $twitter = 'twitter';
//    $instagram = 'instagram';
//    
    $data_field_name = 'mt_pkconfig';
    
    // Read in existing option value from database
    $opt_val = get_option($opt_name);

    // See if the user has posted us some information
    // If they did, this hidden field will be set to 'Y'


    if (isset($_POST['submit'])) {
        // Read their posted value
        $opt_val = json_encode($_POST);

        // Save the posted value in the database
        update_option($opt_name, $opt_val);

        //debug($opt_val, false);
        // Put an settings updated message on the screen
        ?>
        <div class="updated"><p><strong><?php _e('settings saved.', 'menu-test'); ?></strong></p></div>
        <?php
    }
     $db = json_decode($opt_val);
//    debug($db->alert, false);
//    
    // Now display the settings editing screen

    echo '<div class="wrap">';

    // header

    echo "<h2>" . __('Informaci&oacute;n de la p&aacute;gina de Nosotros') . "</h2>";

    // settings form
    ?>








 <?php
// debug($_REQUEST, false);
}
function select_pkconfig($opt_name) {
//    mt_pkconfig
//    $opt_name = 'mt_pkconfig';
    $opt_val = get_option($opt_name);
    return $db = json_decode($opt_val);
}