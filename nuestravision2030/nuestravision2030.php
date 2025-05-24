<?php
// Definir la ruta base para los enlaces
if (!defined('BASE_PATH')) {
    define('BASE_PATH', '/');
}
if (!defined('STEINMETAL_PATH')) {
    define('STEINMETAL_PATH', '/steinmetal/');
}

// Establecer el idioma por defecto a Inglés
$idioma = isset($_GET['lang']) && in_array($_GET['lang'], ['es', 'en', 'de']) ? $_GET['lang'] : 'en';

// Textos por idioma
$texto = [
    'es' => [
        'page_title' => 'Nuestra Visión 2030',
        'vision_header' => 'Nuestra Visión 2030',
        'vision_text' => 'En Stein Metal, miramos hacia el futuro con una visión clara: liderar la transformación industrial a través de soluciones inteligentes en aislamiento termoeléctrico, mecanizados CNC de alta precisión y materiales avanzados como mica, aleaciones de cobre y bronce al aluminio. Nuestra propuesta se basa en la excelencia, la innovación sostenible y la confiabilidad operativa, adaptándonos a las nuevas demandas de industrias en evolución como la fundición avanzada, la movilidad eléctrica (EV), la aeronáutica de nueva generación, y los sistemas de energía limpia. Nos anticipamos a los desafíos del mañana colaborando estrechamente con nuestros clientes para desarrollar soluciones personalizadas que integren eficiencia energética, automatización y resistencia a condiciones extremas. Con estándares globales de calidad, ética y seguridad, Stein Metal se posiciona como un socio estratégico clave para empresas que buscan escalar tecnológicamente en un mundo cada vez más competitivo y conectado. Impulsa tu industria hacia el futuro con Stein Metal: tecnología, precisión y visión global rumbo al 2030.',
        'contact_button' => 'Solicitar Información'
    ],
    'en' => [
        'page_title' => 'Our Vision 2030',
        'vision_header' => 'Our Vision 2030',
        'vision_text' => 'At Stein Metal, we look to the future with a clear vision: to lead industrial transformation through intelligent solutions in thermoelectric insulation, high-precision CNC machining, and advanced materials such as mica, copper alloys, and aluminum bronze. Our approach is grounded in excellence, sustainable innovation, and operational reliability, adapting to the evolving demands of industries like advanced foundry, electric mobility (EV), next-generation aeronautics, and clean energy systems. We anticipate tomorrow\'s challenges by collaborating closely with our clients to develop customized solutions that integrate energy efficiency, automation, and resilience to extreme conditions. With global standards of quality, ethics, and safety, Stein Metal positions itself as a key strategic partner for companies aiming to scale technologically in an increasingly competitive and connected world. Drive your industry toward the future with Stein Metal: technology, precision, and a global vision for 2030.',
        'contact_button' => 'Request Information'
    ],
    'de' => [
        'page_title' => 'Unsere Vision 2030',
        'vision_header' => 'Unsere Vision 2030',
        'vision_text' => 'Bei Stein Metal blicken wir mit einer klaren Vision in die Zukunft: die industrielle Transformation durch intelligente Lösungen in der thermoelektrischen Isolierung, hochpräziser CNC-Bearbeitung und fortschrittlicher Materialien wie Glimmer, Kupferlegierungen und Aluminiumbronze anzuführen. Unser Ansatz basiert auf Exzellenz, nachhaltiger Innovation und betrieblicher Zuverlässigkeit und passt sich den sich wandelnden Anforderungen von Industrien wie fortschrittlichem Gießereiwesen, Elektromobilität (EV), Luftfahrt der nächsten Generation und sauberen Energiesystemen an. Wir gehen die Herausforderungen von morgen an, indem wir eng mit unseren Kunden zusammenarbeiten, um maßgeschneiderte Lösungen zu entwickeln, die Energieeffizienz, Automatisierung und Widerstandsfähigkeit gegen extreme Bedingungen integrieren. Mit globalen Standards für Qualität, Ethik und Sicherheit positioniert sich Stein Metal als strategischer Schlüsselpartner für Unternehmen, die in einer zunehmend wettbewerbsorientierten und vernetzten Welt technologisch wachsen möchten. Bringen Sie Ihre Industrie mit Stein Metal in die Zukunft: Technologie, Präzision und globale Vision für 2030.',
        'contact_button' => 'Informationen anfordern'
    ]
];

$selectedTexts = $texto[$idioma];
?>

<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Stein Metal's vision for 2030, leading industrial transformation with advanced thermoelectric solutions and precision machining.">
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

    <!-- Font Awesome for Button Icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Estilos específicos de nuestravision2030.php -->
    <style>
        .vision-section {
            background-color: #f8f9fa;
        }
        .vision-img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
        .text-justified {
            text-align: justify;
        }
    </style>
</head>
<body>
    <!-- Incluir Encabezado -->
    <div class="nav-container">
        <?php @include '../Header.php'; ?>
    </div>

    <!-- Sección Nuestra Visión 2030 -->
    <section class="vision-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold text-dark mb-4"><?php echo $selectedTexts['vision_header']; ?></h2>
                    <p class="text-muted lead text-justified"><?php echo $selectedTexts['vision_text']; ?></p>
                    <a href="../contacto.php?lang=<?php echo $idioma; ?>" class="btn btn-primary text-white">
                        <i class="fa-solid fa-paper-plane text-white me-2"></i> <?php echo $selectedTexts['contact_button']; ?>
                    </a>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="../img/vision.jpg" alt="Stein Metal Visión 2030" class="vision-img">
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