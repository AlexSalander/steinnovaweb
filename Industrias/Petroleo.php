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

    .text-block {
      margin-bottom: 2rem;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    table td {
      padding: 12px 20px;
      text-align: left;
      vertical-align: top;
      font-size: 1.05rem;
      color: #444;
      border-bottom: 1px solid #eee;
    }

    table td strong {
      color: #e63946;
      font-weight: bold;
    }

    table td span {
      font-weight: normal;
      color: #444;
    }

    table tr:last-child td {
      border-bottom: none;
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
          <h1>Petróleo y Gas</h1>
          <p class="mt-3 mx-auto" style="max-width: 800px;">
            Explore cómo nuestra gama de productos especializados en mica dieléctrica proporciona soluciones cruciales
            para la industria del petróleo y gas. Desde el sellado hermético hasta el aislamiento eléctrico y la
            protección contra la corrosión, garantizamos la seguridad y el rendimiento en entornos exigentes.
          </p>
        </div>

        <div class="row align-items-center">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <img src="../img/petroleo.jpg" alt="Industria Automotriz" class="feature-large">
          </div>
          <div class="col-lg-6">
            <div class="text-block">
              <p><strong>Algunas aplicaciones más comunes son:</strong></p>
              <table>
                <tr>
                  <td><strong>Empaquetaduras y Juntas para Equipos de Alta Temperatura y Presión</strong></td>
                  <td><span>Fabricación de empaquetaduras y juntas para sellar equipos sometidos a altas temperaturas y
                      presiones.</span></td>
                </tr>
                <tr>
                  <td><strong>Aislamiento de resistencia y sensores</strong></td>
                  <td><span>Aplicaciones donde se necesitan resistencias y sensores para medir la temperatura en pozos
                      petroleros o equipos de perforación.</span></td>
                </tr>
                <tr>
                  <td><strong>Empaquetaduras y Juntas en Equipos de Instrumentación</strong></td>
                  <td><span>En control y monitoreo de procesos.</span></td>
                </tr>
                <tr>
                  <td><strong>Aislamiento en Motores y Equipos Eléctricos</strong></td>
                  <td><span>Fabricación de componentes aislantes, como laminados y cintas, para proteger los bobinados y
                      evitar fallos eléctricos.</span></td>
                </tr>
                <tr>
                  <td><strong>Revestimientos Anticorrosivos</strong></td>
                  <td><span>La mica se utiliza como una barrera anticorrosiva en equipos metálicos utilizados en
                      entornos corrosivos.</span></td>
                </tr>
              </table>
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
</body>

</html>