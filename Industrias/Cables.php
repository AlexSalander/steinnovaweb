<?php
$lang = $_GET['lang'] ?? 'es';

$texts = [
    'es' => [
        'titulo' => 'Fabricación de Cables',
        'descripcion' => 'En Stein Metal ofrecemos soluciones especializadas en aislamiento de mica para la fabricación de cables, proporcionando materiales de alta calidad que aseguran excelente resistencia térmica, dieléctrica y mecánica. Nuestras soluciones con mica de flogopita y muscovita destacan por su rendimiento superior y cumplimiento con normativas internacionales del sector eléctrico y electrónico.',
        'aplicaciones_titulo' => 'Aplicaciones Clave de la Mica en la Fabricación de Cables',
        'aplicaciones' => [
            'Aislamiento para cables de alta temperatura: Ideal para cables que operan en ambientes extremos, garantizando resistencia y durabilidad.',
            'Cables resistentes al fuego: La mica proporciona aislamiento esencial para cables que requieren resistencia a altas temperaturas y llamas, previniendo propagación del fuego.',
            'Cableado interno para equipos industriales: Protección efectiva en condiciones operativas extremas, reduciendo el riesgo de fallas eléctricas.',
            'Cables para maquinaria pesada: Proporciona resistencia mecánica adicional, reduciendo el desgaste en ambientes industriales agresivos.',
            'Cables eléctricos en aplicaciones automotrices: Seguridad y rendimiento asegurados en vehículos eléctricos e híbridos.',
        ],
        'beneficio' => 'En Stein Metal, nuestros productos están diseñados para mejorar el rendimiento eléctrico, aumentar la seguridad operativa y cumplir rigurosamente con los estándares industriales más exigentes.',
        'solicitarInfo' => 'Solicitar Información',
    ],
    'en' => [
        'titulo' => 'Cable Manufacturing',
        'descripcion' => 'At Stein Metal, we offer specialized mica insulation solutions for cable manufacturing, providing high-quality materials that ensure excellent thermal, dielectric, and mechanical resistance. Our solutions with phlogopite and muscovite mica stand out for their superior performance and compliance with international standards in the electrical and electronic sectors.',
        'aplicaciones_titulo' => 'Key Applications of Mica in Cable Manufacturing',
        'aplicaciones' => [
            'Insulation for high-temperature cables: Ideal for cables operating in extreme environments, ensuring resistance and durability.',
            'Fire-resistant cables: Mica provides essential insulation for cables requiring resistance to high temperatures and flames, preventing fire propagation.',
            'Internal wiring for industrial equipment: Effective protection in extreme operating conditions, reducing the risk of electrical failures.',
            'Cables for heavy machinery: Provides additional mechanical resistance, reducing wear in aggressive industrial environments.',
            'Electrical cables in automotive applications: Ensures safety and performance in electric and hybrid vehicles.',
        ],
        'beneficio' => 'At Stein Metal, our products are designed to enhance electrical performance, increase operational safety, and rigorously comply with the most demanding industrial standards.',
        'solicitarInfo' => 'Request Information',
    ],
    'de' => [
        'titulo' => 'Kabelherstellung',
        'descripcion' => 'Bei Stein Metal bieten wir spezialisierte Glimmer-Isolierungslösungen für die Kabelherstellung, mit hochwertigen Materialien, die hervorragende thermische, dielektrische und mechanische Beständigkeit gewährleisten. Unsere Lösungen mit Phlogopit- und Muskovit-Glimmer zeichnen sich durch ihre überlegene Leistung und die Einhaltung internationaler Standards im Elektro- und Elektroniksektor aus.',
        'aplicaciones_titulo' => 'Wichtige Anwendungen von Glimmer in der Kabelherstellung',
        'aplicaciones' => [
            'Isolierung für Hochtemperaturkabel: Ideal für Kabel, die in extremen Umgebungen betrieben werden, für Beständigkeit und Langlebigkeit.',
            'Feuerfeste Kabel: Glimmer bietet essenzielle Isolierung für Kabel, die Widerstand gegen hohe Temperaturen und Flammen erfordern, und verhindert die Ausbreitung von Feuer.',
            'Interne Verkabelung für Industrieanlagen: Effektiver Schutz unter extremen Betriebsbedingungen, reduziert das Risiko von elektrischen Ausfällen.',
            'Kabel für schwere Maschinen: Bietet zusätzliche mechanische Beständigkeit, reduziert Verschleiß in aggressiven Industrieumgebungen.',
            'Elektrische Kabel in Automobilanwendungen: Gewährleistet Sicherheit und Leistung in Elektro- und Hybridfahrzeugen.',
        ],
        'beneficio' => 'Bei Stein Metal sind unsere Produkte darauf ausgelegt, die elektrische Leistung zu verbessern, die Betriebssicherheit zu erhöhen und die strengsten Industriestandards einzuhalten.',
        'solicitarInfo' => 'Information Anfordern',
    ],
];

