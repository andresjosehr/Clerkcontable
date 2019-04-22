<?php 
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ClerkContable</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:700,300,400">        
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/elegant-font/code/style.css">
        <link rel="stylesheet" href="assets/css/animate.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/media-queries.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
    
        <!-- Loader -->
    	<div class="loader">
    		<div class="loader-img"></div>
    	</div>
		
		<!-- Top menu -->
		<nav class="navbar navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<img src="logo.png" style="margin-top: 10px">
					
				</div>
				<script>
					$(document).ready(function(){ 
					     $('#contacto')[0].click(function(){
					     }); 
					});
				</script>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li><a class="scroll-link" href="#top-content">Inicio</a></li>
						<li><a href="servicios.php">Servicios</a></li>
						<li><a class="scroll-link" href="#what-we-do">Que hacemos</a></li>
						<!-- <li><a class="scroll-link" href="#pricing-2">Precios</a></li> -->
						<li><a class="scroll-link" href="#epale">Nosotros</a></li>
						<li><a class="scroll-link" href="#contact" id="contacto">Contacto</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
        <!-- Page title -->

        <div class="page-title top-content">
        	<?php if ($_GET['enviado']=="true"): ?>
        		<p style="font-size: 30px; color: white;">¡Gracias por contactarnos! En breves momentos te daremos una respuestas</p>
        	<?php endif ?>
            <div class="page-title-text wow fadeInUp">
            	<img src="Cabecera.png" style="margin-top: 10px">
            	<!-- <h1>Servicios administrativos contables</h1> -->
            	<p>Somos un estudio contable especializado en impuestos, contabilidad y consultoría. Nuestros trabajos incluyen consultoría de sistemas contables: SAP y Tango Gestión y Axoft </p>
            	<div class="page-title-bottom-link">
            		<a class="big-link-1 btn" href="servicios.php">Ver Servicios</a>
            		<a class="big-link-2 btn scroll-link" href="#what-we-do">Realizar una consulta</a>
            	</div>
            </div>
        </div>

		<!-- What we do -->
        <div class="block-3-container section-container what-we-do-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 block-3 section-description wow fadeIn">
	                    <h2>¿Que hacemos?</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
	                    	Somos Contadores Publicos. Te brindamos asesoramiento previsional, tributario y de gestión y sistemas con la excelencia y compromiso que nos caracteriza.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
                	<div class="col-sm-3 block-3-box wow fadeInUp">
	                	<div class="block-3-box-icon">
	                		<span aria-hidden="true" class="icon_pencil"></span>
	                	</div>
	                    <h3>Asesoramiento Impositivo</h3>
	                    <p>Atención a pequeños contribuyentes: monotributistas y régimen simplificado de ingresos brutos.</p>
                    </div>
                    <div class="col-sm-3 block-3-box wow fadeInDown">
	                	<div class="block-3-box-icon">
	                		<span aria-hidden="true" class="icon_cogs"></span>
	                	</div>
	                    <h3>Servicios Contables</h3>
	                    <p>Auditoría de estados contables de acuerdo con normas y prácticas profesionales nacionales e internacionales.</p>
                    </div>
                    <div class="col-sm-3 block-3-box wow fadeInUp">
	                	<div class="block-3-box-icon">
	                		<span aria-hidden="true" class="social_twitter"></span>
	                	</div>
	                    <h3>Asesoriamiento Societario</h3>
	                    <p>Constitución de sociedades, reformas estatutarias y otras inscripciones, cambio de jurisdicción.</p>
                    </div>
                    <div class="col-sm-3 block-3-box wow fadeInDown">
	                	<div class="block-3-box-icon">
	                		<span aria-hidden="true" class="icon_lightbulb"></span>
	                	</div>
	                    <h3>Liquidación de Sueldos.</h3>
	                    <p>Liquidación de sueldos, liquidación de cargas sociales, liquidación de contribuciones sindicales.</p>
                    </div>
	            </div>
	        </div>
        </div>
        
        <!-- Clients -->
       <!--  <div class="clients-container section-container section-container-gray">
        	<div class="container">
        		<div class="row">
        			<div class="col-sm-2 clients-text wow fadeInLeft">
                    	<h3>We've worked with these guys:</h3>
	            	</div>
	            	<div class="col-sm-10 clients wow fadeInUp">
                    	<a href="https://wrapbootstrap.com/theme/trilli-bi-fullscreen-landing-page-WB000X02N?ref=azmind" target="_blank" rel="nofollow">
                    		<img src="assets/img/clients/1.png" alt="" data-at2x="assets/img/clients/1.png">
                    	</a>
                    	<a href="https://wrapbootstrap.com/theme/areta-agency-portfolio-template-WB0L5XF38?ref=azmind" target="_blank" rel="nofollow">
                    		<img src="assets/img/clients/2.png" alt="" data-at2x="assets/img/clients/2.png">
                    	</a>
                    	<a href="https://wrapbootstrap.com/theme/seria-coming-soon-landing-page-WB05D4591?ref=azmind" target="_blank" rel="nofollow">
                    		<img src="assets/img/clients/3.png" alt="" data-at2x="assets/img/clients/3.png">
                    	</a>
                    	<a href="https://wrapbootstrap.com/theme/jesis-responsive-app-landing-page-WB085528N?ref=azmind" target="_blank" rel="nofollow">
                    		<img src="assets/img/clients/4.png" alt="" data-at2x="assets/img/clients/4.png">
                    	</a>
	            	</div>
	            </div>
        	</div>
        </div> -->

		<!-- Block 2 -->
        <div class="block-2-container section-container epale-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-6 block-2-box block-2-left block-2-media wow fadeInLeft">
	            		<div class="block-2-img-container">
	            			<img src="assets/img/about/6.png" alt="" data-at2x="assets/img/about/6.jpg">
	            			<div class="img-container-line line-1"></div>
	            			<div class="img-container-line line-2"></div>
	            			<div class="img-container-line line-3"></div>
	            		</div>
	            	</div>
	            	<div class="col-sm-6 block-2-box block-2-right wow fadeInUp">	            		
	            		<h3>Nosotros</h3>
	            		<p>
	            			Para Clerkcontable el mayor recurso no es otro sino el humano y por ello contamos con una plantilla de profesionales altamente calificados en diversas áreas:
	            		</p>
	            		<ul>
	            			<li>
	            				<span aria-hidden="true" class="icon_check list-icon"></span> Contadores Públicos
	            			</li>
	            			<li>
	            				<span aria-hidden="true" class="icon_check list-icon"></span> Economistas
	            			</li>
	            			<li>
	            				<span aria-hidden="true" class="icon_check list-icon"></span> Auditores
	            			</li>
	            			<li>
	            				<span aria-hidden="true" class="icon_check list-icon"></span>  Asesores Financieros
	            			</li>
	            		</ul>
	            	</div>
	            </div>
	        </div>
        </div>
        
        <!-- Block 2 -->
       <!--  <div class="block-2-container section-container section-container-gray">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-6 block-2-box block-2-left wow fadeInLeft">
	            		<h3>Nuestro Objetivo</h3>
	            		<p>
	            			Apuntamos a objetivos diversos, pero el más importante es ofrecer a nuestros clientes un servicio integral y personalizado sustentado en la relación particular y directa, generadora de confianza plena en la labor que se nos encomienda.		</p>
	            		<ul>
	            			<li>
	            				<span aria-hidden="true" class="icon_check list-icon"></span> Asesores Fiscales y Tributarios
	            			</li>
	            			<li>
	            				<span aria-hidden="true" class="icon_check list-icon"></span> Consultoría Jurídica
	            			</li>
	            			<li>
	            				<span aria-hidden="true" class="icon_check list-icon"></span> Asesores Laborales
	            			</li>
	            			<li>
	            				<span aria-hidden="true" class="icon_check list-icon"></span> Personal Técnico Informático
	            			</li>
	            		</ul>
	            	</div>
	            	<div class="col-sm-6 block-2-box block-2-right block-2-media wow fadeInUp">
	            		<div class="block-2-img-container">
	            			<img src="assets/img/about/7.png" alt="" data-at2x="assets/img/about/7.png">
	            			<div class="img-container-line line-1"></div>
	            			<div class="img-container-line line-2"></div>
	            			<div class="img-container-line line-3"></div>
	            		</div>
	            	</div>
	            </div>
	        </div>
        </div>
         -->
        <!-- Counters -->
