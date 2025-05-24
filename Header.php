<?php
// Definir la ruta base para los enlaces si no están definidas
if (!defined('BASE_PATH')) {
    define('BASE_PATH', '/');
}
if (!defined('STEINMETAL_PATH')) {
    define('STEINMETAL_PATH', '/steinmetal/');
}

// Iniciar sesión para usar idioma almacenado
session_start();

// Establecer el idioma: primero desde $idioma, luego desde GET, luego desde sesión, con inglés como predeterminado
if (isset($idioma) && in_array($idioma, ['es', 'en', 'de'])) {
    $idioma = $idioma;
    $_SESSION['lang'] = $idioma;
} elseif (isset($_GET['lang']) && in_array($_GET['lang'], ['es', 'en', 'de'])) {
    $idioma = $_GET['lang'];
    $_SESSION['lang'] = $idioma;
} elseif (isset($_SESSION['lang']) && in_array($_SESSION['lang'], ['es', 'en', 'de'])) {
    $idioma = $_SESSION['lang'];
} else {
    $idioma = 'en';
    $_SESSION['lang'] = $idioma;
}

// Textos por idioma para el header
$headerTexto = [
    'es' => [
        'empowering' => 'Potenciamos las industrias',
        'home' => 'INICIO',
        'about' => 'Acerca de la Empresa',
        'team' => 'Nuestro Equipo',
        'vision' => 'Nuestra Visión 2030',
        'products' => 'Productos',
        'services' => 'Servicios',
        'industries' => 'Industrias',
        'contact' => '¡Contáctanos!',
        'company' => 'SteinNova',
        'mica_flogopita' => 'Rollos de Mica Flogopita',
        'cintas' => 'Cintas de Mica y Fibra de Vidrio',
        'aislamientos' => 'Aislamientos para EV',
        'piezas' => 'Piezas Mecanizadas CNC',
        'fibra' => 'Fibra Cerámica',
        'plato' => 'Plato Vibrador Hornos de Inducción',
        'vibro3' => 'Vibrocompactador Neumático Giratorio 3 pistones',
        'vibro2' => 'Vibrocompactador Neumático Giratorio 2 pistones',
        'analiticaDatosI' => 'Analítica de Datos',
        'instalaciones' => 'Instalaciones Electricas',
        'software_industrial' => 'Software Industrial',
        'automotriz' => 'Automotriz y EV',
        'fundicion' => 'Fundición y Siderurgia',
        'petroleo' => 'Petróleo y Gas',
        'aeronautica' => 'Aeronáutica',
        'altovoltaje' => 'Alto Voltaje',
        'industria_Energías Renovables' => 'Energías Renovables',
        'agujas' => 'Agujas de Acero Inoxidable',
        'ciencia_datos_monitoreoI' => 'Ciencia de Datos y Monitoreo inteligente'
    ],
    'en' => [
        'empowering' => 'We Empower Industries',
        'home' => 'HOME',
        'about' => 'About the Company',
        'team' => 'Our Team',
        'vision' => 'Our Vision 2030',
        'products' => 'Products',
        'services' => 'Services',
        'industries' => 'Industries',
        'contact' => 'Contact Us!',
        'company' => 'SteinNova',
        'mica_flogopita' => 'Flogopite Mica Rolls',
        'cintas' => 'Mica and Fiberglass Tapes',
        'aislamientos' => 'EV Insulation',
        'piezas' => 'CNC Machined Parts',
        'fibra' => 'Ceramic Fiber',
        'plato' => 'Induction Furnace Vibrating Plate',
        'vibro3' => 'Rotary Pneumatic Rammer 3 Pistons',
        'vibro2' => 'Rotary Pneumatic Rammer 2 Pistons',
        'analiticaDatosI' => 'Data Analytics',
        'instalaciones' => 'Electrical Installations',
        'software_industrial' => 'Industrial Software',
        'automotriz' => 'Automotive and EV',
        'fundicion' => 'Foundry and Steel',
        'petroleo' => 'Oil and Gas',
        'aeronautica' => 'Aeronautics',
        'altovoltaje' => 'High Voltage',
        'industria_Energías Renovables' => 'Renewable energy',
        'agujas' => 'Stainless Steel Needles',
        'ciencia_datos_monitoreoI' => 'Data Science and Intelligent Monitoring'
    ],
    'de' => [
        'empowering' => 'Wir stärken Branchen',
        'home' => 'Zuhause',
        'about' => 'Über das Unternehmen',
        'team' => 'Unser Team',
        'vision' => 'Unsere Vision 2030',
        'products' => 'Produkte',
        'services' => 'Dienstleistungen',
        'industries' => 'Industrien',
        'contact' => 'Kontaktieren Sie uns!',
        'company' => 'SteinNova',
        'mica_flogopita' => 'Flogopit-Mica-Rollen',
        'cintas' => 'Glimmer- und Glasfaserbänder',
        'aislamientos' => 'EV-Isolierungen',
        'piezas' => 'CNC-bearbeitete Teile',
        'fibra' => 'Keramikfaser',
        'plato' => 'Induktionsofen Vibrationsplatte',
        'vibro3' => 'Rotationsrammer mit 3 Kolben',
        'vibro2' => 'Rotationsrammer mit 2 Kolben',
        'analiticaDatosI' => 'Datenanalyse',
        'instalaciones' => 'Elektrische Installationen',
        'software_industrial' => 'Industrielle Software',
        'automotriz' => 'Automobil und EV',
        'fundicion' => 'Gießerei und Stahl',
        'petroleo' => 'Öl und Gas',
        'aeronautica' => 'Luftfahrt',
        'altovoltaje' => 'Hochspannung',
        'industria_Energías Renovables' => 'Erneuerbare Energien',
        'agujas' => 'Nadeln aus Edelstahl',
        'ciencia_datos_monitoreoI' => 'Datenwissenschaft und intelligentes Monitoring'
    ]
];

