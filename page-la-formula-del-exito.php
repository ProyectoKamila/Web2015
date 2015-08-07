<?php get_header(''); ?>
<div id="wrapper1">
    <ul id="slider1">
        <?php for ($i = 1; $i <= 1; $i++): ?>
            <li><?php pk_portada_landing('la-formula-del-exito', $i); ?></li>
        <?php endfor; ?>
    </ul>
</div>
<div class="clearfix"></div>
<div class="container-fluid fon1">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h1></h1>
            <h5></h5>
            <p></p>
        </div>
        <div class="clearfix"></div>
        <!--            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <img src="<?php bloginfo('template_url'); ?>/images/bombillo.png" class="img-center"/>
                        <h3></h3>
                        <p></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <img src="<?php bloginfo('template_url'); ?>/images/desing.png" class="img-center"/>
                        <h3></h3>
                        <p></p>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <img src="<?php bloginfo('template_url'); ?>/images/develop.png" class="img-center"/>
                        <h3></h3>
                        <p></p>
                    </div>-->
        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 col-lg-offset-4 col-md-offset-4 col-sm-offset-0 col-xs-offset-0">
            <img src="<?php bloginfo('template_url'); ?>/images/launch.png" class="img-center"/>
            <h3></h3>
            <p></p>
        </div>
        <div class="col-xs-12">
            <div class="pre-title">
                <h1>Te estabamos esperando</h1>    
                <p>Completa todos los campos y haz click en <strong>Completar Inscripción</strong></p>
            </div>
            <form action="" method="POST">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                        <input type="text" class="form-control" placeholder="Nombre" aria-describedby="basic-addon1" name="nombre" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                        <input type="text" class="form-control" placeholder="Apellido" aria-describedby="basic-addon1" name="apellido" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="fa fa-user"></span></span>
                        <input type="number" class="form-control" placeholder="edad" aria-describedby="basic-addon1" name="edad" min="18"  required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="fa fa-envelope-o"></span></span>
                        <input type="email" class="form-control" placeholder="Email" aria-describedby="basic-addon1" name="email" required>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="fa fa-phone"></span></span>
                        <input type="phone" class="form-control" placeholder="Telefono" aria-describedby="basic-addon1" name="phone">
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="fa fa-map-o"></span></span>
                        <input type="phone" class="form-control" placeholder="Localidad" aria-describedby="basic-addon1" name="localidad" >
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><span class="fa fa-map-o"></span></span>
                          <select name="fecha" id="" required>
                              <option value="">Seleciona Fecha</option>
                              <option value="18-08">18 de Agosto</option>
                              <option value="19-08">19 de Agosto</option>
                              <option value="25-08">25 de Agosto</option>
                              <option value="26-08">26 de Agosto</option>
                          </select>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                    <div class="input-group send">
                        <span class="input-group-addon" id="basic-addon1"><span class="fa fa-paper-plane"></span></span>
                        <input type="submit" class="form-control" value="Completar Inscripción">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
// pk_portada('index'); 
wp_reset_query();
?>

<?php
get_footer('landing');
?>
 <?php
                  if (isset($_POST['email'])) {
                //echo"<h1>Pasoo uno !</h1>";
                        if (!empty($_POST['email']) && !empty($_POST['nombre'])) {
                            require_once ABSPATH . WPINC . '/class-phpmailer.php';
                            $mail = new PHPMailer();

                            $mail->AddAddress('jose.vivas@proyectokamila.com');
                            $mail->From = 'jose.vivas@proyectokamila.com';
                            $mail->FromName = 'Solicitud de inscripcion CMV';
                            $asunto = 'INSCRITO CMV';
                            $contenido = '<div style="font-color: #000;">';
                            $contenido .= '<h2>Solicitud de CMV.</h2>';
                            $contenido .= '<p>Enviado el ' . date("d/m/Y") . '</p>';
                            $contenido .= '<p>vengo de' . bloginfo('template_url') . '</p>';
                            $contenido .= '<hr />';
                            $contenido .= '<p><strong>Nombre: </strong>' . $_POST['nombre'] . ' ' . $_POST['apellido'] .'</p>';
                            $contenido .= '<p><strong>Email: </strong>' . $_POST['email'] . '</p>';
                            $contenido .= '<p><strong>Telefono: </strong>' . $_POST['phone'] . '</p>';
                            $contenido .= '<p><strong>Edad: </strong>' . $_POST['edad'] . '</p>';
                            $contenido .= '<p><strong>Localidad: </strong>' . $_POST['localidad'] . '</p>';
                            $contenido .= '<p><strong>Fecha: </strong>' . $_POST['fecha'] . '</p>';
                            $contenido .= '<hr />';
                            $contenido .= '</div>';

                            $mail->Subject = $asunto;
                            $mail->Body = $contenido;
                            $mail->IsHTML();

                //      add_filter('wp_mail_content_type', create_function('', 'return "text/html";'));
                //      $mail = wp_mail($correo, $asunto, $contenido, $headers);

                        if ($mail->send()) {
                            echo $mensaje = '<script type="text/javascript">alert("Su mensaje ha sido enviado con éxito, Gracias por Inscribirte.");</script>';
                            
                        } else {
                            echo $mensaje = '<script type="text/javascript">alert("Error al Enviar.");</script>';
                            
                        }
                    } else {
                        echo $mensaje = '<script type="text/javascript">alert("Faltan campos por llenar.");</script>';
                        
                    }
                    }
        ?>
<style>
    .anythingSlider-default .forward a {
        background-position: right -189px !important;
    }
    .anythingSlider-default .back a {
        background-position: left -189px !important;
    }
    .anythingSlider-default .arrow a{
        height: 50px !important;
        margin: -20px 0 0 0 !important;
    }
</style>