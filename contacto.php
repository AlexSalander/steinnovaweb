<?php
// Iniciar sesión para limitar envíos y almacenar idioma
session_start();

// Establecer el idioma: primero desde GET, luego desde sesión, con inglés como predeterminado
if (isset($_GET['lang']) && in_array($_GET['lang'], ['es', 'en', 'de'])) {
    $lang = $_GET['lang'];
    $_SESSION['lang'] = $lang;
} elseif (isset($_SESSION['lang']) && in_array($_SESSION['lang'], ['es', 'en', 'de'])) {
    $lang = $_SESSION['lang'];
} else {
    $lang = 'en';
    $_SESSION['lang'] = $lang;
}

// Definir $idioma para compatibilidad con Header.php y footer.php
$idioma = $lang;

$translations = [
    'es' => [
        'title' => 'Contacto - SteinNova',
        'header' => 'Escríbenos',
        'subheader' => 'Te ayudaremos a resolver tu necesidad a la brevedad.',
        'name' => 'Nombre',
        'email' => 'Email',
        'message' => 'Solicitud',
        'submit' => 'Enviar',
        'result_success' => '¡Se ha enviado tu mensaje!',
        'result_error' => 'Error: ',
        'contact_email' => 'sales@steinnova.com',
        'contact_whatsapp' => '4421425185',
        'contact_linkedin' => 'SteinNova',
        'contact_youtube' => '@steinnova_',
        'contact_address' => 'Camino Real de La Plata 102 - Piso 5, Zona Plateada, Pachuca, Hidalgo',
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
        'title' => 'Contact - SteinNova',
        'header' => 'Write to Us',
        'subheader' => 'We will help you solve your need as soon as possible.',
        'name' => 'Name',
        'email' => 'Email',
        'message' => 'Request',
        'submit' => 'Send',
        'result_success' => 'Your message has been sent!',
        'result_error' => 'Error: ',
        'contact_email' => 'sales@steinnova.com',
        'contact_whatsapp' => '4421425185',
        'contact_linkedin' => 'SteinNova',
        'contact_youtube' => '@steinnova_',
        'contact_address' => 'Shakespeare 84 Colonia Anzures, Miguel Hidalgo CDMX. cp 11590',
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
        'title' => 'Kontakt - SteinNova',
        'header' => 'Schreib uns',
        'subheader' => 'Wir helfen dir, dein Anliegen schnell zu lösen.',
        'name' => 'Name',
        'email' => 'E-Mail',
        'message' => 'Anfrage',
        'submit' => 'Absenden',
        'result_success' => 'Ihre Nachricht wurde gesendet!',
        'result_error' => 'Fehler: ',
        'contact_email' => 'sales@steinnova.com',
        'contact_whatsapp' => '4421425185',
        'contact_linkedin' => 'SteinNova',
        'contact_youtube' => '@steinnova_',
        'contact_address' => 'Camino Real de La Plata 102 - 5. Stock, Zona Plateada, Pachuca, Hidalgo',
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

$language = $translations[$lang] ?? $translations['en'];

// Manejo del formulario de contacto
$form_message = '';
$show_form = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verificar límite de envíos usando sesiones
    if (!isset($_SESSION['last_submission'])) {
        $_SESSION['last_submission'] = time();
    } elseif (time() - $_SESSION['last_submission'] < 60) {
        $form_message = '<div class="alert alert-danger">' . $language['form_submission_limit'] . '</div>';
        $show_form = true;
    } else {
        $_SESSION['last_submission'] = time();

        // Obtener y limpiar datos del formulario
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $message = trim($_POST['message'] ?? '');
        $emailContacto = 'contacto_steinnova@steinnova.com';

        // Preservar idioma desde POST o mantener el idioma actual
        if (isset($_POST['lang']) && in_array($_POST['lang'], ['es', 'en', 'de'])) {
            $lang = $_POST['lang'];
            $_SESSION['lang'] = $lang;
            $idioma = $lang;
        } else {
            // Si no se envió un idioma válido en POST, mantener el idioma de la sesión
            $lang = $_SESSION['lang'];
            $idioma = $lang;
        }

        // Actualizar $language para reflejar el idioma correcto
        $language = $translations[$lang] ?? $translations['en'];

        // Filtrar correo electrónico para prevenir inyección de encabezados
        $email = preg_replace("/[\r\n]/", "", $email);

        // Validaciones
        if (empty($name) || empty($email) || empty($message)) {
            $form_message = '<div class="alert alert-danger">' . $language['form_required'] . '</div>';
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $form_message = '<div class="alert alert-danger">' . $language['form_invalid_email'] . '</div>';
        } elseif (strlen($message) > 500) {
            $form_message = '<div class="alert alert-danger">' . $language['form_message_too_long'] . '</div>';
        } elseif (!preg_match('/^[a-zA-Z0-9\s.,!?@()-]*$/', $message)) {
            $form_message = '<div class="alert alert-danger">' . $language['form_invalid_content'] . '</div>';
        } else {
            // Configuración del correo
            $to = 'info@steinnova.com';
            $subject = 'Nuevo mensaje de contacto desde SteinNova';
            $body = "Nombre: $name\n";
            $body .= "Correo: $email\n";
            $body .= "Mensaje:\n$message";
            $headers = "From: $emailContacto\r\n";
            $headers .= "Reply-To: $emailContacto\r\n";

            // Enviar el correo con manejo de errores
            try {
                if (mail($to, $subject, $body, $headers)) {
                    $form_message = '<div class="alert alert-success">' . $language['form_success'] . '</div>';
                    $show_form = false; // Ocultar formulario tras envío exitoso
                } else {
                    $form_message = '<div class="alert alert-danger">' . $language['form_error'] . '</div>';
                }
            } catch (Exception $e) {
                $form_message = '<div class="alert alert-danger">' . $language['form_error'] . ': ' . $e->getMessage() . '</div>';
            }
        }
    }
}
?>

<!doctype html>
<html lang="<?php echo $lang; ?>">

<head>
    <meta charset="utf-8">
    <title><?php echo $language['title']; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/img/Logo2.png?v=1" sizes="32x32">
    <link rel="icon" type="image/x-icon" href="/img/favicon.ico?v=1">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico?v=1">

    <!-- Frameworks CSS y estilos personalizados -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/socicon.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/lightbox.min.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/flickity.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/iconsmind.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/jquery.steps.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />

    <!-- Fuentes de Google -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700|Merriweather:300,300i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background: #f0f2f5;
            margin: 0;
            padding: 0;
        }

        .form-section {
            background-color: #ffffff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .contact-card {
            background: #fff;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease;
        }

        .contact-card:hover {
            transform: scale(1.02);
        }

        .icon-circle {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            color: white;
            font-size: 24px;
        }

        .bg-email {
            background-color: #ffc107;
        }

        .bg-whatsapp {
            background-color: #25D366;
        }

        .bg-linkedin {
            background-color: #0077b5;
        }

        .bg-youtube {
            background-color: #FF0000;
        }

        .bg-map {
            background-color: #dc3545;
        }

        .btn-primary {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-primary:hover {
            background-color: #c82333;
            border-color: #c82333;
        }
    </style>
</head>

<body>
    <div class="nav-container">
        <?php @include 'Header.php'; ?>
    </div>
    <div class="container py-5">
        <div class="row g-4 align-items-stretch">
            <!-- Formulario -->
            <div class="col-lg-6">
                <div class="form-section">
                    <h3 class="fw-bold text-dark mb-4"><?php echo $language['contact_form_header']; ?></h3>
                    <?php echo $form_message; ?>
                    <?php if ($show_form): ?>
                        <form method="POST" action="contacto.php?lang=<?php echo $idioma; ?>">
                            <input type="hidden" name="lang" value="<?php echo $idioma; ?>">
                            <div class="mb-3">
                                <label for="name" class="form-label"><?php echo $language['form_name']; ?></label>
                                <input type="text" class="form-control" id="name" name="name" value="<?php echo isset($name) ? htmlspecialchars($name) : ''; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"><?php echo $language['form_email']; ?></label>
                                <input type="email" class="form-control" id="email" name="email" value="<?php echo isset($email) ? htmlspecialchars($email) : ''; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label"><?php echo $language['form_message']; ?></label>
                                <textarea class="form-control" id="message" name="message" rows="5" required><?php echo isset($message) ? htmlspecialchars($message) : ''; ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary"><?php echo $language['form_submit']; ?></button>
                        </form>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Información de contacto -->
            <div class="col-lg-6">
                <div class="row g-3">
                    <div class="col-sm-6">
                        <div class="contact-card text-center">
                            <div class="icon-circle bg-email"><i class="fa-solid fa-envelope"></i></div>
                            <h6>Email</h6>
                            <a href="mailto:<?php echo $language['contact_email']; ?>"
                                class="text-dark"><?php echo $language['contact_email']; ?></a>
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="contact-card text-center">
                            <div class="icon-circle bg-linkedin"><i class="fa-brands fa-linkedin-in"></i></div>
                            <h6>LinkedIn</h6>
                            <a href="https://mx.linkedin.com/company/steinnova" class="text-dark"
                                target="_blank"><?php echo $language['contact_linkedin']; ?></a>
                        </div>
                    </div>
                    <div class="col-sm-6 offset-sm-3">
                        <div class="contact-card text-center">
                            <div class="icon-circle bg-youtube"><i class="fa-brands fa-youtube"></i></div>
                            <h6>YouTube</h6>
                            <a href="https://www.youtube.com/@steinnova_" class="text-dark"
                                target="_blank"><?php echo $language['contact_youtube']; ?></a>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="contact-card text-center">
                            <div class="icon-circle bg-map"><i class="fa-solid fa-map-marker-alt"></i></div>
                            <h6>Dirección de oficinas generales</h6>
                            <p class="text-dark"><?php echo $language['contact_address']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'Footer.php'; ?>

    <!-- JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/flickity.pkgd.min.js"></script>
    <script src="../js/easypiechart.min.js"></script>
    <script src="../js/parallax.js"></script>
    <script src="../js/typed.min.js"></script>
    <script src="../js/datepicker.js"></script>
    <script src="../js/isotope.pkgd.min.js"></script>
    <script src="../js/ytplayer.min.js"></script>
    <script src="../js/lightbox.min.js"></script>
    <script src="../js/granim.min.js"></script>
    <script src="../js/jquery.steps.min.js"></script>
    <script src="../js/countdown.min.js"></script>
    <script src="../js/twitterFetcher_min.js"></script>
    <script src="../js/spectragram.min.js"></script>
    <script src="../js/smooth-scroll.polyfills.min.js"></script>
    <script src="../js/scripts.js"></script>

    <!-- Bootstrap 5 JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>