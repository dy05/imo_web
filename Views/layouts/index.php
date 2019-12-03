<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title><?= isset($title) ? $title : 'IT Solution' ?></title>

  <!-- Favicons -->



  <!-- Bootstrap core CSS -->
  <link href="<?= ROUTE.'/bootstrap/css/bootstrap.min.css'; ?>" rel="stylesheet">
  <!--external css-->
  <link href="<?= ROUTE.'/lib/font-awesome/css/font-awesome.css'; ?>" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="<?= ROUTE.'/css/zabuto_calendar.css'; ?>">
  <link rel="stylesheet" type="text/css" href="<?= ROUTE.'/lib/gritter/css/jquery.gritter.css'; ?>" />
  <!-- Custom styles for this template -->
  <link href="<?= ROUTE.'/css/style.css'; ?>" rel="stylesheet">
  <link href="<?= ROUTE.'/css/style-responsive.css'; ?>" rel="stylesheet">
  <script src="<?= ROUTE.'/lib/chart-master/Chart.js'; ?>"></script>

  <!-- =======================================================
    
  ======================================================= -->
</head>

<body>
  <section id="container">
    <!--header start-->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="<?= ROUTE; ?>" class="logo"><span>IT</span><b>SOLUTION</b></a>
      <!--logo end-->
      <div class="nav notify-row" id="top_menu">
        <!--  notification start -->
        <ul class="nav top-menu">
          <!-- settings start -->
         
          <!-- settings end -->
          <!-- inbox dropdown start-->
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="">
              <i class="fa fa-envelope-o" style="size:7px;"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 3 new messages</p>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="<?= ROUTE.'/img/ui-zac.jpg'; ?>"></span>
                  <span class="subject">
                  <span class="from">Serge</span>
                  <span class="time">Maintenant</span>
                  </span>
                  <span class="message">
                  Salut Marius comment tu vas ?
                  </span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="<?= ROUTE.'/img/ui-divya.jpg'; ?>"></span>
                  <span class="subject">
                  <span class="from">Marius</span>
                  <span class="time">40 mins laters.</span>
                  </span>
                  <span class="message">
                  salut Serge je me porte bien!
                  </span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="<?= ROUTE.'/img/ui-danro.jpg'; ?>"></span>
                  <span class="subject">
                  <span class="from">Takam</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Salut bonne journee a vous !
                  </span>
                  </a>
              </li>
              <li>
                <a href="#">
                  <span class="photo"><img alt="avatar" src="<?= ROUTE.'/img/ui-sherman.jpg'; ?>"></span>
                  <span class="subject">
                  <span class="from">Serge</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                 Je suis à Saker pour un intervention .
                  </span>
                  </a>
              </li>
              <li>
                <a href="#">See all messages</a>
              </li>
            </ul>
          </li>

          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">3</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have Do 7 Interventions</p>
              </li>
            </ul>
          </li>
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-warning"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have  5 Critiques Interventions</p>
              </li>
             
            </ul>
          </li>

          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <i class="fa fa-print"></i>
              
              </a>
          </li>
          <!-- inbox dropdown end -->
          
      </div>
       
      <div class="top-menu">
        <ul class="nav pull-right top-menu1">
          <li><a class="logout" href="<?= ROUTE.'/logout'; ?>">Log-out</a></li>
        </ul>
      </div>
    </header>
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->
   <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="#"><img src="<?= MEDIA.'techniciens/'.$user->IMAGE_TECH; ?>" class="img-circle" width="80"></a></p>
          <h5 class="centered"><?= $user->NOM_TECH.' '.$user->PRENOM_TECH; ?></h5>
          <li class="mt">
            <a class="<?= $page_name === 'homepage' ? ' active' : ''; ?>" href="<?= ROUTE; ?>">
              <i class="fa fa-dashboard"></i>
              <span>Home</span>
              </a>
          </li>
            <?php if($_SESSION['auth'] == 1): ?>
           <li class="sub-menu<?= $page_name === 'techniciens' ? ' active' : ''; ?>">
            <a href="#">
              <i class="fa fa-user"></i>
              <span>Technicians Profiles</span>
              </a>
            <ul class="sub">
               <li><a href="<?= ROUTE.'/techniciens/new'; ?>"><i class="fa fa-user"></i>Create Technicians</a></li>
              <li><a href="<?= ROUTE.'/techniciens'; ?>"><i class="fa fa-list"></i>Technicians Lists</a></li>
            </ul>
          </li>
            <?php endif; ?>
          <li class="sub-menu">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Customers</span>
              </a>
            <ul class="sub">
              <li><a href="Customers.php"><i class="fa fa-user"></i>Customer</a></li>
              <li><a href="Customers_Lists.php"><i class="fa fa-list"></i>Customers Lists</a></li>
              <li><a href="States_Customers.php"><i class="fa fa-print"></i>States Customers</a></li>
               <li class="sub-menu">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Agencies</span>
              </a>
              <ul class="sub">
                <li><a href="Agency.php"><i class="fa fa-user"></i>Agency</a></li>
                <li><a href="Agency_Lists.php"><i class="fa fa-list"></i>Agency Lists</a></li>
              <li><a href="States_Agency"><i class="fa fa-print"></i>States Agency</a></li>
               <li class="sub-menu">
            <a href="#">
              <i class="fa fa-users"></i>
              <span>Services</span>
              </a>
               <ul class="sub">
                <li><a href="Services.php"><i class="fa fa-desktop"></i>Services</a></li>
              <li><a href="Services_Lists.php"><i class="fa fa-list"></i>ServicesLists</a></li>
              <li><a href="Services_Lists.php"><i class="fa fa-print"></i>ServicesLists</a></li>
            </ul>
             
            </ul>
              
            </ul>
          </li>
          <li class="sub-menu">
            <a href="#">
              <i class="fa fa-book"></i>
              <span>Problemes</span>
              </a>
            <ul class="sub">
              <li><a href="Problemes.php"> <i class="fa fa-book"></i>Problemes</a></li>
              <li><a href="Problemes_Lists.php"> <i class="fa fa-list"></i>Problemes Lists</a></li>
              <li><a href="Criticals_Problemes.php"> <i class="fa fa-warning"></i>Criticals Problemes</a></li>
              <li><a href="States_Problemes.php"> <i class="fa fa-print"></i>States Problemes</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="#">
              <i class="fa fa-bolt"></i>
              <span>Interventions</span>
              </a>
            <ul class="sub">
              <li><a href="Interventions.php"> <i class="fa fa-bolt"></i>Interventions</a></li>
              <li><a href="Interventions_Lists.php"> <i class="fa fa-list"></i>Interventions Lists</a></li>
              <li><a href="States_Interventions.php"> <i class="fa fa-print"></i>States Interventions</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="#">
              <i class="fa fa-user"></i>
              <span>Providers</span>
              </a>
            <ul class="sub">
              <li><a href="Provider.php"> <i class="fa fa-user"></i>Provider</a></li>
              <li><a href="Providers_Lists.php"> <i class="fa fa-list"></i>Providers Lists</a></li>
              <li><a href="States_Providers.php"> <i class="fa fa-print"></i>States Providers</a></li>
               <li class="sub-menu">
            <a href="#">
              <i class="fa fa-desktop"></i>
              <span>Kits</span>
              </a>
              <ul class="sub">
                <li><a href="kit.php"> <i class="fa fa-desktop"></i>Kit</a></li>
              <li><a href="kits_Lists.php"> <i class="fa fa-list"></i>Kits Lists</a></li>
              <li><a href="States_Lits.php"> <i class="fa fa-print"></i>State Kits</a></li>
             
            </ul>
              
            </ul>
          </li>
          <li>
            <a href="Mail.php">
              <i class="fa fa-envelope"></i>
              <span>Mail </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>
         <li>
            <a href="Forum.php">
              <i class="fa fa-envelope"></i>
              <span>Forum </span>
              <span class="label label-theme pull-right mail-info">2</span>
              </a>
          </li>

          <li>
            <a href="Veille.php">
              <i class=" fa fa-bar-chart-o"></i>
              <span>Veille App</span>
              </a>
            
          </li>
        <!-- sidebar menu end-->
      </div>
    </aside>
    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
   <section id="main-content">
      <section class="wrapper">
        <div class="row">
            <?= isset($content) ? $content : '<div class="align-center"><h1>Welcome</h1></div>' ?>
        </div>
        <!-- /row -->
      </section>
    </section>
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>IT Solution</strong>. All Rights Reserved
        </p>

        <a href="Home_Page.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?= ROUTE.'/lib/jquery/jquery.min.js'; ?>"></script>

  <script src="<?= ROUTE.'/lib/bootstrap/js/bootstrap.min.js'; ?>"></script>
  <script class="include" type="text/javascript" src="<?= ROUTE.'/lib/jquery.dcjqaccordion.2.7.js'; ?>"></script>
  <script src="<?= ROUTE.'/lib/jquery.scrollTo.min.js'; ?>"></script>
  <script src="<?= ROUTE.'/lib/jquery.nicescroll.js'; ?>" type="text/javascript"></script>
  <script src="<?= ROUTE.'/lib/jquery.sparkline.js'; ?>"></script>
  <!--common script for all pages-->
  <script src="<?= ROUTE.'/lib/common-scripts.js'; ?>"></script>
  <script type="text/javascript" src="<?= ROUTE.'/lib/gritter/js/jquery.gritter.js'; ?>"></script>
  <script type="text/javascript" src="<?= ROUTE.'/lib/gritter-conf.js'; ?>"></script>
  <!--script for this page-->
  <script src="<?= ROUTE.'/lib/sparkline-chart.js'; ?>"></script>
  <script src="<?= ROUTE.'/lib/zabuto_calendar.js'; ?>"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      var unique_id = $.gritter.add({
        // (string | mandatory) the heading of the notification
        title: 'Welcome to IT SOLUTION!',
        // (string | mandatory) the text inside the notification
        text: 'Numero 1 Dans Les Services De Prestations Informatique.',
        // (string | optional) the image to display on the left
        image: 'img/ui-sam.jpg',
        // (bool | optional) if you want it to fade out on its own or just sit there
        sticky: false,
        // (int | optional) the time you want it to be alive for before fading out
        time: 8000,
        // (string | optional) the class name you want to apply to that specific message
        class_name: 'my-sticky-class'
      });

      return false;
    });
  </script>
  <script type="application/javascript">
    $(document).ready(function() {
      $("#date-popover").popover({
        html: true,
        trigger: "manual"
      });
      $("#date-popover").hide();
      $("#date-popover").click(function(e) {
        $(this).hide();
      });

      $("#my-calendar").zabuto_calendar({
        action: function() {
          return myDateFunction(this.id, false);
        },
        action_nav: function() {
          return myNavFunction(this.id);
        },
        ajax: {
          url: "show_data.php?action=1",
          modal: true
        },
        legend: [{
            type: "text",
            label: "Special event",
            badge: "00"
          },
          {
            type: "block",
            label: "Regular event",
          }
        ]
      });
    });

    function myNavFunction(id) {
      $("#date-popover").hide();
      var nav = $("#" + id).data("navigation");
      var to = $("#" + id).data("to");
      console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
    }
  </script>
</body>

</html>
