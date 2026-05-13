<?php
$host = getenv('MYSQLHOST');
$user = getenv('MYSQLUSER');
$pass = getenv('MYSQLPASSWORD');
$db   = getenv('MYSQL_DATABASE');
$port = getenv('MYSQLPORT');

// Esto nos dirá si Railway te está dando los datos o no
if (!$user) {
    die("Error: Railway no está enviando las variables de entorno al código.");
}

$conexion = mysqli_connect($host, $user, $pass, $db, $port);

if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>

<?php

// 1. Consulta para obtener los programas de la tabla
$query = "SELECT * FROM tabla";
$resultado = mysqli_query($conexion, $query); 

// Verificación de seguridad
if (!$resultado) {
    die("Error en la consulta: " . mysqli_error($conexion));
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CBTis No.165</title>
	<link rel="stylesheet" href="estilo-CBTis165.css">
</head>
<body>
	<center>
		<header>
			<h1>Centro de Bachillerato Tecnológico industrial y de servicios No. 165</h1>
			<img src="CBTis165imagen.jpg" alt="CBTis165imagen" width="912">
			<br><br>
		</header>

		<hr><br>

		<nav>
			<a href="#academica">|APOYO ACADÉMICO|</a>
			<a href="#biensalud">|BIENESTAR Y SALUD|</a>
			<a href="#desint">|DESARROLLO INTEGRAL|</a>
			<a href="#emptal">|EMPRENDIMIENTO Y TALENTO|</a>
			<a href="#tabla">|TABLA|</a>
			<a href="#opinion">|OPINIÓN|</a>
			<br><br>
		</nav>
	</center>

	<hr><br>

	<main>
		<section id="academica">
			<h2>Información Académica</h2>
			<h3>SINaTA</h3> <img src="SINATA.jpg" alt="Don Sinaton" width="250">
			<h4>El Programa SINaTA (Sistema Nacional de Tutorías Académicas) brinda acompañamiento integral a estudiantes de nivel superior, combinando apoyo de:</h4>
			<h4>Orientaciones en trayectorias educativas y resolución de dificultades de aprendizaje, hace actividades colaborativas con el Programa Construye T para fortalecer habilidades socioemocionales y seguimiento tutorial que fomenta la motivación, el bienestar y la permanencia escolar.</h4>
			<h3>PRONAFOLE</h3> <img src="FOMENTOLECTURA.jpg" alt="Don Sinaton" width="250">
			<h4>El PRONAFOLE (Programa Nacional de Formación de Líderes Educativos) es un programa dirigido a directivos, supervisores, asesores técnico-pedagógicos y figuras educativas del sistema educativo mexicano. Su propósito es:</h4>
			<h4>Fortalecer competencias de liderazgo y gestión escolar. Profesionalizar a quienes ocupan cargos directivos y de supervisión mediante cursos, diplomados, talleres y especializaciones, desarrollar habilidades para el acompañamiento pedagógico, la planeación estratégica y la toma de decisiones en el ámbito escolar.</h4>
		</section>

		<section id="biensalud">
			<h2>Información de Bienestar y Salud</h2>
			<h3>FOMALASA</h3> <img src="FOMALASA.jpg" alt="Don Sinaton" width="250">
			<h4>Propicia en los jóvenes factores de protección que los induzcan a estilos de vida saludables y los aproxime a los más altos niveles de bienestar, a fin de que culminen la Educación Media Superior, así como actualiza a los responsables del programa en los planteles.</h4>
			<h4>Algunas de las campañas son: Salud Sexual y Reproductiva, Prevención de las Adicciones, Salud Mental, Medicina Preventiva, Educación Ambiental
			<h3>Sexual-Mente</h3> <img src="MENTE.jpg" alt="Sexual-Mente" width="250">
			<h4>Programa de educación integral en sexualidad para adolescentes y jóvenes. Aborda salud sexual, prevención de embarazos, ETS, diversidad sexual y relaciones saludables, promoviendo una visión informada y libre de prejuicios.</h4>
			<h4>Es un programa de educación integral en sexualidad dirigido a adolescentes y jóvenes, aborda temas como: salud sexual y reproductiva, prevención de embarazos no planificados, enfermedades de transmisión sexual, diversidad sexual, relaciones saludables y autocuidado. También promueve una visión informada, responsable y libre de prejuicios sobre la sexualidad.</h4>
		</section>

		<section id="desint">
			<h2>Información de Desarrollo Integral</h2>
			<h3>ECALE</h3> <img src="ECALE.jpg" alt="Don Sinaton" width="250">
			<h4>Estrategia para la Comprensión y Atención de Lenguas Extranjeras. Programa enfocado en fortalecer el aprendizaje de idiomas (principalmente inglés) en estudiantes y docentes, mejorando competencias comunicativas mediante capacitación y materiales didácticos.</h4>
			<h4>Programa enfocado en el fortalecimiento del aprendizaje de lenguas extranjeras (principalmente inglés) en el ámbito educativo, busca mejorar las competencias comunicativas de los estudiantes y docentes en un segundo idioma. También incluye capacitación docente, materiales didácticos y actividades de inmersión lingüística.</h4>
			<h3>AMA DGETI</h3> <img src="AMADGETI.jpg" alt="Don Sinaton" width="250">
			<h4>Adolescentes con Motivación y Acompañamiento (DGETI). Programa de apoyo integral para estudiantes de educación tecnológica industrial que busca reducir la deserción escolar mediante tutorías, orientación vocacional y acompañamiento académico-emocional.</h4>
			<h4>Programa de acompañamiento integral para estudiantes del nivel medio superior técnico (DGETI), se enfoca en reducir la deserción escolar mediante apoyo académico, emocional y tutorial.Junto con eso incluye tutorías, orientación vocacional, actividades de integración y detección de riesgos psicosociales.</h4>
		</section>

		<section id="emptal">
			<h2>Información de Emprendimiento y Talento</h2>
			<h3>MEEMS</h3> <img src="MEEMS.jpg" alt="Don Sinaton" width="250">
			<h4>Modelo de Educación para la Excelencia en el Marco de la Sociedad. Modelo educativo que busca elevar la calidad en educación media superior mediante excelencia académica, formación integral, mejora continua y vinculación con el entorno.</h4>
			<h4>Es un modelo educativo que busca elevar la calidad de la educación media superior. Se basa en principios de excelencia académica, formación integral y vinculación con el entorno e incluye estrategias de mejora continua, evaluación de competencias, y formación docente para alcanzar estándares de calidad.</h4>
			<h3>Oferta de Clubes</h3> <img src="CLUBES.jpg" alt="Don Sinaton" width="250">
			<h4>Complementar la formación académica desarrollando habilidades socioemocionales, recreativas y cognitivas, además de fomentar la convivencia escolar y prevenir situaciones de riesgo.</h4>
			<h4>Los espacios extracurriculares dentro de las escuelas donde los estudiantes participan en actividades son: Deportivos, Culturales y Ciencias</h4>
		</section>

		<section id="tabla">
            <h2>Catálogo General de Programas</h2>
            <p>Información recuperada en tiempo real de la base de datos institucional:</p>
            
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Programa</th>
                        <th>Descripción</th>
                        <th>Área de Impacto</th>
                        <th>Requisitos de Participación</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Punto 3: Ciclo while para generar las filas dinámicamente
                    while ($row = mysqli_fetch_array($resultado)) {
                        echo "<tr>";
                        echo "<td>" . $row['id'] . "</td>";
                        echo "<td><strong>" . $row['nombre'] . "</strong></td>";
                        echo "<td>" . $row['descripcion'] . "</td>";
                        echo "<td>" . $row['area_impacto'] . "</td>";
                        echo "<td>" . $row['requisitos'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </section>

		<section id="opinion">
			<h2>Opinión</h2>
			<h3>Tu opinión es bastante importante para nosotros, así que si gustas, puedes dejar aquí lo que pienses:</h3>
			<form action="coneccion.php" method="POST">
				<label>Opinión</label><br><br>
				<textarea type="textarea" name="opinion"></textarea><br><br>
				<button type="submit" name="enviar">Enviar Consulta</button>
			</form>
		</section>
	</main>

	<footer>
		<p><strong>CBTis 165 "Leona Vicario"</strong></p>
        <p>Dirección: Coatepec, Veracruz. Carretera Antigua Xalapa-Coatepec KM8.5, Consolapa.</p>
        <p>telefono de contacto:2288162055</p>
        <p>Desarrollado por: <strong>Fabián emir pineda hernandez</strong> | Parcial 2 | 2026</p>
        <p>Redes Sociales: whatsapp:2281196948 / IG - pinedaa_hz</p>
	</footer>
</body>
</html>