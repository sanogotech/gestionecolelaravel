<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>BIENVENUE A SISA</title>

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset ('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/zabuto_calendar.css">
  <link rel="stylesheet" type="text/css" href="{{asset('lib/gritter/css/jquery.gritter.css')}}" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css')}}" rel="stylesheet">
  <link href="{{ asset('css/style-responsive.css')}}" rel="stylesheet">
  <script src="{{asset('lib/chart-master/Chart.js')}}"></script>



  <!-- Bootstrap core CSS -->
 
  <!--external css-->
 
  <link href="{{asset('lib/advanced-datatable/css/demo_page.css')}}" rel="stylesheet" />
  <link href="{{asset('lib/advanced-datatable/css/demo_table.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('lib/advanced-datatable/css/DT_bootstrap.css')}}" />
  <!-- Custom styles for this template -->
 

 
  <!-- Custom styles for this template -->

 

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
    <!-- DEBUT DU BLOC DU MENU EN HAUT -->
    <header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="#" class="logo">  <img src="img/logo-sisa2-01.png" class="" width="100"></a>
      <!--logo end-->

      <!-- BLOCK DES MESSAGES ET NOTIFICATION  --
      <div class="nav notify-row" id="top_menu">
        <!--  notification start --
        <ul class="nav top-menu">
          <!-- settings start --
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-tasks"></i>
              <span class="badge bg-theme">4</span>
              </a>
            <ul class="dropdown-menu extended tasks-bar">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 4 pending tasks</p>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Dashio Admin Panel</div>
                    <div class="percent">40%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                      <span class="sr-only">40% Complete (success)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Database Update</div>
                    <div class="percent">60%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                      <span class="sr-only">60% Complete (warning)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Product Development</div>
                    <div class="percent">80%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                      <span class="sr-only">80% Complete</span>
                    </div>
                  </div>
                </a>
              </li>
              <li>
                <a href="index.html#">
                  <div class="task-info">
                    <div class="desc">Payments Sent</div>
                    <div class="percent">70%</div>
                  </div>
                  <div class="progress progress-striped">
                    <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                      <span class="sr-only">70% Complete (Important)</span>
                    </div>
                  </div>
                </a>
              </li>
              <li class="external">
                <a href="#">See All Tasks</a>
              </li>
            </ul>
          </li>
          <!-- settings end --
          <!-- inbox dropdown start--
          <li id="header_inbox_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-envelope-o"></i>
              <span class="badge bg-theme">5</span>
              </a>
            <ul class="dropdown-menu extended inbox">
              <div class="notify-arrow notify-arrow-green"></div>
              <li>
                <p class="green">You have 5 new messages</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-zac.jpg"></span>
                  <span class="subject">
                  <span class="from">Zac Snider</span>
                  <span class="time">Just now</span>
                  </span>
                  <span class="message">
                  Hi mate, how is everything?
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-divya.jpg"></span>
                  <span class="subject">
                  <span class="from">Divya Manian</span>
                  <span class="time">40 mins.</span>
                  </span>
                  <span class="message">
                  Hi, I need your help with this.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-danro.jpg"></span>
                  <span class="subject">
                  <span class="from">Dan Rogers</span>
                  <span class="time">2 hrs.</span>
                  </span>
                  <span class="message">
                  Love your new Dashboard.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="photo"><img alt="avatar" src="img/ui-sherman.jpg"></span>
                  <span class="subject">
                  <span class="from">Dj Sherman</span>
                  <span class="time">4 hrs.</span>
                  </span>
                  <span class="message">
                  Please, answer asap.
                  </span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all messages</a>
              </li>
            </ul>
          </li>
          <!-- inbox dropdown end --
          <!-- notification dropdown start--
          <li id="header_notification_bar" class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
              <i class="fa fa-bell-o"></i>
              <span class="badge bg-warning">7</span>
              </a>
            <ul class="dropdown-menu extended notification">
              <div class="notify-arrow notify-arrow-yellow"></div>
              <li>
                <p class="yellow">You have 7 new notifications</p>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Server Overloaded.
                  <span class="small italic">4 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-warning"><i class="fa fa-bell"></i></span>
                  Memory #2 Not Responding.
                  <span class="small italic">30 mins.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-danger"><i class="fa fa-bolt"></i></span>
                  Disk Space Reached 85%.
                  <span class="small italic">2 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">
                  <span class="label label-success"><i class="fa fa-plus"></i></span>
                  New User Registered.
                  <span class="small italic">3 hrs.</span>
                  </a>
              </li>
              <li>
                <a href="index.html#">See all notifications</a>
              </li>
            </ul>
          </li>
          <!-- notification dropdown end --
        </ul>
       <!-- FIN BLOCK DES NOTIFICATION ET MESSAGES -->

        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="{{route('deconnexion')}}">Deconnexion</a></li>
        </ul>
      </div>
    </header>
    <!-- FIN DU BLOC DU MENU EN HAUT-->
    <!--header end-->
    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
    <!--sidebar start-->

    <!-- DEBUT BLOC MENU A GAUCHE  -->
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu" id="nav-accordion">
          <p class="centered"><a href="profile.html"></a></p>
        <!--  <h5 class="centered">Sam Soffes</h5>  -->


          <li class="mt">
            <a class="active" href="#">
              <i class="fa fa-dashboard"></i>
              <span>Tableau de Bord</span>
              </a>
          </li>


         



          <li class="sub-menu">
               <a href="javascript:;">
                     <i class="fa fa-cogs"></i>
                     <span>DONNEES DE BASES</span>
              </a>
              <ul class="sub">

                  <li class="sub-menu">
                     <a href="javascript:;">
                         <i class="#"></i>
                         <span>FOURNISSEURS</span>
                     </a>
               
                            <ul class="sub">
                                          <li ><a href="{{route('creerfourform')}}">Creer</a></li>
                                          <li><a href="#">Modifier/Supprimer</a></li>
                                         
                                          <li><a href="#">Rechercher</a></li>
                             </ul>
                   </li>


                  <li class="sub-menu">
                     <a href="javascript:;">
                         <i class="#"></i>
                         <span>CATEGORIE</span>
                     </a>
               
                            <ul class="sub">
                                          <li ><a href="{{route('creercatform')}}">Creer</a></li>
                                          <li><a href="#">Modifier/Supprimer</a></li>
                                         
                                          <li><a href="#">Rechercher</a></li>
                             </ul>
                   </li>



                   <li class="sub-menu">
                     <a href="javascript:;">
                         <i class="#"></i>
                         <span>Sous-Categorie</span>
                     </a>
               
                            <ul class="sub">
                                          <li ><a href="{{route('creersouscatform')}}">Creer</a></li>
                                          <li><a href="#">Modifier/Supprimer</a></li>
                                         
                                          <li><a href="#">Rechercher</a></li>
                             </ul>
                   </li>


             
                   <li class="sub-menu">
                     <a href="javascript:;">
                         <i class="#"></i>
                         <span>GROUPES</span>
                     </a>
               
                            <ul class="sub">
                                         <li ><a href="{{route('creergroupform')}}">Creer</a></li>
                                          <li><a href="#">Modifier/Supprimer</a></li>
                                          
                                          <li><a href="#">Rechercher</a></li>
                             </ul>
                   </li>

                  <li class="sub-menu">
                     <a href="javascript:;">
                         <i class="#"></i>
                         <span>ACTIVITES</span>
                     </a>
               
                            <ul class="sub">
                                          <li ><a href="{{route('creeractivform')}}">Creer</a></li>
                                          <li><a href="#">Modifier/Supprimer</a></li>
                                         
                                          <li><a href="#">Rechercher</a></li>
                             </ul>
                   </li>



                    <li class="sub-menu">
                     <a href="javascript:;">
                         <i class="#"></i>
                         <span>ENTREPOT</span>
                     </a>
               
                            <ul class="sub">
                                         <li ><a href="{{route('creerentrepotform')}}">Creer</a></li>
                                          <li><a href="#">Modifier/Supprimer</a></li>
                                          
                                          <li><a href="#">Rechercher</a></li>
                             </ul>
                   </li>




                   <li class="sub-menu">
                     <a href="javascript:;">
                         <i class="#"></i>
                         <span>DROITS</span>
                     </a>
               
                            <ul class="sub">
                                         <li ><a href="{{route('creerdroitform')}}">Creer</a></li>
                                          <li><a href="#">Modifier/Supprimer</a></li>                                      
                                          <li><a href="#">Rechercher</a></li>
                             </ul>
                   </li>

                




            </ul>
          </li>


           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>LES UTILISATEURS</span>
              </a>
            <ul class="sub">
              <li><a href="{{route('formusers')}}">CREER</a></li>
              <li><a href="{{route('modifieruser')}}">MODIFIER/SUPPRIMER</a></li>
              
              <li><a href="#">RECHERCHER</a></li>
            </ul>
          </li>




          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-book"></i>
              <span>PARAMETRAGE DES PRODUITS</span>
              </a>
            <ul class="sub">
              <li><a href="blank.html">Blank Page</a></li>
              <li><a href="login.html">Login</a></li>
              <li><a href="lock_screen.html">Lock Screen</a></li>
              <li><a href="profile.html">Profile</a></li>
              <li><a href="invoice.html">Invoice</a></li>
              <li><a href="pricing_table.html">Pricing Table</a></li>
              <li><a href="faq.html">FAQ</a></li>
              <li><a href="404.html">404 Error</a></li>
              <li><a href="500.html">500 Error</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>APPROVISIONNEMENTS</span>
              </a>
            <ul class="sub">
                   <li ><a href="#">Creer</a></li>
                   <li><a href="#">Modifier/Supprimer</a></li>                                      
                   <li><a href="#">Rechercher</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>SORTIES DE PRODUIT</span>
              </a>
            <ul class="sub">
                   <li ><a href="#">Creer</a></li>
                   <li><a href="#">Modifier/Supprimer</a></li>                                      
                   <li><a href="#">Rechercher</a></li>
            </ul>
          </li>
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>CONSULTATIONS</span>
              </a>
            <ul class="sub">
                   <li ><a href="#">A</a></li>
                    <li><a href="#">B</a></li>                                      
                     <li><a href="#">C</a></li>
            </ul>
          </li>
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-comments-o"></i>
              <span>Chat Room</span>
              </a>
            <ul class="sub">
              <li><a href="lobby.html">Lobby</a></li>
              <li><a href="chat_room.html"> Chat Room</a></li>
            </ul>
          </li>
          <li>
            <a href="google_maps.html">
              <i class="fa fa-map-marker"></i>
              <span>Google Maps </span>
              </a>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>