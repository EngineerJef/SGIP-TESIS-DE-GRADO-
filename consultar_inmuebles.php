<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="Gestion de datos" content="Uso de administrador">
        <meta name="Jefersson Bedoya" content="Sistema de gestion para inmuebles patrimoniales">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>SGIP</title>

        <!--<link href="../plugins/switchery/switchery.min.css" rel="stylesheet" />
        <link href="../plugins/jquery-circliful/css/jquery.circliful.css" rel="stylesheet" type="text/css" />--> 

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">

    <!-- <script src="assets/js/modernizr.min.js"></script>--> 

        
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
                                    <h4 class="page-title">Consultar inmuebles patrimoniales</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">SGIP</a></li>
                                        <li class="breadcrumb-item active">Consulta</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                <!--Gestion de patrimonio-->
            

            <form class="formulario_3" id="formulario_consulta"> 
              
               <div class="card-box"> 

                 <div class="form-group row">
                                                        <label class="col-2 col-form-label">Nomenclatura</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="direccion" id="direccion" >
                                                        </div>
                                                    </div>
                
                 <div class="form-group row">
                                                        <label class="col-2 col-form-label">Fotografia</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"  name="fotografia" readonly="readonly">
                                                        </div>
                                                    </div>

                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Nombre historico</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"  name="nombre_historico" readonly="readonly">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Nombre Actual</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"  name="nombre_actual" readonly="readonly">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Latitud</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="latitud" readonly="readonly">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Longitud</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"  name="longitud" readonly="readonly">
                                                        </div>
                                                    </div>
                
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Nucleo familiar</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="nucleo_familiar" readonly="readonly">
                                                        </div>
                                                    </div>

                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Tipologia arquitectonica</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="tipologia" readonly="readonly">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Altura</label>
                                                        <div class="col-10">
                                                            <input type="number" class="form-control"  name="altura" readonly="readonly">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Uso de suelo</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"  name="uso_suelo" readonly="readonly">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Estilo arquitectonico</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"  name="estilo" readonly="readonly">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Estado de conservacion</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"  name="estado" readonly="readonly">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Numero de inmuebles</label>
                                                        <div class="col-10">
                                                            <input type="number" class="form-control"  name="numero_inmueble" readonly="readonly">
                                                        </div>
                                                    </div>

                <input type="hidden" name="accion" value="consulta">
                                                     
                            
                    </div>
                    </form>
                <!--fin de gestion-->
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
            <!-- /Right-bar-->

        </div>
        <!-- END wrapper -->


    
        <script>
            var resizefunc = [];
        </script>

        <!-- Plugins  -->
        <script src="js/jquery-3.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/codificador_64.js"></script>
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
      <!--  <script src="../plugins/switchery/switchery.min.js"></script-->

        <!-- Counter Up  
        <script src="../plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="../plugins/counterup/jquery.counterup.min.js"></script>-->

        <!-- circliful Chart 
        <script src="../plugins/jquery-circliful/js/jquery.circliful.min.js"></script>
        <script src="../plugins/jquery-sparkline/jquery.sparkline.min.js"></script>-->

        <!-- skycons 
        <script src="../plugins/skyicons/skycons.min.js" type="text/javascript"></script>-->

        <!-- Page js 
        <script src="assets/pages/jquery.dashboard.js"></script> -->

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


<!--Codigo de registro-->




<script type="text/javascript">
        $(document).ready(function(){
    })
</script>

<script type="text/javascript">
       $('#consultar_inmueble').click(function(){
                   $.ajax({
                          url:"include/funciones.php",
                          data:$('#formulario_consulta').serialize(),
                          method:"POST",
                          success:function(result){
                            if(result=='success'){
                                      alert("guardado exitosamente");
                                  }else {
                                      alert("ocurrio un error");
                            }
                                 
                          }
                      })
                      return false;
    })     
</script>


<script type="text/javascript">
  
    $('#direccion').keyup(function(){
      $("#consultar_inmueble").trigger('reset')



      num=$('#direccion').val();

      if(num!=""){
                         $.ajax({
                          url:"include/funciones.php",
                          data:{accion:"cons_inmueble", direccion:num},
                          method:"POST",
                          success:function(result){
                                                                    console.log(result);

                             if(result!="error"){
                                        json = jQuery.parseJSON(result);
                                        console.log(json);
                                          $.each( json, function( key, value ) {
                                          $('input[name="fotografia"]').attr("value",value.fotografias);
                                          $('input[name="nombre_historico"]').attr("value",value.nombre_historico);
                                          $('input[name="nombre_actual"]').attr("value",value.nombre_actual);
                                          $('input[name="latitud"]').attr("value",value.latitud);
                                          $('input[name="longitud"]').attr("value",value.longitud);
                                          $('input[name="nucleo_familiar"]').attr("value",value.nucleo_familiar);
                                          $('input[name="tipologia"]').attr("value",value.tipologia_arquitectonica); 
                                          $('input[name="altura"]').attr("value",value.altura_inmueble);
                                          $('input[name="uso_suelo"]').attr("value",value.uso_suelo);
                                          $('input[name="estilo"]').attr("value",value.estilo_arquitectonico);
                                          $('input[name="estado"]').attr("value",value.estado_conservacion);
                                          $('input[name="numero_inmueble"]').attr("value",value.numero_inmueble);                                          
                                    } )
                                  }else{

                                    }
                            
                          }
                        })


      }

    })
</script>