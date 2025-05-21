<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="author">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="SEO description">
        <title>SteinNova - Empowering Industries</title>

        <!-- Favicon -->
        <link rel="icon" href="img/Logo2.png" type="image/png">

        <!-- CSS Frameworks and Custom Styles -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700|Merriweather:300,300i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

        <!-- Bootstrap 5 CDN -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
    <body>
        <!-- Header Section -->
        <div class="nav-container">
            <?php @include 'Header.php'; ?>
        </div> 

        <!-- Main Content Section -->
        <div class="main-container">
            <?php @include 'Industrias.php'; ?>
            <?php @include 'SerProd.php'; ?>
            <?php @include 'QuienSomos.php'; ?>
        </div>

        <!-- Footer Section -->
        <?php @include 'Footer.php';?>

        <!-- Back to Top Button -->
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


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
</html>
