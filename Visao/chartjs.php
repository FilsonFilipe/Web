<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Dashio - Bootstrap Admin Template</title>

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
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Chartjs Charts</h3>
        <!-- page start-->
        <div class="tab-pane" id="chartjs">
          <div class="row mt">
            <div class="col-lg-6">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Doughnut</h4>
                <div class="panel-body text-center">
                  <canvas id="doughnut" height="300" width="400"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Line</h4>
                <div class="panel-body text-center">
                  <canvas id="line" height="300" width="400"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt">
            <div class="col-lg-6">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Radar</h4>
                <div class="panel-body text-center">
                  <canvas id="radar" height="300" width="400"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Polar Area</h4>
                <div class="panel-body text-center">
                  <canvas id="polarArea" height="300" width="400"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt">
            <div class="col-lg-6">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Bar</h4>
                <div class="panel-body text-center">
                  <canvas id="bar" height="300" width="400"></canvas>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="content-panel">
                <h4><i class="fa fa-angle-right"></i> Pie</h4>
                <div class="panel-body text-center">
                  <canvas id="pie" height="300" width="400"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- page end-->
      </section>
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
  <script class="include" type="text/javascript" src="Estilo/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="Estilo/lib/jquery.scrollTo.min.js"></script>
  <script src="Estilo/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="Estilo/lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="Estilo/lib/chart-master/Chart.js"></script>
  <script src="Estilo/lib/chartjs-conf.js"></script>

</body>

</html>





