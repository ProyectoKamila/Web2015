       <article class="contactanos">
            <div class="container">
                <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 title-line">
                        <h1><strong>CONT&Aacute;CTANOS</strong></h1>
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 subtitle">
                        <p>!Que la duda no te detenga&iexcl;</p>
                        <p>Escribenos  que con gusto te responderemos</p>
                    </div>
                    <div class="div-col-md-12 div-col-sm-12 div-col-xs-12 col-lg-12 main">
                        <div class="mapa" id="map-canvas"></div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 cover-map">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-form">
                                    <form action="">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input class="text margin-top" type="text" name="nombre" placeholder="Nombre" required>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input class="text margin-top" type="text" name="apellido" placeholder="Apellido">
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <input class="text" type="text" name="telefono" placeholder="Telefono" required>
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
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><img src="<?php bloginfo('template_url');?>/images/home/casa.png" alt=""></div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> Ubicaci&oacute;n</div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><p> Avenidad Romulo Gallegos con Calle C conjunto residencial Los Almendros Mezzanina oficina 6 Los Dos Caminos - Venezuela</p></div>
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><img src="<?php bloginfo('template_url');?>/images/home/celu.png" alt=""></div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> Tel&eacute;fono</div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><p>0212-432-10-39</p></div>
                                            <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"><img src="<?php bloginfo('template_url');?>/images/home/horario.png" alt=""></div>
                                            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12"> Horario</div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"><p> Luner a viernes <br> 8:30am a 5:30pm</p></div>
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
                                <a href="" taget="_blank"><div class="redes" id="facebook"></div></a>
                                <a href="" taget="_blank"><div class="redes" id="twitter"></div></a>
                                <a href="" taget="_blank"><div class="redes" id="instagram"></div></a>
                                <a href="" taget="_blank"><div class="redes" id="google"></div></a>
                                <a href="" taget="_blank"><div class="redes" id="youtube"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <?php wp_footer(); ?>
    </body> 
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="<?php bloginfo('template_url');?>/scripts/main.js"></script>
    
</html>