$headerTexts = $headerTexto[$idioma];

$flagImages = [
    'es' => BASE_PATH . 'img/flag-3.png',
    'en' => BASE_PATH . 'img/flag-1.png',
    'de' => BASE_PATH . 'img/flag-4.png'
];

$currentFlag = $flagImages[$idioma];
?>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

<!-- BARRA SUPERIOR -->
<section class="bar bar-3 bar--sm bg-dark" style="font-family: 'Montserrat';">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="bar__module">
                    <span class="h3 font-weight-bold text-white">
                        <?php echo $headerTexts['empowering']; ?>
                    </span>
                </div>
            </div>
            <div class="col-lg-6 text-right text-left-xs text-left-sm text-white">
                <div class="bar__module">
                    <ul class="menu-horizontal list-inline">
                        <li class="dropdown dropdown--absolute">
                            <span class="dropdown__trigger text-white">
                                <img alt="Flag" class="flag" src="<?php echo $currentFlag; ?>" />
                                <?php
                                switch (strtolower($idioma)) {
                                    case 'es':
                                        echo 'ESP';
                                        break;
                                    case 'en':
                                        echo 'ENG';
                                        break;
                                    case 'de':
                                        echo 'GER';
                                        break;
                                    default:
                                        echo strtoupper($idioma);
                                }
                                ?>
                            </span>
                            <div class="dropdown__container">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-lg-2 dropdown__content" style="margin-left: -1rem;">
                                            <ul class="menu-vertical text-left list-unstyled" style="padding-left: 0;">
                                                <?php
                                                foreach (['es' => 'ESP', 'en' => 'ENG', 'de' => 'GER'] as $lang => $label) {
                                                    if ($lang !== strtolower($idioma)) {
                                                        $currentUrl = strtok($_SERVER['REQUEST_URI'], '?');
                                                        echo '<li><a href="' . $currentUrl . '?lang=' . $lang . '"><img alt="Flag" class="flag" src="' . $flagImages[$lang] . '" /> ' . $label . '</a></li>';
                                                    }
                                                }
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- MENÚ -->
<nav id="menu1" class="bar bar--sm bar-1 hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-lg-1 col-md-2 hidden-xs">
                <div class="bar__module">
                    <a href="<?php echo BASE_PATH; ?>index.php?lang=<?php echo $idioma; ?>">
                        <img class="logo logo-dark" alt="logo" src="<?php echo BASE_PATH; ?>img/Logo1.png" />
                    </a>
                </div>
            </div>
            <div class="col-lg-11 col-md-12 text-right text-left-xs text-left-sm">
                <div class="bar__module">
                    <ul class="menu-horizontal text-left list-inline">
                        <li class="dropdown"><a href="<?php echo BASE_PATH; ?>index.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['home']; ?></a></li>
                        
                        <li class="dropdown">
                            <span class="dropdown__trigger"><?php echo $headerTexts['company']; ?></span>
                            <div class="dropdown__container">
                                <div class="container">
                                    <div class="row">
                                        <div class="dropdown__content col-lg-4 col-md-5">
                                            <ul class="menu-vertical">
                                                <li><a href="<?php echo BASE_PATH; ?>steinnova/acercaempresa.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['about']; ?></a></li>
                                                <li><a href="<?php echo BASE_PATH; ?>nuestroequipo.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['team']; ?></a></li>
                                                <li><a href="<?php echo BASE_PATH; ?>nuestravision2030/nuestravision2030.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['vision']; ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown">
                            <span class="dropdown__trigger"><?php echo $headerTexts['products']; ?></span>
                            <div class="dropdown__container">
                                <div class="container">
                                    <div class="row">
                                        <div class="dropdown__content col-lg-6 col-md-5">
                                            <ul class="menu-vertical">
                                                <li><a href="<?php echo BASE_PATH; ?>productos/micas.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['mica_flogopita']; ?></a></li>
                                                <li><a href="<?php echo BASE_PATH; ?>productos/cintas.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['cintas']; ?></a></li>
                                                <li><a href="<?php echo BASE_PATH; ?>productos/aislamientos.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['aislamientos']; ?></a></li>
                                                <li><a href="<?php echo BASE_PATH; ?>productos/piezas.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['piezas']; ?></a></li>
                                                <li><a href="<?php echo BASE_PATH; ?>productos/agujas.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['agujas']; ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown">
                            <span class="dropdown__trigger"><?php echo $headerTexts['services']; ?></span>
                            <div class="dropdown__container">
                                <div class="container">
                                    <div class="row">
                                        <div class="dropdown__content col-lg-4 col-md-5">
                                            <ul class="menu-vertical">
                                                <li><a href="<?php echo BASE_PATH; ?>servicios/analiticaDatosIndustriales.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['analiticaDatosI']; ?></a></li>
                                                <li><a href="<?php echo BASE_PATH; ?>servicios/softwareIndustrial.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['software_industrial']; ?></a></li>
                                                <li><a href="<?php echo BASE_PATH; ?>servicios/cienciaDatosMonitoreoI.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['ciencia_datos_monitoreoI']; ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="dropdown">
                            <span class="dropdown__trigger"><?php echo $headerTexts['industries']; ?></span>
                            <div class="dropdown__container">
                                <div class="container">
                                    <div class="row">
                                        <div class="dropdown__content col-lg-4 col-md-5">
                                            <ul class="menu-vertical">
                                                <li><a href="<?php echo BASE_PATH; ?>Industrias/Automotriz.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['automotriz']; ?></a></li>
                                                <li><a href="<?php echo BASE_PATH; ?>Industrias/Fundicion.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['fundicion']; ?></a></li>
                                                <li><a href="<?php echo BASE_PATH; ?>Industrias/Petroleo.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['petroleo']; ?></a></li>
                                                <li><a href="<?php echo BASE_PATH; ?>Industrias/Aeronautica.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['aeronautica']; ?></a></li>
                                                <li><a href="<?php echo BASE_PATH; ?>Industrias/Altovoltaje.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['altovoltaje']; ?></a></li>
                                                <li><a href="<?php echo BASE_PATH; ?>Industrias/Energias.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['industria_Energías Renovables']; ?></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li><a class="btn btn--sm type--uppercase" href="<?php echo BASE_PATH; ?>contacto.php?lang=<?php echo $idioma; ?>" class="dropdown-item"><?php echo $headerTexts['contact']; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>