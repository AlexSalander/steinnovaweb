<?php
$lang = $_GET['lang'] ?? 'es';

$texts = [
    'es' => [
        'titulo' => 'Piezas Mecanizadas de CNC',
        'descripcion' => 'En SteinNova, nos especializamos en la fabricación de piezas mecanizadas CNC de alta precisión utilizando piezas de flogopita y moscovita. Estos materiales ofrecen excelentes propiedades de aislamiento eléctrico y resistencia térmica, siendo ideales para aplicaciones en entornos industriales exigentes.',
        'ventajas' => 'Ventajas',
        'ventajaItems' => [
            'Aislamiento Eléctrico Superior: Alta resistencia dieléctrica, esencial para componentes eléctricos y electrónicos.',
            'Resistencia a Altas Temperaturas: Soportan temperaturas extremas sin perder funcionalidad.',
            'Durabilidad y Precisión: Mecanizado CNC con tolerancias estrictas y acabados de calidad.',
            'Aplicaciones Versátiles: Para motores, transformadores, generadores y más.',
        ],
        'aplicaciones' => 'Aplicaciones',
        'aplicacionItems' => [
            'Vehículos Eléctricos: Aislamiento en baterías, inversores y motores.',
            'Sistemas de Alto Voltaje: Uso en transformadores y equipos eléctricos.',
            'Energías Renovables: Aislamiento en sistemas solares y eólicos.',
            'Electrodomésticos: Uso en resistencias de hornos, calentadores y secadoras.',
        ],
        'galeria' => 'Galería de Aplicaciones',
        'solicitarInfo' => 'Solicitar información',
        'exportamos' => 'Experiencia, tecnología avanzada y compromiso con la calidad nos respaldan.',
        'pieza1_titulo' => 'Alta Precisión CNC',
        'pieza1_texto' => 'Fabricación precisa con maquinaria CNC para componentes críticos.',
        'pieza2_titulo' => 'Material Aislante Premium',
        'pieza2_texto' => 'Utilizamos piezas de flogopita y moscovita para mayor eficiencia.',
        'pieza3_titulo' => 'Versatilidad Industrial',
        'pieza3_texto' => 'Soluciones para vehículos eléctricos, energías renovables y más.',
        'pieza4_titulo' => 'Resistencia Extrema',
        'pieza4_texto' => 'Piezas que resisten altas temperaturas y tensiones eléctricas.',
    ],
    'en' => [
        'titulo' => 'CNC Machined Parts',
        'descripcion' => 'At SteinNova, we specialize in manufacturing high-precision CNC machined parts using phlogopite and muscovite mica. These materials offer excellent electrical insulation and thermal resistance properties, making them ideal for demanding industrial applications.',
        'ventajas' => 'Advantages',
        'ventajaItems' => [
            'Superior Electrical Insulation: High dielectric strength, essential for electrical and electronic components.',
            'High-Temperature Resistance: Withstands extreme temperatures without losing functionality.',
            'Durability and Precision: CNC machining with tight tolerances and high-quality finishes.',
            'Versatile Applications: Suitable for motors, transformers, generators, and more.',
        ],
        'aplicaciones' => 'Applications',
        'aplicacionItems' => [
            'Electric Vehicles: Insulation in batteries, inverters, and motors.',
            'High-Voltage Systems: Used in transformers and electrical equipment.',
            'Renewable Energy: Insulation in solar and wind systems.',
            'Appliances: Used in resistances for ovens, heaters, and dryers.',
        ],
        'galeria' => 'Application Gallery',
        'solicitarInfo' => 'Request Information',
        'exportamos' => 'Experience, advanced technology, and commitment to quality back us up.',
        'pieza1_titulo' => 'High-Precision CNC',
        'pieza1_texto' => 'Precise manufacturing with CNC machinery for critical components.',
        'pieza2_titulo' => 'Premium Insulating Material',
        'pieza2_texto' => 'We use phlogopite and muscovite mica for greater efficiency.',
        'pieza3_titulo' => 'Industrial Versatility',
        'pieza3_texto' => 'Solutions for electric vehicles, renewable energy, and more.',
        'pieza4_titulo' => 'Extreme Resistance',
        'pieza4_texto' => 'Parts that withstand high temperatures and electrical stresses.',
    ],
    'de' => [
        'titulo' => 'CNC-gefertigte Teile',
        'descripcion' => 'Bei SteinNova sind wir auf die Herstellung hochpräziser CNC-gefertigter Teile mit Phlogopit- und Muskovit-Mika spezialisiert. Diese Materialien bieten hervorragende elektrische Isolations- und thermische Beständigkeitseigenschaften, ideal für anspruchsvolle industrielle Anwendungen.',
        'ventajas' => 'Vorteile',
        'ventajaItems' => [
            'Hervorragende elektrische Isolierung: Hohe Durchschlagfestigkeit, essenziell für elektrische und elektronische Komponenten.',
            'Hohe Temperaturbeständigkeit: Hält extremen Temperaturen stand, ohne die Funktionalität zu verlieren.',
            'Langlebigkeit und Präzision: CNC-Bearbeitung mit engen Toleranzen und hochwertigen Oberflächen.',
            'Vielseitige Anwendungen: Geeignet für Motoren, Transformatoren, Generatoren und mehr.',
        ],
        'aplicaciones' => 'Anwendungen',
        'aplicacionItems' => [
            'Elektrofahrzeuge: Isolierung in Batterien, Wechselrichtern und Motoren.',
            'Hochspannungssysteme: Verwendung in Transformatoren und elektrischen Geräten.',
            'Erneuerbare Energien: Isolierung in Solar- und Windkraftsystemen.',
            'Haushaltsgeräte: Verwendung in Widerständen für Öfen, Heizgeräte und Trockner.',
        ],
        'galeria' => 'Anwendungsgalerie',
        'solicitarInfo' => 'Information anfordern',
        'exportamos' => 'Erfahrung, fortschrittliche Technologie und Engagement für Qualität unterstützen uns.',
        'pieza1_titulo' => 'Hochpräzises CNC',
        'pieza1_texto' => 'Präzise Fertigung mit CNC-Maschinen für kritische Komponenten.',
        'pieza2_titulo' => 'Premium-Isoliermaterial',
        'pieza2_texto' => 'Wir verwenden Phlogopit- und Muskovit-Mika für höhere Effizienz.',
        'pieza3_titulo' => 'Industrielle Vielseitigkeit',
        'pieza3_texto' => 'Lösungen für Elektrofahrzeuge, erneuerbare Energien und mehr.',
        'pieza4_titulo' => 'Extreme Beständigkeit',
        'pieza4_texto' => 'Teile, die hohen Temperaturen und elektrischen Belastungen standhalten.',
    ],
];

