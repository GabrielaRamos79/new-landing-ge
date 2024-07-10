<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Landing Page</title>
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <!-- <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet" integrity="sha512-6+I9nW9Iq9mWqzRLh9qahcXZpJ+H+2zK5MWU9U7B9t0LZy5Q1sXGrxV9RpVO6bX4kAuNTzI7H8Y4RGxjHV2L3A==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    </head>
    <body>
        <header>
            <div class="header-content">
                <img src="images/version 2 lineas negativo.png" alt="Logo de la Empresa" style="max-width: 150px;"> 
                <span class="contact-number">+34 607 514 040</span>
            </div>
        </header>

        <main>
            <section id="hero" class="d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 hero-content">
                            <h3>Descubre por qué más de</h3>
                            <h1>8.500 comunidades</h1>
                            <h1>de propietarios ya</h1>
                            <h1>confían en nosotros.</h1>
                            <p>Mantenimiento de calidad para vecinos exigentes.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="two-columns" class="container py-0">
                <div class="row">
                    <div id="services" class="col-md-6">
                        <div class="service-item">
                            <img src="images/icons/door_9873857.png" alt="Icono de elevador" class="img-fluid mb-3"> 
                            <div class="service-item-content text-right">                  
                                <h3>+12.000 equipos</h3>
                                <p>en mantenimiento</p>
                            </div>
                        </div>
                        <div class="service-item">
                            <img src="images/icons/neighborhood_5687497.png" alt="Icono casas" class="img-fluid mb-3">
                            <div class="service-item-content text-right"> 
                                <h3>70% comunidades</h3>
                                <p>de propietarios</p>
                            </div>
                        </div>
                        <div class="service-item">
                            <img src="images/icons/phone-call_9592745.png" alt="Icono llamada" class="img-fluid mb-3">
                            <div class="service-item-content text-right"> 
                                <h3>+130 profesionales</h3>
                                <p>a tu servicio</p>
                            </div>
                        </div>
                        <div class="service-item">
                            <img src="images/icons/spain_8081748.png" alt="Icono españa" class="img-fluid mb-3">
                            <div class="service-item-content text-right">
                                <h3>+20 sedes</h3>
                                <p>repartidas por España</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="contact" class="col-md-6">
                    <h2>Te respondemos rápido.</h2>
                    <!-- <form action="send.php" method="post"> -->
                    <form action="https://formspree.io/f/mrbzbzyy" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" required>
                                </div>                             
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="Teléfono" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="place" name="place" placeholder="Provincia" required>
                                </div>
                                <div class="form-group">
                                    <select class="form-control" id="who" name="who" required>
                                        <option value="" disabled selected>¿Qué eres?</option>
                                        <option value="Propietario">Propietario o Presidente de Comunidad</option>
                                        <option value="Administrador">Administrador de Fincas</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" id="message" name="message" placeholder="¿Qué necesitas?" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="terms" name="terms" required>
                            <label class="form-check-label" for="terms">He leído y acepto la <a href="https://www.generalelevadores.com/es/politica-de-privacidad/">política de privacidad.</a></label>
                        </div>           
                        <button type="submit" class="btn btn-primary mt-3">Solicitar presupuesto</button>
                        </form>
                    </div>
                </div>
            </section>

            <section id="plans">
                <div class="container">
                    <h2>Nuestros planes de mantenimiento para comunidades.</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th class="invisible">Requisito</th>
                                    <th>Mantenimiento GM</th>
                                    <th>Mantenimiento GR</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Visita periódica de mantenimiento.</td>
                                    <td> X </td>
                                    <td> X </td>
                                </tr>
                                <tr>
                                    <td>Revisión preventiva de todos los elementos del ascensor.</td>
                                    <td> X </td>
                                    <td> X </td>
                                </tr>
                                <tr>
                                    <td>Asistencia 24h para emergencias.</td>
                                    <td> X </td>
                                    <td> X </td>
                                </tr>
                                <tr>
                                    <td>Acompañamiento en visitas con Organismos de Control Acreditados (OCAs).</td>
                                    <td> X </td>
                                    <td> X </td>
                                </tr>
                                <tr>
                                    <td>Incluye reparación y mano de obra de todas las averías ocasionadas en su instalación*.</td>
                                    <td> X </td>
                                    <td> X </td>
                                </tr>
                                <tr>
                                    <td>Reparación y/o sustitución de los materiales para alargar la vida útil de tu elevador.</td>
                                    <td></td>
                                    <td> X </td>
                                </tr>
                                <tr>
                                    <td>Cobertura jurídica.</td>
                                    <td> X </td>
                                    <td> X </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p>*A excepción de las ocasionadas por actos vandálicos o negligentes, así como tampoco los elemento decorativos  ni las actuaciones ordenadas por organismos oficiales.</p>
                </div>        
            </section>

            <section id="benefit-image">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 p-0">
                            <div class="benefit-image2">
                                <img src="images/e8ad1ef5bb7052f8ad28cd56aceaf441.jpg" alt="patio central" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="benefit">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="benefit-content">
                                <div class="benefit-left">
                                    <div class="benefit-title">
                                        <h1 class="abhaya-libre">Beneficios de</h1>
                                     </div>
                                    <div class="benefit-title">
                                        <h2 class="hind-font">contratar nuestro</h2>
                                    </div>
                                    <div class="benefit-title">
                                        <h2 class="hind-font">mantenimiento.</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="benefit-right">
                                <h3>+ Mayor ahorro.</h3>
                                <p>De hasta un 30% en la contratación de tu servicio de mantenimiento de ascensor.</p>
                                <h3>+ Somos mantenedores multimarca.</h3>
                                <p>Con más de 40 años de experiencia y un alto stock de repuestos originales.</p>
                                <h3>+ Sin permanencias</h3>
                                <p>Pruebanos durante 3 meses sin compromisos. Si después nos contratas por un año te llevas, además, 3 meses gratis</p>
                                <h3>+ Atención 24 horas.</h3>
                                <p>Disponemos de un teléfono gratuito de atención al cliente disponible las 24 horas los 365 días del año.</p>
                            </div>
                        </div>
                    </div>
                </div>  
            </section>

            <section id="coverage">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="coverage-text">
                                <h1>Empresa nacional</h1>
                                <h1>con cobertura</h1>
                                <h1>internacional.</h1>

                                <p>Somos una gran empresa española con sedes a lo largo de todo el territorio</p>
                                <p>nacional, exportando también a países extranjeros, y con filiales en Chile y Perú.</p>

                                <h2>Financiación flexible.</h2>
                                <p>Ofrecemos financiación propia para nuestros clientes, con la posibilidad de</P>
                                <p> pagar sus reparaciones o modernizaciones hasta un año sin intereses.</p>

                                <h2>I+D+I y fabricación propia.</h2>
                                <p>Contamos con fábrica propia, así como patentes y modelos de utilidad propios.</p>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="coverage-image">
                                <img src="images/8ba2dd735f984367fc9e74f471fc89bc.jpg" alt="Técnico dando mantenimiento">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="coverage-collage">
                    <img src="images/collagegeneral.jpg" alt="Collage de imagenes">
                </div>
            </section>

            <section id="questions">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="questions-container">
                                <div class="questions-container-left">
                                    <h1 class="still">¿Todavía</h1>
                                    <h1 class="still">con dudas?</h1>
                                    <h1 class="here">Resuélvelas aquí.</h1>
                                </div>
                                <div class="questions-container-center">
                                    <h1>Preguntas<br> frecuentes</h1>
                                    <div class="faq-item">
                                        <h3 class="faq-question">+ ¿Qué es el mantenimiento de un ascensor?</h3>
                                        <p class="faq-answer">Es garantizar el correcto funcionamiento de tu ascensor, mediante una serie de visitas periódicas. 
                                            En ellas se realizará una revisión preventiva de los elementos del ascensor, principalmente de los de seguridad, 
                                            así como limpieza y lubricación, para poder utilizarlo con total seguridad.<br>
                                            Es obligación del titular del ascensor suscribir un contrato de mantenimiento con una empresa conservadora debidamente autorizada.</p>
                                    </div>
                                    <div class="faq-item">
                                        <h3 class="faq-question">+ ¿Qué incluye un contrato de mantenimiento de un ascensor?</h3>
                                        <p class="faq-answer">El contrato de mantenimiento del ascensor debe incluir, como mínimo, lo siguiente:</p>
                                        <ul class="faq-answer">  
                                            <li>Realizar las revisiones periódicas de mantenimiento, en los plazos estipulados.</li>
                                            <li>Garantizar, en un plazo máximo de 24 horas, el envío de personal competente cuando sea solicitado por el titular o por el personal encargado del servicio ordinario del ascensor, para corregir averías que ocasionen la parada del mismo.</li>
                                            <li>Acudir de manera inmediata por motivo de parada del ascensor con personas atrapadas en la cabina, accidentes o urgencia similares.</li>
                                            <li>Poner por escrito en conocimiento del titular los elementos del ascensor que hayan de sustituirse, si se observase que no están en las condiciones precisas para garantizar un buen funcionamiento, o si el ascensor no cumpliera las condiciones vigentes que le fueran exigibles.</li>
                                            <li>Interrumpir el servicio del ascensor cuando se apreciara riesgo grave e inminente de accidente, hasta que se realice la oportuna reparación.</li>
                                            <li>Y todas las obligaciones que sean exigibles a las empresas conservadoras por parte del R.D. 88/2013.</li>
                                        </ul>  
                                    </div>
                                    <div class="faq-item">
                                        <h3 class="faq-question">+ ¿Cada cuánto tiempo hay que hacer el mantenimiento?</h3>
                                        <p class="faq-answer">El mantenimiento preventivo de los ascensores hay que realizarlo, al menos, en los siguientes plazos:</p>
                                        <ul class="faq-answer">
                                            <li>Ascensores en viviendas unifamiliares y ascensores con velocidad no superior a 0,15 m/s: <strong> cuatro meses.</strong>
                                                (A estos efectos, se entiende por vivienda unifamiliar la situada en parcela independiente que sirve de residencia habitual, permanente o temporal, para una sola familia).</li>
                                            <li>Ascensores instalados en edificios comunitarios de uso residencial de hasta 6 paradas y ascensores instalados en edificios de uso público de hasta 4 paradas, que tengan una antigüedad inferior a 20 años: <strong> seis semanas.</strong></li>
                                            <li>Los demás ascensores: <strong>cada mes.</strong></li>
                                        </ul>
                                    </div>
                                    <div class="faq-item">
                                        <h3 class="faq-question">+ ¿Qué ventajas tiene nuestro servicio 24h?</h3>
                                        <p class="faq-answer">Marcamos la diferencia con nuestro servicio de atención de llamadas 24 horas, los 365 días del año.<br>

                                        Tenemos un horario más amplio y flexible para recibir tus avisos, con la atención de las llamadas de averías que recibimos en la empresa de lunes a domingo, de 9h a 14h y 16h a 21h, así como servicio de rescate y emergencias las 24 horas (365 días del año).
                                        Además, los desplazamientos producidos durante la prestación de este servicio no te ocasionarán una factura adicional.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="questions-container-right">
                                <h4>En General Elevadores estudiamos cada proyecto de forma individual para ofrecerte la solución más ajustada a tus necesidades,
                                    tanto si es para adificios públicos o privados, comunidades de propietarios o viviendas unifamiliares.</h4>
                                <p>(Haz click sobre cada pregunta para saber más)</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image-questions">
                    <img src="images/11cd36ecd290ab4839f2a29c224537d7.jpg" alt="Técnico dando mantenimiento">
                </div>
            </section>
            <section id="two-columns2">
                <div class="contact2">
            </section>
            <section id="contact-again">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="new-contact-form">
                                <h2>Te respondemos rápido.</h2>
                                <form action="https://formspree.io/f/mrbzbzyy" method="post">
                                <!-- <form action="send.php" method="post"> -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" id="name" name="name" placeholder="Nombre" required class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" id="email" name="email" placeholder="Email" required class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" id="phone" name="phone" placeholder="Teléfono" required class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" id="place" name="place" placeholder="Provincia" required class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" id="who" name="who" required>
                                                    <option value="" disabled selected>¿Qué eres?</option>
                                                    <option value="Propietario">Propietario o Presidente de Comunidad</option>
                                                    <option value="Administrador">Administrador de Fincas</option>
                                                    <option value="Otro">Otro</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">       
                                            <div class="form-group">
                                                <textarea id="message" name="message" placeholder="¿Qué necesitas?" required class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form group form-group-terms">
                                        <input type="checkbox" id="terms" name="terms" required>
                                        <label for="terms">He leído y acepto la <a href="https://www.generalelevadores.com/es/politica-de-privacidad/">política de privacidad.</a></label>
                                    </div>
                                    <button class="second-form" type="submit" class="btn btn-primary">Solicitar presupuesto</button>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="here">
                                <h1>Estamos a</h1> 
                                <h2>tu disposición</h2>
                                <p>Puedes llamarnos al (+34)952 020 055 </p>
                                <p>Envianos un correo a info@generalelevadores.com</p>
                                <p>O, si lo prefieres rellena nuestro formulario para<br> que contactactemos contigo.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="footer-links">
                <div class="links-container">
                    <div class="column left2-column">
                        <ul>
                            <li><a href="https://www.generalelevadores.com/es/productos/">Productos</a></li>
                            <li><a href="https://www.generalelevadores.com/es/productos-accesibilidad/">Accesibilidad</a></li>
                            <li><a href="https://www.generalelevadores.com/es/servicios/">Servicios</a></li>
                            <li><a href="https://www.generalelevadores.com/es/internacionalizacion/">Internacionalidad</a></li>
                            <li><a href="https://www.generalelevadores.com/es/">General Elevadores</a></li>
                        </ul>
                    </div>
                    <div class="column center-left-column">
                        <ul>
                            <li><a href="https://www.generalelevadores.com/es/contacto/">Contacto</a></li>
                            <li><a href="https://www.generalelevadores.com/es/blog/1/">Blog</a></li>
                            <li>Catálogos</li>
                            <li><a href="https://www.generalelevadores.com/es/proyectos/">Proyectos</a></li>
                            <li><a href="https://www.generalelevadores.com/es/faq/">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="column center-right-column">
                        <ul>
                            <li><a href="https://clientes.gexxi.com/www/gexxi/index.html?V2#/login">Accede a tu área privada.</a></li>
                            <li><a href="https://www.generalelevadores.com/es/trabaja-con-nosotros/">Trabaja con nosotros.</a></li>
                            <li>¿Nos sigues?;)</li>
                            <li class="social-icons">
                                <a href="https://www.linkedin.com/company/general-elevadores-xxi/">Linkedin.</a>
                                <a href="https://www.facebook.com/generalelevadores">Facebook.</a>
                                <a href="https://www.instagram.com/generalelevadores/">Instagram.</a>
                                <a href="https://www.youtube.com/user/generalelevadoresxxi">Youtube.</a>
                            </li>
                        </ul>
                    </div>
                    <div class="column right2-column">
                        <img src="images/version 2 lineas negativo vertical derecha.png" alt="Logo de la web">
                    </div>
                </div>
                <div class="all-rights">
                    <p>General Elevadores XXI S.L.U. Todos los derechos reservados.</p>
                </div>
            </section>
        </main>
        <footer>
            <div class="footer-container">
                <img src="images/26ae70088fcb7824fcc1e2b1f019f261.jpg" alt="Bandera Comunidad Europea">
                <div class="footer-text">
                    <p>General Elevadores ha sido beneficiaria del Fondo Europeo de Desarrollo Regional cuyo objetivo es mejorar la competitividad de las Pymes
                    y gracias al cual ha puesto en marcha un Plan de Marketing Digital Internacional con el objetivo de mejorar su posicionamiento online en mercados exteriores durante el
                    año 2019. Para ello ha contado con el apoyo del Programa XPANDE DIGITAL de la Cámara de Comercio de Málaga.</p>
                    <div class="footer-final-line">
                        <p>Fondo Europeo de Desarrollo Regional</p>
                        <p>Una manera de hacer Europa</p>
                    </div>
                </div>
            </div>    
        </footer>
        <script>
            document.querySelectorAll('.faq-question').forEach(item => {
                item.addEventListener('click', event => {
                    const faqItem = item.parentElement;
                    const faqAnswer = faqItem.querySelector('.faq-answer');

                    faqItem.classList.toggle('active');

                    document.querySelectorAll('.faq-item').forEach(otherItem => {
                        if (otherItem !== faqItem && otherItem.classList.contains('active')) {
                            otherItem.classList.remove('active');
                            otherItem.querySelector('faq-answer').style.display = 'none';
                        }
                    });
                    faqAnswer.style.display = faqAnswer.style.display === 'block' ?  'none' : 'block';
                });
            });
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js" integrity="sha512-6zJt5b6dTIscKMshc3V7H5brT8F0Zc1LBpbZWYX+WE74vD14oGZ3mJb69ZpZzWcBdFOEIzMK9J+5xP5C2whG0A==" crossorigin="anonymous" referrerpolicy="no-referrer">
            </script> -->

    </body>
</html>