<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SteinNova - We Empower Industries</title>
  <meta name="description" content="Soluciones industriales en aislamiento dieléctrico automotriz y más.">
  <link rel="icon" href="../img/Logo2.png" type="image/png">

  <!-- Google Fonts e Iconos -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Merriweather:300;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">

  <!-- Bootstrap y estilos personalizados -->
  <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
  <link href="../css/stack-interface.css" rel="stylesheet" type="text/css" media="all" />
  <link href="../css/theme.css" rel="stylesheet" type="text/css" media="all" />
  <link href="../css/custom.css" rel="stylesheet" type="text/css" media="all" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Estilos embebidos -->
  <style>
    body {
      font-family: 'Open Sans', sans-serif;
      background-color: #f4f6f9;
      color: #2c3e50;
      line-height: 1.7;
    }

    h1 {
      font-family: 'Merriweather', serif;
      font-weight: 700;
      font-size: 3rem;
      color: #1a1a2e;
      text-align: center;
      position: relative;
      margin-bottom: 1.5rem;
      animation: fadeInDown 0.7s ease-in-out;
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
      border-radius: 15px;
      width: 100%;
      height: auto;
      object-fit: cover;
      transition: all 0.4s ease;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .feature-large:hover {
      transform: scale(1.03);
      box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
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
      content: '\f058';
      font-family: 'Font Awesome 6 Free';
      font-weight: 900;
      color: #198754;
      margin-right: 10px;
      font-size: 1.1rem;
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
      from { opacity: 0; transform: translateY(30px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInDown {
      from { opacity: 0; transform: translateY(-30px); }
      to { opacity: 1; transform: translateY(0); }
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
          <h1>Alto Voltaje</h1>
          <p class="lead text-muted mx-auto" style="max-width: 800px;">
            Las aplicaciones de alto voltaje requieren un material especializado y estable para el aislamiento. Los altos voltajes pueden comprometer un circuito completo, así como la seguridad de los usuarios y/u operadores.
          </p>
          <p class="lead text-muted mx-auto" style="max-width: 800px;">
            Los vehículos eléctricos (EV) requieren altos voltajes, altas corrientes y, por lo tanto, un excelente aislamiento eléctrico. El aislamiento de mica se usa comúnmente para aislar el chasis, el compartimiento de la batería y los componentes de carga para mejorar la seguridad del usuario.
          </p>
        </div>

        <div class="row g-4 mb-5">
          <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
              <img src="../img/altoVoltaje.jpg" class="card-img-top feature-large" alt="Industria Automotriz">
            </div>
          </div>
          <div class="col-md-6">
            <div class="card border-0 shadow-sm h-100">
              <img src="../img/altoVoltaje2.jpg" class="card-img-top feature-large" alt="Industria Automotriz">
            </div>
          </div>
        </div>

        <div class="text-block mt-4">
          <p><strong>Algunas aplicaciones más comunes son:</strong></p>
          <ul class="mt-3">
            <li>Aislamiento entre devanados: la mica se emplea entre los devanados de las bobinas de los transformadores.</li>
            <li>Barreras aislantes: se usa para separar los devanados primario y secundario o para aislar el núcleo.</li>
            <li>Revestimientos de ranuras: aislamiento de las ranuras donde se colocan los devanados.</li>
            <li>Bobinas: se utiliza para aislar los extremos de las bobinas del transformador.</li>
            <li>Juntas y sellos: proporcionan aislamiento y protegen de humedad o contaminantes.</li>
            <li>Hojas de mica flexible: se adaptan alrededor de componentes de forma irregular.</li>
          </ul>
          <a href="../contacto.php" class="btn btn-primary text-white">
            <i class="fa-solid fa-paper-plane text-white me-2"></i> Solicitar Información
          </a>
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
