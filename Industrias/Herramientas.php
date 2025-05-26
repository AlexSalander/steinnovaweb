<?php
$lang = $_GET['lang'] ?? 'es';

$texts = [
    'es' => [
        'titulo' => 'Herramientas Eléctricas y Neumáticas',
        'descripcion' => 'En Stein Metal, ofrecemos soluciones avanzadas de aislamiento de mica para herramientas eléctricas y neumáticas, utilizando materiales de alta calidad como flogopita y muscovita. Nuestros productos garantizan resistencia térmica, dieléctrica y mecánica superior, optimizando el rendimiento, la seguridad y la durabilidad en aplicaciones industriales exigentes, cumpliendo con normativas internacionales.',
        'aplicaciones_titulo' => 'Aplicaciones de la Mica en Herramientas Eléctricas y Neumáticas',
        'beneficio' => 'Nuestros productos en Stein Metal están diseñados para mejorar la eficiencia operativa, extender la vida útil de las herramientas y cumplir con los estándares industriales más rigurosos, asegurando un rendimiento confiable en entornos extremos.',
        'solicitarInfo' => 'Solicitar Información',
        'categorias' => [
            'Taladros Eléctricos' => [
                'Aislamiento del conmutador del motor',
                'Escudos térmicos alrededor del motor',
                'Separadores entre bobinados',
                'Aislantes en interruptores de gatillo',
                'Componentes aislantes en cajas de engranajes',
            ],
            'Sierras Circulares' => [
                'Aislamiento del estator y rotor',
                'Protectores térmicos cerca de la hoja',
                'Aislantes en los módulos de control de velocidad',
                'Separadores en los sistemas de freno eléctrico',
                'Barreras térmicas en carcasas de motor',
            ],
            'Amoladoras Angulares' => [
                'Aislamiento de colectores del motor',
                'Discos separadores entre componentes eléctricos',
                'Escudos contra chispas en la carcasa',
                'Aislantes en sistemas de control electrónico',
                'Soportes de escobillas de carbón',
            ],
            'Lijadoras Eléctricas' => [
                'Aislamiento térmico en motores de alta velocidad',
                'Separadores en sistemas de recolección de polvo',
                'Componentes aislantes en circuitos de control',
                'Barreras EMI en componentes electrónicos',
                'Aislantes en interruptores de velocidad variable',
            ],
            'Fresadoras y Rebajadoras' => [
                'Aislantes en el sistema de control de profundidad',
                'Escudos térmicos alrededor del husillo',
                'Aislamiento en motores de alta potencia',
                'Separadores de componentes electrónicos',
                'Juntas en sistemas de refrigeración',
            ],
            'Soldadoras de Arco (MMA)' => [
                'Aislantes de transformadores principales',
                'Placas separadoras en portaelectrodos',
                'Escudos térmicos en carcasas internas',
                'Componentes aislantes en sistemas de control de corriente',
                'Barreras EMC para circuitos de control',
            ],
            'Soldadoras MIG/MAG' => [
                'Aislamiento en transformadores de potencia',
                'Barreras térmicas en mecanismos de alimentación de alambre',
                'Separadores en sistemas de refrigeración líquida',
                'Aislantes en circuitos de control de pulso',
                'Soportes en pistolas y boquillas',
            ],
            'Soldadoras TIG' => [
                'Componentes aislantes en portaelectrodos',
                'Aislamiento en transformadores de alta frecuencia',
                'Separadores en sistemas de refrigeración',
                'Escudos térmicos en pedales de control',
                'Aislantes en antorchas refrigeradas por agua',
            ],
            'Cortadoras de Plasma' => [
                'Aislamiento térmico en boquillas',
                'Escudos en conductores de alta corriente',
                'Separadores en sistemas de refrigeración',
                'Aislantes en circuitos de encendido por alta frecuencia',
                'Barreras térmicas en antorchas',
            ],
            'Taladros de Columna' => [
                'Aislamiento en motores monofásicos y trifásicos',
                'Componentes aislantes en sistemas de iluminación',
                'Separadores en cajas de cambios',
                'Escudos térmicos en sistemas de control de velocidad',
                'Aislantes en paneles de control',
            ],
            'Tornos para Metal' => [
                'Aislamiento en motores de alta potencia',
                'Separadores en cajas de control electrónico',
                'Aislantes en sistemas de refrigeración',
                'Componentes dieléctricos en variadores de frecuencia',
                'Placas aislantes en tableros de control',
            ],
            'Sierras de Cinta' => [
                'Aislamiento de motores principales',
                'Separadores en sistemas de tensión de la hoja',
                'Aislantes en interruptores de seguridad',
                'Escudos térmicos en sistemas de freno',
                'Componentes dieléctricos en circuitos de control',
            ],
            'Compresores Eléctricos' => [
                'Aislamiento en motores de arranque',
                'Separadores en presostatos',
                'Escudos térmicos en sistemas de protección',
                'Componentes aislantes en válvulas solenoides',
                'Juntas en sistemas de control',
            ],
            'Compresores de Aire' => [
                'Aislamiento en motores eléctricos',
                'Separadores en sistemas de presión',
                'Aislantes en presostatos y solenoides',
                'Componentes en sistemas de control',
                'Escudos térmicos en válvulas',
            ],
            'Cortacéspedes Eléctricos' => [
                'Aislamiento en motores de alta potencia',
                'Separadores en sistemas de control',
                'Aislantes en interruptores de seguridad',
                'Componentes en sistemas de protección',
                'Escudos térmicos en carcasas de motor',
            ],
            'Motosierras Eléctricas' => [
                'Aislamiento en motores de alta velocidad',
                'Separadores en sistemas de lubricación',
                'Aislantes en interruptores de gatillo',
                'Componentes en sistemas de freno de cadena',
                'Escudos térmicos en cajas de engranajes',
            ],
            'Cortabordes Eléctricos' => [
                'Aislamiento en motores de alta velocidad',
                'Separadores en sistemas de transmisión',
                'Aislantes en interruptores de control',
                'Componentes en sistemas de protección',
                'Escudos térmicos en carcasas',
            ],
        ],
    ],
    'en' => [
        'titulo' => 'Electric and Pneumatic Tools',
        'descripcion' => 'At Stein Metal, we provide advanced mica insulation solutions for electric and pneumatic tools, using high-quality materials such as phlogopite and muscovite. Our products ensure superior thermal, dielectric, and mechanical resistance, optimizing performance, safety, and durability in demanding industrial applications, while complying with international standards.',
        'aplicaciones_titulo' => 'Applications of Mica in Electric and Pneumatic Tools',
        'beneficio' => 'Our products at Stein Metal are designed to enhance operational efficiency, extend tool lifespan, and meet the most stringent industrial standards, ensuring reliable performance in extreme environments.',
        'solicitarInfo' => 'Request Information',
        'categorias' => [
            'Electric Drills' => [
                'Motor commutator insulation',
                'Thermal shields around the motor',
                'Separators between windings',
                'Insulators in trigger switches',
                'Insulating components in gearboxes',
            ],
            'Circular Saws' => [
                'Stator and rotor insulation',
                'Thermal protectors near the blade',
                'Insulators in speed control modules',
                'Separators in electric brake systems',
                'Thermal barriers in motor housings',
            ],
            'Angle Grinders' => [
                'Motor collector insulation',
                'Separator discs between electrical components',
                'Spark shields in the housing',
                'Insulators in electronic control systems',
                'Carbon brush holders',
            ],
            'Electric Sanders' => [
                'Thermal insulation in high-speed motors',
                'Separators in dust collection systems',
                'Insulating components in control circuits',
                'EMI barriers in electronic components',
                'Insulators in variable speed switches',
            ],
            'Milling Machines and Routers' => [
                'Insulators in depth control systems',
                'Thermal shields around the spindle',
                'Insulation in high-power motors',
                'Separators for electronic components',
                'Joints in cooling systems',
            ],
            'Arc Welders (MMA)' => [
                'Insulation for main transformers',
                'Separator plates in electrode holders',
                'Thermal shields in internal housings',
                'Insulating components in current control systems',
                'EMC barriers for control circuits',
            ],
            'MIG/MAG Welders' => [
                'Insulation in power transformers',
                'Thermal barriers in wire feed mechanisms',
                'Separators in liquid cooling systems',
                'Insulators in pulse control circuits',
                'Supports in guns and nozzles',
            ],
            'TIG Welders' => [
                'Insulating components in electrode holders',
                'Insulation in high-frequency transformers',
                'Separators in cooling systems',
                'Thermal shields in control pedals',
                'Insulators in water-cooled torches',
            ],
            'Plasma Cutters' => [
                'Thermal insulation in nozzles',
                'Shields in high-current conductors',
                'Separators in cooling systems',
                'Insulators in high-frequency ignition circuits',
                'Thermal barriers in torches',
            ],
            'Column Drills' => [
                'Insulation in single-phase and three-phase motors',
                'Insulating components in lighting systems',
                'Separators in gearboxes',
                'Thermal shields in speed control systems',
                'Insulators in control panels',
            ],
            'Metal Lathes' => [
                'Insulation in high-power motors',
                'Separators in electronic control boxes',
                'Insulators in cooling systems',
                'Dielectric components in frequency inverters',
                'Insulating plates in control panels',
            ],
            'Band Saws' => [
                'Insulation of main motors',
                'Separators in blade tension systems',
                'Insulators in safety switches',
                'Thermal shields in brake systems',
                'Dielectric components in control circuits',
            ],
            'Electric Compressors' => [
                'Insulation in starter motors',
                'Separators in pressure switches',
                'Thermal shields in protection systems',
                'Insulating components in solenoid valves',
                'Joints in control systems',
            ],
            'Air Compressors' => [
                'Insulation in electric motors',
                'Separators in pressure systems',
                'Insulators in pressure switches and solenoids',
                'Components in control systems',
                'Thermal shields in valves',
            ],
            'Electric Lawn Mowers' => [
                'Insulation in high-power motors',
                'Separators in control systems',
                'Insulators in safety switches',
                'Components in protection systems',
                'Thermal shields in motor housings',
            ],
            'Electric Chainsaws' => [
                'Insulation in high-speed motors',
                'Separators in lubrication systems',
                'Insulators in trigger switches',
                'Components in chain brake systems',
                'Thermal shields in gearboxes',
            ],
            'Electric Trimmers' => [
                'Insulation in high-speed motors',
                'Separators in transmission systems',
                'Insulators in control switches',
                'Components in protection systems',
                'Thermal shields in housings',
            ],
        ],
    ],
    'de' => [
        'titulo' => 'Elektrische und Pneumatische Werkzeuge',
        'descripcion' => 'Bei Stein Metal bieten wir fortschrittliche Glimmer-Isolierungslösungen für elektrische und pneumatische Werkzeuge, die hochwertige Materialien wie Phlogopit und Muskovit verwenden. Unsere Produkte gewährleisten überlegene thermische, dielektrische und mechanische Beständigkeit, optimieren Leistung, Sicherheit und Haltbarkeit in anspruchsvollen industriellen Anwendungen und entsprechen internationalen Standards.',
        'aplicaciones_titulo' => 'Anwendungen von Glimmer in Elektrischen und Pneumatischen Werkzeugen',
        'beneficio' => 'Unsere Produkte bei Stein Metal sind darauf ausgelegt, die Betriebseffizienz zu steigern, die Lebensdauer der Werkzeuge zu verlängern und die strengsten Industriestandards zu erfüllen, um zuverlässige Leistung in extremen Umgebungen zu gewährleisten.',
        'solicitarInfo' => 'Information Anfordern',
        'categorias' => [
            'Elektrobohrer' => [
                'Isolierung des Motorkommutators',
                'Wärmeschilde rund um den Motor',
                'Trennscheiben zwischen Wicklungen',
                'Isolatoren in Auslöseschaltern',
                'Isolierende Komponenten in Getrieben',
            ],
            'Kreissägen' => [
                'Isolierung von Stator und Rotor',
                'Wärmeschutz in der Nähe des Sägeblatts',
                'Isolatoren in Drehzahlregelmodulen',
                'Trennscheiben in elektrischen Bremssystemen',
                'Wärmebarrieren in Motorgehäusen',
            ],
            'Winkelschleifer' => [
                'Isolierung der Motorkollektoren',
                'Trennscheiben zwischen elektrischen Komponenten',
                'Funken-Schutzschilde im Gehäuse',
                'Isolatoren in elektronischen Steuerungssystemen',
                'Halterungen für Kohlebürsten',
            ],
            'Elektroschleifer' => [
                'Wärmeisolierung in Hochgeschwindigkeitsmotoren',
                'Trennscheiben in Staubabsaugsystemen',
                'Isolierende Komponenten in Steuerkreisen',
                'EMI-Barrieren in elektronischen Komponenten',
                'Isolatoren in Schaltern für variable Drehzahlen',
            ],
            'Fräs- und Oberfräsmaschinen' => [
                'Isolatoren in Tiefensteuerungssystemen',
                'Wärmeschilde rund um die Spindel',
                'Isolierung in Hochleistungsmotoren',
                'Trennscheiben für elektronische Komponenten',
                'Dichtungen in Kühlsystemen',
            ],
            'Lichtbogenschweißgeräte (MMA)' => [
                'Isolierung der Haupttransformatoren',
                'Trennplatten in Elektrodenhaltern',
                'Wärmeschilde in internen Gehäusen',
                'Isolierende Komponenten in Stromsteuerungssystemen',
                'EMC-Barrieren für Steuerkreise',
            ],
            'MIG/MAG-Schweißgeräte' => [
                'Isolierung in Leistungstransformatoren',
                'Wärmebarrieren in Drahtvorschubmechanismen',
                'Trennscheiben in Flüssigkühlsystemen',
                'Isolatoren in Impulssteuerkreisen',
                'Halterungen in Schweißpistolen und Düsen',
            ],
            'TIG-Schweißgeräte' => [
                'Isolierende Komponenten in Elektrodenhaltern',
                'Isolierung in Hochfrequenztransformatoren',
                'Trennscheiben in Kühlsystemen',
                'Wärmeschilde in Steuerpedalen',
                'Isolatoren in wassergekühlten Schweißbrennern',
            ],
            'Plasmaschneider' => [
                'Wärmeisolierung in Düsen',
                'Schilde in Hochstromleitern',
                'Trennscheiben in Kühlsystemen',
                'Isolatoren in Hochfrequenz-Zündkreisen',
                'Wärmebarrieren in Schweißbrennern',
            ],
            'Säulenbohrmaschinen' => [
                'Isolierung in Einphasen- und Dreiphasenmotoren',
                'Isolierende Komponenten in Beleuchtungssystemen',
                'Trennscheiben in Getrieben',
                'Wärmeschilde in Drehzahlsteuerungssystemen',
                'Isolatoren in Bedienfeldern',
            ],
            'Metalldrehmaschinen' => [
                'Isolierung in Hochleistungsmotoren',
                'Trennscheiben in elektronischen Steuerboxen',
                'Isolatoren in Kühlsystemen',
                'Dielektrische Komponenten in Frequenzumrichtern',
                'Isolierplatten in Bedienfeldern',
            ],
            'Bandsägen' => [
                'Isolierung der Hauptmotoren',
                'Trennscheiben in Blattspannsystemen',
                'Isolatoren in Sicherheitsschaltern',
                'Wärmeschilde in Bremssystemen',
                'Dielektrische Komponenten in Steuerkreisen',
            ],
            'Elektrische Kompressoren' => [
                'Isolierung in Anlassmotoren',
                'Trennscheiben in Druckschaltern',
                'Wärmeschilde in Schutzsystemen',
                'Isolierende Komponenten in Magnetventilen',
                'Dichtungen in Steuerungssystemen',
            ],
            'Luftkompressoren' => [
                'Isolierung in Elektromotoren',
                'Trennscheiben in Drucksystemen',
                'Isolatoren in Druckschaltern und Magnetventilen',
                'Komponenten in Steuerungssystemen',
                'Wärmeschilde in Ventilen',
            ],
            'Elektrische Rasenmäher' => [
                'Isolierung in Hochleistungsmotoren',
                'Trennscheiben in Steuerungssystemen',
                'Isolatoren in Sicherheitsschaltern',
                'Komponenten in Schutzsystemen',
                'Wärmeschilde in Motorgehäusen',
            ],
            'Elektrische Kettensägen' => [
                'Isolierung in Hochgeschwindigkeitsmotoren',
                'Trennscheiben in Schmiersystemen',
                'Isolatoren in Auslöseschaltern',
                'Komponenten in Kettensbremssystemen',
                'Wärmeschilde in Getrieben',
            ],
            'Elektrische Freischneider' => [
                'Isolierung in Hochgeschwindigkeitsmotoren',
                'Trennscheiben in Übertragungssystemen',
                'Isolatoren in Steuerschaltern',
                'Komponenten in Schutzsystemen',
                'Wärmeschilde in Gehäusen',
            ],
        ],
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
    <meta name="description" content="Soluciones de aislamiento de mica para herramientas eléctricas y neumáticas.">
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
            font-family: 'Open Sans', sans-serif;
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
            mask: url('https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/check-circle-fill.svg') no-repeat center;
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

        .accordion-button {
            font-weight: 600;
            color: #2c3e50;
        }

        .accordion-button:not(.collapsed) {
            color: #e63946;
            background-color: #f8f9fa;
        }

        .accordion-body ul {
            list-style: none;
            padding-left: 0;
        }

        .accordion-body ul li {
            display: flex;
            align-items: flex-start;
            margin-bottom: 10px;
            font-size: 1rem;
            color: #444;
        }

        .accordion-body ul li::before {
            content: '';
            display: inline-block;
            width: 16px;
            height: 16px;
            margin-right: 10px;
            background-color: #198754;
            -webkit-mask: url('https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/check-circle-fill.svg') no-repeat center;
            mask: url('https://cdn.jsdelivr.net/npm/bootstrap-icons/icons/check-circle-fill.svg') no-repeat center;
            -webkit-mask-size: contain;
            mask-size: contain;
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

                <div class="row align-items-center mb-5">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <img src="../img/herramientas.jpg" alt="Herramientas Eléctricas y Neumáticas" class="feature-large">
                    </div>
                    <div class="col-lg-6">
                        <div class="text-block">
                            <p><?php echo nl2br($selectedTexts['beneficio']); ?></p>
                            <a href="../contacto.php" class="btn btn-primary text-white">
                                <i class="fa-solid fa-paper-plane text-white me-2"></i>
                                <?php echo $selectedTexts['solicitarInfo']; ?>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="mt-5">
                    <h3 class="mb-4"><?php echo $selectedTexts['aplicaciones_titulo']; ?></h3>
                    <div class="accordion" id="aplicacionesAccordion">
                        <?php foreach ($selectedTexts['categorias'] as $categoria => $aplicaciones): ?>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading<?php echo htmlspecialchars(str_replace(' ', '', $categoria)); ?>">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse<?php echo htmlspecialchars(str_replace(' ', '', $categoria)); ?>"
                                        aria-expanded="false" aria-controls="collapse<?php echo htmlspecialchars(str_replace(' ', '', $categoria)); ?>">
                                        <?php echo htmlspecialchars($categoria); ?>
                                    </button>
                                </h2>
                                <div id="collapse<?php echo htmlspecialchars(str_replace(' ', '', $categoria)); ?>" class="accordion-collapse collapse"
                                    aria-labelledby="heading<?php echo htmlspecialchars(str_replace(' ', '', $categoria)); ?>"
                                    data-bs-parent="#aplicacionesAccordion">
                                    <div class="accordion-body">
                                        <ul>
                                            <?php foreach ($aplicaciones as $aplicacion): ?>
                                                <li><?php echo htmlspecialchars($aplicacion); ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
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