<!--         <div class="counters-container section-container section-container-full-bg">
        	<div class="container">
        		<div class="row">
	            	<div class="col-sm-3 counter-box wow fadeInUp">
                    	<h4 data-from="0" data-to="12">0</h4>
                    	<p>Años de experiencia</p>
	            	</div>
	            	<div class="col-sm-3 counter-box wow fadeInDown">
                    	<h4 data-from="0" data-to="274">0</h4>
                    	<p>Proyectos completados</p>
	            	</div>
	            	<div class="col-sm-3 counter-box wow fadeInUp">
                    	<h4 data-from="0" data-to="100">0</h4>
                    	<p>Calidad</p>
	            	</div>
	            	<div class="col-sm-3 counter-box wow fadeInDown">
                    	<h4 data-from="0" data-to="112">0</h4>
                    	<p>Clientes satisfechos</p>
	            	</div>
	            </div>
        	</div>
        </div> -->
        
        <!-- Portfolio -->
       
        
		<!-- Block 2 -->
        <!-- <div class="block-2-container section-container ventaja-container section-container-gray">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-6 block-2-box block-2-left wow fadeInLeft">
	            		<h3>Ventajas de trabajar con nosotros</h3>
	            		<p>
	            			Al contratar los servicios de Contabilidad Actual, usted recibirá beneficios como son:</p>
	            		<ul>
	            			<li>
	            				<span aria-hidden="true" class="icon_plus list-icon"></span> Enfoque Productivo:
	            			</li>
	            			<li>
	            				<span aria-hidden="true" class="icon_plus list-icon"></span> Ahorros en costos de Servicios Profesionales:
	            			</li>
	            			<li>
	            				<span aria-hidden="true" class="icon_plus list-icon"></span> Ahorro en capacitación y actualización profesional:
	            			</li>
	            			<li>
	            				<span aria-hidden="true" class="icon_plus list-icon"></span> Pago de contribuciones justas:
	            			</li>
	            		</ul>
	            	</div>
	            	<div class="col-sm-6 block-2-box block-2-right block-2-media wow fadeInUp">
	            		<div class="video-box">
		                    <div class="embed-responsive embed-responsive-16by9">
		                    	<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/1BDtzfAzWcc" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>


		                    </div>
	                    </div>
	            	</div>
	            </div>
	        </div>
        </div>
 -->
		<!-- Our motto -->
        <div class="our-motto-container section-container section-container-full-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 our-motto section-description wow fadeInLeftBig">
	                    <p>
	                    	Tenemos los mejores servicios de contabilidad del mercado, contactanos ahora
	                    </p> <br>
	                    <a class="big-link-1 btn scroll-link" href="#pricing-2">Contactanos</a>
	                    
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Pricing -->
        <!--<div class="pricing-2-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 pricing-2 section-description wow fadeIn">
	                	<h2>Packages</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
	                    	Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. 
	                    	Mirum est notare quam littera gothica, quam nunc putamus parum claram lorem.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-3 pricing-2-box wow fadeInUp">
	                    <div class="pricing-2-table">
	                    	<h3>Basic</h3>
	                    	<h4>Freelancer</h4>
	                    	<div class="pricing-2-table-divider"><span></span></div>
	                    	<div class="pricing-2-table-price">$<span>12</span>/month</div>
	                    	<div class="pricing-2-table-description">
	                    		<p><span>1000</span> contacts</p>
	                    		<p><span>Normal</span> speed</p>
	                    		<p><span>500</span> emails</p>
	                    		<p><span>300MB</span> storage</p>
							</div>
							<div class="pricing-2-table-button">
								<a class="big-link-1 btn" href="#">Sign up</a>
							</div>
	                    </div>
	                </div>
	                <div class="col-sm-3 pricing-2-box wow fadeInDown">
	                    <div class="pricing-2-table pricing-2-table-best">
	                    	<h3>Ultimate</h3>
	                    	<h4>Best value</h4>
	                    	<div class="pricing-2-table-icon"><span aria-hidden="true" class="icon_like_alt"></span></div>
	                    	<div class="pricing-2-table-price">$<span>35</span>/month</div>
	                    	<div class="pricing-2-table-description">
	                    		<p><span>3000</span> contacts</p>
	                    		<p><span>2x</span> speed</p>
	                    		<p><span>2000</span> emails</p>
	                    		<p><span>500MB</span> storage</p>
							</div>
							<div class="pricing-2-table-button">
								<a class="big-link-1 btn" href="#">Sign up</a>
							</div>
	                    </div>
	                </div>
	                <div class="col-sm-3 pricing-2-box wow fadeInUp">
	                	<div class="pricing-2-table">
	                    	<h3>Silver</h3>
	                    	<h4>Big business</h4>
	                    	<div class="pricing-2-table-divider"><span></span></div>
	                    	<div class="pricing-2-table-price">$<span>75</span>/month</div>
	                    	<div class="pricing-2-table-description">
	                    		<p><span>5000</span> contacts</p>
	                    		<p><span>4x</span> speed</p>
	                    		<p><span>4000</span> emails</p>
	                    		<p><span>900MB</span> storage</p>
							</div>
							<div class="pricing-2-table-button">
								<a class="big-link-1 btn" href="#">Sign up</a>
							</div>
	                    </div>
	                </div>
	                <div class="col-sm-3 pricing-2-box wow fadeInDown">
	                	<div class="pricing-2-table">
	                    	<h3>Platinum</h3>
	                    	<h4>Bigger business</h4>
	                    	<div class="pricing-2-table-divider"><span></span></div>
	                    	<div class="pricing-2-table-price">$<span>120</span>/month</div>
	                    	<div class="pricing-2-table-description">
	                    		<p><span>7000</span> contacts</p>
	                    		<p><span>6x</span> speed</p>
	                    		<p><span>8000</span> emails</p>
	                    		<p><span>2GB</span> storage</p>
							</div>
							<div class="pricing-2-table-button">
								<a class="big-link-1 btn" href="#">Sign up</a>
							</div>
	                    </div>
	                </div>
	            </div>
	        </div>
        </div> -->

        <!-- Testimonials -->
        <div class="testimonials-container section-container section-container-gray">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-8 testimonials section-description wow fadeInLeft">
	                    <h3>Nuestros clientes</h3>
	                    <div class="testimonial-active"></div>
	                    <div class="testimonial-single">
	                    	<p>
	                    		Nuestra amplia experiencia en el mercado ha forjado testimonio de clientes satisfechos con los que no solo tenemos una relacion laboral, sino de amistad <br>
	                    		Nuestro lema "el cliente siempre tiene la razon" ha caracterizado el modelo de nuestro trabajo, haciendolo mas confiable para nuestros clientes y para nosotros mismos. Nuestra alta experiencia combinada con nuestra capacidad de resolver tus necesidad, te garantiza un servicio en el solucionaras todos tus problemas 
	                    		<br>
	                    		<a href=""></a>
	                    	</p>
	                    	<div class="testimonial-single-image">
	                    		<img src="assets/img/testimonials/1.jpg" alt="" data-at2x="assets/img/testimonials/1.jpg">
	                    	</div>
	                    </div>
	                    <!-- <div class="testimonial-single">
	                    	<p>
	                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
	                    		ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
	                    		incididunt ut labore et.
	                    		<br>
	                    		<a href="">Jane Jonsson, blog.jane.com</a>
	                    	</p>
	                    	<div class="testimonial-single-image">
	                    		<img src="assets/img/testimonials/2.jpg" alt="" data-at2x="assets/img/testimonials/2.jpg">
	                    	</div>
	                    </div>
	                    <div class="testimonial-single">
	                    	<p>
	                    		Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
	                    		lobortis nisl ut aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, 
	                    		quis nostrud exerci tation ullamcorper suscipit lobortis nisl.
	                    		<br>
	                    		<a href="">John Doe, johndoe.com</a>
	                    	</p>
	                    	<div class="testimonial-single-image">
	                    		<img src="assets/img/testimonials/3.jpg" alt="" data-at2x="assets/img/testimonials/3.jpg">
	                    	</div>
	                    </div>
	                    <div class="testimonial-single">
	                    	<p>
	                    		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt 
	                    		ut labore et. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor 
	                    		incididunt ut labore et.
	                    		<br>
	                    		<a href="">Jane Jonsson, blog.jane.com</a>
	                    	</p>
	                    	<div class="testimonial-single-image">
	                    		<img src="assets/img/testimonials/4.jpg" alt="" data-at2x="assets/img/testimonials/4.jpg">
	                    	</div>
	                    </div> -->
	                </div>
	            </div>
	            <div class="testimonials-icon-container">
            		<span aria-hidden="true" class="icon_chat"></span>
            	</div>
	        </div>
        </div>
        
        <!-- Call to action -->
        <!--<div class="call-to-action-container section-container section-container-full-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
	                    <p>
	                    	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
	                    	labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
                    <div class="col-sm-12">
                        <div class="section-bottom-link wow fadeInUp">
                        	<a class="big-link-1 btn scroll-link" href="#contact">Contact us now!</a>
                        </div>
                    </div>
                </div>
	        </div>
        </div>-->
        
        <!-- About us -->
