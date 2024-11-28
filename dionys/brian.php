<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Brian Heumann</title>
  <link href='css/style.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <header>
            <?php include 'components/header.php'; ?>
        </header>
        <nav>
            <?php include 'components/navigation.html'; ?>
        </nav>
        <main>
            <aside>
                <section>
                    <h2>Educación</h2>
                    <ul>
                        <li>Licenciatura en Sociología, UFLO Universidad, 2024 - en curso</li>
                        <li>Analista Social Universitario de Datos, UFLO Universidad, 2024 - en curso</li>
                        <li>Professional Developer, Digital House, 2021 - 2022</li>
                        <li>Licenciatura en Filosofía (promedio: 8), UNLP, 2018 - en curso</li>
                    </ul>
                </section>
                <section>
                    <h2>Idiomas</h2>
                    <ul>
                        <li>Inglés avanzado</li>
                        <li>Alemán, interpretación de textos</li>
                    </ul>
                </section>
                <section>
                    <h2>Competencias</h2>
                    <ul>
                        <li>Arquitectura de software, patrones de diseño, UML</li>
                        <li>Estadística básica</li>
                        <li>Conocimiento básico de R para el análisis de datos</li>
                        <li>Microeconomía y economía política</li>
                        <li>Derechos Humanos y perspectiva feminista</li>
                        <li>Inglés avanzado</li>
                        <li>Alemán, interpretación de textos</li>
                    </ul>
                </section>
                <section>
                    <h2>Cursos</h2>
                    <?php include 'cursos.php'; ?>
                </section>
            </aside>
            <section>
                <section>
                    <h2>Experiencia Profesional</h2>
                    <h3>Analista de Infraestructura en Proyecto Personal</h3>
                    <p>Digital Booking, mayo 2022 - julio 2022</p>
                    <ul>
                        <li>Diseñé una red de alta disponibilidad y la aprovisioné con infraestructura como código (modularizado y reutilizable).</li>
                        <li>Automatice el flujo de trabajo con GitLab CI, también planifiqué tareas manuales y programadas.</li>
                        <li>Deployé a Elastic Beanstalk con dos contenedores Docker para frontend y API Rest, utilizando un repositorio privado.</li>
                        <li>En un equipo de 4 a 6 personas, respondí con éxito por la infraestructura y ayudé al troubleshooting de errores.</li>
                    </ul>

                    <h3>Software Developer en Ciberseguridad de Datos</h3>
                    <p>Mercado Libre Argentina, 2022 - actualidad</p>
                    <ul>
                        <li>Contrastar las configuraciones de todos los almacenes de datos contra los estándares de seguridad diseñados por el equipo.</li>
                        <li>Inventariar almacenes y analizar el cumplimiento de sus datos.</li>
                        <li>Aplicar controles preventivos y políticas de remediación, monitorizando las vulnerabilidades.</li>
                    </ul>
                </section>
                <section>
                    <h2>Herramientas</h2>
                    <ul>
                        <li>Lenguajes de programación: Python, Java, Go, JavaScript</li>
                        <li>Infraestructura como Código: Terraform, CloudFormation</li>
                        <li>Bases de datos: MySQL, BigQuery, MongoDB, DynamoDB</li>
                        <li>Nube AWS: EC2, Elastic Load Balancer, Auto Scaling Groups, Security Groups, S3, RDS, DynamoDB, Elastic Beanstalk, ECR</li>
                        <li>Diseño de pipelines en GitLab</li>
                    </ul>
                </section>
            </section>
        </main>
        <footer>
            <?php include 'components/footer.php'; ?>
        </footer>
    </div>
</body>
</html>