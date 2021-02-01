<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
	<link rel="stylesheet" href="estilos.css">
</head>
<body>
	<header>
		<div class="wrapp">
			<div class="logo">
				<img src="../img/logoNA.png" alt="NetAnalizer">
			</div>
			<nav>
				<ul>
					<li><a href="inicio.php">Inicio</a></li>
					<li><a href="ejemplos.php">Ejemplos</a></li>
					<li><a href="acercade.php">Revistas Informáticas</a></li>
                    <li><a href="contacto.php">Contacto</a></li>
                    
				</ul>
				<ul>
					<li><a style="color:  rgb(9, 123, 158); "
                    href="../php/salir.php">Cerrar Sesión</a></li>
				</ul>


            </nav>
            
            


		</div>
	</header>
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Bienvenido!</h1>
			</div>
 
			<div class="articulo">
				<article>
					<p>Esta es una página web que tiene como propósito ayudarte a encontrar las
                        causas de las fallas y anomalías en una red con Topología CLOSS.
                    </p>
					<br/>
					<p>Encontrarás información de como configurar tu red, artículos científicos,
                        publicaciones de revistas, entre otras.
                    </p>
					<br/>
					<h1 style="color: black;font-family: 'Courier New', Courier, monospace;">
                    Resumen
                    </h1>
                    <p>
                        Existen muchas soluciones para la detección y corrección de fallas, de forma tempranana
                        mientras una red se encuentre en equipamiento activo. Una detección tardía conlleva muchos 
                        problemas y degradación de los servicio que se ofrece así como el incumplimiento de acuerdos
                        de un servicio efectivo. A continucación encontrará un sistema para disminuir fallas en una 
                        red de datos de manera temprana, haciendo uso de una arquitectura de gestion que usa el 
                        protocolo OSPF permitiendo así la correción automatizada de fallas mediante un análisis
                        panorámico de la red empleando un modelo de detección de anomalía basada en grafos. 
                    </p>
                    <br/>
                    
                    <h2 style="color: black;font-family: 'Courier New', Courier, monospace;">
                    Metodología
                        </h2> 
                        <p>
                            Se tiene dos categorías para los algoritmos para detección de fallas; según un patrón de Anomalías
                            y por el comportamiento normal de la red. Si es por anomalía se necesita revisar conceptos previos
                            y de esta forma evitar nuevos tipos de fallas.(Chu 2015).
                            Para el caso por comportamiento normal de red, se crea un perfil y de esta forma almacenar los
                            parámetros de funcionamiento de la red. Entre los algoritmos de detección de cambios se destaca el
                            propuesto por Thottan y Ji. (Roy 2014, Bhuyan 2014). Este algoritmo resulta eficiente para detectar fallas 
                            a nivel de equipos de interconexión, ya que analiza los componentes de la red de forma individual y genera 
                            alarmas, presentando insuficiencias a la hora de evaluar propagación de las anomalías para evaluar el impacto 
                            de las fallas.(Ji 2003, M. Thottan 2010).
                        </p> 
                        <br/>
                    <h3 style="color: black;font-family: 'Courier New', Courier, monospace;">
                    OSPF
                        </h3> 
                            <p>
                                Definición: Protocolo de encaminamiento, basado en estado de enlace, que utiliza el costo de
                            las interfaces del router y usa el algoritmo Dijkstra, para calcular la ruta más corta
                            entre dos nodos, permitiendo la autenticación de actualizaciones de ruteo,
                            máscaras de subred de longitud variable y resumen de rutas.
                        </p> 
                        <br/>
                        <img class="header__img" src="../img/ospf1.png" alt="OSPF Caracteristicas">    
                    
                    <h4 style="color: black;font-family: 'Courier New', Courier, monospace;">
                    Topología Clos
                    </h4> 

                    <p>Las redes de Clos tienen tres etapas: la etapa de ingreso, la etapa intermedia y 
						la etapa de salida. Cada etapa se compone de varios interruptores de barras transversales
						(consulte el diagrama a continuación), a menudo llamados simplemente barras transversales. 
						La red implementa una combinación perfecta de r-way entre etapas. </p>
					<br/>
					<p>Cada llamada que ingresa a un conmutador de barra transversal de entrada se puede enrutar 
						a través de cualquiera de los conmutadores de barra transversal de etapa intermedia disponibles, 
						al conmutador de barra transversal de salida correspondiente. Una barra transversal de etapa 
						intermedia está disponible para una nueva llamada en particular si tanto el enlace que conecta 
						el interruptor de entrada al interruptor de etapa intermedia como el enlace que conecta el 
						interruptor de etapa intermedia al interruptor de salida están libres.</p>
					<br/>
					<img class="header__img" src="../img/Closnetwork.png" alt="Closnetwork">
					<p>Aunque la conmutación electromecánica ha dado paso a tecnologías de conmutación más nuevas, 
						las redes Clos han resurgido en el diseño de conmutadores de alto rendimiento en las estructuras 
						del centro de datos debido a las ganancias de eficiencia que ofrecen. En un contexto moderno, 
						una red Clos proporciona un rendimiento sin bloqueo en una estructura de conmutador Ethernet 
						interconectada sin la necesidad de puertos n-cuadrados.</p>
                    <br/>
                    
                    <h5 style="color: black;font-family: 'Courier New', Courier, monospace;">
                        REFERENCIAS BIBLIOGRÁFICAS
                    </h5> 
                    <p style="color: black;font-family: 'Courier New', Courier, monospace;">
                            -CHU, Q. Z. A. T. (2015). "Structure regularized traffic monitoring model for traffic matrix estimation and anomaly 
                            detection. Control Conference (CCC). Chinese, Hangzhou: 4980-4985.
                            -ROY, Debdutta Barman; CHAKI, Rituparna.(2014) State of the art analysis of network traffic anomaly detection. En 
                            -Applications and Innovations in Mobile Computing (AIMoC). IEEE, p. 186-192.
                            -JI, M. T. A.. (2003). "Anomaly Detection in IP Networks." IEEE Transactions in Signal Processing. 51

                    </p> 

					
				</article>
			</div>
 
			<aside>
				<div class="widget">
					<h3>Articulos Relacionados</h3>
					<ul>
						<li><a href="https://www.cisco.com/c/en/us/support/docs/ip/open-shortest-path-first-ospf/7039-1.html">Guía de diseño OSPF</a></li>
						<li><a href="https://nsrc.org/workshops/2004/CEDIA2/material/Introduccion_OSPF.pdf">Guía OSPF</a></li>
						<li><a href="https://howdoesinternetwork.com/2019/clos-topology">Topología Clos</a></li>
						<li><a href="https://web.stanford.edu/class/ee384y/Handouts/clos_networks.pdf">Introducción a la Topología Clos</a></li>
						
					</ul>
				</div>
			</aside>
		</div>
	</section>
	<footer>
		<div class="wrapp">
			<p>NetAnalizer</p>
		</div>
	</footer>
</body>
</html>