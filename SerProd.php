<?php
// Define el idioma (puedes cambiarlo dinámicamente)
$idioma = isset($idioma) ? $idioma : 'es';

$texto = [
    'es' => [
        'servicios_header' => 'Servicios',
        'analitica_datos_industriales' => 'Analítica de Datos',
        'Software_Industrial' => 'Software Industrial',
        'CienciaDYMonitI' => 'Ciencia de Datos y Monitoreo Inteligente',
        'productos_header' => 'Productos',
        'mica_flogopita' => 'Rollos de Mica Flogopita',
        'aislamiento' => 'Aislamiento Eléctrico',
        'piezas_cnc' => 'Piezas Mecanizadas CNC',
        'cintas' => 'Cintas de Mica Flogopita y Sintética',
        'fibra' => 'Fibra Cerámica',
        'descripcion_productos' => 'Descubre nuestra variedad de productos.',
        'mica_rigida' => 'Mica Rígida',
        'placas_mica' => 'Placas de Mica',
        'tubos_mica' => 'Tubos de Mica'
    ],
    'en' => [
        'servicios_header' => 'Services',
        'analitica_datos_industriales' => 'Data Analytics',
        'Software_Industrial' => 'Industrial Software',
        'CienciaDYMonitI' => 'Data Science and Intelligent Monitoring',
        'productos_header' => 'Products',
        'mica_flogopita' => 'Flogopite Mica Rolls',
        'aislamiento' => 'Electrical Insulation',
        'piezas_cnc' => 'CNC Machined Parts',
        'cintas' => 'Flogopite and Synthetic Mica Tapes',
        'fibra' => 'Ceramic Fiber',
        'descripcion_productos' => 'Discover our variety of products.',
        'mica_rigida' => 'Rigid Mica',
        'placas_mica' => 'Mica Plates',
        'tubos_mica' => 'Mica Tubes'
    ],
    'de' => [
        'servicios_header' => 'Dienstleistungen',
        'analitica_datos_industriales' => 'Datenanalyse',
        'Software_Industrial' => 'Industriesoftware',
        'CienciaDYMonitI' => 'Datenwissenschaft und intelligentes Monitoring',
        'productos_header' => 'Produkte',
        'aislamiento' => 'Elektrische Isolierung',
        'piezas_cnc' => 'CNC-bearbeitete Teile',
        'cintas' => 'Flogopit- und synthetische Mica-Bänder',
        'fibra' => 'Keramische Faser',
        'descripcion_productos' => 'Entdecken Sie unsere Produktvielfalt.',
        'mica_flogopita' => 'Flogopit-Mica-Rollen',
        'mica_rigida' => 'Starre Mica',
        'placas_mica' => 'Mica-Platten',
        'tubos_mica' => 'Mica-Rohre'
    ]
];

$selectedTexts = $texto[$idioma];
?>
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($idioma); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo htmlspecialchars($selectedTexts['servicios_header'] . ' & ' . $selectedTexts['productos_header']); ?></title>

    <!-- Bootstrap CSS (cambia la versión según necesites) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .carousel-control-prev,
        .carousel-control-next {
            width: 50px;
            height: 50px;
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 50%;
            top: 50%;
            transform: translateY(-50%);
            transition: background-color 0.3s ease;
        }

        .carousel-control-prev:hover,
        .carousel-control-next:hover {
            background-color: rgba(0, 0, 0, 0.6);
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-size: 70% 70%;
            filter: invert(1); /* icono blanco */
        }
        .card video.card-img-top {
            width: 100%;
            height: auto;
            object-fit: cover;
            max-height: 300px;
        }
    </style>
