<?php

$texto = [
    'es' => [
        'herramientas' => 'Herramientas Eléctricas y Neumáticas',
        'cables' => 'Fabricación de Cables',
        'industries_header' => 'Ofrecemos las mejores alternativas sustentables a industrias',
        'industries_title' => 'Industrias',
        'trenes' => 'Fabricación de Trenes',
        'automotriz' => 'Automotrices y EV',
        'fundicion' => 'Fundición de Autopartes y Siderurgia',
        'petroleo' => 'Petróleo y Gas',
        'aeronautica' => 'Aeronáuticas',
        'altovoltaje' => 'Alto Voltaje',
        'Energias'=>'Energías renovables',
        'typed_strings' => [
            'Fundición y Siderurgia',
            'Automotrices y EV',
            'Militares',
            'Aeronáuticas',
            'Petróleo y Gas',
            'Alto Voltaje'
        ],
        'location' => 'en Norteamérica y LATAM'
    ],
    'en' => [
        'herramientas' => 'Electric and Pneumatic Tools',
        'cables' => 'Cable Manufacturing',
        'industries_header' => 'We offer the best sustainable alternatives to',
        'industries_title' => 'Industries',
        'trenes' => 'Train Manufacturing',
        'automotriz' => 'Automotive and EV',
        'fundicion' => 'Casting of Auto Parts and Steelmaking',
        'petroleo' => 'Oil and Gas',
        'aeronautica' => 'Aeronautics',
        'altovoltaje' => 'High Voltage',
        'Energias'=>'Renewable energy',
        'typed_strings' => [
            'Foundry and Steelmaking',
            'Automotive and EV',
            'Military',
            'Aeronautics',
            'Oil and Gas',
            'High Voltage'
        ],
        'location' => 'in North America and LATAM.'
    ],
    'de' => [
        'herramientas' => 'Elektrische und pneumatische Werkzeuge',
        'cables' => 'Kabelherstellung',
        'industries_header' => 'Wir bieten die besten nachhaltigen Alternativen zu',
        'industries_title' => 'Industrien',
        'trenes' => 'Zugherstellung',
        'automotriz' => 'Automobil- und EV-Industrie',
        'fundicion' => 'Gießen von Autoteilen und Stahlherstellung',
        'petroleo' => 'Öl und Gas',
        'aeronautica' => 'Luft- und Raumfahrt',
        'altovoltaje' => 'Hochspannung',
        'Energias'=>'Erneuerbare Energien',
        'typed_strings' => [
            'Gießerei und Stahlherstellung',
            'Automobil und EV',
            'Militär',
            'Luftfahrt',
            'Öl und Gas',
            'Hochspannung'
        ],
        'location' => 'in Nordamerika und LATAM.'
    ]
];

$selectedTexts = $texto[$idioma];
?>

<section>
    <div class="container py-5">
        <div class="row text-center">
            <div class="col-md-12">
                <h1 class="display-4 mb-3">
                    <?php echo $selectedTexts['industries_header']; ?>
                    <br>
                    <span class="inline-block typed-text typed-text--cursor text-danger" data-typed-strings="<?php echo implode(', ', $selectedTexts['typed_strings']); ?>">
                        <?php echo end($selectedTexts['typed_strings']); ?>
                    </span>
                </h1>
                <h2 class="lead text-muted"><?php echo $selectedTexts['location']; ?></h2>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold text-dark">
                    <?php echo $selectedTexts['industries_title']; ?>
                </h2>
            </div>
        </div>

        <style>
            .carousel-item > .row {
                display: flex;
            }

            .card-img-top {
                object-fit: cover;
                height: 200px;
            }
        </style>

        <div id="industriesCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                $industries = [
                    ['href' => './Industrias/Automotriz.php?lang=' . $idioma, 'img' => 'img/stein-6.jpg', 'label' => $selectedTexts['automotriz']],
                    ['href' => './Industrias/Fundicion.php?lang=' . $idioma, 'img' => 'img/stein-7.png', 'label' => $selectedTexts['fundicion']],
                    ['href' => './Industrias/Petroleo.php?lang=' . $idioma, 'img' => 'img/stein-8.jpg', 'label' => $selectedTexts['petroleo']],
                    ['href' => './Industrias/Aeronautica.php?lang=' . $idioma, 'img' => 'img/stein-9.jpg', 'label' => $selectedTexts['aeronautica']],
                    ['href' => './Industrias/Altovoltaje.php?lang=' . $idioma, 'img' => 'img/stein-10.jpg', 'label' => $selectedTexts['altovoltaje']],
                    ['href' => './Industrias/Energias.php?lang=' . $idioma, 'img' => 'img/eolicas.png', 'label' => $selectedTexts['Energias']],
                    ['href' => './Industrias/Trenes.php?lang=' . $idioma, 'img' => 'img/trenes.png', 'label' => $selectedTexts['trenes']],
                    ['href' => './Industrias/Cables.php?lang=' . $idioma, 'img' => 'img/trenes.png', 'label' => $selectedTexts['cables']],
                    ['href' => './Industrias/Herramientas.php?lang=' . $idioma, 'img' => 'img/trenes.png', 'label' => $selectedTexts['herramientas']],
                ];

                $chunks = array_chunk($industries, 3);
                foreach ($chunks as $index => $group) {
                    echo '<div class="carousel-item ' . ($index === 0 ? 'active' : '') . '">';
                    echo '<div class="row g-4 justify-content-center">';
                    foreach ($group as $item) {
                        echo '
                        <div class="col-md-4">
                            <a href="' . $item['href'] . '" class="text-decoration-none">
                                <div class="card border-0 shadow-sm h-100 hover-shadow transition rounded-4">
                                    <img src="' . $item['img'] . '" class="card-img-top rounded-top-4" alt="Pic">
                                    <div class="card-body text-center">
                                        <h6 class="text-dark m-0">' . $item['label'] . '</h6>
                                    </div>
                                </div>
                            </a>
                        </div>';
                    }
                    echo '</div></div>';
                }
                ?>
            </div>

            <!-- Controles del carrusel -->
            <button class="carousel-control-prev" type="button" data-bs-target="#industriesCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#industriesCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-dark rounded-circle p-3" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>
    </div>
</section>