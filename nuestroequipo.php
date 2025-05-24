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
        'page_title' => 'Nuestro Equipo',
        'team_header' => 'Nuestro Equipo',
        'team_text' => 'En SteinNova, contamos con un equipo multidisciplinario de profesionales altamente calificados y con una amplia experiencia internacional en sistemas de aislamiento termoeléctrico y servicios estratégicos. Nuestros colaboradores están dedicados a brindar soluciones innovadoras y personalizadas a nuestros clientes, utilizando tecnologías de vanguardia y un enfoque orientado a la excelencia en cada proyecto. Con una cultura de colaboración y compromiso con la mejora continua, nuestro equipo se esfuerza por superar las expectativas de nuestros clientes y establecer relaciones sólidas basadas en la confianza y el éxito mutuo.',
        'contact_button' => 'Solicitar Información'
    ],
    'en' => [
        'page_title' => 'Our Team',
        'team_header' => 'Our Team',
        'team_text' => 'At SteinNova, we have a multidisciplinary team of highly qualified professionals with extensive international experience in thermoelectric insulation systems and strategic services. Our collaborators are dedicated to providing innovative and customized solutions to our clients, using cutting-edge technologies and a focus on excellence in every project. With a culture of collaboration and commitment to continuous improvement, our team strives to exceed our clients’ expectations and build strong relationships based on trust and mutual success.',
        'contact_button' => 'Request Information'
    ],
    'de' => [
        'page_title' => 'Unser Team',
        'team_header' => 'Unser Team',
        'team_text' => 'Bei SteinNova verfügen wir über ein multidisziplinäres Team von hochqualifizierten Fachleuten mit umfassender internationaler Erfahrung in thermoelektrischen Isolierungssystemen und strategischen Dienstleistungen. Unsere Mitarbeiter widmen sich der Bereitstellung innovativer und maßgeschneiderter Lösungen für unsere Kunden, indem sie modernste Technologien und einen Fokus auf Exzellenz in jedem Projekt nutzen. Mit einer Kultur der Zusammenarbeit und dem Engagement für kontinuierliche Verbesserung strebt unser Team danach, die Erwartungen unserer Kunden zu übertreffen und starke Beziehungen aufzubauen, die auf Vertrauen und gemeinsamem Erfolg basieren.',
        'contact_button' => 'Informationen anfordern'
    ]
];

$selectedTexts = $texto[$idioma];
?>

<!DOCTYPE html>
<html lang="<?php echo $idioma; ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SteinNova's multidisciplinary team, delivering innovative thermoelectric insulation and strategic services.">
    <title><?php echo $selectedTexts['page_title']; ?> - SteinNova</title>

    <!-- Favicon -->
    <link rel="icon" href="img/Logo2.png" type="image/png">

    <!-- CSS Frameworks and Custom Styles -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />

    <!-- Bootstrap 5 CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700|Merriweather:300,300i"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Font Awesome for Button Icon -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

    <!-- Estilos específicos de nuestroequipo.php -->
    <style>
        .team-section {
            background-color: #f8f9fa;
        }
        .team-img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
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
        .text-justified {
            text-align: justify;
        }
    </style>
</head>
<body>
    <!-- Incluir Encabezado -->
    <div class="nav-container">
        <?php @include './Header.php'; ?>
    </div>

    <!-- Sección Nuestro Equipo -->
    <section class="team-section py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h2 class="fw-bold text-dark mb-4"><?php echo $selectedTexts['team_header']; ?></h2>
                    <p class="text-muted lead text-justified"><?php echo $selectedTexts['team_text']; ?></p>
                    <a href="contacto.php?lang=<?php echo $idioma; ?>" class="btn btn-primary text-white">
                        <i class="fa-solid fa-paper-plane text-white me-2"></i> <?php echo $selectedTexts['contact_button']; ?>
                    </a>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="img/nuestroequipo.jpg" alt="Equipo SteinNova" class="team-img">
                </div>
            </div>
        </div>
    </section>

    <!-- Incluir Pie de Página -->
    <?php include 'Footer.php'; ?>

    <!-- Back to Top -->
    <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
        <i class="stack-interface stack-up-open-big"></i>
    </a>

    <!-- JS Scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/flickity.min.js"></script>
    <script src="js/easypiechart.min.js"></script>
    <script src="js/parallax.js"></script>
    <script src="js/typed.min.js"></script>
    <script src="js/datepicker.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/ytplayer.min.js"></script>
    <script src="js/lightbox.min.js"></script>
    <script src="js/granim.min.js"></script>
    <script src="js/jquery.steps.min.js"></script>
    <script src="js/countdown.min.js"></script>
    <script src="js/twitterfetcher.min.js"></script>
    <script src="js/spectragram.min.js"></script>
    <script src="js/smooth-scroll.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>