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
			</nav>
		</div>
	</header>
	
	<section class="main">
		<div class="wrapp">
			<div class="mensaje">
				<h1>Configuraciones</h1>
			</div>
 
			<div class="articulo">
				<article>
					<p>DIAGRAMA DE RED A CONFIGURAR </p>
					<br/>
					<img  src="../img/diagramaospf.png" alt="diagramaospf" height="60">
					<p>La autenticación de texto sin formato se utiliza cuando los dispositivos dentro de un área no
						 admiten la autenticación de MD5 más segura. El autenticación de texto únicamente deja la red
						interna vulnerable a un “ataque de sabueso,” en qué paquetes son capturados por un analizador
						de protocolo y las contraseñas pueden ser leídas. Sin embargo, es útil cuando se realiza la
						reconfiguración OSPF, no por razones de seguridad. Por ejemplo, las contraseñas separadas 
						se pueden utilizar en un más viejo y más nuevo Routers OSPF que comparta una red de broadcast
						común para evitar que él hable el uno al otro. Las contraseñas del autenticación de texto 
						únicamente no tienen que ser lo mismo en un área, sino que deben ser lo mismo entre los vecinos.</p>
					<br/>
					<br><br><br>
					<p>Configuraciones para router 1 </p>
					<br/>
					<img  src="../img/r1.png" alt="r1" >
					<p>Configuraciones para router 2 </p>
					<br/>
					<img  src="../img/r2.png" alt="r2">
					
					<p>Nota: El comando de autenticación de área de la configuración permite la autenticación de todas
						las interfaces del router en un área determinada. También puede usar el comando de autenticación
						de ip ospf en la interfaz con el fin de configurar la autenticación de texto sin formato para la
						interfaz. Este comando puede ser utilizado si se configura un método de autenticación diferente
						o si no se configura algún método de autenticación en el área a la cual pertenece la interfaz. 
						Reemplaza el método de autenticación configurado para el área. Esto es útil si distintas interfaces
						que pertenecen a la misma área necesitan utilizar métodos de autenticación diferentes.</p>
					<br/>
					
				</article>
			</div>
 
			<aside>
				<div class="widget">
					<h3>Documentos Relacionados</h3>
					<ul>
						<li><a href="https://www.ecorfan.org/spain/researchjournals/Desarrollo_Tecnologico/vol3num11/Revista_del_Desarrollo_Tecnol%C3%B3gico_V3_N11_4.pdf">Detección de anomalies en redes de sensores inalámbricas
						</a></li>
						<li><a href="http://sedici.unlp.edu.ar/bitstream/handle/10915/56370/Documento_completo.pdf-PDFA.pdf?sequence=1&isAllowed=y">Detección de anomalías en el tráfico de red</a></li>
						<li><a href="https://ruc.udc.es/dspace/bitstream/handle/2183/25166/F.J.Villar_Detecci%C3%B3n_de_anomal%C3%ADas_de_red_mediante_t%C3%A9cnicas_de_machine_learning_2019.pdf">Detección de anomalías de red mediante
										técnicas de machine learning</a></li>
						<li><a href="https://eprints.ucm.es/id/eprint/16065/">Sistema de deteccíón de anomalías de red basado en el procesamiento de la Carga Útil [Payload]</a></li>
						
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