<?php
// Definir los textos para los distintos idiomas
$texto = [
    'es' => [
        'quien_es_header' => '¿Quién es SteinNova?',
        'quien_es_subheader' => 'SteinNova es una compañía Latinoamericana',
        'quien_es_paragraph' => 'Formada por profesionales con amplia experiencia internacional en sistemas de aislamiento termoeléctrico y servicios estratégicos llave en mano para la industria automotriz y energética. Entendemos los retos que enfrentan estos sectores y funcionamos como socios confiables, ofreciendo soluciones personalizadas en base a nuestro portafolio de productos electro-térmicos. Buscamos beneficiar a nuestras empresas clientes a través de la reducción de costos, calidad superior y alto rendimiento ante las exigencias del mercado.'
    ],
    'en' => [
        'quien_es_header' => 'Who is SteinNova?',
        'quien_es_subheader' => 'SteinNova is a Latin American company.',
        'quien_es_paragraph' => 'Formed by professionals with extensive international experience in thermo-electrical insulation systems and turnkey strategic services for the automotive and energy industries. We understand the challenges faced by these sectors and act as trusted partners, offering customized solutions based on our portfolio of electro-thermal products. We aim to benefit our client companies by reducing costs, providing superior quality, and ensuring high performance in the face of market demands.'
    ],
    'de' => [
        'quien_es_header' => 'Wer ist SteinNova?',
        'quien_es_subheader' => 'SteinNova ist ein lateinamerikanisches Unternehmen.',
        'quien_es_paragraph' => 'Gegründet von Fachleuten mit umfangreicher internationaler Erfahrung in thermoelektrischen Isolierungssystemen und schlüsselfertigen strategischen Dienstleistungen für die Automobil- und Energieindustrie. Wir verstehen die Herausforderungen, denen diese Sektoren gegenüberstehen, und fungieren als vertrauenswürdige Partner, die maßgeschneiderte Lösungen auf der Grundlage unseres Portfolios elektro-thermischer Produkte anbieten. Wir zielen darauf ab, unseren Kundenunternehmen durch Kostensenkung, überlegene Qualität und hohe Leistung in den Anforderungen des Marktes zu nutzen.'
    ]
];

// Asignar los textos correspondientes al idioma seleccionado
$selectedTexts = $texto[$idioma];
?>
<section class="feature-large switchable bg--secondary py-5">
    <br><br>
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-6 mb-4 mb-md-0">
                <img alt="Image" class="border--round box-shadow-wide w-100" src="img/stein-0.jpg" />
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="heading-block mb-4">
                    
                    <h2 class="text-uppercase font-weight-bold text-dark"><?php echo $selectedTexts['quien_es_header']; ?></h2>
                </div>
                <div class="text-block">
                    <h5 class="font-italic text-muted mb-3"><?php echo $selectedTexts['quien_es_subheader']; ?></h5>
                    <p class="lead"><?php echo $selectedTexts['quien_es_paragraph']; ?></p>
                </div>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
