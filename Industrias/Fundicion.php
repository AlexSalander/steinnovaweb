<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SteinNova - We Empower Industries</title>
  <meta name="description" content="Soluciones industriales en aislamiento dieléctrico automotriz y más.">
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

  <!-- Estilos embebidos -->
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
    <?php @include '../Header.php'; ?>
  </div>

  <div class="main-container">
    <div class="container my-5">
      <div class="section-wrapper">
        <div class="text-center mb-5">
          <h1>Fundición de Autopartes y Siderurgia</h1>
          <p class="mt-3 mx-auto" style="max-width: 800px;">
            Las fundiciones de partes automotrices metálicas juegan un rol esencial en la cadena de suministro para BOMs
            como son discos de freno, cigueñales,árboles de leva, pistones etc. Por ello orientamos nuestros esfuerzos
            en proveer el suministro estratégico de materiales consumibles para el mantenimiento de sus núcleos de
            producción como es el caso de los hornos de los inducción, ollas de transferencias, sistemas die casting y
            líneas de moldeo.
          </p>
        </div>

        <div class="row align-items-center">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="../img/fundicion.jpg" alt="Industria Automotriz" class="feature-large">
          </div>
          <div class="col-lg-6">
            <div class="text-block">
              <p><strong>Algunas aplicaciones más comunes son:</strong></p>
              <ul class="mt-3">
                <li>Mica dieléctrica para hornos de inducción e inductores de hornos canal.</li>
                <li>Placas de mica rígida de muscovita y flogopita.​</li>
                <li>Tubos de mica.​</li>
                <li>Piezas mecanizadas CNC.</li>
                <li>Aislamiento termo-eléctrico de bobinas de cobre.​</li>
                <li>Aislamiento de yugos magnéticos.</li>
                <li>Aislamiento de moldes.</li>
                <li>Fibra cerámica de respaldo en ollas de transferencia.</li>
              </ul>
              <a href="../contacto.php" class="btn btn-primary text-white">
                <i class="fa-solid fa-paper-plane text-white me-2"></i> Solicitar Información
              </a>
            </div>
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