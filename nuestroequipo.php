<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="author">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="SEO description">
    <title>SteinNova - Empowering Industries</title>

    <link rel="icon" href="img/Logo2.png" type="image/png">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/theme.css" rel="stylesheet" />
    <link href="css/custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:200,300,400,400i,500,600,700|Merriweather:300,300i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <div class="nav-container">
        <?php @include './Header.php'; ?>
    </div> 

    <!-- Main Content -->
    <div class="main-container">
        <section class="pt-5 pb-5">
            <div class="container mb-5">
                <div class="row mb-4">
                    <div class="col-12 text-center">
                        <h1 class="display-5">Nuestro Equipo</h1>
                    </div>
                </div>
                <div class="row align-items-center g-5">
                    <div class="col-lg-6 text-center">
                        <img src="../img/nuestroequipo.jpg" class="img-fluid rounded shadow" alt="Equipo SteinNova">
                    </div>
                    <div class="col-lg-6">
                        <p class="text-justify">
                            En SteinNova, contamos con un equipo multidisciplinario de profesionales altamente calificados y con una amplia experiencia internacional en sistemas de aislamiento termoeléctrico y servicios estratégicos. Nuestros colaboradores están dedicados a brindar soluciones innovadoras y personalizadas a nuestros clientes, utilizando tecnologías de vanguardia y un enfoque orientado a la excelencia en cada proyecto. Con una cultura de colaboración y compromiso con la mejora continua, nuestro equipo se esfuerza por superar las expectativas de nuestros clientes y establecer relaciones sólidas basadas en la confianza y el éxito mutuo.
                        </p>
                        <hr>
                        <!-- Formulario de contacto -->
                        <form method="POST" id="form" class="row g-3">
                            <input type="hidden" name="access_key" value="1590f7e3-cf51-41d9-9c2d-3fc0ec34a60e">
                            <input type="hidden" name="page" value="contact.php">
                            
                            <div class="col-md-6">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" name="name" class="form-control validate-required" id="name" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email" class="form-label">Correo electrónico</label>
                                <input type="email" name="email" class="form-control validate-required validate-email" id="email" required>
                            </div>
                            <div class="col-12">
                                <label for="message" class="form-label">Solicitud</label>
                                <textarea name="message" id="message" class="form-control validate-required" rows="4" required></textarea>
                            </div>
                            <div class="col-md-4">
                                <button type="submit" class="btn btn-primary w-100">Enviar</button>
                            </div>
                            <input type="checkbox" name="botcheck" class="d-none">
                            <div id="result" class="mt-3"></div>
                        </form>
                    </div>
                </div>
            </div>
        </section> 
    </div>

    <!-- Footer -->
    <?php @include 'Footer.php';?>

    <!-- Back to Top -->
    <a class="back-to-top inner-link" href="#start" data-scroll-class="100vh:active">
        <i class="stack-interface stack-up-open-big"></i>
    </a>

    <!-- Scripts -->
    <script src="steinmetal-website/js/jquery-3.1.1.min.js"></script>
    <script src="steinmetal-website/js/scripts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
