<?php

// Establecer el idioma por defecto a Inglés
$idioma = isset($_GET['lang']) && in_array($_GET['lang'], ['es', 'en', 'de']) ? $_GET['lang'] : 'en';

// Textos por idioma
$texto = [
    'es' => [
        'page_title' => 'Software Industrial',
        'intro_header' => 'Soluciones de Software Industrial',
        'intro_text' => 'Implementamos software industrial especializado para optimizar, monitorear y automatizar procesos críticos dentro de plantas productivas. Desde el control de almacenes hasta la gestión de mantenimiento, producción, energía o calidad, nuestras soluciones están diseñadas para integrar el piso de planta con la toma de decisiones.',
        'ems_header' => 'EMS – Sistema de Monitoreo Energético',
        'ems_text' => 'Sistema de monitoreo energético para eficiencia y cumplimiento normativo.<br><strong>Qué permite:</strong><ul><li>Visualización de consumo eléctrico, térmico o de gas por área o equipo</li><li>Detección de picos, fugas o sobredimensionamientos</li><li>Comparativas entre líneas, turnos o sedes</li><li>Generación de reportes automáticos para ISO 50001 o ESG</li><li>Alertas por excesos y recomendaciones automáticas de ahorro</li></ul><strong>Perfecto para industrias que quieren reducir su huella de carbono.</strong>',
        'wms_header' => 'WMS – Sistema de Gestión de Almacenes',
        'wms_text' => 'Organiza y digitaliza tu almacén con trazabilidad total desde la recepción hasta el despacho.<br><strong>Funciones destacadas:</strong><ul><li>Mapeo de almacenes, estanterías y ubicaciones dinámicas</li><li>Escaneo por códigos de barras o QR</li><li>Control FEFO/FIFO, caducidad y alertas de stock mínimo</li><li>Registro por lote, serie o unidad de empaque</li><li>Indicadores en tiempo real: rotación, exactitud, nivel de servicio</li></ul><strong>Ideal para plantas logísticas, alimentarias, automotrices y farmacéuticas.</strong>',
        'mes_header' => 'MES – Sistema de Ejecución de Manufactura',
        'mes_text' => 'Monitorea y controla la ejecución de la producción en tiempo real.<br><strong>Funciones:</strong><ul><li>Registro de órdenes de producción y consumo de materiales</li><li>Seguimiento de OEE (eficiencia global de equipos)</li><li>Integración con sensores o SCADA para captura automática</li><li>Registro de scrap, paros, tiempos de ciclo y calidad en línea</li><li>Dashboard con rendimiento por turno, línea o célula de trabajo</li></ul><strong>Ideal para plantas con procesos automatizados o por lotes.</strong>',
        'how_we_work_header' => '¿Cómo trabajamos?',
        'how_we_work_text' => '<ul><li><strong>Análisis de necesidades:</strong> diagnosticamos tu planta y elegimos la mejor solución</li><li><strong>Implementación remota o híbrida:</strong> instalación, capacitación y pruebas</li><li><strong>Soporte continuo:</strong> soporte técnico, actualizaciones y mejoras</li><li><strong>Integración con tus sistemas actuales:</strong> Excel, SCADA, IoT, Power BI, etc.</li></ul>',
        'why_choose_header' => '¿Por qué elegir SteinNova?',
        'why_choose_text' => '<ul><li>Especialistas en software para entornos industriales</li><li>Soluciones adaptadas a tus procesos, no genéricas</li><li>Paneles de control con KPIs y visualización en tiempo real</li><li>Soporte técnico remoto continuo</li><li>Implementación rápida y sin fricción operativa</li></ul>',
        'contact_form_header' => 'Contáctanos',
        'form_name' => 'Nombre',
        'form_email' => 'Correo Electrónico',
        'form_message' => 'Mensaje',
        'form_submit' => 'Enviar Mensaje',
        'form_success' => '¡Mensaje enviado con éxito!',
        'form_error' => 'Error al enviar el mensaje. Por favor, intenta de nuevo.',
        'form_required' => 'Por favor, completa todos los campos.',
        'form_invalid_email' => 'Por favor, ingresa un correo electrónico válido.',
        'solicitarInfo' => 'Solicitar Información'
    ],
    'en' => [
        'page_title' => 'Industrial Software',
        'intro_header' => 'Industrial Software Solutions',
        'intro_text' => 'We implement specialized industrial software to optimize, monitor, and automate critical processes within production plants. From warehouse control to maintenance, production, energy, or quality management, our solutions are designed to integrate the shop floor with decision-making.',
        'ems_header' => 'EMS – Energy Monitoring System',
        'ems_text' => 'Energy monitoring system for efficiency and regulatory compliance.<br><strong>What it enables:</strong><ul><li>Visualization of electrical, thermal, or gas consumption by area or equipment</li><li>Detection of peaks, leaks, or oversizing</li><li>Comparisons between lines, shifts, or sites</li><li>Automatic report generation for ISO 50001 or ESG</li><li>Alerts for excesses and automatic savings recommendations</li></ul><strong>Perfect for industries aiming to reduce their carbon footprint.</strong>',
        'wms_header' => 'WMS – Warehouse Management System',
        'wms_text' => 'Organizes and digitizes your warehouse with full traceability from reception to dispatch.<br><strong>Key features:</strong><ul><li>Warehouse mapping, shelving, and dynamic locations</li><li>Scanning via barcodes or QR codes</li><li>FEFO/FIFO control, expiration, and minimum stock alerts</li><li>Tracking by batch, serial number, or packaging unit</li><li>Real-time indicators: turnover, accuracy, service level</li></ul><strong>Ideal for logistics, food, automotive, and pharmaceutical plants.</strong>',
        'mes_header' => 'MES – Manufacturing Execution System',
        'mes_text' => 'Monitors and controls production execution in real time.<br><strong>Features:</strong><ul><li>Recording of production orders and material consumption</li><li>OEE (Overall Equipment Effectiveness) tracking</li><li>Integration with sensors or SCADA for automatic data capture</li><li>Recording of scrap, downtime, cycle times, and inline quality</li><li>Dashboard with performance by shift, line, or work cell</li></ul><strong>Ideal for plants with automated or batch processes.</strong>',
        'how_we_work_header' => 'How do we work?',
        'how_we_work_text' => '<ul><li><strong>Needs analysis:</strong> we diagnose your plant and select the best solution</li><li><strong>Remote or hybrid implementation:</strong> installation, training, and testing</li><li><strong>Continuous support:</strong> technical support, updates, and improvements</li><li><strong>Integration with your current systems:</strong> Excel, SCADA, IoT, Power BI, etc.</li></ul>',
        'why_choose_header' => 'Why choose SteinNova?',
        'why_choose_text' => '<ul><li>Specialists in software for industrial environments</li><li>Solutions tailored to your processes, not generic</li><li>Control panels with KPIs and real-time visualization</li><li>Continuous remote technical support</li><li>Fast and seamless operational implementation</li></ul>',
        'contact_form_header' => 'Contact Us',
        'form_name' => 'Name',
        'form_email' => 'Email',
        'form_message' => 'Message',
        'form_submit' => 'Send Message',
        'form_success' => 'Message sent successfully!',
        'form_error' => 'Error sending message. Please try again.',
        'form_required' => 'Please fill out all fields.',
        'form_invalid_email' => 'Please enter a valid email address.',
        'solicitarInfo' => 'Request Information'
    ],
    'de' => [
        'page_title' => 'Industriesoftware',
        'intro_header' => 'Lösungen für Industriesoftware',
        'intro_text' => 'Wir implementieren spezialisierte Industriesoftware zur Optimierung, Überwachung und Automatisierung kritischer Prozesse in Produktionswerken. Von der Lagerverwaltung bis hin zu Wartung, Produktion, Energie oder Qualitätsmanagement sind unsere Lösungen darauf ausgelegt, die Produktionsebene mit der Entscheidungsfindung zu integrieren.',
        'ems_header' => 'EMS – Energiemonitoringsystem',
        'ems_text' => 'Energiemonitoringsystem für Effizienz und Einhaltung gesetzlicher Vorschriften.<br><strong>Was es ermöglicht:</strong><ul><li>Visualisierung des Strom-, Wärme- oder Gasverbrauchs nach Bereich oder Gerät</li><li>Erkennung von Spitzen, Lecks oder Überdimensionierungen</li><li>Vergleiche zwischen Linien, Schichten oder Standorten</li><li>Automatische Berichtserstellung für ISO 50001 oder ESG</li><li>Warnungen bei Überschreitungen und automatische Einsparvorschläge</li></ul><strong>Perfekt für Industrien, die ihren CO2-Fußabdruck reduzieren möchten.</strong>',
        'wms_header' => 'WMS – Lagerverwaltungssystem',
        'wms_text' => 'Organisiert und digitalisiert Ihr Lager mit vollständiger Rückverfolgbarkeit von der Annahme bis zum Versand.<br><strong>Hauptfunktionen:</strong><ul><li>Lagermapping, Regale und dynamische Standorte</li><li>Scannen über Barcodes oder QR-Codes</li><li>FEFO/FIFO-Steuerung, Verfallsdatum und Warnungen bei Mindestbestand</li><li>Nachverfolgung nach Charge, Seriennummer oder Verpackungseinheit</li><li>Echtzeit-Indikatoren: Umschlag, Genauigkeit, Servicelevel</li></ul><strong>Ideal für Logistik-, Lebensmittel-, Automobil- und Pharmawerke.</strong>',
        'mes_header' => 'MES – Fertigungsausführungssystem',
        'mes_text' => 'Überwacht und steuert die Produktionsausführung in Echtzeit.<br><strong>Funktionen:</strong><ul><li>Erfassung von Produktionsaufträgen und Materialverbrauch</li><li>Verfolgung der OEE (Gesamtanlageneffektivität)</li><li>Integration mit Sensoren oder SCADA für automatische Datenerfassung</li><li>Erfassung von Ausschuss, Stillständen, Zykluszeiten und Qualität inline</li><li>Dashboard mit Leistung nach Schicht, Linie oder Arbeitszelle</li></ul><strong>Ideal für Werke mit automatisierten oder chargenbasierten Prozessen.</strong>',
        'how_we_work_header' => 'Wie arbeiten wir?',
        'how_we_work_text' => '<ul><li><strong>Bedarfsanalyse:</strong> Wir diagnostizieren Ihr Werk und wählen die beste Lösung</li><li><strong>Fern- oder hybride Implementierung:</strong> Installation, Schulung und Tests</li><li><strong>Kontinuierlicher Support:</strong> technischer Support, Updates und Verbesserungen</li><li><strong>Integration mit Ihren aktuellen Systemen:</strong> Excel, SCADA, IoT, Power BI, etc.</li></ul>',
        'why_choose_header' => 'Warum SteinNova wählen?',
        'why_choose_text' => '<ul><li>Spezialisten für Software in industriellen Umgebungen</li><li>Lösungen, die auf Ihre Prozesse zugeschnitten sind, nicht generisch</li><li>Bedienfelder mit KPIs und Echtzeit-Visualisierung</li><li>Kontinuierlicher technischer Fernsupport</li><li>Schnelle und reibungslose operative Implementierung</li></ul>',
        'contact_form_header' => 'Kontaktieren Sie uns',
        'form_name' => 'Name',
        'form_email' => 'E-Mail',
        'form_message' => 'Nachricht',
        'form_submit' => 'Nachricht senden',
        'form_success' => 'Nachricht erfolgreich gesendet!',
        'form_error' => 'Fehler beim Senden der Nachricht. Bitte versuchen Sie es erneut.',
        'form_required' => 'Bitte füllen Sie alle Felder aus.',
        'form_invalid_email' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.',
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
    <meta name="description" content="SteinNova's industrial software solutions for optimizing, monitoring, and automating critical processes in production plants.">
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

    <!-- Estilos específicos de softwareindustrial.php -->
    <style>
        .software-section {
            background-color: #f8f9fa;
        }
        .software-img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .form-section {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-primary:hover {
            background-color: #c82333;
            border-color: #c82333;
        }
        .text-justified {
            text-align: justify;
        }
        .card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .section-title {
            color: #343a40;
        }
    </style>
</head>
<body>
    <!-- Incluir Encabezado -->
    <div class="nav-container">
        <?php @include '../Header.php'; ?>
    </div>

    <!-- Sección Introducción -->
    <section class="software-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold section-title mb-4"><?php echo $selectedTexts['intro_header']; ?></h2>
                    <p class="text-muted lead text-justified"><?php echo $selectedTexts['intro_text']; ?></p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="../img/software1.png" alt="Software Industrial" class="software-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Sistemas -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title fw-bold"><?php echo $selectedTexts['ems_header']; ?></h3>
                            <p class="card-text"><?php echo $selectedTexts['ems_text']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title fw-bold"><?php echo $selectedTexts['wms_header']; ?></h3>
                            <p class="card-text"><?php echo $selectedTexts['wms_text']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h3 class="card-title fw-bold"><?php echo $selectedTexts['mes_header']; ?></h3>
                            <p class="card-text"><?php echo $selectedTexts['mes_text']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Cómo Trabajamos y Por Qué Elegirnos -->
    <section class="software-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold section-title mb-4"><?php echo $selectedTexts['how_we_work_header']; ?></h2>
                    <div class="text-muted lead text-justified"><?php echo $selectedTexts['how_we_work_text']; ?></div>
                    <h2 class="fw-bold section-title mt-5 mb-4"><?php echo $selectedTexts['why_choose_header']; ?></h2>
                    <div class="text-muted lead text-justified"><?php echo $selectedTexts['why_choose_text']; ?></div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="../img/software2.png" alt="Cómo Trabajamos" class="software-img">
                </div>
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