<?php
// Definir la ruta base para los enlaces
if (!defined('BASE_PATH')) {
    define('BASE_PATH', '/');
}
if (!defined('STEINMETAL_PATH')) {
    define('STEINMETAL_PATH', '/steinmetal/');
}

// Establecer el idioma por defecto a Inglés
$idioma = isset($_GET['lang']) && in_array($_GET['lang'], ['es', 'en', 'de']) ? $_GET['lang'] : 'en';

// Textos por idioma
$texto = [
    'es' => [
        'page_title' => 'Acerca de la Empresa',
        'about_header' => 'Acerca de SteinNova',
        'about_text' => 'SteinNova es una empresa Latinoamericana con alcance internacional, especializada en aislamientos termoeléctricos avanzados y servicios estratégicos para sectores clave como Fundición, Aeronáutica, Automotriz, Vehículos Eléctricos (EV), Energías Renovables e Industria Eléctrica. Ofrecemos soluciones personalizadas de alta calidad incluyendo piezas mecanizadas por CNC en mica, aleaciones especiales de cobre y bronce al aluminio, diseñadas específicamente para satisfacer los requerimientos técnicos más exigentes del mercado global. Nuestra combinación única de experiencia internacional, tecnología innovadora y un extenso catálogo de productos electro-térmicos impulsa la eficiencia, confiabilidad y crecimiento sostenible de nuestros clientes en todo el mundo. Optimiza tus procesos industriales con SteinNova, tu aliado estratégico en soluciones termoeléctricas y mecanizados de precisión.',
        'contact_form_header' => 'Contáctanos',
        'form_name' => 'Nombre',
        'form_email' => 'Correo Electrónico',
        'form_message' => 'Mensaje',
        'form_submit' => 'Enviar Mensaje',
        'form_success' => '¡Mensaje enviado con éxito!',
        'form_error' => 'Error al enviar el mensaje. Por favor, intenta de nuevo.',
        'form_required' => 'Por favor, completa todos los campos.'
    ],
    'en' => [
        'page_title' => 'About the Company',
        'about_header' => 'About SteinNova',
        'about_text' => 'SteinNova is a L company with international reach, specialized in advanced thermoelectric insulations and strategic services for key sectors such as Foundry, Aeronautics, Automotive, Electric Vehicles (EV), Renewable Energies, and Electrical Industry. We offer high-quality custom solutions including CNC machined parts in mica, special copper alloys, and bronze to aluminum, specifically designed to meet the most demanding technical requirements of the global market. Our unique combination of international expertise, innovative technology, and an extensive portfolio of electro-thermal products drives the efficiency, reliability, and sustainable growth of our customers worldwide. Optimize your industrial processes with SteinNova, your strategic partner in thermoelectric and precision machining solutions.',
        'contact_form_header' => 'Contact Us',
        'form_name' => 'Name',
        'form_email' => 'Email',
        'form_message' => 'Message',
        'form_submit' => 'Send Message',
        'form_success' => 'Message sent successfully!',
        'form_error' => 'Error sending message. Please try again.',
        'form_required' => 'Please fill out all fields.'
    ],
    'de' => [
        'page_title' => 'Über das Unternehmen',
        'about_header' => 'Über SteinNova',
        'about_text' => 'SteinNova ist ein lateinamerikanisches Unternehmen mit internationaler Ausrichtung, das sich auf fortschrittliche thermoelektrische Isolierungen und strategische Dienstleistungen für Schlüsselsektoren wie Gießerei, Luftfahrt, Automobilindustrie, Elektrofahrzeuge (EV), erneuerbare Energien und die Elektroindustrie spezialisiert hat. Wir bieten hochwertige kundenspezifische Lösungen, einschließlich CNC-gefräste Glimmerteile, spezielle Legierungen aus Kupfer und Aluminium-Bronze, die speziell für die anspruchsvollsten technischen Anforderungen des globalen Marktes entwickelt wurden. Unsere einzigartige Kombination aus internationaler Erfahrung, innovativer Technologie und einem umfangreichen Portfolio an thermischen Produkten fördert die Effizienz, Zuverlässigkeit und das nachhaltige Wachstum unserer Kunden weltweit. Optimieren Sie Ihre industriellen Prozesse mit SteinNova, Ihrem strategischen Partner für thermoelektrische Lösungen und Präzisionsbearbeitung.',
        'contact_form_header' => 'Kontaktieren Sie uns',
        'form_name' => 'Name',
        'form_email' => 'E-Mail',
        'form_message' => 'Nachricht',
        'form_submit' => 'Nachricht senden',
        'form_success' => 'Nachricht erfolgreich gesendet!',
        'form_error' => 'Fehler beim Senden der Nachricht. Bitte versuchen Sie es erneut.',
        'form_required' => 'Bitte füllen Sie alle Felder aus.'
    ]
];

$selectedTexts = $texto[$idioma];

// Procesar el formulario
$show_form = true;
$form_message = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_STRING);

    if ($name && $email && $message) {
        $to = 'sales@steinnova.com';
        $subject = 'Mensaje desde el formulario de contacto - ' . $name;
        $body = "Nombre: $name\nCorreo: $email\nMensaje:\n$message";
        $headers = "From: $email\r\nReply-To: $email\r\n";

        if (mail($to, $subject, $body, $headers)) {
            $form_message = '<div class="alert alert-success">' . $selectedTexts['form_success '] . '</div>';
            $show_form = false;
        } else {
            $form_message = '<div class="alert alert-danger">' . $selectedTexts['form_error'] . '</div>';
        }
    } else {
        $form_message = '<div class="alert alert-warning">' . $selectedTexts['form_required'] . '</div>';
    }
}
?>

<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SEO description">
    <title><?php echo $selectedTexts['page_title']; ?> - SteinNova</title>

    <!-- Favicon -->
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

    <!-- Estilos específicos de acercaempresa.php -->
    <style>
        .about-section {
            background-color: #f8f9fa;
        }

        .about-img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-section {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .btn-primary {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-primary:hover {
            background-color: #c82333;
            border-color: #c82333;
        }

        .text-justified {
            text-align: justify;
        }
    </style>
</head>

<body>
    <!-- Incluir Encabezado -->
    <div class="nav-container">
        <?php @include '../Header.php'; ?>
    </div>

    <!-- Sección Acerca -->
    <section class="about-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold text-dark mb-4"><?php echo $selectedTexts['about_header']; ?></h2>
                    <p class="text-muted lead text-justified"><?php echo $selectedTexts['about_text']; ?></p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="../img/stein-0.jpg" alt="Stein Metal Empresa" class="about-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Sección Formulario de Contacto -->
    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="form-section">
                        <h3 class="fw-bold text-dark mb-4"><?php echo $selectedTexts['contact_form_header']; ?></h3>
                        <?php echo $form_message; ?>
                        <?php if ($show_form): ?>
                            <form method="POST" action="acercaempresa.php?lang=<?php echo $idioma; ?>">
                                <div class="mb-3">
                                    <label for="name" class="form-label"><?php echo $selectedTexts['form_name']; ?></label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email"
                                        class="form-label"><?php echo $selectedTexts['form_email']; ?></label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message"
                                        class="form-label"><?php echo $selectedTexts['form_message']; ?></label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
                                </div>
                                <button type="submit"
                                    class="btn btn-primary"><?php echo $selectedTexts['form_submit']; ?></button>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Incluir Pie de Página -->
    <?php include '../Footer.php'; ?>

    <!-- JS Scripts -->
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

    <!-- Bootstrap 5 JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>