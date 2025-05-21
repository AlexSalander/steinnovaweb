<?php
// Iniciar sesión para limitar envíos
session_start();

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
        'page_title' => 'Nuestra Visión 2030',
        'vision_header' => 'Nuestra Visión 2030',
        'vision_text' => 'En Stein Metal, miramos hacia el futuro con una visión clara: liderar la transformación industrial a través de soluciones inteligentes en aislamiento termoeléctrico, mecanizados CNC de alta precisión y materiales avanzados como mica, aleaciones de cobre y bronce al aluminio. Nuestra propuesta se basa en la excelencia, la innovación sostenible y la confiabilidad operativa, adaptándonos a las nuevas demandas de industrias en evolución como la fundición avanzada, la movilidad eléctrica (EV), la aeronáutica de nueva generación, y los sistemas de energía limpia. Nos anticipamos a los desafíos del mañana colaborando estrechamente con nuestros clientes para desarrollar soluciones personalizadas que integren eficiencia energética, automatización y resistencia a condiciones extremas. Con estándares globales de calidad, ética y seguridad, Stein Metal se posiciona como un socio estratégico clave para empresas que buscan escalar tecnológicamente en un mundo cada vez más competitivo y conectado. Impulsa tu industria hacia el futuro con Stein Metal: tecnología, precisión y visión global rumbo al 2030.',
        'contact_form_header' => 'Contáctanos',
        'form_name' => 'Nombre',
        'form_email' => 'Correo Electrónico',
        'form_message' => 'Mensaje',
        'form_submit' => 'Enviar Mensaje',
        'form_success' => '¡Mensaje enviado con éxito!',
        'form_error' => 'Error al enviar el mensaje. Por favor, intenta de nuevo.',
        'form_required' => 'Por favor, completa todos los campos.',
        'form_invalid_email' => 'Por favor, ingresa un correo electrónico válido.',
        'form_submission_limit' => 'Por favor, espera 60 segundos antes de enviar otro mensaje.',
        'form_message_too_long' => 'El mensaje no puede exceder los 500 caracteres.',
        'form_invalid_content' => 'El mensaje contiene caracteres no permitidos.'
    ],
    'en' => [
        'page_title' => 'Our Vision 2030',
        'vision_header' => 'Our Vision 2030',
        'vision_text' => 'At Stein Metal, we look to the future with a clear vision: to lead industrial transformation through intelligent solutions in thermoelectric insulation, high-precision CNC machining, and advanced materials such as mica, copper alloys, and aluminum bronze. Our approach is grounded in excellence, sustainable innovation, and operational reliability, adapting to the evolving demands of industries like advanced foundry, electric mobility (EV), next-generation aeronautics, and clean energy systems. We anticipate tomorrow\'s challenges by collaborating closely with our clients to develop customized solutions that integrate energy efficiency, automation, and resilience to extreme conditions. With global standards of quality, ethics, and safety, Stein Metal positions itself as a key strategic partner for companies aiming to scale technologically in an increasingly competitive and connected world. Drive your industry toward the future with Stein Metal: technology, precision, and a global vision for 2030.',
        'contact_form_header' => 'Contact Us',
        'form_name' => 'Name',
        'form_email' => 'Email',
        'form_message' => 'Message',
        'form_submit' => 'Send Message',
        'form_success' => 'Message sent successfully!',
        'form_error' => 'Error sending message. Please try again.',
        'form_required' => 'Please fill out all fields.',
        'form_invalid_email' => 'Please enter a valid email address.',
        'form_submission_limit' => 'Please wait 60 seconds before sending another message.',
        'form_message_too_long' => 'The message cannot exceed 500 characters.',
        'form_invalid_content' => 'The message contains invalid characters.'
    ],
    'de' => [
        'page_title' => 'Unsere Vision 2030',
        'vision_header' => 'Unsere Vision 2030',
        'vision_text' => 'Bei Stein Metal blicken wir mit einer klaren Vision in die Zukunft: die industrielle Transformation durch intelligente Lösungen in der thermoelektrischen Isolierung, hochpräziser CNC-Bearbeitung und fortschrittlicher Materialien wie Glimmer, Kupferlegierungen und Aluminiumbronze anzuführen. Unser Ansatz basiert auf Exzellenz, nachhaltiger Innovation und betrieblicher Zuverlässigkeit und passt sich den sich wandelnden Anforderungen von Industrien wie fortschrittlichem Gießereiwesen, Elektromobilität (EV), Luftfahrt der nächsten Generation und sauberen Energiesystemen an. Wir gehen die Herausforderungen von morgen an, indem wir eng mit unseren Kunden zusammenarbeiten, um maßgeschneiderte Lösungen zu entwickeln, die Energieeffizienz, Automatisierung und Widerstandsfähigkeit gegen extreme Bedingungen integrieren. Mit globalen Standards für Qualität, Ethik und Sicherheit positioniert sich Stein Metal als strategischer Schlüsselpartner für Unternehmen, die in einer zunehmend wettbewerbsorientierten und vernetzten Welt technologisch wachsen möchten. Bringen Sie Ihre Industrie mit Stein Metal in die Zukunft: Technologie, Präzision und globale Vision für 2030.',
        'contact_form_header' => 'Kontaktieren Sie uns',
        'form_name' => 'Name',
        'form_email' => 'E-Mail',
        'form_message' => 'Nachricht',
        'form_submit' => 'Nachricht senden',
        'form_success' => 'Nachricht erfolgreich gesendet!',
        'form_error' => 'Fehler beim Senden der Nachricht. Bitte versuchen Sie es erneut.',
        'form_required' => 'Bitte füllen Sie alle Felder aus.',
        'form_invalid_email' => 'Bitte geben Sie eine gültige E-Mail-Adresse ein.',
        'form_submission_limit' => 'Bitte warten Sie 60 Sekunden, bevor Sie eine weitere Nachricht senden.',
        'form_message_too_long' => 'Die Nachricht darf 500 Zeichen nicht überschreiten.',
        'form_invalid_content' => 'Die Nachricht enthält ungültige Zeichen.'
    ]
];

