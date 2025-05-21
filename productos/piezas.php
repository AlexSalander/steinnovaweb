<?php
$lang = $_GET['lang'] ?? 'es';

$texts = [
    'es' => [
        'titulo' => 'Piezas Mecanizadas de CNC',
        'descripcion1' => 'En SteinNova, nos especializamos en la fabricación de piezas mecanizadas CNC de alta precisión utilizando piezas de flogopita y moscovita. Estos materiales ofrecen excelentes propiedades de aislamiento eléctrico y resistencia térmica, siendo ideales para aplicaciones en entornos industriales exigentes.',
        'descripcion2' => '',
        'ventajas' => 'Beneficios de Nuestras Piezas de Piezas',
        'ventajaItems' => [
            'Aislamiento Eléctrico Superior: Alta resistencia dieléctrica, esencial para componentes eléctricos y electrónicos.',
            'Resistencia a Altas Temperaturas: Soportan temperaturas extremas sin perder funcionalidad.',
            'Durabilidad y Precisión: Mecanizado CNC con tolerancias estrictas y acabados de calidad.',
            'Aplicaciones Versátiles: Para motores, transformadores, generadores y más.',
        ],
        'aplicaciones' => 'Aplicaciones Destacadas',
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
];

$selectedTexts = $texts[$lang] ?? $texts['es'];
?>

<!-- El resto del HTML permanece igual al original -->
<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">

<head>
    <meta charset="UTF-8">
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

        .card-img-top {
            width: 100%;
            /* Ajusta el ancho al contenedor */
            height: 200px;
            /* Altura fija para todas */
            object-fit: cover;
            /* Recorta y ajusta la imagen para mantener proporciones */
        }

        .galeria-img {
            width: 150px;
            /* Ajusta el ancho a un valor fijo */
            height: 150px;
            /* Ajusta la altura a un valor fijo */
            object-fit: cover;
            /* Asegura que la imagen llene el espacio sin distorsionarse */
            border-radius: 8px;
            /* Opcional: agrega esquinas redondeadas */
        }
    </style>
    <div class="nav-container">
        <?php include '../Header.php'; ?>
    </div>

    <div class="container mt-5 mb-5">
        <h1 class="text-center mb-4 fw-bold"><?php echo $selectedTexts['titulo']; ?></h1>
        <p class="lead text-justify"><?php echo $selectedTexts['descripcion1']; ?></p>
        <?php if (!empty($selectedTexts['descripcion2'])): ?>
            <p class="text-justify"><?php echo $selectedTexts['descripcion2']; ?></p>
        <?php endif; ?>

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

        <h3 class="mt-4 text-center"><strong><?php echo $selectedTexts['exportamos']; ?></strong></h3>

        <div class="text-center mt-4">
            <a href="../contacto.php" class="btn btn-danger">
                <i class="fa-solid fa-paper-plane text-white me-2"></i>
                <?php echo $selectedTexts['solicitarInfo']; ?>
            </a>
        </div>
    </div>

    <!-- Tarjetas (Piezas) -->
    <section class="container py-5" id="pieza1">
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

    <!-- Galería -->
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
        </div>
    </section>

    <?php include '../Footer.php'; ?>
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