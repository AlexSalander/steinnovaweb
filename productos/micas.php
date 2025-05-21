<?php
$lang = $_GET['lang'] ?? 'es';

$texts = [
    'es' => [
        'titulo' => 'Rollos de Mica de Flogopita',
        'descripcion1' => 'Sección de fieltro aislante de mica con fibras cerámicas especiales. Flexible y resistente al calor, no emite olor ni humo, y soporta hasta 1200°C.',
        'descripcion2' => 'Con baja conductividad térmica y alta resistencia termoeléctrica, mejora la eficiencia térmica de hornos industriales. Ideal para aislar crisoles en fundición.',
        'ventajas' => 'Ventajas',
        'ventajaItems' => [
            'Flexibilidad y resistencia térmica hasta 1200°C.',
            'No emite humo ni olor.',
            'Baja conductividad térmica.',
            'Ideal para aplicaciones industriales de alta temperatura.',
        ],
        'aplicaciones' => 'Aplicaciones',
        'aplicacionItems' => [
            'Aislamiento en hornos industriales.',
            'Material para crisoles de fundición.',
            'Protección térmica en procesos metalúrgicos.',
            'Componentes aislantes en equipos eléctricos.',
        ],
        'galeria' => 'Galería de Aplicaciones',           // es
        'solicitarInfo' => 'Solicitar información',
        'anterior' => 'Anterior',
        'siguiente' => 'Siguiente',

        'exportamos' => 'Exportamos a Estados Unidos, Canadá y Europa.',
        'mica1_titulo' => 'Fieltro de mica con fibras cerámicas',
        'mica1_texto' => 'Fieltro de mica con fibras cerámicas, flexible y resistente a altas temperaturas sin producir humo ni olor. Ideal para aislamiento térmico industrial.',
        'mica2_titulo' => 'Fieltro de mica con capa de fibra cerámica',
        'mica2_texto' => 'Fieltro de mica con capa de fibra cerámica. Flexible, soporta hasta 1200°C sin humo ni olor. Alta resistencia termoeléctrica y baja conductividad térmica.',
        'mica3_titulo' => 'Malla de Acero Inoxidable en Mica',
        'mica3_texto' => 'Malla fina de acero inoxidable SS-316 entre capas de mica de phlogopita. Se conecta con la unidad de control electrónico del horno de inducción para alarmas precisas.',
        'mica4_titulo' => 'Barrera de Gas con Lámina de Mica y Acero',
        'mica4_texto' => 'Aislamiento con lámina de acero inoxidable entre capas de mica de phlogopita. Barrera de vapor que evita la condensación de zinc en crisoles y protege equipos.',
    ],
    'en' => [
        'titulo' => 'Mica Felt',
        'descripcion1' => 'Section of mica insulating felt with special ceramic fibers. Flexible and heat resistant, does not emit odor or smoke, and withstands up to 1200°C.',
        'descripcion2' => 'With low thermal conductivity and high thermo-electrical resistance, it improves thermal efficiency of industrial furnaces. Ideal for insulating casting crucibles.',
        'ventajas' => 'Advantages',
        'ventajaItems' => [
            'Flexibility and thermal resistance up to 1200°C.',
            'Does not emit smoke or odor.',
            'Low thermal conductivity.',
            'Ideal for high-temperature industrial applications.',
        ],
        'galeria' => 'Application Gallery',               // en
        'solicitarInfo' => 'Request Information',
        'anterior' => 'Previous',
        'siguiente' => 'Next',

        'aplicaciones' => 'Applications',
        'aplicacionItems' => [
            'Insulation in industrial furnaces.',
            'Material for casting crucibles.',
            'Thermal protection in metallurgical processes.',
            'Insulating components in electrical equipment.',
        ],
        'exportamos' => 'We export to the United States, Canada, and Europe.',
        'mica1_titulo' => 'Phlogopite Mica Paper with Ceramic Fiber Layer',
        'mica1_texto' => 'Mica felt with ceramic fibers, flexible and resistant to high temperatures without producing smoke or odor. Ideal for industrial thermal insulation.',
        'mica2_titulo' => 'Phlogopite Mica Paper with Ceramic Fiber Layer',
        'mica2_texto' => 'Mica felt with a ceramic fiber layer. Flexible, withstands up to 1200°C without smoke or odor. High thermo-electrical resistance and low thermal conductivity.',
        'mica3_titulo' => 'Iron Mica Wire Mesh',
        'mica3_texto' => 'Fine SS-316 stainless steel mesh embedded between phlogopite mica layers. Connects to the electronic measurement/alarm unit in the induction furnace control panel for precise alarms.',
        'mica4_titulo' => 'Iron Mica Foil Gas Barrier',
        'mica4_texto' => 'Insulation with stainless steel foil between phlogopite mica layers. Vapor barrier ideal for preventing zinc condensation in crucibles and protects equipment effectively.',
    ],
    'de' => [
        'titulo' => 'Mikafilter',
        'descripcion1' => 'Abschnitt aus isolierendem Mikafilter mit speziellen Keramikfasern. Flexibel und hitzebeständig, ohne Rauch oder Geruch, bis zu 1200°C beständig.',
        'descripcion2' => 'Mit niedriger Wärmeleitfähigkeit und hoher thermoelektrischer Beständigkeit verbessert es die thermische Effizienz industrieller Öfen. Ideal zur Isolierung von Gießkesseln.',
        'ventajas' => 'Vorteile',
        'ventajaItems' => [
            'Flexibilität und Hitzebeständigkeit bis 1200°C.',
            'Kein Rauch oder Geruch.',
            'Niedrige Wärmeleitfähigkeit.',
            'Ideal für Hochtemperaturanwendungen in der Industrie.',
        ],
        'galeria' => 'Anwendungsgalerie',                  // de
        'solicitarInfo' => 'Information anfordern',
        'anterior' => 'Zurück',
        'siguiente' => 'Weiter',

        'aplicaciones' => 'Anwendungen',
        'aplicacionItems' => [
            'Isolierung in Industrieöfen.',
            'Material für Gießkessel.',
            'Wärmeschutz bei metallurgischen Prozessen.',
            'Isolierende Komponenten in elektrischen Geräten.',
        ],
        'exportamos' => 'Wir exportieren in die USA, Kanada und Europa.',
        'mica1_titulo' => 'Phlogopit-Micapapier mit Keramikfaserschicht',
        'mica1_texto' => 'Mikafilter mit Keramikfasern, flexibel und hitzebeständig ohne Rauch oder Geruch. Ideal für industrielle Wärmedämmung.',
        'mica2_titulo' => 'Phlogopit-Micapapier mit Keramikfaserschicht',
        'mica2_texto' => 'Mikafilter mit Keramikfaserschicht. Flexibel, hält bis zu 1200°C ohne Rauch oder Geruch aus. Hohe thermoelektrische Beständigkeit und geringe Wärmeleitfähigkeit.',
        'mica3_titulo' => 'Eisen Mica Wire Mesh',
        'mica3_texto' => 'Feines SS-316-Edelstahlgitter, eingebettet zwischen Phlogopit-Micaschichten. Verbindet sich mit der elektronischen Mess-/Alarm-Einheit im Steuerungsfeld des Induktionsofens.',
        'mica4_titulo' => 'Eisen Mica Foil Gas Barrier',
        'mica4_texto' => 'Isolierung mit Edelstahlfolie zwischen Phlogopit-Micaschichten. Dampfsperre, ideal zur Vermeidung von Zinkkondensation in Gießkesseln und schützt Geräte effektiv.',
    ],
];