$selectedTexts = $texto[$idioma];

// Manejo del formulario de contacto
$form_message = '';
$show_form = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar límite de envíos usando sesiones
    if (!isset($_SESSION['last_submission'])) {
        $_SESSION['last_submission'] = time();
    } elseif (time() - $_SESSION['last_submission'] < 60) {
        $form_message = '<div class="alert alert-danger">' . $selectedTexts['form_submission_limit'] . '</div>';
        $show_form = true;
    } else {
        $_SESSION['last_submission'] = time();

        // Obtener y limpiar datos del formulario
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $message = trim($_POST['message'] ?? '');
        $emailContacto = 'contacto_steinnova@steinnova.com';

        // Filtrar correo electrónico para prevenir inyección de encabezados
        $email = preg_replace("/[\r\n]/", "", $email);

        // Validaciones
        if (empty($name) || empty($email) || empty($message)) {
            $form_message = '<div class="alert alert-danger">' . $selectedTexts['form_required'] . '</div>';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $form_message = '<div class="alert alert-danger">' . $selectedTexts['form_invalid_email'] . '</div>';
        } elseif (strlen($message) > 500) {
            $form_message = '<div class="alert alert-danger">' . $selectedTexts['form_message_too_long'] . '</div>';
        } elseif (!preg_match('/^[a-zA-Z0-9\s.,!?@()-]*$/', $message)) {
            $form_message = '<div class="alert alert-danger">' . $selectedTexts['form_invalid_content'] . '</div>';
        } else {
            // Configuración del correo
            $to = 'info@steinnova.com';
            $subject = 'Nuevo mensaje de contacto desde SteinNova';
            $body = "Nombre: $name\n";
            $body .= "Correo: $email\n";
            $body .= "Mensaje:\n$message";
            $headers = "From: $emailContacto\r\n";
            $headers .= "Reply-To: $emailContacto\r\n";

            // Enviar el correo
            if (mail($to, $subject, $body, $headers)) {
                $form_message = '<div class="alert alert-success">' . $selectedTexts['form_success'] . '</div>';
                $show_form = false; // Ocultar formulario tras envío exitoso
            } else {
                $form_message = '<div class="alert alert-danger">' . $selectedTexts['form_error'] . '</div>';
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Stein Metal's vision for 2030, leading industrial transformation with advanced thermoelectric solutions and precision machining.">
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

    <!-- Estilos específicos de nuestravision2030.php -->
    <style>
        .vision-section {
            background-color: #f8f9fa;
        }
        .vision-img {
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

    <!-- Sección Nuestra Visión 2030 -->
    <section class="vision-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold text-dark mb-4"><?php echo $selectedTexts['vision_header']; ?></h2>
                    <p class="text-muted lead text-justified"><?php echo $selectedTexts['vision_text']; ?></p>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="../img/vision.jpg" alt="Stein Metal Visión 2030" class="vision-img">
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
                            <form method="POST" action="nuestravision2030.php?lang=<?php echo $idioma; ?>">
                                <div class="mb-3">
                                    <label for="name" class="form-label"><?php echo $selectedTexts['form_name']; ?></label>
                                    <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label"><?php echo $selectedTexts['form_email']; ?></label>
                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" required>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label"><?php echo $selectedTexts['form_message']; ?></label>
                                    <textarea class="form-control" id="message" name="message" rows="5" required><?php echo isset($message) ? htmlspecialchars($message) : ''; ?></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary"><?php echo $selectedTexts['form_submit']; ?></button>
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