$selectedTexts = $texts[$lang] ?? $texts['es'];
?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $selectedTexts['titulo']; ?> - SteinNova</title>
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

    <!-- Estilos específicos -->
    <style>
        .mica-section {
            background-color: #f8f9fa;
        }

        .mica-img {
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

        .custom-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 12px;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .custom-table thead th {
            background-color: #e63946;
            color: white;
            text-align: left;
            padding: 12px 20px;
            font-size: 1.1rem;
            border-radius: 8px;
        }

        .custom-table tbody tr {
            background: #f9faff;
            box-shadow: 0 2px 6px rgba(74, 144, 226, 0.15);
            border-radius: 8px;
        }

        .custom-table tbody td {
            padding: 14px 20px;
            vertical-align: middle;
            font-size: 1rem;
            color: #333;
            border: none;
            position: relative;
        }

        .custom-table tbody td .icon {
            color: #4A90E2;
            margin-right: 10px;
        }

        .card-img-top {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 0.5rem;
        }

        .galeria-img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 0.5rem;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="nav-container">
        <?php include '../Header.php'; ?>
    </div>

    <!-- Sección Introductoria -->
    <section class="mica-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold text-dark mb-4"><?php echo $selectedTexts['titulo']; ?></h2>
                    <p class="text-muted lead text-justified"><?php echo $selectedTexts['descripcion']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Sección de Piezas -->
    <section class="container py-5" id="pieza1">
        <h3 class="mt-4 text-center"><strong><?php echo $selectedTexts['exportamos']; ?></strong></h3>
        <br><br>
        <div class="row g-4">
            <?php for ($i = 1; $i <= 4; $i++): ?>
                <div class="col-md-3 col-6" id="pieza<?php echo $i; ?>">
                    <div class="card h-100 shadow-sm border-0">
                        <?php
                        $formatos = ['png', 'jpg'];
                        $rutaImagen = "";
                        foreach ($formatos as $formato) {
                            $ruta = "../img/P{$i}.{$formato}";
                            if (file_exists($ruta)) {
                                $rutaImagen = $ruta;
                                break;
                            }
                        }
                        ?>
                        <a href="#"><img src="<?php echo $rutaImagen; ?>" class="card-img-top rounded-4"
                                alt="<?php echo $selectedTexts["pieza{$i}_titulo"]; ?>"></a>
                        <div class="card-body">
                            <h5 class="card-title text-danger"><?php echo $selectedTexts["pieza{$i}_titulo"]; ?></h5>
                            <p class="card-text"><?php echo $selectedTexts["pieza{$i}_texto"]; ?></p>
                        </div>
                    </div>
                </div>
            <?php endfor; ?>
        </div>
    </section>

    <!-- Sección Tabla -->
    <section class="py-5">
        <div class="container">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th><i class="fas fa-check-circle"></i> <?php echo $selectedTexts['ventajas']; ?></th>
                        <th><i class="fas fa-cogs"></i> <?php echo $selectedTexts['aplicaciones']; ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $maxRows = max(count($selectedTexts['ventajaItems']), count($selectedTexts['aplicacionItems']));
                    for ($i = 0; $i < $maxRows; $i++):
                        $ventaja = $selectedTexts['ventajaItems'][$i] ?? '';
                        $aplicacion = $selectedTexts['aplicacionItems'][$i] ?? '';
                        ?>
                        <tr>
                            <td><i class="fas fa-check icon"></i> <?php echo $ventaja; ?></td>
                            <td><i class="fas fa-tools icon"></i> <?php echo $aplicacion; ?></td>
                        </tr>
                    <?php endfor; ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Sección de Galería -->
    <section class="pt-5 pb-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold"><?php echo $selectedTexts['galeria']; ?></h2>
            <div class="row g-4 justify-content-center">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <div class="col-6 col-md-4 col-lg-2">
                        <img src="../img/Pz<?php echo $i; ?>.png" class="galeria-img" alt="Pieza <?php echo $i; ?>">
                    </div>
                <?php endfor; ?>
            </div>
            <div class="text-center mt-4">
                <a href="../contacto.php" class="btn btn-primary text-white">
                    <i class="fa-solid fa-paper-plane text-white me-2"></i>
                    <?php echo $selectedTexts['solicitarInfo']; ?>
                </a>
            </div>
        </div>
    </section>

    <?php include '../Footer.php'; ?>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
</body>

</html>