<!DOCTYPE html>
<html lang="es">
<head>
    <meta name="keywords" content="consultorio,juridico, cecar ">
    <meta name="author" content="creativsoft">
	   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no"/>
    <title>CONSULTORIO JURIDICO | REPROGRAMACIÓN DE TURNOS </title>
      <link rel="shortcut icon" href="../imagenes/logo.png">

    <meta name="description" content="consultorio juridico cecar"/>
        <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css" media="all" />
         <link rel="stylesheet" href="../css/hover-min.css" type="text/css" media="all" />
         <link rel="stylesheet" type="text/css" href="../css/reprogramacion.css">
        <link rel="stylesheet" type="text/css" href="../css/header.css">
                <link rel="stylesheet" type="text/css" href="../css/animaciones.css">
                <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
                <link rel="stylesheet" type="text/css" href="../slick/slick-theme.css"/>
</head>

<body >
<?php include("header.php") ?>


 <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <!-- Page-Title -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Gestion de inmuebles patrimoniales</h4>
                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="#">SGIP</a></li>
                                        <li class="breadcrumb-item active">Gestion</li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>


                <!--Gestion de patrimonio-->
            

            <form class="formulario_1" id="formulario_gestion"> 
              
               <div class="card-box"> 
                
                 <div class="form-group row">
                                                        <label class="col-2 col-form-label">Fotografia</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"  name="fotografia">
                                                        </div>
                                                    </div>

                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Nombre historico</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"  name="nombre_historico">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Nombre Actual</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"  name="nombre_actual">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Latitud</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="latitud">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Longitud</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"  name="longitud">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Nomenclatura</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="direccion" id="direccion">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Nucleo familiar</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="nucleo_familiar">
                                                        </div>
                                                    </div>

                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Tipologia arquitectonica</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control" name="tipologia">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Altura</label>
                                                        <div class="col-10">
                                                            <input type="number" class="form-control"  name="altura">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Uso de suelo</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"  name="uso_suelo">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Estilo arquitectonico</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"  name="estilo">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Estado de conservacion</label>
                                                        <div class="col-10">
                                                            <input type="text" class="form-control"  name="estado">
                                                        </div>
                                                    </div>
                <div class="form-group row">
                                                        <label class="col-2 col-form-label">Numero de inmuebles</label>
                                                        <div class="col-10">
                                                            <input type="number" class="form-control"  name="numero_inmueble">
                                                        </div>
                                                    </div>

                <input type="hidden" name="accion" value="asesor">
                                                     
                            <div class="card-box">
                                    <h4 class="text-dark  header-title m-t-0">Panel de opciones</h4>
                                    
                                    <button type="button" class="btn btn-success btn-rounded w-md waves-effect waves-light m-b-5" id="registrar_inmueble">registrar</button>
                                    <button type="button" class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5" id="actualizar_inmueble">Actualizar</button>
                            </div>
                    </div>
                    </form>
                <!--fin de gestion-->
                <!-- end content -->

                <footer class="footer">
                    2018 © CECAR <span class="hide-phone">- cecar.edu.co</span>
                </footer>

            </div>
   
<?php include"footer.php" ?>

</body>
</html>



<script src="js/jquery-3.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/codificador_64.js"></script>

<script type="text/javascript">
        $(document).ready(function(){
    })
</script>

<script type="text/javascript">
       $('#registrar_inmueble').click(function(){
                   $.ajax({
                          url:"include/funciones.php",
                          data:$('#formulario_gestion').serialize(),
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
      $("#registrar_inmueble").trigger('reset')



      num=$('#direccion').val();

      if(num!=""){
                         $.ajax({
                          url:"include/funciones.php",
                          data:{accion:"cons_gestion", direccion:num},
                          method:"POST",
                          success:function(result){
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