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
  <title>Dashio - Bootstrap Admin Template</title>

  <!-- Favicons -->
  <link href="Estilo/img/favicon.png" rel="icon">
  <link href="Estilo/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="Estilo/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="Estilo/lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link href="Estilo/lib/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
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
        <h3><i class="fa fa-angle-right"></i> Calendar</h3>
        <!-- page start-->
        <div class="row mt">
          <aside class="col-lg-3 mt">
            <h4><i class="fa fa-angle-right"></i> Draggable Events</h4>
            <div id="external-events">
              <div class="external-event label label-theme">My Event 1</div>
              <div class="external-event label label-success">My Event 2</div>
              <div class="external-event label label-info">My Event 3</div>
              <div class="external-event label label-warning">My Event 4</div>
              <div class="external-event label label-danger">My Event 5</div>
              <div class="external-event label label-default">My Event 6</div>
              <div class="external-event label label-theme">My Event 7</div>
              <div class="external-event label label-info">My Event 8</div>
              <div class="external-event label label-success">My Event 9</div>
              <p class="drop-after">
                <input type="checkbox" id="drop-remove"> Remove After Drop
              </p>
            </div>
          </aside>
          <aside class="col-lg-9 mt">
            <section class="panel">
              <div class="panel-body">
                <div id="calendar" class="has-toolbar"></div>
              </div>
            </section>
          </aside>
        </div>
        <!-- page end-->
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
  <script src="Estilo/lib/jquery-ui-1.9.2.custom.min.js"></script>
  <script src="Estilo/lib/fullcalendar/fullcalendar.min.js"></script>
  <script src="Estilo/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="Estilo/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="Estilo/lib/jquery.scrollTo.min.js"></script>
  <script src="Estilo/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="Estilo/lib/common-scripts.js"></script>
  <!--script for this page-->
  <script src="Estilo/lib/calendar-conf-events.js"></script>

</body>

</html>






