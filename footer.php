       <?php $db = select_pkconfig('mt_pkconfig'); ?>
<article class="contactanos">
            <div class="container">
                <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-line">
                        <h1><strong>CONT&Aacute;CTANOS</strong></h1>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 subtitle">
                        <?php echo $db->contacto; ?>
<!--                        <p>!Que la duda no te detenga&iexcl;</p>
                        <p>Escribenos  que con gusto te responderemos</p>-->
                    </div>
                    <div class="div-col-md-12 div-col-sm-12 div-col-xs-12 col-lg-12 main">
                        <div class="mapa" id="map-canvas"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cover-map">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-form">
                                    <form action="" method="post">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input class="text margin-top" type="text" name="nombre" placeholder="Nombre" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input class="text margin-top" type="text" name="apellido" placeholder="Apellido">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input class="text" type="text" name="phone" placeholder="Telefono" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input class="text" type="email" name="email" placeholder="Email" required>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <textarea class="text"name="mensaje" id="" placeholder="Mensaje"></textarea>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm5 col-xs-6">
                                            <input type="submit" class="form-enviar" value="Enviar Mensaje" name="send-contact-form">
                                        </div>
                                    </form>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 col-lg-offset-1 contact-dates">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><img src="<?php echo $db->iconou; ?>" alt=""></div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> Ubicaci&oacute;n</div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><?php echo $db->direct; ?></div>
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><img src="<?php echo $db->iconot; ?>" alt=""></div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> Tel&eacute;fono</div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><p><?php echo $db->tlf; ?></p></div>
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><img src="<?php echo $db->iconoh; ?>" alt=""></div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> Horario</div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><p><?php echo $db->horario; ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    
                </div>
            </div>
        </article>
     <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-1 col-md-2 col-sm-12 col-xs-12">
                        <img src="<?php bloginfo('template_url');?>/images/home/pk.png" alt="Proyecto Kamila" class="logo"> 
                    </div>
                    <div class="col-lg-11 col-md-10 col-sm-12 col-xs-12">
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-lg-12 col-md-12 menu-footer">
                                 <ul class="nav nav-pills">
                                     <li role="presentation" ><a href="#">Conócenos</a></li>
                                     <li role="presentation"><a href="#">Productos y Servicios</a></li>
                                     <li role="presentation"><a href="#">Portafolio</a></li>
                                     <li role="presentation"><a href="#">Blog</a></li>
                                     <li role="presentation"><a href="#">Contacto</a></li>
                                </ul>  
                            </div>
                            
                            <div class="col-xs-12 col-sm-12 col-lg-7 col-md-7 copyright">
                                <p class="text-left">&copy; Copyright 2015 ProyectoKamila. Todos los Derechos Reservados. </p>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-lg-5 col-md-5 content-redes" >
                                <a href="<?php echo $db->facebook; ?>" taget="_blank"><div class="redes" id="facebook"></div></a>
                                <a href="<?php echo $db->twitter; ?>" taget="_blank"><div class="redes" id="twitter"></div></a>
                                <a href="<?php echo $db->instagram; ?>" taget="_blank"><div class="redes" id="instagram"></div></a>
                                <a href="<?php echo $db->google; ?>" taget="_blank"><div class="redes" id="google"></div></a>
                                <a href="<?php echo $db->youtube; ?>" taget="_blank"><div class="redes" id="youtube"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <?php wp_footer(); 
                  if (isset($_POST['email'])) {
                //echo"<h1>Pasoo uno !</h1>";
                        if (!empty($_POST['email']) && !empty($_POST['nombre'])) {
                            require_once ABSPATH . WPINC . '/class-phpmailer.php';
                            $mail = new PHPMailer();

                            $mail->AddAddress('ventas@proyectokamila.com');
                            $mail->From = 'ventas@proyectokamila.com';
                            $mail->FromName = 'Solicitud de contacto';
                            $asunto = 'Solicitud de Contacto';
                            $contenido = '<div style="font-color: #000;">';
                            $contenido .= '<h2>Solicitud de Contacto Venezuela.</h2>';
                            $contenido .= '<p>Enviado el ' . date("d/m/Y") . '</p>';
                            $contenido .= '<p>vengo de' . bloginfo('template_url') . '</p>';
                            $contenido .= '<hr />';
                            $contenido .= '<p><strong>Nombre: </strong>' . $_POST['nombre'] . ' ' . $_POST['apellido'] .'</p>';
                            $contenido .= '<p><strong>Email: </strong>' . $_POST['email'] . '</p>';
                            $contenido .= '<p><strong>Telefono: </strong>' . $_POST['phone'] . '</p>';
                            $contenido .= '<p><strong>Mensaje: </strong>' . $_POST['mensaje'] . '</p>';
                            $contenido .= '<hr />';
                            $contenido .= '</div>';

                            $mail->Subject = $asunto;
                            $mail->Body = $contenido;
                            $mail->IsHTML();

                //      add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
                //      $mail = wp_mail($correo, $asunto, $contenido, $headers);

                        if ($mail->send()) {
                            echo $mensaje = '<script type="text/javascript">alert("Su mensaje ha sido enviado con éxito, Gracias por Contactarnos.");</script>';
                            redirect(bloginfo('template_url'));
                        } else {
                            echo $mensaje = '<script type="text/javascript">alert("Error al Enviar.");</script>';
                            redirect(bloginfo('template_url') . '/contacto');
                        }
                    } else {
                        echo $mensaje = '<script type="text/javascript">alert("Faltan campos por llenar.");</script>';
                        redirect(bloginfo('template_url') . '/contacto');
                    }
                    }
        ?>
    </body> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="<?php bloginfo('template_url');?>/scripts/main.js"></script>
    <script src="<?php bloginfo('template_url');?>/scripts/bootstrap.js"></script>
    
</html>