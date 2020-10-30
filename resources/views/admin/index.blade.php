<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title></title>

<!--  <link rel="stylesheet" href="{{asset('css/modale.css')}}">  -->
  <link href="{{asset('img/logo-sisa2-01.png')}}" rel="icon">
  <link href="{{asset('img/logo-sisa2-01.png')}}" rel="logo-sisa2-01">

  <!-- Favicons -->
  

  <!-- Bootstrap core CSS -->
  <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <!--external css-->
  <link href="{{asset('lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
  <link href="{{('lib/advanced-datatable/css/demo_page.css')}}" rel="stylesheet" />
  <link href="{{('lib/advanced-datatable/css/demo_table.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{asset('lib/advanced-datatable/css/DT_bootstrap.css')}}" />
  



   <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-fileupload/bootstrap-fileupload.css')}}" />
 
   <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-datepicker/css/datepicker.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-daterangepicker/daterangepicker.css')}}" />
   <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-timepicker/compiled/timepicker.css')}}" />
  <link rel="stylesheet" type="text/css" href="{{asset('lib/bootstrap-datetimepicker/datertimepicker.css')}}" />

  <!-- Custom styles for this template -->
  
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet">


</head>


<body>
  <section id="container">
    
<header class="header black-bg">
      <div class="sidebar-toggle-box">
        <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
      </div>
      <!--logo start-->
      <a href="#" class="logo">  <img src="{{asset('img/logo-sisa2-01.png')}}" class="" width="100"></a>
      <!--logo end-->

     
          

        <!--  notification end -->
      </div>
      <div class="top-menu">
        <ul class="nav pull-right top-menu">
          <li><a class="logout" href="{{route('deconnexion')}}">Deconnexion</a></li>
        </ul>
      </div>
    </header>


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
                     <i class="fa fa-comments-o"></i>   
                     <span>ELEVES</span>
              </a>
              <ul class="sub">

          

        
                  <li class="sub-menu">
                     <a href="{{route('formeleve')}}">
                         <i class="#"></i>
                         <span>Créer </span>   
                     </a>
               
                   </li>


                <li class="sub-menu">
                     <a href="#">
                         <i class="#"></i>
                         <span>Modifier</span>   
                     </a>
               
                 
                   </li>

                    <li class="sub-menu">
                     <a href="#">
                         <i class="#"></i>
                         <span>Rechercher</span>   
                     </a>
               
                 
                   </li>         

            </ul>
          </li>


           <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-desktop"></i>
              <span>INSCRIPTION</span>
              </a>
            <ul class="sub">
              <li><a href="#">Créer</a></li>
              <li><a href="#">Modifier</a></li>
              
              <li><a href="#">Rechercher</a></li>
            </ul>
          </li>




         
          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>EVALUATION</span>
              </a>
            <ul class="sub">
                   <li ><a href="#">Créer</a></li>
                   <li><a href="#">Modifier</a></li>                                      
                   <li><a href="#">Rechercher</a></li>
            </ul>
          </li>


       <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-tasks"></i>
              <span>ENSEIGNANT</span>
              </a>
            <ul class="sub">
                   <li ><a href="#">Créer</a></li>
                   <li><a href="#">Modifier</a></li>                                      
                   <li><a href="#">Rechercher</a></li>
            </ul>
          </li>


               <li class="sub-menu">
            <a href="javascript:;">
              <i class="fa fa-th"></i>
              <span>CLASSE</span>
              </a>
            <ul class="sub">
                   <li ><a href="#">Creer</a></li>
                   <li><a href="#">Modifier</a></li>                                      
                   <li><a href="#">Rechercher</a></li>
            </ul>
          </li>


          
          <li class="sub-menu">
            <a href="javascript:;">
              <i class=" fa fa-bar-chart-o"></i>
              <span>MATIERE</span>
              </a>
            <ul class="sub">
                   <li ><a href="#">A</a></li>
                    <li><a href="#">B</a></li>                                      
                     <li><a href="#">C</a></li>
            </ul>
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
                         <span>ANNEE</span>
                     </a>
               
                            <ul class="sub">
                                          <li ><a href="#">Créer</a></li>
                                          <li><a href="#">Modifier</a></li>
                                         
                                          <li><a href="#">Rechercher</a></li>
                             </ul>
                   </li>


                    <li class="sub-menu">
                     <a href="javascript:;">
                         <i class="#"></i>
                         <span>GROUPES</span>
                     </a>
               
                            <ul class="sub">
                                         <li ><a href="#">Créer</a></li>
                                          <li><a href="#">Modifier</a></li>
                                          
                                          <li><a href="#">Rechercher</a></li>
                             </ul>
                   </li>


                  <li class="sub-menu">
                     <a href="javascript:;">
                         <i class="#"></i>
                         <span>CATEGORIES</span>
                     </a>
               
                            <ul class="sub">
                                          <li ><a href="#">Créer</a></li>
                                          <li><a href="#">Modifier</a></li>
                                         
                                          <li><a href="#">Rechercher</a></li>
                             </ul>
                   </li>



                   <li class="sub-menu">
                     <a href="javascript:;">
                         <i class="#"></i>
                         <span>SOUS-CATEGORIES</span>
                     </a>
               
                            <ul class="sub">
                                          <li ><a href="#">Créer</a></li>
                                          <li><a href="#">Modifier</a></li>
                                         
                                          <li><a href="#">Rechercher</a></li>
                             </ul>
                   </li>


             
                  

                  <li class="sub-menu">
                     <a href="javascript:;">
                         <i class="#"></i>
                         <span>ACTIVITES</span>
                     </a>
               
                            <ul class="sub">
                                          <li ><a href="#">Créer</a></li>
                                          <li><a href="#">Modifier</a></li>
                                         
                                          <li><a href="#">Rechercher</a></li>
                             </ul>
                   </li>



                    <li class="sub-menu">
                     <a href="javascript:;">
                         <i class="#"></i>
                         <span>ENTREPOT</span>
                     </a>
               
                            <ul class="sub">
                                         <li ><a href="#">Créer</a></li>
                                          <li><a href="#">Modifier</a></li>
                                          
                                          <li><a href="#">Rechercher</a></li>
                             </ul>
                   </li>




                   <li class="sub-menu">
                     <a href="javascript:;">
                         <i class="#"></i>
                         <span>DROITS</span>
                     </a>
               
                            <ul class="sub">
                                         <li ><a href="#">Créer</a></li>
                                          <li><a href="#">Modifier</a></li>                                      
                                          <li><a href="#">Rechercher</a></li>
                             </ul>
                   </li>

                

               <li class="sub-menu">
                     <a href="javascript:;">
                         <i class="#"></i>
                         <span>DEPENSE BL</span>
                     </a>
               
                            <ul class="sub">
                                         <li ><a href="#">Créer</a></li>
                                          <li><a href="#">Modifier</a></li>                                      
                                          <li><a href="#">Rechercher</a></li>
                             </ul>
                   </li>


                    <li class="sub-menu">
                     <a href="javascript:;">
                         <i class="#"></i>
                         <span>DEPENSE FACTURE</span>
                     </a>
               
                            <ul class="sub">
                                         <li ><a href="#">Créer</a></li>
                                          <li><a href="#">Modifier</a></li>                                      
                                          <li><a href="#">Rechercher</a></li>
                             </ul>
                   </li>



            </ul>
          </li>


           
          </li>
         
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>


    <section id="main-content">
      <section class="wrapper">




        
       
       @yield('content')


        <!-- /row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          <!--
            You are NOT allowed to delete the credit link to TemplateMag with free version.
            You can delete the credit link only if you bought the pro version.
            Buy the pro version with working PHP/AJAX contact form: https://templatemag.com/dashio-bootstrap-admin-template/
            Licensing information: https://templatemag.com/license/
          -->
          
        </div>
        
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->


