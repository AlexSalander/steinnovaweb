<?php

// Definir la ruta base para los enlaces
if (!defined('BASE_PATH')) {
    define('BASE_PATH', '/');
}
if (!defined('STEINMETAL_PATH')) {
    define('STEINMETAL_PATH', '');
}

// Establecer el idioma por defecto a Inglés
$idioma = isset($_GET['lang']) && in_array($_GET['lang'], ['es', 'en', 'de']) ? $_GET['lang'] : 'en';

// Generar token CSRF
if (!isset($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Textos por idioma
$texto = [
    'es' => [
        'page_title' => 'Analítica de Datos Industriales',
        'analytics_header' => 'Analítica de Datos Industriales',
        'analytics_text' => 'Steinnova ofrece soluciones especializadas en analítica industrial que van más allá de un ERP convencional. Optimiza tu producción con servicios personalizados y estratégicos:',
        'analytics_services_header' => 'Nuestros Servicios',
        'analytics_predictive' => 'Analítica Predictiva',
        'analytics_predictive_text' => 'Predice fallos, demanda y optimiza recursos con modelos predictivos avanzados de Machine Learning.',
        'analytics_process' => 'Optimización de Procesos',
        'analytics_process_text' => 'Reduce costos operativos con algoritmos avanzados para optimizar líneas de producción y logística.',
        'analytics_doe' => 'Diseño de Experimentos (DoE)',
        'analytics_doe_text' => 'Optimiza procesos industriales específicos, aumentando eficiencia mediante métodos estadísticos validados.',
        'analytics_digital_twin' => 'Gemelos Digitales y Simulación',
        'analytics_digital_twin_text' => 'Simula escenarios productivos en réplicas digitales precisas para prevenir problemas y optimizar rendimiento.',
        'analytics_iot' => 'IoT Industrial en Tiempo Real',
        'analytics_iot_text' => 'Integra sensores inteligentes para monitoreo constante y alertas predictivas que mejoran la eficiencia operativa.',
        'analytics_geospatial' => 'Analítica Geoespacial Logística',
        'analytics_geospatial_text' => 'Reduce costos logísticos mediante análisis espacial avanzado que considera tráfico, clima y ubicación.',
        'analytics_safety' => 'Seguridad Industrial con IA',
        'analytics_safety_text' => 'Utiliza Inteligencia Artificial y visión computacional para reducir accidentes laborales y cumplir normativas.',
        'analytics_unstructured' => 'Datos No Estructurados',
        'analytics_unstructured_text' => 'Extrae insights de reportes técnicos, correos y multimedia usando procesamiento de lenguaje natural y OCR avanzado.',
        'analytics_risk' => 'Evaluación de Riesgos',
        'analytics_risk_text' => 'Gestiona proactivamente riesgos operativos, financieros y logísticos con modelos predictivos avanzados.',
        'analytics_energy' => 'Eficiencia Energética Avanzada',
        'analytics_energy_text' => 'Optimiza tu consumo energético con análisis específicos integrando factores externos como clima y tarifas dinámicas.',
        'analytics_footer' => 'En Steinnova transformamos datos industriales en decisiones estratégicas que impulsan la eficiencia y rentabilidad.<br><strong>Optimizado para:</strong> Analítica industrial, Machine Learning industrial, Optimización procesos industriales, IoT industrial, Eficiencia energética.',
        'contact_form_header' => 'Contáctanos',
        'form_name' => 'Nombre',
        'form_email' => 'Correo Electrónico',
        'form_message' => 'Mensaje',
        'form_submit' => 'Enviar Mensaje',
        'form_success' => '¡Mensaje enviado con éxito!',
        'form_error' => 'Error al enviar el mensaje. Por favor, intenta de nuevo.',
        'form_required' => 'Por favor, completa todos los campos.',
        'form_invalid_email' => 'Por favor, ingresa un correo electrónico válido.',
        'form_csrf_error' => 'Error de seguridad. Intenta de nuevo.',
        'solicitarInfo' => 'Solicitar Información'
    ],
    'en' => [
        'page_title' => 'Industrial Data Analytics',
        'analytics_header' => 'Industrial Data Analytics',
        'analytics_text' => 'Steinnova offers specialized industrial analytics solutions that go beyond conventional ERP systems. Optimize your production with customized and strategic services:',
        'analytics_services_header' => 'Our Services',
        'analytics_predictive' => 'Predictive Analytics',
        'analytics_predictive_text' => 'Predict failures, demand, and optimize resources with advanced Machine Learning predictive models.',
        'analytics_process' => 'Process Optimization',
        'analytics_process_text' => 'Reduce operational costs with advanced algorithms to optimize production lines and logistics.',
        'analytics_doe' => 'Design of Experiments (DoE)',
        'analytics_doe_text' => 'Optimize specific industrial processes, increasing efficiency through validated statistical methods.',
        'analytics_digital_twin' => 'Digital Twins and Simulation',
        'analytics_digital_twin_text' => 'Simulate production scenarios in precise digital replicas to prevent issues and optimize performance.',
        'analytics_iot' => 'Real-Time Industrial IoT',
        'analytics_iot_text' => 'Integrate smart sensors for continuous monitoring and predictive alerts that enhance operational efficiency.',
        'analytics_geospatial' => 'Logistics Geospatial Analytics',
        'analytics_geospatial_text' => 'Reduce logistics costs through advanced spatial analysis considering traffic, weather, and location.',
        'analytics_safety' => 'Industrial Safety with AI',
        'analytics_safety_text' => 'Use Artificial Intelligence and computer vision to reduce workplace accidents and comply with regulations.',
        'analytics_unstructured' => 'Unstructured Data',
        'analytics_unstructured_text' => 'Extract insights from technical reports, emails, and multimedia using advanced natural language processing and OCR.',
        'analytics_risk' => 'Risk Assessment',
        'analytics_risk_text' => 'Proactively manage operational, financial, and logistical risks with advanced predictive models.',
        'analytics_energy' => 'Advanced Energy Efficiency',
        'analytics_energy_text' => 'Optimize energy consumption with specific analyses integrating external factors like weather and dynamic tariffs.',
        'analytics_footer' => 'At Steinnova, we transform industrial data into strategic decisions that drive efficiency and profitability.<br><strong>Optimized for:</strong> Industrial analytics, Machine Learning, Process optimization, Industrial IoT, Energy efficiency.',
        'contact_form_header' => 'Contact Us',
        'form_name' => 'Name',
        'form_email' => 'Email',
        'form_message' => 'Message',
        'form_submit' => 'Send Message',
        'form_success' => 'Message sent successfully!',
        'form_error' => 'Error sending message. Please try again.',
        'form_required' => 'Please fill out all fields.',
        'form_invalid_email' => 'Please enter a valid email address.',
        'form_csrf_error' => 'Security error. Please try again.',
        'solicitarInfo' => 'Request Information'
    ],
    'de' => [
        'page_title' => 'Industriedatenanalytik',
        'analytics_header' => 'Industriedatenanalytik',
        'analytics_text' => 'Steinnova bietet spezialisierte Lösungen für industrielle Analytik, die über konventionelle ERP-Systeme hinausgehen. Optimieren Sie Ihre Produktion mit maßgeschneiderten und strategischen Dienstleistungen:',
        'analytics_services_header' => 'Unsere Dienstleistungen',
        'analytics_predictive' => 'Prädiktive Analytik',
        'analytics_predictive_text' => 'Prognostizieren Sie Ausfälle, Nachfrage und optimieren Sie Ressourcen mit fortschrittlichen prädiktiven Modellen des maschinellen Lernens.',
        'analytics_process' => 'Prozessoptimierung',
        'analytics_process_text' => 'Senken Sie Betriebskosten mit fortschrittlichen Algorithmen zur Optimierung von Produktionslinien und Logistik.',
        'analytics_doe' => 'Versuchsplanung (DoE)',
        'analytics_doe_text' => 'Optimieren Sie spezifische industrielle Prozesse und steigern Sie die Effizienz durch validierte statistische Methoden.',
        'analytics_digital_twin' => 'Digitale Zwillinge und Simulation',
        'analytics_digital_twin_text' => 'Simulieren Sie Produktionsszenarien in präzisen digitalen Nachbildungen, um Probleme zu verhindern und die Leistung zu optimieren.',
        'analytics_iot' => 'Echtzeit-Industrie-IoT',
        'analytics_iot_text' => 'Integrieren Sie intelligente Sensoren für kontinuierliche Überwachung und prädiktive Warnungen, die die Betriebseffizienz steigern.',
        'analytics_geospatial' => 'Geospatiale Logistikanalytik',
        'analytics_geospatial_text' => 'Senken Sie Logistikkosten durch fortschrittliche räumliche Analysen, die Verkehr, Wetter und Standort berücksichtigen.',
        'analytics_safety' => 'Industriesicherheit mit KI',
        'analytics_safety_text' => 'Nutzen Sie Künstliche Intelligenz und Computer Vision, um Arbeitsunfälle zu reduzieren und Vorschriften einzuhalten.',
        'analytics_unstructured' => 'Unstrukturierte Daten',
        'analytics_unstructured_text' => 'Gewinnen Sie Erkenntnisse aus technischen Berichten, E-Mails und Multimedia mithilfe fortschrittlicher natürlicher Sprachverarbeitung und OCR.',
        'analytics_risk' => 'Risikobewertung',
        'analytics_risk_text' => 'Verwalten Sie proaktiv betriebliche, finanzielle und logistische Risiken mit fortschrittlichen prädiktiven Modellen.',
        'analytics_energy' => 'Fortgeschrittene Energieeffizienz',
        'analytics_energy_text' => 'Optimieren Sie Ihren Energieverbrauch mit spezifischen Analysen, die externe Faktoren wie Wetter und dynamische Tarife integrieren.',
        'analytics_footer' => 'Bei Steinnova verwandeln wir industrielle Daten in strategische Entscheidungen, die Effizienz und Rentabilität steigern.<br><strong>Optimiert für:</strong> Industrielle Analytik, Maschinelles Lernen, Prozessoptimierung, Industrielles IoT, Energieeffizienz.',
        'contact_form_header' => 'Kontaktieren Sie uns',
        'form_name' => 'Name',
        'form_email' => 'E-Mail',
        'form_message' => 'Nachricht',
        'form_submit' => 'Nachricht senden',
        'form_success' => 'Nachricht erfolgreich gesendet!',
        'form_error' => 'Fehler beim Senden der Nachricht. Bitte versuchen Sie es erneut.',
        'form_required' => 'Bitte füllen Sie alle Felder aus.',
        'form_invalid_email' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.',
        'form_csrf_error' => 'Sicherheitsfehler. Bitte versuchen Sie es erneut.',
        'solicitarInfo' => 'Information anfordern'
    ]
];

$selectedTexts = $texto[$idioma];
?>

<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Steinnova's industrial data analytics solutions for predictive analytics, process optimization, IoT, and energy efficiency.">
    <title><?php echo $selectedTexts['page_title']; ?> - SteinMetal</title>

    <!-- Favicon -->
    <link rel="icon" href="../img/Logo2.png" type="image/png">

    <!-- CSS Frameworks and Custom Styles -->
    <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="../css/custom.css" rel="stylesheet" type="text/css" media="all" />

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700|Merriweather:300,300i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Estilos específicos -->
    <style>
        .analytics-section {
            background-color: #f9f9fb;
            padding: 4rem 0;
        }

        .analytics-img {
            max-width: 80%;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .form-section {
            background-color: #ffffff;
            padding: 2.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #dc3545;
            border-color: #dc3545;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #c82333;
            border-color: #c82333;
        }

        .text-justified {
            text-align: justify;
        }

        .accordion-button {
            font-weight: 600;
            color: #343a40;
        }

        .accordion-button:not(.collapsed) {
            background-color: #e9ecef;
            color: #dc3545;
        }

        .section-title {
            color: #343a40;
            margin-bottom: 2rem;
        }

        .icon {
            vertical-align: middle;
            margin-right: 8px;
        }

        .btn-primary {
            background-color: #e63946;
            border: none;
            padding: 12px 24px;
            font-weight: 600;
            font-size: 1.05rem;
            border-radius: 8px;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 6px 16px rgba(230, 57, 70, 0.4);
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #d62839;
            transform: scale(1.03);
        }
    </style>
</head>

<body>
    <!-- Incluir Encabezado -->
    <div class="nav-container">
        <?php @include '../Header.php'; ?>
    </div>

    <!-- Sección Analítica de Datos Industriales -->
    <section class="analytics-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold section-title"><?php echo $selectedTexts['analytics_header']; ?></h2>
                    <p class="text-muted lead text-justified"><?php echo $selectedTexts['analytics_text']; ?></p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="../img/analitica.png" alt="Analítica de Datos" class="analytics-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Servicios -->
    <section class="py-5">
        <div class="container">
            <h3 class="fw-bold section-title"><?php echo $selectedTexts['analytics_services_header']; ?></h3>
            <div class="accordion" id="analyticsAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="analyticsHeading1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#analyticsCollapse1" aria-expanded="true"
                            aria-controls="analyticsCollapse1">
                            <i
                                class="material-icons icon">trending_up</i><?php echo $selectedTexts['analytics_predictive']; ?>
                        </button>
                    </h2>
                    <div id="analyticsCollapse1" class="accordion-collapse collapse show"
                        aria-labelledby="analyticsHeading1" data-bs-parent="#analyticsAccordion">
                        <div class="accordion-body"><?php echo $selectedTexts['analytics_predictive_text']; ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="analyticsHeading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#analyticsCollapse2" aria-expanded="false"
                            aria-controls="analyticsCollapse2">
                            <i
                                class="material-icons icon">settings</i><?php echo $selectedTexts['analytics_process']; ?>
                        </button>
                    </h2>
                    <div id="analyticsCollapse2" class="accordion-collapse collapse" aria-labelledby="analyticsHeading2"
                        data-bs-parent="#analyticsAccordion">
                        <div class="accordion-body"><?php echo $selectedTexts['analytics_process_text']; ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="analyticsHeading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#analyticsCollapse3" aria-expanded="false"
                            aria-controls="analyticsCollapse3">
                            <i class="material-icons icon">science</i><?php echo $selectedTexts['analytics_doe']; ?>
                        </button>
                    </h2>
                    <div id="analyticsCollapse3" class="accordion-collapse collapse" aria-labelledby="analyticsHeading3"
                        data-bs-parent="#analyticsAccordion">
                        <div class="accordion-body"><?php echo $selectedTexts['analytics_doe_text']; ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="analyticsHeading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#analyticsCollapse4" aria-expanded="false"
                            aria-controls="analyticsCollapse4">
                            <i
                                class="material-icons icon">memory</i><?php echo $selectedTexts['analytics_digital_twin']; ?>
                        </button>
                    </h2>
                    <div id="analyticsCollapse4" class="accordion-collapse collapse" aria-labelledby="analyticsHeading4"
                        data-bs-parent="#analyticsAccordion">
                        <div class="accordion-body"><?php echo $selectedTexts['analytics_digital_twin_text']; ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="analyticsHeading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#analyticsCollapse5" aria-expanded="false"
                            aria-controls="analyticsCollapse5">
                            <i class="material-icons icon">sensors</i><?php echo $selectedTexts['analytics_iot']; ?>
                        </button>
                    </h2>
                    <div id="analyticsCollapse5" class="accordion-collapse collapse" aria-labelledby="analyticsHeading5"
                        data-bs-parent="#analyticsAccordion">
                        <div class="accordion-body"><?php echo $selectedTexts['analytics_iot_text']; ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="analyticsHeading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#analyticsCollapse6" aria-expanded="false"
                            aria-controls="analyticsCollapse6">
                            <i class="material-icons icon">map</i><?php echo $selectedTexts['analytics_geospatial']; ?>
                        </button>
                    </h2>
                    <div id="analyticsCollapse6" class="accordion-collapse collapse" aria-labelledby="analyticsHeading6"
                        data-bs-parent="#analyticsAccordion">
                        <div class="accordion-body"><?php echo $selectedTexts['analytics_geospatial_text']; ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="analyticsHeading7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#analyticsCollapse7" aria-expanded="false"
                            aria-controls="analyticsCollapse7">
                            <i class="material-icons icon">security</i><?php echo $selectedTexts['analytics_safety']; ?>
                        </button>
                    </h2>
                    <div id="analyticsCollapse7" class="accordion-collapse collapse" aria-labelledby="analyticsHeading7"
                        data-bs-parent="#analyticsAccordion">
                        <div class="accordion-body"><?php echo $selectedTexts['analytics_safety_text']; ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="analyticsHeading8">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#analyticsCollapse8" aria-expanded="false"
                            aria-controls="analyticsCollapse8">
                            <i
                                class="material-icons icon">description</i><?php echo $selectedTexts['analytics_unstructured']; ?>
                        </button>
                    </h2>
                    <div id="analyticsCollapse8" class="accordion-collapse collapse" aria-labelledby="analyticsHeading8"
                        data-bs-parent="#analyticsAccordion">
                        <div class="accordion-body"><?php echo $selectedTexts['analytics_unstructured_text']; ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="analyticsHeading9">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#analyticsCollapse9" aria-expanded="false"
                            aria-controls="analyticsCollapse9">
                            <i class="material-icons icon">warning</i><?php echo $selectedTexts['analytics_risk']; ?>
                        </button>
                    </h2>
                    <div id="analyticsCollapse9" class="accordion-collapse collapse" aria-labelledby="analyticsHeading9"
                        data-bs-parent="#analyticsAccordion">
                        <div class="accordion-body"><?php echo $selectedTexts['analytics_risk_text']; ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="analyticsHeading10">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#analyticsCollapse10" aria-expanded="false"
                            aria-controls="analyticsCollapse10">
                            <i
                                class="material-icons icon">energy_savings_leaf</i><?php echo $selectedTexts['analytics_energy']; ?>
                        </button>
                    </h2>
                    <div id="analyticsCollapse10" class="accordion-collapse collapse"
                        aria-labelledby="analyticsHeading10" data-bs-parent="#analyticsAccordion">
                        <div class="accordion-body"><?php echo $selectedTexts['analytics_energy_text']; ?></div>
                    </div>
                </div>
            </div>
            <div class="mt-4">
                <p class="text-muted lead text-center"><?php echo $selectedTexts['analytics_footer']; ?></p>
            </div>
        </div>
    </section>

    <!-- Sección de Contacto -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <a href="../contacto.php" class="btn btn-primary text-white"
                        style="padding: 15px 30px; font-size: 1.2rem;">
                        <i class="fa-solid fa-paper-plane text-white me-2"></i>
                        <?php echo $selectedTexts['solicitarInfo']; ?>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Incluir Pie de Página -->
    <?php include '../Footer.php'; ?>

    <!-- JS Scripts -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/flickity.min.js"></script>
    <script src="../js/easypiechart.min.js"></script>
    <script src="../js/parallax.js"></script>
    <script src="../js/typed.min.js"></script>
    <script src="../js/datepicker.js"></script>
    <script src="../js/isotope.min.js"></script>
    <script src="../js/ytplayer.min.js"></script>
    <script src="../js/lightbox.min.js"></script>
    <script src="../js/granim.min.js"></script>
    <script src="../js/jquery.steps.min.js"></script>
    <script src="../js/countdown.min.js"></script>
    <script src="../js/twitterfetcher.min.js"></script>
    <script src="../js/spectragram.min.js"></script>
    <script src="../js/smooth-scroll.min.js"></script>
    <script src="../js/scripts.js"></script>

    <!-- Bootstrap 5 JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>