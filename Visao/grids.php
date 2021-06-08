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
        <h3><i class="fa fa-angle-right"></i> Grid: Stacked Horizontal</h3>
        <div class="row show-grid mt">
          <div class="col-md-1">.col-md-1</div>
          <div class="col-md-1">.col-md-1</div>
          <div class="col-md-1">.col-md-1</div>
          <div class="col-md-1">.col-md-1</div>
          <div class="col-md-1">.col-md-1</div>
          <div class="col-md-1">.col-md-1</div>
          <div class="col-md-1">.col-md-1</div>
          <div class="col-md-1">.col-md-1</div>
          <div class="col-md-1">.col-md-1</div>
          <div class="col-md-1">.col-md-1</div>
          <div class="col-md-1">.col-md-1</div>
          <div class="col-md-1">.col-md-1</div>
        </div>
        <div class="row show-grid">
          <div class="col-md-8">.col-md-8</div>
          <div class="col-md-4">.col-md-4</div>
        </div>
        <div class="row show-grid">
          <div class="col-md-4">.col-md-4</div>
          <div class="col-md-4">.col-md-4</div>
          <div class="col-md-4">.col-md-4</div>
        </div>
        <div class="row show-grid">
          <div class="col-md-6">.col-md-6</div>
          <div class="col-md-6">.col-md-6</div>
        </div>
        <h3><i class="fa fa-angle-right"></i> Example: Mobile and Desktop</h3>
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row show-grid mt">
          <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
          <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        </div>
        <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
        <div class="row show-grid">
          <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
          <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
          <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        </div>
        <!-- Columns are always 50% wide, on mobile and desktop -->
        <div class="row show-grid">
          <div class="col-xs-6">.col-xs-6</div>
          <div class="col-xs-6">.col-xs-6</div>
        </div>
        <h3><i class="fa fa-angle-right"></i> Example: Mobile, Tablets & Desktop</h3>
        <div class="row show-grid mt">
          <div class="col-xs-12 col-sm-6 col-md-8">.col-xs-12 .col-sm-6 .col-md-8</div>
          <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
        </div>
        <div class="row show-grid">
          <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
          <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
          <!-- Optional: clear the XS cols if their content doesn't match in height -->
          <div class="clearfix visible-xs"></div>
          <div class="col-xs-6 col-sm-4">.col-xs-6 .col-sm-4</div>
        </div>
        <h3><i class="fa fa-angle-right"></i> Example: Offsetting Columns</h3>
        <div class="row show-grid mt">
          <div class="col-md-4">.col-md-4</div>
          <div class="col-md-4 col-md-offset-4">.col-md-4 .col-md-offset-4</div>
        </div>
        <div class="row show-grid">
          <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
          <div class="col-md-3 col-md-offset-3">.col-md-3 .col-md-offset-3</div>
        </div>
        <div class="row show-grid">
          <div class="col-md-6 col-md-offset-3">.col-md-6 .col-md-offset-3</div>
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
  <script class="include" type="text/javascript" src="Estilo/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="Estilo/lib/jquery.scrollTo.min.js"></script>
  <script src="Estilo/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="Estilo/lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>