<script type="text/javascript" src="{{asset('lib/jquery.backstretch.min.js')}}"></script>



  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script type="text/javascript" language="javascript" src="{{asset('lib/advanced-datatable/js/jquery.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="{{asset('lib/advanced-datatable/js/jquery.dataTables.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/advanced-datatable/js/DT_bootstrap.js')}}"></script>
  <!--common script for all pages-->
  <script src="{{asset('lib/common-scripts.js')}}"></script>
   <script src="{{asset('js/traitementJs.js')}}"></script>

  <!--common script for all pages--
  <script src="{{asset('lib/common-scripts.js')}}"></script>
  <!--script for this page-->
  <script src="{{asset('lib/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>

  <script src="{{('lib/advanced-form-components.js')}}"></script>




  <script type="text/javascript">
    /* Formating function for row details */

   function fnFormatDetails(oTable, nTr) {
      var aData = oTable.fnGetData(nTr);
      var sOut = '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">';
      sOut += '<tr><td>Rendering engine:</td><td>' + aData[1] + ' ' + aData[4] + '</td></tr>';
      sOut += '<tr><td>Link to source:</td><td>Could provide a link here</td></tr>';
      sOut += '<tr><td>Extra info:</td><td>And any further details here (images etc)</td></tr>';
      sOut += '</table>';

      return sOut;
    }

    $(document).ready(function() {
      /*
       * Insert a 'details' column to the table
       */
      var nCloneTh = document.createElement('th');
      var nCloneTd = document.createElement('td');
      nCloneTd.innerHTML = '<img src="{{asset('lib/advanced-datatable/images/details_open.png')}}">';
      nCloneTd.className = "center";

      $('#hidden-table-info thead tr').each(function() {
        this.insertBefore(nCloneTh, this.childNodes[0]);
      });

      $('#hidden-table-info tbody tr').each(function() {
        this.insertBefore(nCloneTd.cloneNode(true), this.childNodes[0]);
      });

      /*
       * Initialse DataTables, with no sorting on the 'details' column
       */
      var oTable = $('#hidden-table-info').dataTable({
        "aoColumnDefs": [{
          "bSortable": false,
          "aTargets": [0]
        }],
        "aaSorting": [
          [1, 'asc']
        ]
      });

      /* Add event listener for opening and closing details
       * Note that the indicator for showing which row is open is not controlled by DataTables,
       * rather it is done here
       */
      $('#hidden-table-info tbody td img').live('click', function() {
        var nTr = $(this).parents('tr')[1];
        if (oTable.fnIsOpen(nTr)) {
          /* This row is already open - close it */
          this.src = "{{asset('lib/advanced-datatable/media/images/details_open.png')}}";
          oTable.fnClose(nTr);
        } else {
          /* Open this row */
          this.src = "{{('lib/advanced-datatable/images/details_close.png')}}";
          oTable.fnOpen(nTr, fnFormatDetails(oTable, nTr), 'details');
        }
      });
    });
  </script>
</body>

</html>
