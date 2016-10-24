<!DOCTYPE html>
<html lang="es">



    <head>
		<?php
			include_once ("../Base/Head.html");
			include_once ("../Base/Script.html");
		?>
    </head>
    
    <body>
        
        <!-- Start Logo Section -->
    	<?php
			include_once ("../Base/Logo.html");
		?>
        <!-- End Logo Section -->
        
        
        <!-- Start Main Body Section -->
        <div class="mainbody-section text-center">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item blue">
                            <a href="#manual1" data-toggle="modal">
                                <i><img width="60" height="60" src="../images/Manuales/icoinos_web_cristian-15.png"/></i>
                                <p>Personaliza tu Wifi</p>
                            </a>
                        </div>
                        
                        <div class="menu-item green">
                            <a href="#manual2" data-toggle="modal">
                                <i><img width="60" height="60" src="../images/Manuales/icoinos_web_cristian-16.png"/></i>
                                <p>Mejora tu WiFi</p>
                            </a>
                        </div>
                        
                        <div class="menu-item light-red">
                            <a href="#manual3" data-toggle="modal">
                                <i><img width=48 height=48 src="../images/Manuales/icoinos_web_cristian-17.png"/></i>
                                <p>Conecta tu dispositivo Wifi</p>
                            </a>
                        </div>
                        
                    </div>
                    
                    <div class="col-md-6">
                        
                        <!-- Start Carousel Section -->
                        <div class="home-slider">
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="padding-bottom: 30px;">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img src="../images/about-03.jpg" class="img-responsive" alt=""/>
                                    </div>
                                    <div class="item">
                                        <img src="../images/about-02.jpg" class="img-responsive" alt=""/>
                                    </div>
                                    <div class="item">
                                        <img src="../images/about-01.jpg" class="img-responsive" alt=""/>
                                    </div>

                                </div>

                            </div>
                        </div>
                        <!-- Start Carousel Section -->
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="menu-item color responsive">
                                    <a href="#manual5" data-toggle="modal">
                                        <i><img width="48" height="48" src="../images/Manuales/icoinos_web_cristian-19.png"/></i>
                                        <p>Funcionalidades Telefonía</p>
								    </a>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <div class="menu-item light-orange responsive-2">
                                    <a href="#manual4" data-toggle="modal">
                                        <i><img width="48" height="48" src="../images/Manuales/icoinos_web_cristian-18.png"/></i>
                                        <p>Verificaciones Telefonía</p>
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                        
                    </div>
                    
                    <div class="col-md-3">
                        
                        <div class="menu-item light-red">
                            <a href="#manual6" data-toggle="modal">
                                <i><img width="48" height="48" src="../images/Manuales/icoinos_web_cristian-20.png"/></i>
                                <p>Uso de Portal Claro</p>
                            </a>
                        </div>
                        
                        <div class="menu-item color">
                            <a href="#manual7" data-toggle="modal">
                                <i><img width="48" height="48" src="../images/Manuales/icoinos_web_cristian-21.png"/></i>
                                <p>Configuración Controles</p>
                            </a>
                        </div>
                        
                        <div class="menu-item blue">
                            <a href="#manual8" data-toggle="modal">
                                <i><img width="48" height="48" src="../images/Manuales/icoinos_web_cristian-22.png"/></i>
                                <p>Conexiones Decodificadores</p>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- End Main Body Section -->
        
        <!-- Start Copyright Section -->
        <div class="copyright text-center">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div>Desarrollo <a href="javascript:;"> Mejoramiento</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Section -->
        
        
        <!-- Start manual -->
        		<?php
					include_once ("../Manuales/Manual1.html");
					include_once ("../Manuales/Manual2.html");
					include_once ("../Manuales/Manual3.html");
					include_once ("../Manuales/Manual4.html");
					include_once ("../Manuales/Manual5.html");
					include_once ("../Manuales/Manual6.html");
					include_once ("../Manuales/Manual7.html");
					include_once ("../Manuales/Manual8.html");
				?>
        <!-- End manual -->

        
    </body>
    
</html>