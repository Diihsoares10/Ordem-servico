


<!--
=========================================================
* Material Dashboard 2 - v3.0.5
=========================================================

* Product Page: https://www.creative-tim.com/product/material-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html lang="pt-br">
  <head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="apple-touch-icon" sizes="76x76" href="./assets/img/apple-icon.png">
<link rel="icon" type="images/png" href="./images/logo.png">
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<title> Painel ADM </title>

<style>

body{
    background-image: url(tec.png);
    background-repeat: no-repeat;
    background-position: right 20px top 10px;
    
    
}

#page-container {
  position: relative;
  left: 0;
  transition: left 0.3s ease-in-out;
}

#page-x {
  max-width: 100%;
}

#modal {
  position: fixed;
  top: 0;
  right: -500px;
  bottom: 0;
  width: 500px;
  display: none;
  z-index: 999;
  transition: right 0.3s ease-in-out;
}

#modal iframe {
  width: 100%;
  height: 100%;

}

.btn-close.btn-danger {
  opacity: 1;
  text-shadow: none;
  margin-left: 900px;
}

.btn-close.btn-danger:hover {
  color: #000;
  background-color: #dc3545;
  border-color: #dc3545;
}

#side-link{
  width: 1500px;
}

.modal-content{
  width: 1055px;
  height: -1000px;
  margin: -30%;
}

.modal-content .modal-body{
  margin: -2%;
}

</style>


<!--     Fonts and icons     -->
<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

<!-- Nucleo Icons -->
<link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
<link href="./assets/css/nucleo-svg.css" rel="stylesheet" />

<!-- Font Awesome Icons -->
<script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

<!-- Material Icons -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

<!-- CSS Files -->

<link id="pagestyle" href="./assets/css/material-dashboard.css?v=3.0.5" rel="stylesheet" />

<!-- Nepcha Analytics (nepcha.com) -->
<!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
<script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>


  </head>


  <body class="g-sidenav-show  bg-gray-100">
    
      <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="dashboard.php" target="_blank">
      <img src="./assets/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">Serviços</span>
    </a>
  </div>


  <hr class="horizontal light mt-0 mb-2">

  <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
    <ul class="navbar-nav">
      
<div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link text-white" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal1">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">dashboard</i>
        </div>
        <span class="nav-link-text ms-1">OS</span>
      </a>
    </li>

    <div class="modal fade" id="exampleModal1" tabindex="1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <iframe src="form.php" width="220%" height="650"></iframe>
          </div>
        </div>
      </div>
    </div>

    <li class="nav-item">
      <a class="nav-link text-white" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal2">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">dashboard</i>
        </div>
        <span class="nav-link-text ms-1">Orçamentos</span>
      </a>
    </li>

    <div class="modal fade" id="exampleModal2" tabindex="2" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <iframe src="test.php" width="220%" height="650"></iframe>
          </div>
        </div>
      </div>
    </div>

    <li class="nav-item">
      <a class="nav-link text-white" href="#" data-bs-toggle="modal" data-bs-target="#exampleModal3">
        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
          <i class="material-icons opacity-10">dashboard</i>
        </div>
        <span class="nav-link-text ms-1">Clientes Cadastrados</span>
      </a>
    </li>

    <div class="modal fade" id="exampleModal3" tabindex="3" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body">
            <iframe src="listaros.php" width="230%" height="700"></iframe>
          </div>
        </div>
      </div>
    </div>
  </ul>
</div>
    
      <?php
// Conexão com o banco de dados

use Dompdf\Css\Style;

$conn = mysqli_connect("localhost", "root", "", "ordem_servico");

// Verifica se ocorreu algum erro na conexão
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Consulta SQL para contar o número de registros
$sql = "SELECT COUNT(*) as total FROM service";

// Executa a consulta
$resultado = mysqli_query($conn, $sql);

// Obtém o resultado da consulta
$row = mysqli_fetch_assoc($resultado);

// Exibe o número de registros
  echo "Total de Os cadastradas: " . $row['total'];

// Fecha a conexão com o banco de dados
mysqli_close($conn);

?>
  </a>
</li>
    </ul>
  </div>
</aside>


  

<!--   Core JS Files   -->
<script src="./assets/js/core/popper.min.js" ></script>
<script src="./assets/js/core/bootstrap.min.js" ></script>
<script src="./assets/js/plugins/perfect-scrollbar.min.js" ></script>
<script src="./assets/js/plugins/smooth-scrollbar.min.js" ></script>
<script>
  var win = navigator.platform.indexOf('Win') > -1;
  if (win && document.querySelector('#sidenav-scrollbar')) {
    var options = {
      damping: '0.5'
    }
    Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
  }
</script>


<script>
  document.querySelectorAll('.nav-link').forEach(function(link) {
    link.addEventListener('click', function(event) {
      event.preventDefault();
      var modalId = this.getAttribute('data-bs-target');
      var modal = document.querySelector(modalId);
      modal.style.display = 'block';
      document.getElementById('page-container').style.right = '-100px';
      modal.style.right = '0';
    });
  });
</script
<!-- Github buttons -->
<script async defer src="https://buttons.github.io/buttons.js"></script>


<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc --><script src="./assets/js/material-dashboard.min.js?v=3.0.5"></script>
  </body>

</html>