</head>
<body>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold text-dark"><?php echo htmlspecialchars($selectedTexts['servicios_header']); ?></h2>
            </div>
        </div>
        <div class="row g-4 justify-content-center">
            <?php
            $servicios = [
                ['href' => '/servicios/softwareIndustrial.php?lang=' . urlencode($idioma), 'img' => 'img/SoftwareIndustrial.mp4', 'label' => $selectedTexts['Software_Industrial']],
                ['href' => '/servicios/analiticaDatosIndustriales.php?lang=' . urlencode($idioma), 'img' => 'img/InstalacionesE.mp4', 'label' => $selectedTexts['analitica_datos_industriales']],
                ['href' => '/servicios/cienciaDatosMonitoreoI.php?lang=' . urlencode($idioma), 'img' => 'img/CienciaD.mp4', 'label' => $selectedTexts['CienciaDYMonitI']],
            ];

            foreach ($servicios as $item) {
                ?>
                <div class="col-md-4 col-sm-6">
                    <a href="<?php echo htmlspecialchars($item['href']); ?>" class="text-decoration-none">
                        <div class="card shadow-sm border-0 rounded-4 overflow-hidden">
                            <video class="card-img-top" autoplay muted loop playsinline>
                                <source src="<?php echo htmlspecialchars($item['img']); ?>" type="video/mp4">
                                Tu navegador no soporta la reproducción de videos.
                            </video>
                            <div class="card-body text-center">
                                <h5 class="card-title text-dark"><?php echo htmlspecialchars($item['label']); ?></h5>
                            </div>
                        </div>
                    </a>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</section>

<section class="py-5 bg-light products-section">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold display-5"><?php echo htmlspecialchars($selectedTexts['productos_header']); ?></h2>
                <p class="text-muted"><?php echo htmlspecialchars($selectedTexts['descripcion_productos']); ?></p>
            </div>
        </div>

        <div id="productsCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php
                $productos = [
                    ['href' => 'productos/micas.php?lang=' . urlencode($idioma), 'img' => 'img/mica.jpg', 'label' => $selectedTexts['mica_flogopita']],
                    ['href' => 'productos/piezas.php?lang=' . urlencode($idioma), 'img' => 'img/cnc1.jpg', 'label' => $selectedTexts['piezas_cnc']],
                    ['href' => 'productos/cintas.php?lang=' . urlencode($idioma), 'img' => 'img/cinta.jpg', 'label' => $selectedTexts['cintas']],
                    ['href' => 'productos/M2.php?lang=' . urlencode($idioma), 'img' => 'img/mica1_1.png', 'label' => $selectedTexts['mica_rigida']],
                    ['href' => 'productos/Placas.php?lang=' . urlencode($idioma), 'img' => 'img/Placa1.png', 'label' => $selectedTexts['placas_mica']],
                    ['href' => 'productos/aislamientos.php?lang=' . urlencode($idioma), 'img' => 'img/Tubos1.png', 'label' => $selectedTexts['tubos_mica']]
                ];

                // Agrupamos de a 2 productos por slide
                $groupedProductos = array_chunk($productos, 2);

                foreach ($groupedProductos as $index => $group) {
                    $active = $index === 0 ? 'active' : '';
                    echo '<button type="button" data-bs-target="#productsCarousel" data-bs-slide-to="' . $index . '" class="' . $active . '" aria-label="Slide ' . ($index + 1) . '"></button>';
                }
                ?>
            </div>

            <div class="carousel-inner">
                <?php
                foreach ($groupedProductos as $index => $group) {
                    $active = $index === 0 ? 'active' : '';
                    echo '<div class="carousel-item ' . $active . '">
                            <div class="row justify-content-center">';
                    foreach ($group as $item) {
                        ?>
                        <div class="col-md-6 col-sm-12 mb-4 d-flex justify-content-center">
                            <a href="<?php echo htmlspecialchars($item['href']); ?>" class="text-decoration-none w-75">
                                <div class="card shadow rounded-4 h-100">
                                    <img src="<?php echo htmlspecialchars($item['img']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($item['label']); ?>">
                                    <div class="card-body text-center">
                                        <h5 class="card-title text-dark fw-semibold"><?php echo htmlspecialchars($item['label']); ?></h5>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <?php
                    }
                    echo '</div></div>';
                }
                ?>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#productsCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#productsCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
</section>

<!-- Bootstrap JS Bundle (Popper + Bootstrap JS) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
