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
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Google Map with Loaction List
              </header>
              <div class="panel-body">
                <div id="gmap-list"></div>
              </div>
            </section>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
            <section class="panel">
              <header class="panel-heading">
                Google Map with Tab Location
              </header>
              <div class="panel-body">
                <div id="controls-tabs"></div>
                <div id="info"></div>
                <div id="gmap-tabs"></div>
              </div>
            </section>
          </div>
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
  <script src="Estilo/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="Estilo/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="Estilo/lib/jquery.scrollTo.min.js"></script>
  <script src="Estilo/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="Estilo/lib/common-scripts.js"></script>
  <!--script for this page-->
  <!--Google Map-->
  <script src="http://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.7"></script>
  <script src="Estilo/lib/google-maps/maplace.js"></script>
  <script src="Estilo/lib/google-maps/data/points.js"></script>
  <script>
    //ul list example
    new Maplace({
      locations: LocsB,
      map_div: '#gmap-list',
      controls_type: 'list',
      controls_title: 'Choose a location:'
    }).Load();

    new Maplace({
      locations: LocsB,
      map_div: '#gmap-tabs',
      controls_div: '#controls-tabs',
      controls_type: 'list',
      controls_on_map: false,
      show_infowindow: false,
      start: 1,
      afterShow: function(index, location, marker) {
        $('#info').php(location.php);
      }
    }).Load();
  </script>

</body>

</html>





