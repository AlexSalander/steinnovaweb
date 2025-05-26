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

// Textos por idioma
$texto = [
    'es' => [
        'page_title' => 'Ciencia de Datos y Monitoreo Inteligente',
        'intro_header' => 'Ciencia de Datos y Monitoreo Inteligente',
        'intro_text' => 'En SteinNova, ayudamos a empresas industriales, del sector energías renovables y vehículos eléctricos (EV) a reducir drásticamente sus costos energéticos mediante ciencia de datos aplicada. Con tecnologías como R, Python, SQL y Power BI, analizamos tus datos operativos y energéticos para encontrar pérdidas, automatizar el monitoreo y proponer mejoras con impacto financiero directo.',
        'predictive_header' => 'Análisis Predictivo | Modelos Inteligentes | 100% Remoto',
        'predictive_text' => 'En Steinnova, transformamos datos energéticos en decisiones rentables. Aplicamos ciencia de datos, machine learning y visualización avanzada para ayudarte a predecir consumos, detectar desviaciones y optimizar procesos industriales sin interrupciones ni visitas presenciales.',
        'services_header' => 'Nuestros Servicios',
        'service1_header' => 'Predicción de Consumo Energético',
        'service1_text' => 'Anticípate al sobreconsumo con modelos de machine learning entrenados con tus datos operativos.<ul><li>Análisis por turno, máquina, clima o carga de trabajo</li><li>Detección de tendencias y proyecciones semanales</li><li>Integración con tus sistemas SCADA, ERP o IoT</li></ul>',
        'service2_header' => 'Análisis Automático de Desviaciones',
        'service2_text' => 'Identifica pérdidas energéticas en tiempo real.<ul><li>Algoritmos que detectan anomalías y alertan al instante</li><li>Reportes automatizados con causas probables y recomendaciones</li><li>Comparación histórica para validar mejoras</li></ul>',
        'service3_header' => 'Optimización Multivariable de Procesos',
        'service3_text' => 'Maximiza la eficiencia de hornos, compresores o líneas críticas.<ul><li>Modelos que identifican variables clave que afectan el consumo</li><li>Sugerencias inteligentes de ajuste de parámetros operativos</li><li>Simulaciones térmicas o eléctricas a partir de tus propios datos</li></ul>',
        'service4_header' => 'Dashboards Energéticos en Power BI',
        'service4_text' => 'Visualiza tu eficiencia en tiempo real con paneles interactivos.<ul><li>KPIs personalizados: kWh por unidad, % de eficiencia, factor de potencia</li><li>Visualizaciones dinámicas por turno, planta o zona</li><li>Acceso remoto para gerentes, técnicos y mantenimiento</li></ul>',
        'service5_header' => 'Benchmarking Predictivo entre Plantas',
        'service5_text' => 'Compara el rendimiento energético de tus sitios productivos.<ul><li>Modelos normalizados para comparar diferentes líneas o ubicaciones</li><li>Ranking de eficiencia con metas realistas</li><li>Proyección de ahorro si se replica el mejor desempeño</li></ul>',
        'service6_header' => 'Consultoría en Analítica Energética',
        'service6_text' => 'Te guiamos paso a paso para transformar tus datos en ahorro.<ul><li>Diseño de arquitectura de datos energéticos</li><li>Capacitación en Python, SQL o R para tu equipo de ingeniería</li><li>Implementación de pipelines automáticos para análisis continuo</li></ul>',
        'service7_header' => 'Informes Técnicos con Inteligencia Predictiva',
        'service7_text' => 'Obtén reportes claros, accionables y automatizados.<ul><li>Sugerencias ordenadas por impacto económico</li><li>Cálculo estimado de ROI para cada mejora propuesta</li><li>Comparativa mes a mes para seguimiento de resultados</li></ul>',
        'why_steinnova_header' => '¿Por qué Steinnova?',
        'why_steinnova_text' => '<ul><li>Más de 10 años de experiencia en eficiencia energética industrial</li><li>Enfoque en manufactura, energía y supply chain</li><li>Servicios remotos, sin interrupción operativa</li><li>Compatible con normativas ESG, ISO 50001 y NOM</li></ul>',
        'applications_header' => 'Aplicaciones',
        'manufacturing_header' => 'Manufactura',
        'manufacturing_hornos' => 'Hornos Industriales',
        'manufacturing_hornos_text' => 'Optimización térmica, monitoreo de eficiencia, detección de ciclos ineficientes.',
        'manufacturing_aire' => 'Aire Comprimido',
        'manufacturing_aire_text' => 'Detección de fugas, análisis de eficiencia, gestión por turnos.',
        'manufacturing_chillers' => 'Chillers y HVAC',
        'manufacturing_chillers_text' => 'Seguimiento térmico, alertas por desviaciones, integración con mantenimiento.',
        'manufacturing_motores' => 'Motores Eléctricos',
        'manufacturing_motores_text' => 'Evaluación de eficiencia, detección de armónicos, priorización de mantenimiento.',
        'renewables_header' => 'Energías Renovables',
        'renewables_solar' => 'Plantas Solares',
        'renewables_solar_text' => 'Análisis térmico, monitoreo de inversores, detección de módulos degradados.',
        'renewables_eolicas' => 'Turbinas Eólicas',
        'renewables_eolicas_text' => 'Pronóstico de generación, predicción de fallas, evaluación de eficiencia.',
        'renewables_bess' => 'Almacenamiento (BESS)',
        'renewables_bess_text' => 'Monitoreo de ciclos, análisis de eficiencia, detección térmica.',
        'automotive_header' => 'Automotriz y EV',
        'automotive_pruebas' => 'Bancos de Pruebas',
        'automotive_pruebas_text' => 'Modelos predictivos, detección térmica, dashboards ISO 50001.',
        'automotive_robot' => 'Celdas Robotizadas',
        'automotive_robot_text' => 'Medición de consumo, análisis por SKU, correlación con ciclos.',
        'automotive_clima' => 'Climatización',
        'automotive_clima_text' => 'Control inteligente, detección de picos, reportes automatizados.',
        'aerospace_header' => 'Aeroespacial',
        'aerospace_autoclaves' => 'Autoclaves',
        'aerospace_autoclaves_text' => 'Seguimiento térmico multizona, optimización de perfiles, análisis por receta.',
        'aerospace_camaras' => 'Cámaras Térmicas',
        'aerospace_camaras_text' => 'Monitoreo de eficiencia, validación de curvas, dashboards de trazabilidad.',
        'aerospace_bancos' => 'Bancos de Ensayo',
        'aerospace_bancos_text' => 'Integración de sensores, visualización en tiempo real, modelado predictivo.',
        'benefits_header' => 'Beneficios',
        'benefits_text' => '<ul><li>Reducción del consumo energético: 10-35%</li><li>Mayor disponibilidad operativa</li><li>Menor tasa de fallas</li><li>ROI < 4 meses</li><li>Certificaciones ISO 50001 y ESG</li></ul>',
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
        'page_title' => 'Data Science and Intelligent Monitoring',
        'intro_header' => 'Data Science and Intelligent Monitoring',
        'intro_text' => 'At SteinNova, we help industrial companies, renewable energy sectors, and electric vehicle (EV) manufacturers drastically reduce energy costs through applied data science. Using technologies like R, Python, SQL, and Power BI, we analyze your operational and energy data to identify losses, automate monitoring, and propose improvements with direct financial impact.',
        'predictive_header' => 'Predictive Analytics | Intelligent Models | 100% Remote',
        'predictive_text' => 'At Steinnova, we transform energy data into profitable decisions. We apply data science, machine learning, and advanced visualization to help you predict consumption, detect deviations, and optimize industrial processes without interruptions or on-site visits.',
        'services_header' => 'Our Services',
        'service1_header' => 'Energy Consumption Prediction',
        'service1_text' => 'Anticipate overconsumption with machine learning models trained on your operational data.<ul><li>Analysis by shift, machine, weather, or workload</li><li>Detection of trends and weekly projections</li><li>Integration with SCADA, ERP, or IoT systems</li></ul>',
        'service2_header' => 'Automatic Deviation Analysis',
        'service2_text' => 'Identify energy losses in real time.<ul><li>Algorithms that detect anomalies and alert instantly</li><li>Automated reports with probable causes and recommendations</li><li>Historical comparison to validate improvements</li></ul>',
        'service3_header' => 'Multivariable Process Optimization',
        'service3_text' => 'Maximize the efficiency of furnaces, compressors, or critical lines.<ul><li>Models that identify key variables affecting consumption</li><li>Intelligent suggestions for adjusting operational parameters</li><li>Thermal or electrical simulations based on your data</li></ul>',
        'service4_header' => 'Energy Dashboards in Power BI',
        'service4_text' => 'Visualize your efficiency in real time with interactive dashboards.<ul><li>Custom KPIs: kWh per unit, efficiency %, power factor</li><li>Dynamic visualizations by shift, plant, or zone</li><li>Remote access for managers, technicians, and maintenance</li></ul>',
        'service5_header' => 'Predictive Plant Benchmarking',
        'service5_text' => 'Compare the energy performance of your production sites.<ul><li>Normalized models to compare different lines or locations</li><li>Efficiency ranking with realistic targets</li><li>Savings projection if best performance is replicated</li></ul>',
        'service6_header' => 'Energy Analytics Consulting',
        'service6_text' => 'We guide you step-by-step to turn data into savings.<ul><li>Design of energy data architecture</li><li>Training in Python, SQL, or R for your engineering team</li><li>Implementation of automated pipelines for continuous analysis</li></ul>',
        'service7_header' => 'Technical Reports with Predictive Intelligence',
        'service7_text' => 'Obtain clear, actionable, and automated reports.<ul><li>Suggestions prioritized by economic impact</li><li>Estimated ROI calculation for each proposed improvement</li><li>Month-to-month comparison for result tracking</li></ul>',
        'why_steinnova_header' => 'Why Steinnova?',
        'why_steinnova_text' => '<ul><li>Over 10 years of experience in industrial energy efficiency</li><li>Focus on manufacturing, energy, and supply chain</li><li>Remote services, no operational interruptions</li><li>Compliant with ESG, ISO 50001, and NOM standards</li></ul>',
        'applications_header' => 'Applications',
        'manufacturing_header' => 'Manufacturing',
        'manufacturing_hornos' => 'Industrial Furnaces',
        'manufacturing_hornos_text' => 'Optimization of thermal profiles, efficiency monitoring, detection of inefficient cycles.',
        'manufacturing_aire' => 'Compressed Air',
        'manufacturing_aire_text' => 'Leak detection, efficiency analysis, energy management by shift.',
        'manufacturing_chillers' => 'Chillers and HVAC',
        'manufacturing_chillers_text' => 'Thermal load tracking, deviation alerts, integration with maintenance.',
        'manufacturing_motores' => 'Electric Motors',
        'manufacturing_motores_text' => 'Efficiency evaluation, harmonic identification, maintenance prioritization.',
        'renewables_header' => 'Renewable Energy',
        'renewables_solar' => 'Solar Plants',
        'renewables_solar_text' => 'Thermal analysis, inverter monitoring, degraded module detection.',
        'renewables_eolicas' => 'Wind Turbines',
        'renewables_eolicas_text' => 'Generation forecasting, failure prediction, efficiency evaluation.',
        'renewables_bess' => 'Storage (BESS)',
        'renewables_bess_text' => 'Cycle monitoring, efficiency analysis, thermal anomaly detection.',
        'automotive_header' => 'Automotive and EV',
        'automotive_pruebas' => 'Test Benches',
        'automotive_pruebas_text' => 'Predictive models, thermal failure detection, ISO 50001 dashboards.',
        'automotive_robot' => 'Robotic Cells',
        'automotive_robot_text' => 'Consumption measurement, SKU analysis, cycle time correlation.',
        'automotive_clima' => 'Climate Control',
        'automotive_clima_text' => 'Intelligent control, peak detection, automated reports.',
        'aerospace_header' => 'Aerospace',
        'aerospace_autoclaves' => 'Autoclaves',
        'aerospace_autoclaves_text' => 'Multizone thermal tracking, profile optimization, recipe analysis.',
        'aerospace_camaras' => 'Thermal Chambers',
        'aerospace_camaras_text' => 'Efficiency monitoring, curve validation, traceability dashboards.',
        'aerospace_bancos' => 'Test Benches',
        'aerospace_bancos_text' => 'Sensor integration, real-time visualization, predictive modeling.',
        'benefits_header' => 'Benefits',
        'benefits_text' => '<ul><li>Energy consumption reduction: 10-35%</li><li>Increased operational availability</li><li>Lower failure rates</li><li>ROI < 4 months</li><li>ISO 50001 and ESG certifications</li></ul>',
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
        'page_title' => 'Datenwissenschaft und intelligentes Monitoring',
        'intro_header' => 'Datenwissenschaft und intelligentes Monitoring',
        'intro_text' => 'Bei SteinNova helfen wir Industrieunternehmen, dem Sektor erneuerbare Energien und Herstellern von Elektrofahrzeugen (EV), ihre Energiekosten durch angewandte Datenwissenschaft drastisch zu senken. Mit Technologien wie R, Python, SQL und Power BI analysieren wir Ihre Betriebs- und Energiedaten, um Verluste zu identifizieren, die Überwachung zu automatisieren und Verbesserungen mit direktem finanziellen Einfluss vorzuschlagen.',
        'predictive_header' => 'Prädiktive Analysen | Intelligente Modelle | 100% Remote',
        'predictive_text' => 'Bei Steinnova verwandeln wir Energiedaten in profitable Entscheidungen. Wir wenden Datenwissenschaft, maschinelles Lernen und fortschrittliche Visualisierung an, um Ihnen zu helfen, Verbräuche vorherzusagen, Abweichungen zu erkennen und industrielle Prozesse ohne Unterbrechungen oder Vor-Ort-Besuche zu optimieren.',
        'services_header' => 'Unsere Dienstleistungen',
        'service1_header' => 'Vorhersage des Energieverbrauchs',
        'service1_text' => 'Verhindern Sie Überverbrauch mit maschinellen Lernmodellen, die mit Ihren Betriebsdaten trainiert wurden.<ul><li>Analyse nach Schicht, Maschine, Wetter oder Arbeitsbelastung</li><li>Erkennung von Trends und wöchentlichen Prognosen</li><li>Integration mit SCADA-, ERP- oder IoT-Systemen</li></ul>',
        'service2_header' => 'Automatische Abweichungsanalyse',
        'service2_text' => 'Erkennen Sie Energieverluste in Echtzeit.<ul><li>Algorithmen, die Anomalien erkennen und sofort warnen</li><li>Automatisierte Berichte mit wahrscheinlichen Ursachen und Empfehlungen</li><li>Historischer Vergleich zur Validierung von Verbesserungen</li></ul>',
        'service3_header' => 'Multivariable Prozessoptimierung',
        'service3_text' => 'Maximieren Sie die Effizienz von Öfen, Kompressoren oder kritischen Linien.<ul><li>Modelle, die Schlüsselfaktoren für den Verbrauch identifizieren</li><li>Intelligente Vorschläge zur Anpassung von Betriebsparametern</li><li>Thermische oder elektrische Simulationen basierend auf Ihren Daten</li></ul>',
        'service4_header' => 'Energiedashboards in Power BI',
        'service4_text' => 'Visualisieren Sie Ihre Effizienz in Echtzeit mit interaktiven Dashboards.<ul><li>Benutzerdefinierte KPIs: kWh pro Einheit, Effizienz %, Leistungsfaktor</li><li>Dynamische Visualisierungen nach Schicht, Werk oder Zone</li><li>Fernzugriff für Manager, Techniker und Wartung</li></ul>',
        'service5_header' => 'Prädiktives Benchmarking zwischen Werken',
        'service5_text' => 'Vergleichen Sie die Energieeffizienz Ihrer Produktionsstandorte.<ul><li>Normalisierte Modelle zum Vergleich verschiedener Linien oder Standorte</li><li>Effizienz-Ranking mit realistischen Zielen</li><li>Einsparprognose bei Replikation der besten Leistung</li></ul>',
        'service6_header' => 'Energieanalytik-Beratung',
        'service6_text' => 'Wir führen Sie Schritt für Schritt, um Daten in Einsparungen umzuwandeln.<ul><li>Design von Energiedatenarchitekturen</li><li>Schulung in Python, SQL oder R für Ihr Ingenieurteam</li><li>Implementierung automatisierter Pipelines für kontinuierliche Analysen</li></ul>',
        'service7_header' => 'Technische Berichte mit prädiktiver Intelligenz',
        'service7_text' => 'Erhalten Sie klare, umsetzbare und automatisierte Berichte.<ul><li>Vorschläge nach wirtschaftlichem Einfluss priorisiert</li><li>Geschätzte ROI-Berechnung für jeden vorgeschlagenen Verbesserungsvorschlag</li><li>Monatlicher Vergleich für die Ergebnisverfolgung</li></ul>',
        'why_steinnova_header' => 'Warum Steinnova?',
        'why_steinnova_text' => '<ul><li>Über 10 Jahre Erfahrung in industrieller Energieeffizienz</li><li>Fokus auf Fertigung, Energie und Lieferkette</li><li>Fernservices, keine Betriebsunterbrechungen</li><li>Konform mit ESG, ISO 50001 und NOM Standards</li></ul>',
        'applications_header' => 'Anwendungen',
        'manufacturing_header' => 'Manufacturing',
        'manufacturing_hornos' => 'Industrial Furnaces',
        'manufacturing_hornos_text' => 'Optimization of thermal profiles, efficiency monitoring, detection of inefficient cycles.',
        'manufacturing_aire' => 'Compressed Air',
        'manufacturing_aire_text' => 'Leak detection, efficiency analysis, energy management by shift.',
        'manufacturing_chillers' => 'Chillers and HVAC',
        'manufacturing_chillers_text' => 'Thermal load tracking, deviation alerts, integration with maintenance.',
        'manufacturing_motores' => 'Electric Motors',
        'manufacturing_motores_text' => 'Efficiency evaluation, harmonic identification, maintenance prioritization.',
        'renewables_header' => 'Renewable Energy',
        'renewables_solar' => 'Solar Plants',
        'renewables_solar_text' => 'Thermal analysis, inverter monitoring, degraded module detection.',
        'renewables_eolicas' => 'Wind Turbines',
        'renewables_eolicas_text' => 'Generation forecasting, failure prediction, efficiency evaluation.',
        'renewables_bess' => 'Storage (BESS)',
        'renewables_bess_text' => 'Cycle monitoring, efficiency analysis, thermal anomaly detection.',
        'automotive_header' => 'Automotive and EV',
        'automotive_pruebas' => 'Test Benches',
        'automotive_pruebas_text' => 'Predictive models, thermal failure detection, ISO 50001 dashboards.',
        'automotive_robot' => 'Robotic Cells',
        'automotive_robot_text' => 'Consumption measurement, SKU analysis, cycle time correlation.',
        'automotive_clima' => 'Climate Control',
        'automotive_clima_text' => 'Intelligent control, peak detection, automated reports.',
        'aerospace_header' => 'Aerospace',
        'aerospace_autoclaves' => 'Autoclaves',
        'aerospace_autoclaves_text' => 'Multizone thermal tracking, profile optimization, recipe analysis.',
        'aerospace_camaras' => 'Thermal Chambers',
        'aerospace_camaras_text' => 'Efficiency monitoring, curve validation, traceability dashboards.',
        'aerospace_bancos' => 'Test Benches',
        'aerospace_bancos_text' => 'Sensor integration, real-time visualization, predictive modeling.',
        'benefits_header' => 'Benefits',
        'benefits_text' => '<ul><li>Reduzierung des Energieverbrauchs: 10-35%</li><li>Erhöhte Betriebsverfügbarkeit</li><li>Niedrigere Ausfallraten</li><li>ROI < 4 Monate</li><li>ISO 50001 und ESG-Zertifizierungen</li></ul>',
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
    <meta name="description" content="SteinNova's data science and intelligent monitoring solutions for reducing energy costs in industrial, renewable energy, and electric vehicle sectors.">
    <title><?php echo $selectedTexts['page_title']; ?> - SteinNova</title>

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
        .data-section {
            background-color: #f9f9fb;
            padding: 4rem 0;
        }
        .data-img {
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
        .nav-tabs .nav-link {
            color: #343a40;
            font-weight: 500;
        }
        .nav-tabs .nav-link.active {
            color: #dc3545;
            border-bottom: 3px solid #dc3545;
        }
        .section-title {
            color: #343a40;
            margin-bottom: 2rem;
        }
        .icon {
            vertical-align: middle;
            margin-right: 8px;
        }
        ul {
            font-size: 0.95rem;
            line-height: 1.6;
        }
        .tab-content {
            padding: 1.5rem;
            background-color: #fff;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .app-card {
            background-color: #fff;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-bottom: 1.5rem;
            transition: transform 0.3s;
        }
        .app-card:hover {
            transform: translateY(-5px);
        }
        .app-card .card-icon {
            color: #dc3545;
            font-size: 2rem;
            margin-bottom: 1rem;
        }
        .app-card h5 {
            color: #dc3545;
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        .app-card p {
            color: #6c757d;
            font-size: 0.9rem;
            margin: 0;
        }
        .app-tabs .nav-link {
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-bottom: none;
            border-radius: 5px 5px 0 0;
            padding: 0.5rem 1rem;
            color: #343a40;
            font-weight: 500;
        }
        .app-tabs .nav-link.active {
            background-color: #fff;
            color: #dc3545;
            border-bottom: 1px solid #fff;
        }
    </style>
</head>
<body>
    <!-- Incluir Encabezado -->
    <div class="nav-container">
        <?php @include '../Header.php'; ?>
    </div>

    <!-- Sección Introducción -->
    <section class="data-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold section-title"><?php echo $selectedTexts['intro_header']; ?></h2>
                    <p class="text-muted lead text-justified"><?php echo $selectedTexts['intro_text']; ?></p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="../img/software1.png" alt="Ciencia de Datos" class="data-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Análisis Predictivo y Servicios -->
    <section class="py-5">
        <div class="container">
            <h2 class="fw-bold section-title text-center"><?php echo $selectedTexts['predictive_header']; ?></h2>
            <p class="text-muted lead text-justified text-center mb-5"><?php echo $selectedTexts['predictive_text']; ?></p>
            <h3 class="fw-bold section-title"><?php echo $selectedTexts['services_header']; ?></h3>
            <div class="accordion" id="servicesAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading1">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                            <i class="material-icons icon">trending_up</i><?php echo $selectedTexts['service1_header']; ?>
                        </button>
                    </h2>
                    <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#servicesAccordion">
                        <div class="accordion-body"><?php echo $selectedTexts['service1_text']; ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading2">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                            <i class="material-icons icon">warning</i><?php echo $selectedTexts['service2_header']; ?>
                        </button>
                    </h2>
                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#servicesAccordion">
                        <div class="accordion-body"><?php echo $selectedTexts['service2_text']; ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading3">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                            <i class="material-icons icon">settings</i><?php echo $selectedTexts['service3_header']; ?>
                        </button>
                    </h2>
                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#servicesAccordion">
                        <div class="accordion-body"><?php echo $selectedTexts['service3_text']; ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading4">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                            <i class="material-icons icon">dashboard</i><?php echo $selectedTexts['service4_header']; ?>
                        </button>
                    </h2>
                    <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#servicesAccordion">
                        <div class="accordion-body"><?php echo $selectedTexts['service4_text']; ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading5">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                            <i class="material-icons icon">compare_arrows</i><?php echo $selectedTexts['service5_header']; ?>
                        </button>
                    </h2>
                    <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#servicesAccordion">
                        <div class="accordion-body"><?php echo $selectedTexts['service5_text']; ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading6">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                            <i class="material-icons icon">school</i><?php echo $selectedTexts['service6_header']; ?>
                        </button>
                    </h2>
                    <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#servicesAccordion">
                        <div class="accordion-body"><?php echo $selectedTexts['service6_text']; ?></div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading7">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                            <i class="material-icons icon">description</i><?php echo $selectedTexts['service7_header']; ?>
                        </button>
                    </h2>
                    <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#servicesAccordion">
                        <div class="accordion-body"><?php echo $selectedTexts['service7_text']; ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <br>
    <!-- Sección Aplicaciones -->
    <section class="data-section">
        <div class="container">
            <h2 class="fw-bold section-title"><?php echo $selectedTexts['applications_header']; ?></h2>
            <ul class="nav nav-tabs app-tabs mb-4" id="applicationsTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="manufacturing-tab" data-bs-toggle="tab" data-bs-target="#manufacturing" type="button" role="tab" aria-controls="manufacturing" aria-selected="true"><i class="material-icons icon">factory</i><?php echo $selectedTexts['manufacturing_header']; ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="renewables-tab" data-bs-toggle="tab" data-bs-target="#renewables" type="button" role="tab" aria-controls="renewables" aria-selected="false"><i class="material-icons icon">eco</i><?php echo $selectedTexts['renewables_header']; ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="automotive-tab" data-bs-toggle="tab" data-bs-target="#automotive" type="button" role="tab" aria-controls="automotive" aria-selected="false"><i class="material-icons icon">directions_car</i><?php echo $selectedTexts['automotive_header']; ?></button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="aerospace-tab" data-bs-toggle="tab" data-bs-target="#aerospace" type="button" role="tab" aria-controls="aerospace" aria-selected="false"><i class="material-icons icon">flight</i><?php echo $selectedTexts['aerospace_header']; ?></button>
                </li>
            </ul>
            <div class="tab-content" id="applicationsTabContent">
                <div class="tab-pane fade show active" id="manufacturing" role="tabpanel" aria-labelledby="manufacturing-tab">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-3">
                            <div class="app-card">
                                <i class="material-icons card-icon">local_fire_department</i>
                                <h5><?php echo $selectedTexts['manufacturing_hornos']; ?></h5>
                                <p><?php echo $selectedTexts['manufacturing_hornos_text']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="app-card">
                                <i class="material-icons card-icon">air</i>
                                <h5><?php echo $selectedTexts['manufacturing_aire']; ?></h5>
                                <p><?php echo $selectedTexts['manufacturing_aire_text']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="app-card">
                                <i class="material-icons card-icon">ac_unit</i>
                                <h5><?php echo $selectedTexts['manufacturing_chillers']; ?></h5>
                                <p><?php echo $selectedTexts['manufacturing_chillers_text']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="app-card">
                                <i class="material-icons card-icon">electric_bolt</i>
                                <h5><?php echo $selectedTexts['manufacturing_motores']; ?></h5>
                                <p><?php echo $selectedTexts['manufacturing_motores_text']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="renewables" role="tabpanel" aria-labelledby="renewables-tab">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="app-card">
                                <i class="material-icons card-icon">solar_power</i>
                                <h5><?php echo $selectedTexts['renewables_solar']; ?></h5>
                                <p><?php echo $selectedTexts['renewables_solar_text']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="app-card">
                                <i class="material-icons card-icon">wind_power</i>
                                <h5><?php echo $selectedTexts['renewables_eolicas']; ?></h5>
                                <p><?php echo $selectedTexts['renewables_eolicas_text']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="app-card">
                                <i class="material-icons card-icon">battery_charging_full</i>
                                <h5><?php echo $selectedTexts['renewables_bess']; ?></h5>
                                <p><?php echo $selectedTexts['renewables_bess_text']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="automotive" role="tabpanel" aria-labelledby="automotive-tab">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="app-card">
                                <i class="material-icons card-icon">science</i>
                                <h5><?php echo $selectedTexts['automotive_pruebas']; ?></h5>
                                <p><?php echo $selectedTexts['automotive_pruebas_text']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="app-card">
                                <i class="material-icons card-icon">smart_toy</i>
                                <h5><?php echo $selectedTexts['automotive_robot']; ?></h5>
                                <p><?php echo $selectedTexts['automotive_robot_text']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="app-card">
                                <i class="material-icons card-icon">thermostat</i>
                                <h5><?php echo $selectedTexts['automotive_clima']; ?></h5>
                                <p><?php echo $selectedTexts['automotive_clima_text']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="aerospace" role="tabpanel" aria-labelledby="aerospace-tab">
                    <div class="row g-4">
                        <div class="col-md-6 col-lg-4">
                            <div class="app-card">
                                <i class="material-icons card-icon">kitchen</i>
                                <h5><?php echo $selectedTexts['aerospace_autoclaves']; ?></h5>
                                <p><?php echo $selectedTexts['aerospace_autoclaves_text']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="app-card">
                                <i class="material-icons card-icon">thermostat_auto</i>
                                <h5><?php echo $selectedTexts['aerospace_camaras']; ?></h5>
                                <p><?php echo $selectedTexts['aerospace_camaras_text']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="app-card">
                                <i class="material-icons card-icon">engineering</i>
                                <h5><?php echo $selectedTexts['aerospace_bancos']; ?></h5>
                                <p><?php echo $selectedTexts['aerospace_bancos_text']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Beneficios -->
    <section class="py-5">
        <div class="container">
            <h2 class="fw-bold section-title"><?php echo $selectedTexts['benefits_header']; ?></h2>
            <div class="text-muted mb-4"><?php echo $selectedTexts['benefits_text']; ?></div>
            <h2 class="fw-bold section-title mt-5"><?php echo $selectedTexts['why_steinnova_header']; ?></h2>
            <div class="text-muted"><?php echo $selectedTexts['why_steinnova_text']; ?></div>
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