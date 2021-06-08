<?php
ob_start();
session_start();
if (!isset($_SESSION['nomePessoaLOG']) || !isset($_SESSION['idUsuarioLOG'])):
    echo"<script>"
    . "window.location.href='login.php'"
    . "</script>";
endif;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Licença de Aluguer</title>

  <!-- Favicons -->
  <link href="Estilo/img/favicon.png" rel="icon">
  <link href="Estilo/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="Estilo/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="Estilo/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="Estilo/css/style.css" rel="stylesheet">
  <link href="Estilo/css/style-responsive.css" rel="stylesheet">

  <!-- =======================================================
    Template Name: Dashio
    Template URL: https://templatemag.com/dashio-bootstrap-admin-template/
    Author: TemplateMag.com
    License: https://templatemag.com/license/
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
    <!--header start-->
    <?php include_once 'Include/header.php';?>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
    <?php include_once 'Include/menu.php';?>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper site-min-height">
        <h3><i class="fa fa-angle-right"></i> Licença de Aluguer</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="row">
          <div class="col-md-12">
            <div class="content-panel">
              <h4><i class="fa fa-angle-right"></i> Veículos existentes</h4>
              <hr>
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Proprietário</th>
                    <th>Matrícula</th>
                    <th>Modelo</th>
                    <th>Categoria</th>
                  </tr>
                </thead>
                <tbody>
                 
                  <tr>
                    <td>2</td>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <!-- /col-md-12 -->
          
          <!-- /col-md-12 -->
        </div>
          </div>
        </div>
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <?php include_once 'Include/rodape.php';?>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="Estilo/lib/jquery/jquery.min.js"></script>
  <script src="Estilo/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="Estilo/lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="Estilo/lib/jquery.ui.touch-punch.min.js"></script>
  <script class="include" type="text/javascript" src="Estilo/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="Estilo/lib/jquery.scrollTo.min.js"></script>
  <script src="Estilo/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="Estilo/lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>














