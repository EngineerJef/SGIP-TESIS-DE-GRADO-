<?php 
include_once('clase_funciones.php');
 $funcion=new clase_funciones();
date_default_timezone_set('America/Bogota');
$script_tz = date_default_timezone_get();
	/*	$fecha=date("Y-m-d H:i:s");*/
	$accion=$_POST['accion'];
	switch ($accion) {
		
#------------------------------------------------------------------------------------------------
		case 'inmueble':
					                      $fotografia=$_POST['fotografia'];
                                          $nombre_historico=$_POST['nombre_historico'];
                                          $nombre_actual=$_POST['nombre_actual'];
                                          $latitud=$_POST['latitud'];
                                          $longitud=$_POST['longitud'];
                                          $direccion=$_POST['direccion'];
                                          $nucleo_familiar=$_POST['nucleo_familiar'];
                                          $tipologia=$_POST['tipologia']; 
                                          $altura=$_POST['altura'];
                                          $uso_suelo=$_POST['uso_suelo'];
                                          $estilo=$_POST['estilo'];
                                          $estado=$_POST['estado'];
                                          $numero_inmueble=$_POST['numero_inmueble'];  
$funcion->registrar_inmueble($fotografia,$nombre_historico,$nombre_actual,$latitud,$longitud.$direccion,$nucleo_familiar,$tipologia,$altura,$uso_suelo,$estilo,$estado,$numero_inmueble);

			break;
		case 'cons_gestion':
			$num=$_POST['direccion'];
			$funcion->consultar_gestion($num);
			break;

                                          
#------------------------------------------------------------------------------------------------
		
	}



	?>