$selectedTexts = $texts[$lang] ?? $texts['es'];
?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $selectedTexts['titulo']; ?></title>
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
</head>

<body>
    <style>
        .custom-table {
            width: 100%;
            border-collapse: separate;
            border-spacing: 0 12px;
            /* espacio entre filas */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .custom-table thead th {
            background-color: rgb(210, 21, 21);
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
            color: rgb(0, 0, 0);
            margin-right: 10px;
        }

        .icon {
            font-size: 1.2rem;
            /* más pequeño, ajusta según prefieras */
            vertical-align: middle;
            /* para que quede alineado con el texto */
            color: #4A90E2;
            margin-right: 10px;
        }
    </style>

    <div class="nav-container">
        <?php include '../Header.php'; ?>
    </div>

    <div class="container mt-5 mb-5">
        <h1 class="text-center mb-4 fw-bold"><?php echo $selectedTexts['titulo']; ?></h1>
        <p class="lead text-justify"><?php echo $selectedTexts['descripcion1']; ?></p>
        <p class="text-justify"><?php echo $selectedTexts['descripcion2']; ?></p>


        <table class="custom-table mt-4">
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
                    $ventaja = isset($selectedTexts['ventajaItems'][$i]) ? $selectedTexts['ventajaItems'][$i] : '';
                    $aplicacion = isset($selectedTexts['aplicacionItems'][$i]) ? $selectedTexts['aplicacionItems'][$i] : '';
                    ?>
                    <tr>
                        <td><i class="fas fa-check icon"></i> <?php echo $ventaja; ?></td>
                        <td><i class="fas fa-tools icon"></i> <?php echo $aplicacion; ?></td>
                    </tr>
                <?php endfor; ?>
            </tbody>
        </table>

        <h3 class="mt-4 text-center"><strong><?php echo $selectedTexts['exportamos']; ?></strong></h3>

        <div class="text-center mt-4">
            <a href="../contacto.php" class="btn btn-danger">
                <i class="fa-solid fa-paper-plane text-white me-2"></i>
                <?php echo $selectedTexts['solicitarInfo']; ?>
            </a>
        </div>
    </div>
    <!-- Seccion de micas-->
    <section class="container py-5" id="mica1">
        <div class="row g-4">
            <div class="col-md-3 col-6" id="mica1">
                <div class="card h-100 shadow-sm border-0">
                    <a href="#"><img src="../img/Mica1.png" class="card-img-top rounded-4"
                            alt="<?php echo $selectedTexts['mica1_titulo']; ?>"></a>
                    <div class="card-body">
                        <h5 class="card-title text-danger"><?php echo $selectedTexts['mica1_titulo']; ?></h5>
                        <p class="card-text"><?php echo $selectedTexts['mica1_texto']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6" id="mica2">
                <div class="card h-100 shadow-sm border-0">
                    <a href="#"><img src="../img/Mica2.png" class="card-img-top rounded-4"
                            alt="<?php echo $selectedTexts['mica2_titulo']; ?>"></a>
                    <div class="card-body">
                        <h5 class="card-title text-danger"><?php echo $selectedTexts['mica2_titulo']; ?></h5>
                        <p class="card-text"><?php echo $selectedTexts['mica2_texto']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6" id="mica3">
                <div class="card h-100 shadow-sm border-0">
                    <a href="#"><img src="../img/Mica3.png" class="card-img-top rounded-4"
                            alt="<?php echo $selectedTexts['mica3_titulo']; ?>"></a>
                    <div class="card-body">
                        <h5 class="card-title text-danger"><?php echo $selectedTexts['mica3_titulo']; ?></h5>
                        <p class="card-text"><?php echo $selectedTexts['mica3_texto']; ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-6" id="mica4">
                <div class="card h-100 shadow-sm border-0">
                    <a href="#"><img src="../img/Mica4.jpeg" class="card-img-top rounded-4"
                            alt="<?php echo $selectedTexts['mica4_titulo']; ?>"></a>
                    <div class="card-body">
                        <h5 class="card-title text-danger"><?php echo $selectedTexts['mica4_titulo']; ?></h5>
                        <p class="card-text"><?php echo $selectedTexts['mica4_texto']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Seccion de carrusel-->
    <section class="pt-5 pb-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-4 fw-bold"><?php echo $selectedTexts['galeria']; ?></h2>

            <style>
                .galeria-img {
                    width: 100%;
                    height: 150px;
                    /* o ajusta a 180px, 200px si prefieres más alto */
                    object-fit: cover;
                    border-radius: 0.5rem;
                    box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
                }
            </style>

            <div class="row g-4 justify-content-center">
                <div class="col-6 col-md-4 col-lg-2">
                    <img src="../img/M1.png" class="galeria-img" alt="Mica 1">
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <img src="../img/M2.png" class="galeria-img" alt="Mica 2">
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <img src="../img/M3.png" class="galeria-img" alt="Mica 3">
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <img src="../img/M4.png" class="galeria-img" alt="Mica 4">
                </div>
                <div class="col-6 col-md-4 col-lg-2">
                    <img src="../img/M5.png" class="galeria-img" alt="Mica 5">
                </div>
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