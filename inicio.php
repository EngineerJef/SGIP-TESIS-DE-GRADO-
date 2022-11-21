<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel=" mdi mdi-google-maps" href="assets/images/favicon.ico">

        <title>SGIP</title>

        <!--link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link href="../plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" /-->

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>

        
    </head>


    <body class="fixed-left">
    
        
        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <div class="text-center">
                        <a href="index.html" class="logo"><i class="mdi mdi-radar"></i> <span>SGIP</span></a>
                    </div>
                </div>




                <!-- Button mobile view to collapse sidebar menu -->
                <nav class="navbar-custom">
                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="mdi mdi-menu"></i>
                            </button>
                        </li>
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->

            <div class="left side-menu">
                <div class="sidebar-inner slimscrollleft">
                    <!--- Divider -->
                    <div id="sidebar-menu">
                        <ul>
                            <li class="menu-title">Menú</li>
                            <li>
                                <a href="inicio.php" class="waves-effect waves-primary"><i
                                        class="ti-home"></i><span> Inicio </span></a>
                            </li>

                            <li>
                                <a href="consultar_inmuebles.php" class="waves-effect waves-primary"><i
                                        class=" mdi mdi-search-web"></i><span>Consulta de patrimonio </span></a>
                            </li>                           

                            <li class="has_sub">
                                <a href="javascript:void(0);" class="waves-effect waves-primary"><i
                                        class="ti-map"></i><span>Ubicacion Geografica </span><span class="menu-arrow"></span></a>
                                <ul class="list-unstyled">
                                    <li><a href="map-google.php">Google Map</a></li>
                                </ul>
                            </li>

                             <li class="has_sub">
                                <a href="gestion_patrimonio.php" class="waves-effect waves-primary"><i
                                        class="ti-files"></i><span>Gestion de patrimonio </span> </a>                    
                            </li>

                            <li class="has_sub">
                                <a href="registro_usuarios.php" class="waves-effect waves-primary"><i class="ti-pencil-alt"></i><span>Registro de usuarios </span> </a>

                             <?php
                                  session_start();
      
                                  if (isset($_SESSION['u_usuario'])) {
                                                                      echo "<li class='has_sub'>";
                                                                      echo "<a href='include/cerrar_sesion.php' class='waves-effect waves-primary'><i
                                                                            class='ion-close'></i>";
                                                                      echo "<span>Cerrar sesión </span> </a>                    
                                                                           </li>";

                                 }else{
                                       header("location: index.html");
                                      }
                             ?>
                        
                        <div class="clearfix"></div>

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <!-- Left Sidebar End -->




            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->                      
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">¡Bienvenido!</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">SGIP</a></li>
                                        <li class="breadcrumb-item active">Inicio</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>