<!--         <div class="about-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 about section-description wow fadeIn">
	                    <h2>¿Aun dudas?</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
	                    	En función del punto de vista desde el que se mire, la contabilidad de tu empresa puede ser un medio o un fin. <br>
	                    	Sin embargo, es muy habitual estar pendiente de las facturas, contabilizarlas para las declaraciones trimestrales y olvidar que en la contabilidad hay más datos que esos.
	                    </p>
	                </div>
	            </div>
	        </div>
        </div> -->
        
        <!-- Block 2 (team member) -->
<!--         <div class="block-2-container section-container about-block-2-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-4 block-2-box block-2-left block-2-media wow fadeInLeft">
	            		<div class="block-2-img-container">
	            			<img src="assets/img/about/8.png" alt="" data-at2x="assets/img/about/8.png">
	            			<div class="img-container-line line-1"></div>
	            			<div class="img-container-line line-2"></div>
	            			<div class="img-container-line line-3"></div>
	            		</div>
	            	</div>
	            	<div class="col-sm-8 block-2-box block-2-right wow fadeInUp">
	            		<h3>Asesoría Contable</h3>
	            		<p>
	            			Trabajamos organizada y eficientemente todas sus Operaciones Contables incluyendo los Libros Oficiales.
	            		</p>
	            		<p>
	            			Asesoramos a nuestros clientes sobre las obligaciones contables vigentes para el correcto desempeño de su actividad empresarial.
	            		</p><br><br>
	            		<h3>Saber mas de nuestra asesoria</h3>
	            		<div class="about-social">
		                	<a href="#"><i class="fa fa-facebook"></i></a>
		                	<a href="#"><i class="fa fa-dribbble"></i></a>
		                    <a href="#"><i class="fa fa-twitter"></i></a>
		                    <a href="#"><i class="fa fa-pinterest"></i></a>
		                </div>
	            	</div>
	            </div>
	        </div>
        </div> -->
        
        <!-- Block 2 (team member) -->
        <!-- <div class="block-2-container section-container section-container-gray about-block-2-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-8 block-2-box block-2-left wow fadeInLeft">
	            		<h3>Asesoría Fiscal</h3>
	            		<p>
	            			Cuantificamos y tramitamos sus obligaciones tributarias nacionales, estadales y municipales con los Organismos del Estado. Contamos con el mejor Equipo de Gestores debidamente capacitados para identificar y resolver todas las alternativas relacionadas con su empresa.
	            		</p><br><br>
	            		<h3>Saber mas de nuestra asesoria fiscal</h3>
	            		<div class="about-social">
		                	<a href="#"><i class="fa fa-facebook"></i></a>
		                	<a href="#"><i class="fa fa-dribbble"></i></a>
		                    <a href="#"><i class="fa fa-twitter"></i></a>
		                    <a href="#"><i class="fa fa-pinterest"></i></a>
		                </div>
	            	</div>
	            	<div class="col-sm-4 block-2-box block-2-right block-2-media wow fadeInUp">
	            		<div class="block-2-img-container">
	            			<img src="assets/img/about/9.png" alt="" data-at2x="assets/img/about/9.png">
	            			<div class="img-container-line line-1"></div>
	            			<div class="img-container-line line-2"></div>
	            			<div class="img-container-line line-3"></div>
	            		</div>
	            	</div>
	            </div>
	        </div>
        </div> -->
        
        <!-- Block 2 (team member) -->
        <!-- <div class="block-2-container section-container about-block-2-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-4 block-2-box block-2-left block-2-media wow fadeInLeft">
	            		<div class="block-2-img-container">
	            			<img src="assets/img/about/10.png" alt="" data-at2x="assets/img/about/10.png">
	            			<div class="img-container-line line-1"></div>
	            			<div class="img-container-line line-2"></div>
	            			<div class="img-container-line line-3"></div>
	            		</div>
	            	</div>
	            	<div class="col-sm-8 block-2-box block-2-right wow fadeInUp">
	            		<h3>Servicio en Línea</h3>
	            		<p>
	            			Con un solo click, Usted desde cualquier lugar del mundo puede acceder a toda su información financiera y documentos legales con la seguridad que Usted se merece, igualmente podrá hacer sus balances personales y su certificación de ingresos vía internet.
	            		</p><br><br>
	            		<h3>Saber mas de nuestros servicios en linea</h3>
	            		<div class="about-social">
		                	<a href="#"><i class="fa fa-facebook"></i></a>
		                	<a href="#"><i class="fa fa-dribbble"></i></a>
		                    <a href="#"><i class="fa fa-twitter"></i></a>
		                    <a href="#"><i class="fa fa-pinterest"></i></a>
		                </div>
	            	</div>
	            </div>
	        </div>
        </div> -->
 
		<!-- Contact us (block 2) -->
        <div class="block-2-container section-container contact-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 block-2 section-description wow fadeIn">
	                	<h2>Contactanos</h2>
	                	<div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
	                    	Nuestros asesores estaran encantados de atender cualquier consulta que tengas, nos pondremos en contacto contigo inmediatamente despues de que recibamos tu mensaje, estamos esperando por ti!
	                    </p>
	                </div>
	            </div>
	            <form role="form" id="contacto-m" action="assets/contact.php" method="post">
	                    	</form>
	            <div class="row">
	            	<div class="col-sm-4 block-2-box block-2-left contact-form wow fadeInLeft">
	            		<h3>Envianos un correo</h3>

	                    	<div class="form-group">
	                    		<label class="sr-only" for="contact-email">Nombre</label>
	                        	<input type="text" form="contacto-m" name="nombre" placeholder="Nombre" class="contact-email form-control" id="contact-email">
	                        </div>
	                        <div class="form-group">
	                    		<label class="sr-only" for="contact-email">Telefono</label>
	                        	<input type="text" form="contacto-m" name="telefono" placeholder="Telefono" class="contact-email form-control" id="contact-email">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="contact-subject">Correo</label>
	                        	<input type="text" form="contacto-m" name="correo" placeholder="Correo" class="contact-subject form-control" id="contact-subject">
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="contact-message">Mensaje</label>
	                        	<textarea name="mensaje" form="contacto-m" placeholder="Mensaje" class="contact-message form-control" id="contact-message"></textarea>
	                        </div>
	                        <button type="submit" form="contacto-m" name="enviar" class="btn">Enviar</button>
	            	</div>
	            	
	                    
	            	<div class="col-sm-4 block-2-box block-2-right contact-address wow fadeInUp">
	            		<h3>Argentina</h3>
	                    <p><span aria-hidden="true" class="icon_pin"></span>Buenos Aires, Argentina</p>
	                    <p><span aria-hidden="true" class="icon_phone"></span>Telefono : +54 9 11 2392-2623</p>
	                    <p><span aria-hidden="true" class="icon_mail"></span>Email: <a href="">info@clerkcontable.com</a></p>
	            	</div>
	            	<div class="col-sm-4 block-2-box block-2-right contact-address wow fadeInUp">
	            		<h3>Chile</h3>
	                    <p><span aria-hidden="true" class="icon_pin"></span>Santiago, Chile</p>
	                    <p><span aria-hidden="true" class="icon_phone"></span>Telefono : +56 9 8296 9067</p>
	                    <p><span aria-hidden="true" class="icon_mail"></span>Email: <a href="">info@clerkcontable.com</a></p>
	            	</div>
	         <!--    	<div class="col-sm-4 block-2-box block-2-right contact-address wow fadeInUp">
	            		<h3>Ubicanos</h3>
	                    <p><span aria-hidden="true" class="icon_pin"></span>Santiago, Chile </p>
	                    <p><span aria-hidden="true" class="icon_phone"></span>Telefono : +56 9 8296 9067</p>
	                    <p><span aria-hidden="true" class="icon_mail"></span>Email: <a href="">info@clerkcontable.com</a></p>
	            	</div> -->

	            </div>
	            
	            <div class="contact-icon-container">
            		<span aria-hidden="true" class="icon_mail"></span>
            	</div>
	        </div>
        </div>

        <!-- Footer -->
        <footer>
	        <div class="container">
	        	<div class="row">
		        	<div class="col-sm-12">
		        		<div class="scroll-to-top">
		        			<a href="#"><i class="fa fa-chevron-up"></i></a>
		        		</div>
		        	</div>
		        </div>
	            <div class="row">
                    <div class="col-sm-7 footer-copyright">
                    	&copy; Collageweb, todos los derechos reservados.
                    </div>
                    <div class="col-sm-5 footer-social">
                    	<a href="#"><i class="fa fa-facebook"></i></a>
	                	<a href="#"><i class="fa fa-dribbble"></i></a>
	                    <a href="#"><i class="fa fa-twitter"></i></a>
	                    <a href="#"><i class="fa fa-google-plus"></i></a>
	                    <a href="#"><i class="fa fa-pinterest"></i></a>
                    </div>
	            </div>
	        </div>
        </footer>
        

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/waypoints.min.js"></script>
        <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/js/masonry.pkgd.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>