$selectedTexts = $texts[$lang] ?? $texts['es'];
?>

<!DOCTYPE html>
<html lang="<?php echo htmlspecialchars($lang); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $selectedTexts['titulo']; ?> - Stein Metal</title>
    <meta name="description" content="Soluciones especializadas en aislamiento de mica para la fabricación de cables.">
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

    <!-- Estilos -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            color: #2c3e50;
            line-height: 1.7;
        }

        h1 {
            font-weight: 700;
            font-size: 2.8rem;
            color: #1a1a2e;
            margin-bottom: 1rem;
            position: relative;
        }

        h1::after {
            content: '';
            width: 80px;
            height: 4px;
            background-color: #e63946;
            display: block;
            margin: 12px auto 0;
            border-radius: 2px;
        }

        .main-container {
            padding-top: 80px;
            animation: fadeIn 0.8s ease-in;
        }

        .section-wrapper {
            background: #ffffff;
            border-radius: 20px;
            padding: 50px 40px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.08);
            transition: transform 0.4s ease;
        }

        .section-wrapper:hover {
            transform: translateY(-6px);
            box-shadow: 0 24px 70px rgba(0, 0, 0, 0.12);
        }

        .feature-large {
            border-radius: 20px;
            width: 100%;
            object-fit: cover;
            box-shadow: 0 12px 30px rgba(0, 0, 0, 0.15);
            transition: transform 0.4s ease;
        }

        .feature-large:hover {
            transform: scale(1.02);
        }

        .text-block ul {
            list-style: none;
            padding-left: 0;
            margin-bottom: 1.5rem;
        }

        .text-block ul li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 12px;
            font-size: 1.05rem;
            color: #444;
        }

        .text-block ul li::before {
            content: '';
            display: inline-block;
            width: 18px;
            height: 18px;
            margin-right: 10px;
            background-color: #198754;
            -webkit-mask: url('https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/check-circle-fill.svg') no-repeat center;
            mask: url('https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/check-circle.svg') no-repeat center;
            -webkit-mask-size: contain;
            mask-size: contain;
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

        .back-to-top {
            position: fixed;
            bottom: 25px;
            right: 25px;
            background-color: #1a1a2e;
            color: white;
            padding: 12px;
            border-radius: 50%;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
            z-index: 999;
            transition: all 0.3s ease-in-out;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .back-to-top:hover {
            background-color: #0f0f1a;
            transform: scale(1.1);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>

<body>
    <a id="start"></a>

    <div class="nav-container">
        <?php include '../Header.php'; ?>
    </div>

    <div class="main-container">
        <div class="container my-5">
            <div class="section-wrapper">
                <div class="text-center mb-5">
                    <h1><?php echo $selectedTexts['titulo']; ?></h1>
                    <p class="mt-3 mx-auto" style="max-width: 800px;">
                        <?php echo nl2br($selectedTexts['descripcion']); ?>
                    </p>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="../img/cables.jpg" alt="Industria de Cables" class="feature-large">
                    </div>
                    <div class="col-lg-6">
                        <div class="text-block">
                            <p><strong><?php echo $selectedTexts['aplicaciones_titulo']; ?>:</strong></p>
                            <ul class="mt-3">
                                <?php foreach ($selectedTexts['aplicaciones'] as $aplicacion): ?>
                                    <li><?php echo htmlspecialchars($aplicacion); ?></li>
                                <?php endforeach; ?>
                            </ul>
                            <p><?php echo nl2br($selectedTexts['beneficio']); ?></p>
                            <a href="../contacto.php" class="btn btn-primary text-white">
                                <i class="fa-solid fa-paper-plane text-white me-2"></i>
                                <?php echo $selectedTexts['solicitarInfo']; ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php include '../Footer.php'; ?>
    </div>

    <a class="back-to-top" href="#start">
        <span class="material-icons">arrow_upward</span>
    </a>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/easypiechart.min.js"></script>
    <script src="../js/parallax.js"></script>
    <script src="../js/typed.min.js"></script>
    <script src="../js/datepicker.js"></script>
    <script src="../js/ytplayer.min.js"></script>
    <script src="../js/lightbox.min.js"></script>
    <script src="../js/granim.min.js"></script>
    <script src="../js/jquery.steps.min.js"></script>
    <script src="../js/countdown.min.js"></script>
    <script src="../js/spectragram.min.js"></script>
    <script src="../js/scripts.js"></script>
</body>

</html>