<div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <div class="row">
                                        <div class="col-12">
                                            <h4 class=" m-t-0 header-title">Coveñas, patrimonio de la costa.</h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6">

                                            <p class="text-muted m-b-30 font-13">A lo largo de la historia de las ciudades, municipios y corregimientos de Colombia existe un legado histórico de sus inmuebles, que se ha generado al transcurrir el tiempo, y que hoy por hoy, presentan no solo características arquitectónicas, si no hechos o sucesos que demarcan a una población en específico; esos acontecimientos, generan que un grupo de investigación, como en este caso, se interese por indagar acerca de aquellas edificaciones que resaltan a través de la historia el patrimonio arquitectónico de Coveñas-Sucre. </p>

                                            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class=""></li>
                                                    <li data-target="#carouselExampleCaptions" data-slide-to="1" class="active"></li>
                                                    <li data-target="#carouselExampleCaptions" data-slide-to="2" class=""></li>
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="assets/images/small/img1.jpg" alt="First slide">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3 class="text-white">First slide label</h3>
                                                            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item active">
                                                        <img class="d-block img-fluid" src="assets/images/small/img2.jpg" alt="Second slide">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3 class="text-white">Second slide label</h3>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                                        </div>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="assets/images/small/img3.jpg" alt="Third slide">
                                                        <div class="carousel-caption d-none d-md-block">
                                                            <h3 class="text-white">Third slide label</h3>
                                                            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="col-lg-6 m-t-sm-40">

                                            <p class="text-muted m-b-30 font-13">El interés de la investigación se centra en el patrimonio arquitectónico que caracteriza a las edificaciones antiguas del municipio,  y que a través  de estudios, análisis y la percepción ciudadana, acerca de los testimonios tangibles e intangibles que cada habitante representa de sus vivencias, ayudaran a desenvolver de una manera analítica, creativa e innovadora la ejecución del presente estudio. </p><br><br>

                                            <!-- START carousel-->
                                            <div id="carouselExample" class="carousel slide" data-ride="carousel">
                                                <ol class="carousel-indicators">
                                                    <li data-target="#carouselExample" data-slide-to="0" class="active"></li>
                                                    <li data-target="#carouselExample" data-slide-to="1" class=""></li>
                                                    <li data-target="#carouselExample" data-slide-to="2" class=""></li>
                                                </ol>
                                                <div class="carousel-inner" role="listbox">
                                                    <div class="carousel-item carousel-item-next carousel-item-left">
                                                        <img class="d-block img-fluid" src="assets/images/small/img4.jpg" alt="First slide">
                                                    </div>
                                                    <div class="carousel-item">
                                                        <img class="d-block img-fluid" src="assets/images/small/img5.jpg" alt="Second slide">
                                                    </div>
                                                    <div class="carousel-item active carousel-item-left">
                                                        <img class="d-block img-fluid" src="assets/images/small/img1.jpg" alt="Third slide">
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- END carousel-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                          
                    </div>
                        
                <!-- end content -->

                <footer class="footer">
                    2018 © CECAR <span class="hide-phone">- cecar.edu.co</span>
                </footer>

            </div>
            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


            <!-- Right Sidebar -->
            <div class="side-bar right-bar">
                <div class="">
                    <ul class="nav nav-tabs tabs-bordered nav-justified">
                        <li class="nav-item">
                            <a href="#home-2" class="nav-link active" data-toggle="tab" aria-expanded="false">
                                Activity
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#messages-2" class="nav-link" data-toggle="tab" aria-expanded="true">
                                Settings
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="home-2">
                            <div class="timeline-2">
                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 minutes ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">30 minutes ago</small>
                                        <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">59 minutes ago</small>
                                        <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">1 hour ago</small>
                                        <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">3 hours ago</small>
                                        <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>

                                <div class="time-item">
                                    <div class="item-info">
                                        <small class="text-muted">5 hours ago</small>
                                        <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                        <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="tab-pane" id="messages-2">

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Notifications</h5>
                                    <p class="text-muted m-b-0"><small>Do you need them?</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">API Access</h5>
                                    <p class="m-b-0 text-muted"><small>Enable/Disable access</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Auto Updates</h5>
                                    <p class="m-b-0 text-muted"><small>Keep up to date</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                            <div class="row m-t-20">
                                <div class="col-8">
                                    <h5 class="m-0 font-15">Online Status</h5>
                                    <p class="m-b-0 text-muted"><small>Show your status to all</small></p>
                                </div>
                                <div class="col-4 text-right">
                                    <input type="checkbox" checked data-plugin="switchery" data-color="#3bafda" data-size="small"/>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- /Right-bar -->

        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <!--script src="../plugins/switchery/switchery.min.js"></script-->



        <!-- Custom main Js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>


        <script type="text/javascript">
            jQuery(document).ready(function($) {
                $('.counter').counterUp({
                    delay: 100,
                    time: 1200
                });
                $('.circliful-chart').circliful();
            });

            // BEGIN SVG WEATHER ICON
            if (typeof Skycons !== 'undefined'){
                var icons = new Skycons(
                        {"color": "#3bafda"},
                        {"resizeClear": true}
                        ),
                        list  = [
                            "clear-day", "clear-night", "partly-cloudy-day",
                            "partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
                            "fog"
                        ],
                        i;

                for(i = list.length; i--; )
                    icons.set(list[i], list[i]);
                icons.play();
            };

        </script>


    </body>
</html>