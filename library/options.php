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
    add_menu_page(__('Configuraciones','menu-test'), __('Configuraciones','menu-test'), 'manage_options', 'configuraciones', 'mt_toplevel_page' );

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
    $direct = 'direct';
    $iconou = 'iconou';
    $iconot = 'iconot';
    $iconoh = 'iconoh';
    $tlf = 'tlf';
    $horario = 'horario';
    $contacto = 'contacto';
    $portafolio = 'portafolio';
    $servicios = 'servicios';
//    
    $facebook = 'facebook';
    $twitter = 'twitter';
    $instagram = 'instagram';
    $youtube = 'youtube';
    $google = 'google';
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

    echo "<h2>" . __('Configuraci&oacute;n del tema') . "</h2>";

    // settings form
    ?>
        
        <form name="form1" method="post" action="">
        <table class="form-table">
            <tr>
                <th scope="row">
                    <label><?php _e("Facebook:", 'menu-test'); ?></label>
                </th>
                <td>
                    <input type="url" name="<?php echo $facebook; ?>" value="<?php echo $db->facebook; ?>" size="70">
                    <!--<p class="description">Texto informativo que estara bajo os banners</p>-->
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label><?php _e("Twitter:", 'menu-test'); ?></label>
                </th>
                <td>
                    <input type="url" name="<?php echo $twitter; ?>" value="<?php echo $db->twitter; ?>" size="70">
                    <!--<p class="description">Texto informativo que estara bajo os banners</p>-->
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label><?php _e("Instagram:", 'menu-test'); ?></label>
                </th>
                <td>
                    <input type="url" name="<?php echo $instagram; ?>" value="<?php echo $db->instagram; ?>" size="70">
                    <!--<p class="description">Texto informativo que estara bajo os banners</p>-->
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label><?php _e("Google+:", 'menu-test'); ?></label>
                </th>
                <td>
                    <input type="url" name="<?php echo $google; ?>" value="<?php echo $db->google; ?>" size="70">
                    <!--<p class="description">Texto informativo que estara bajo os banners</p>-->
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label><?php _e("You Tube:", 'menu-test'); ?></label>
                </th>
                <td>
                    <input type="url" name="<?php echo $youtube; ?>" value="<?php echo $db->youtube; ?>" size="70">
                    <!--<p class="description">Texto informativo que estara bajo os banners</p>-->
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label><?php _e("Icono", 'menu-test'); ?></label>
                </th>
                <td>
                    <input type="url" name="<?php echo $iconou; ?>" value="<?php echo $db->iconou; ?>" size="70">
                    <!--<p class="description">Texto informativo que estara bajo os banners</p>-->
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label><?php _e("Ubicaci&oacute;n:", 'menu-test'); ?></label>
                </th>
                <td>
                    <div id="poststuff">
                        <div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea">
                            <?php $name_from4 = $direct;//name del editor ?>
                            <?php if($content4!=''){}else{$content4 = $db->direct;}//name del editor ?>
                            <?php $setting_editor4 = array(
                                'wpautop' => false, //false para que agrege los parrafos (<p>) automaticamente al dar salto de linea
                                'media_buttons' => false,// false para desastivar el botton de subir archivo
                                'textarea_name' => $name_from4, //name del texarea
                                'textarea_rows' => get_option('default_post_edit_rows', 6),// este es para el alto por lineas del texarea
                                'teeny' => true,// true para desastivar el more
                                'quicktags' => false,// false para desastivar las pestañas de (Visual/Texto)
                                
                                ); ?>
                            <?php wp_editor($content4, $name_from4, $setting_editor4); ?>
                        </div>
                    </div>
                    <!--<p class="description">Texto informativo que estara bajo os banners</p>-->
                </td>
            </tr>
            </tr>
            <tr>
                <th scope="row">
                    <label><?php _e("Icono", 'menu-test'); ?></label>
                </th>
                <td>
                    <input type="url" name="<?php echo $iconot; ?>" value="<?php echo $db->iconot; ?>" size="70">
                    <!--<p class="description">Texto informativo que estara bajo os banners</p>-->
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label><?php _e("Tel&eacute;fono:", 'menu-test'); ?></label>
                </th>
                <td>
                    <div id="poststuff">
                        <div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea">
                            <?php $name_from3 = $tlf;//name del editor ?>
                            <?php if($content3!=''){}else{$content3 = $db->tlf;}//name del editor ?>
                            <?php $setting_editor3 = array(
                                'wpautop' => false, //false para que agrege los parrafos (<p>) automaticamente al dar salto de linea
                                'media_buttons' => false,// false para desastivar el botton de subir archivo
                                'textarea_name' => $name_from3, //name del texarea
                                'textarea_rows' => get_option('default_post_edit_rows', 6),// este es para el alto por lineas del texarea
                                'teeny' => true,// true para desastivar el more
                                'quicktags' => false,// false para desastivar las pestañas de (Visual/Texto)
                                
                                ); ?>
                            <?php wp_editor($content3, $name_from3, $setting_editor3); ?>
                        </div>
                    </div>
                    <!--<p class="description">Texto informativo que estara bajo os banners</p>-->
                </td>
            </tr>
            </tr>
            <tr>
                <th scope="row">
                    <label><?php _e("Icono", 'menu-test'); ?></label>
                </th>
                <td>
                    <input type="url" name="<?php echo $iconoh; ?>" value="<?php echo $db->iconoh; ?>" size="70">
                    <!--<p class="description">Texto informativo que estara bajo os banners</p>-->
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label><?php _e("Horario:", 'menu-test'); ?></label>
                </th>
                <td>
                    <div id="poststuff">
                        <div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea">
                            <?php $name_from2 = $horario;//name del editor ?>
                            <?php if($content2!=''){}else{$content2 = $db->horario;}//name del editor ?>
                            <?php $setting_editor2 = array(
                                'wpautop' => false, //false para que agrege los parrafos (<p>) automaticamente al dar salto de linea
                                'media_buttons' => false,// false para desastivar el botton de subir archivo
                                'textarea_name' => $name_from2, //name del texarea
                                'textarea_rows' => get_option('default_post_edit_rows', 6),// este es para el alto por lineas del texarea
                                'teeny' => true,// true para desastivar el more
                                'quicktags' => false,// false para desastivar las pestañas de (Visual/Texto)
                                
                                ); ?>
                            <?php wp_editor($content2, $name_from2, $setting_editor2); ?>
                        </div>
                    </div>
                    <!--<p class="description">Texto informativo que estara bajo os banners</p>-->
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label><?php _e("Texto de Sevicios:", 'menu-test'); ?></label>
                </th>
                <td>
                    <div id="poststuff">
                        <div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea">
                            <?php $name_from1 = $servicios;//name del editor ?>
                            <?php if($content1!=''){}else{$content1 = $db->servicios;}//name del editor ?>
                            <?php $setting_editor1 = array(
                                'wpautop' => false, //false para que agrege los parrafos (<p>) automaticamente al dar salto de linea
                                'media_buttons' => false,// false para desastivar el botton de subir archivo
                                'textarea_name' => $name_from1, //name del texarea
                                'textarea_rows' => get_option('default_post_edit_rows', 6),// este es para el alto por lineas del texarea
                                'teeny' => true,// true para desastivar el more
                                'quicktags' => false,// false para desastivar las pestañas de (Visual/Texto)
                                
                                ); ?>
                            <?php wp_editor($content1, $name_from1, $setting_editor1); ?>
                        </div>
                    </div>
                    <!--<p class="description">Texto informativo que estara bajo os banners</p>-->
                </td>
            </tr>
            <tr>
                <th scope="row">
                    <label><?php _e("Texto de Contacto:", 'menu-test'); ?></label>
                </th>
                <td>
                    <div id="poststuff">
                        <div id="<?php echo user_can_richedit() ? 'postdivrich' : 'postdiv'; ?>" class="postarea">
                            <?php $name_from = $contacto;//name del editor ?>
                            <?php if($content!=''){}else{$content = $db->contacto;}//name del editor ?>
                            <?php $setting_editor = array(
                                'wpautop' => false, //false para que agrege los parrafos (<p>) automaticamente al dar salto de linea
                                'media_buttons' => false,// false para desastivar el botton de subir archivo
                                'textarea_name' => $name_from, //name del texarea
                                'textarea_rows' => get_option('default_post_edit_rows', 6),// este es para el alto por lineas del texarea
                                'teeny' => true,// true para desastivar el more
                                'quicktags' => false,// false para desastivar las pestañas de (Visual/Texto)
                                
                                ); ?>
                            <?php wp_editor($content, $name_from, $setting_editor); ?>
                        </div>
                    </div>
<!--                    <textarea name="<?php echo $contacto; ?>" cols="69">
                        <?php echo $db->contacto; ?>
                    </textarea>-->
                    <!--<p class="description">Texto informativo que estara bajo os banners</p>-->
                </td>
            </tr>
        </table>
            <p class="submit">
            <input type="submit" name="submit"class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
        </p>

    </form>
    </div>








 <?php
// debug($_REQUEST, false);
}
function select_pkconfig($opt_name) {
//    mt_pkconfig
//    $opt_name = 'mt_pkconfig';
    $opt_val = get_option($opt_name);
    return $db = json_decode($opt_val);
}