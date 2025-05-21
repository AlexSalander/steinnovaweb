<?php
// Definir la ruta base para los enlaces si no están definidas
if (!defined('BASE_PATH')) {
    define('BASE_PATH', '/');
}

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

// Definir los textos para los distintos idiomas
$texto = [
    'es' => [
        'productos' => 'Productos',
        'mica_termoelectrica' => 'Mica Termoeléctrica',
        'aislamiento_electrico' => 'Aislamiento Eléctrico',
        'piezas_impresas_3d' => 'Piezas Impresas 3D',
        'piezas_mecanizadas_cnc' => 'Piezas Mecanizadas CNC',
        'cintas' => 'Cintas',
        'agujas' => 'Agujas',
        'industrias' => 'Industrias',
        'automotriz_ev' => 'Automotriz y EV',
        'fundicion_siderurgia' => 'Fundición y Siderurgia',
        'petroleo_gas' => 'Petróleo y Gas',
        'aeronautica' => 'Aeronáutica',
        'alto_voltaje' => 'Alto Voltaje',
        'industria_militar' => 'Industria Militar',
        'servicios' => 'Servicios',
        'manufactura_robotizada_cnc' => 'Manufactura Robotizada CNC',
        'software_industrial' => 'Software Industrial',
        'soldadura_montaje' => 'Soldadura y Montaje',
        'steinmetal' => 'SteinMetal',
        'steinnova' => 'SteinNova', // <--- Agregado
        'acerca_empresa' => 'Acerca de la Empresa',
        'nuestro_equipo' => 'Nuestro Equipo',
        'nuestra_vision' => 'Nuestra Visión y Valores',
        'privacy_policy' => 'Política de Privacidad',
        'empowering' => 'Todos los derechos reservados',
        'direccion' => 'Dirección de oficinas generales',
        'email_label' => 'Contáctanos por correo',
        'whatsapp_label' => 'Contáctanos por WhatsApp',
        'linkedin_label' => 'Síguenos en LinkedIn',
        'youtube_label' => 'Visita nuestro canal de YouTube',
        'address_text' => 'Shakespeare 84 Colonia Anzures, Miguel Hidalgo CDMX. cp 11590'
    ],
    'en' => [
        'productos' => 'Products',
        'mica_termoelectrica' => 'Thermoelectric Mica',
        'aislamiento_electrico' => 'Electrical Insulation',
        'piezas_impresas_3d' => '3D Printed Parts',
        'piezas_mecanizadas_cnc' => 'CNC Machined Parts',
        'cintas' => 'Tapes',
        'agujas' => 'Needles',
        'industrias' => 'Industries',
        'automotriz_ev' => 'Automotive and EV',
        'fundicion_siderurgia' => 'Foundry and Steelmaking',
        'petroleo_gas' => 'Oil and Gas',
        'aeronautica' => 'Aeronautics',
        'alto_voltaje' => 'High Voltage',
        'industria_militar' => 'Military Industry',
        'servicios' => 'Services',
        'manufactura_robotizada_cnc' => 'CNC Robotic Manufacturing',
        'software_industrial' => 'Industrial Software',
        'soldadura_montaje' => 'Welding and Assembly',
        'steinmetal' => 'SteinMetal',
        'steinnova' => 'SteinNova', // <--- Agregado
        'acerca_empresa' => 'About the Company',
        'nuestro_equipo' => 'Our Team',
        'nuestra_vision' => 'Our Vision and Values',
        'privacy_policy' => 'Privacy Policy',
        'empowering' => 'All rights reserved',
        'direccion' => 'Directorate for General Offices',
        'email_label' => 'Contact us by email',
        'whatsapp_label' => 'Contact us on WhatsApp',
        'linkedin_label' => 'Follow us on LinkedIn',
        'youtube_label' => 'Visit our YouTube channel',
        'address_text' => 'Camino Real de La Plata 102-Floor 5, Zona Plateada, 42084 Pachuca de Soto, Hgo, Mexico.'
    ],
    'de' => [
        'productos' => 'Produkte',
        'mica_termoelectrica' => 'Thermoelektrische Glimmer',
        'aislamiento_electrico' => 'Elektrische Isolierung',
        'piezas_impresas_3d' => '3D-gedruckte Teile',
        'piezas_mecanizadas_cnc' => 'CNC-gefräste Teile',
        'cintas' => 'Bänder',
        'agujas' => 'Nadeln',
        'industrias' => 'Industrien',
        'automotriz_ev' => 'Automobil und EV',
        'fundicion_siderurgia' => 'Gießerei und Stahlherstellung',
        'petroleo_gas' => 'Öl und Gas',
        'aeronautica' => 'Luftfahrt',
        'alto_voltaje' => 'Hochspannung',
        'industria_militar' => 'Militärindustrie',
        'servicios' => 'Dienstleistungen',
        'manufactura_robotizada_cnc' => 'CNC-Roboterfertigung',
        'software_industrial' => 'Industrielle Software',
        'soldadura_montaje' => 'Schweißen und Montage',
        'steinmetal' => 'SteinMetal',
        'steinnova' => 'SteinNova', // <--- Agregado
        'acerca_empresa' => 'Über das Unternehmen',
        'nuestro_equipo' => 'Unser Team',
        'nuestra_vision' => 'Unsere Vision und Werte',
        'privacy_policy' => 'Datenschutzrichtlinie',
        'empowering' => 'Alle Rechte vorbehalten',
        'direccion' => 'Direktion der Hauptsitze',
        'email_label' => 'Kontaktieren Sie uns per E-Mail',
        'whatsapp_label' => 'Kontaktieren Sie uns über WhatsApp',
        'linkedin_label' => 'Folgen Sie uns auf LinkedIn',
        'youtube_label' => 'Besuchen Sie unseren YouTube-Kanal',
        'address_text' => 'Shakespeare 84 Colonia Anzures, Miguel Hidalgo CDMX. cp 11590'
    ]
];

