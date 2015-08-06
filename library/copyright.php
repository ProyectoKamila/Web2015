<?php
function left_admin_footer_text_output($text) {
    $text = get_bloginfo();
    return $text;
}

function right_admin_footer_text_output($text) {
    $text = 'Web Desarrollada por <a href="http://www.proyectokamila.com" target="_blank">Proyectokamila.com</a>';
    return $text;
}