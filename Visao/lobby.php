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
      <section class="wrapper site-min-height">
        <!-- page start-->
        <div class="chat-room mt">
          <aside class="mid-side">
            <div class="chat-room-head">
              <h3>Lobby Room</h3>
              <form action="#" class="pull-right position">
                <input type="text" placeholder="Search" class="form-control search-btn ">
              </form>
            </div>
            <div class="room-desk">
              <h4 class="pull-left">Open Room</h4>
              <a href="#" class="pull-right btn btn-theme02">+ Create Room</a>
              <div class="room-box">
                <h5 class="text-primary"><a href="chat_room.php">Dashboard</a></h5>
                <p>We talk here about our dashboard. No support given.</p>
                <p><span class="text-muted">Admin :</span> Sam Soffes | <span class="text-muted">Members :</span> 98 | <span class="text-muted">Last Activity :</span> 2 min ago</p>
              </div>
              <div class="room-box">
                <h5 class="text-primary"><a href="chat_room.php">Support</a></h5>
                <p>Support chat for Dashio. Purchase ticket needed.</p>
                <p><span class="text-muted">Admin :</span> Sam Soffes | <span class="text-muted">Member :</span> 44 | <span class="text-muted">Last Activity :</span> 15 min ago</p>
              </div>
              <div class="room-box">
                <h5 class="text-primary"><a href="chat_room.php">MaxFront</a></h5>
                <p>Technical support for our front-end. No customization.</p>
                <p><span class="text-muted">Admin :</span> Sam Soffes | <span class="text-muted">Member :</span> 22 | <span class="text-muted">Last Activity :</span> 15 min ago</p>
              </div>
            </div>
            <div class="room-desk">
              <h4 class="pull-left">private room</h4>
              <div class="room-box">
                <h5 class="text-primary"><a href="chat_room.php">Dash Stats</a></h5>
                <p>Private chat regarding our site statics.</p>
                <p><span class="text-muted">Admin :</span> Sam Soffes | <span class="text-muted">Member :</span> 13 | <span class="text-muted">Last Activity :</span> 15 min ago</p>
              </div>
              <div class="room-box">
                <h5 class="text-primary"><a href="chat_room.php">Gold Clients</a></h5>
                <p>Exclusive support for our Gold Members. Membership $98/year</p>
                <p><span class="text-muted">Admin :</span> Sam Soffes | <span class="text-muted">Member :</span> 13 | <span class="text-muted">Last Activity :</span> 15 min ago</p>
              </div>
            </div>
          </aside>
          <aside class="right-side">
            <div class="user-head">
              <a href="#" class="chat-tools btn-theme"><i class="fa fa-cog"></i> </a>
              <a href="#" class="chat-tools btn-theme03"><i class="fa fa-key"></i> </a>
            </div>
            <div class="invite-row">
              <h4 class="pull-left">Team Members</h4>
              <a href="#" class="btn btn-theme04 pull-right">+ Invite</a>
            </div>
            <ul class="chat-available-user">
              <li>
                <a href="chat_room.php">
                  <img class="img-circle" src="Estilo/img/friends/fr-02.jpg" width="32">
                  Paul Brown
                  <span class="text-muted">1h:02m</span>
                  </a>
              </li>
              <li>
                <a href="chat_room.php">
                  <img class="img-circle" src="Estilo/img/friends/fr-05.jpg" width="32">
                  David Duncan
                  <span class="text-muted">1h:08m</span>
                  </a>
              </li>
              <li>
                <a href="chat_room.php">
                  <img class="img-circle" src="Estilo/img/friends/fr-07.jpg" width="32">
                  Laura Smith
                  <span class="text-muted">1h:10m</span>
                  </a>
              </li>
              <li>
                <a href="chat_room.php">
                  <img class="img-circle" src="Estilo/img/friends/fr-08.jpg" width="32">
                  Julia Schultz
                  <span class="text-muted">3h:00m</span>
                  </a>
              </li>
              <li>
                <a href="chat_room.php">
                  <img class="img-circle" src="Estilo/img/friends/fr-01.jpg" width="32">
                  Frank Arias
                  <span class="text-muted">4h:22m</span>
                  </a>
              </li>
            </ul>
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
  <script src="Estilo/lib/bootstrap/js/bootstrap.min.js"></script>
  <script class="include" type="text/javascript" src="Estilo/lib/jquery.dcjqaccordion.2.7.js"></script>
  <script src="Estilo/lib/jquery.scrollTo.min.js"></script>
  <script src="Estilo/lib/jquery.nicescroll.js" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="Estilo/lib/common-scripts.js"></script>
  <!--script for this page-->

</body>

</html>