$selectedTexts = $texto[$idioma];
?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<style>
    .footer-table {
        display: table;
        width: 100%;
        border-spacing: 0;
    }

    .footer-row {
        display: table-row;
    }

    .footer-cell {
        display: table-cell;
        padding: 10px 20px;
    }

    .footer-cell a {
        color:rgb(3, 3, 3);
        text-decoration: none;
        font-size: 14px;
    }

    .footer-cell h5 {
        color:rgb(0, 0, 0);
        font-size: 16px;
        margin-bottom: 10px;
        font-weight: bold;
    }

    hr {
        border: 0;
        height: 1px;
        background-color: #6c757d;
    }
</style>

<footer class="bg-white text-dark pt-5 pb-4">
    <hr class="bg-secondary" />
    <div class="container">
        <div class="container-fluid bg-white text-dark py-5">
            <div class="text-center mb-4">
                <img src="<?php echo BASE_PATH; ?>img/Logo2.png" alt="Logo SteinNova" style="max-width: 60px;">
            </div>

            <div class="footer-table" style="color: #000;">
                <div class="footer-row text-center">

                    <!-- Gmail -->
                    <div class="footer-cell">
                        <a href="mailto:info@steinnova.com?subject=<?php echo urlencode($selectedTexts['email_label']); ?>"
                           class="text-dark text-decoration-none">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/4/4e/Gmail_Icon.png"
                                 alt="Gmail" width="24" height="24" class="mb-2">
                        </a>
                    </div>

                    <!-- LinkedIn -->
                    <div class="footer-cell">
                        <a href="https://mx.linkedin.com/company/steinova" target="_blank"
                           class="text-dark text-decoration-none">
                            <i class="fa-brands fa-linkedin text-primary fs-4 mb-2"></i>
                        </a>
                    </div>

                    <!-- YouTube -->
                    <div class="footer-cell">
                        <a href="https://www.youtube.com/@steinnova" target="_blank"
                           class="text-dark text-decoration-none">
                            <i class="fa-brands fa-youtube text-danger fs-4 mb-2"></i>
                        </a>
                    </div>

                    <!-- Dirección -->
                    <div class="footer-cell">
                        <a href="https://maps.app.goo.gl/mVCNS8cgBVYDQWj56" target="_blank"
                           class="text-dark text-decoration-none">
                            <i class="fa-solid fa-location-dot text-danger fs-4 mb-2"></i>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <hr class="bg-secondary" />

        <!-- Enlaces de navegación -->
        <div class="footer-table">
            <div class="footer-row">
                <!-- Productos -->
                <div class="footer-cell">
                    <h5><?php echo $selectedTexts['productos']; ?></h5>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo BASE_PATH; ?>micas.php?lang=<?php echo $idioma; ?>"><?php echo $selectedTexts['mica_termoelectrica']; ?></a></li>
                        <li><a href="<?php echo BASE_PATH; ?>aislamientos.php?lang=<?php echo $idioma; ?>"><?php echo $selectedTexts['aislamiento_electrico']; ?></a></li>
                        <li><a href="#"><?php echo $selectedTexts['piezas_impresas_3d']; ?></a></li>
                        <li><a href="<?php echo BASE_PATH; ?>piezas.php?lang=<?php echo $idioma; ?>"><?php echo $selectedTexts['piezas_mecanizadas_cnc']; ?></a></li>
                        <li><a href="<?php echo BASE_PATH; ?>cintas.php?lang=<?php echo $idioma; ?>"><?php echo $selectedTexts['cintas']; ?></a></li>
                        <li><a href="<?php echo BASE_PATH; ?>agujas.php?lang=<?php echo $idioma; ?>"><?php echo $selectedTexts['agujas']; ?></a></li>
                    </ul>
                </div>

                <!-- Industrias -->
                <div class="footer-cell">
                    <h5><?php echo $selectedTexts['industrias']; ?></h5>
                    <ul class="list-unstyled">
                        <li><a href="<?php echo BASE_PATH; ?>Industrias/Automotriz.php?lang=<?php echo $idioma; ?>"><?php echo $selectedTexts['automotriz_ev']; ?></a></li>
                        <li><a href="<?php echo BASE_PATH; ?>Industrias/Fundicion.php?lang=<?php echo $idioma; ?>"><?php echo $selectedTexts['fundicion_siderurgia']; ?></a></li>
                        <li><a href="<?php echo BASE_PATH; ?>Industrias/Petroleo.php?lang=<?php echo $idioma; ?>"><?php echo $selectedTexts['petroleo_gas']; ?></a></li>
                        <li><a href="<?php echo BASE_PATH; ?>Industrias/Aeronautica.php?lang=<?php echo $idioma; ?>"><?php echo $selectedTexts['aeronautica']; ?></a></li>
                        <li><a href="<?php echo BASE_PATH; ?>Industrias/Altovoltaje.php?lang=<?php echo $idioma; ?>"><?php echo $selectedTexts['alto_voltaje']; ?></a></li>
                        <li><a href="<?php echo BASE_PATH; ?>Industrias/Energias.php?lang=<?php echo $idioma; ?>"><?php echo $selectedTexts['industria_militar']; ?></a></li>
                    </ul>
                </div>

                <!-- Servicios y Empresa -->
                <div class="footer-cell">
                    <h5><?php echo $selectedTexts['servicios']; ?></h5>
                    <ul class="list-unstyled mb-4">
                        <li><a href="<?php echo BASE_PATH; ?>manufactura.php?lang=<?php echo $idioma; ?>"><?php echo $selectedTexts['manufactura_robotizada_cnc']; ?></a></li>
                        <li><a href="<?php echo BASE_PATH; ?>software_industrial.php?lang=<?php echo $idioma; ?>"><?php echo $selectedTexts['software_industrial']; ?></a></li>
                        <li><a href="<?php echo BASE_PATH; ?>instalaciones.php?lang=<?php echo $idioma; ?>"><?php echo $selectedTexts['soldadura_montaje']; ?></a></li>
                    </ul>
                    <h5><?php echo $selectedTexts['steinnova']; ?></h5>
                    <ul class="list-unstyled">
                        <li><a href="/steinnova/acercaempresa.php?lang=<?php echo $idioma; ?>"><?php echo $selectedTexts['acerca_empresa']; ?></a></li>
                        <li><a href="<?php echo BASE_PATH; ?>nuestroequipo.php?lang=<?php echo $idioma; ?>"><?php echo $selectedTexts['nuestro_equipo']; ?></a></li>
                        <li><a href="<?php echo BASE_PATH; ?>nuestravision2030/nuestravision2030.php?lang=<?php echo $idioma; ?>"><?php echo $selectedTexts['nuestra_vision']; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>

        <hr class="bg-secondary" />

        <div class="row text-center">
            <div class="col-12">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="<?php echo BASE_PATH; ?>politicas.php?lang=<?php echo $idioma; ?>"
                           class="text-white-50 text-decoration-none"><?php echo $selectedTexts['privacy_policy']; ?></a>
                    </li>
                </ul>
                <p class="mt-3 text-white-50 small">© <?php echo date("Y"); ?> SteinNova.
                    <?php echo $selectedTexts['empowering']; ?>.</p>
            </div>
        </div>
    </div>
</footer>
