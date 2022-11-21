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
                                          
                                          
$funcion->registrar_inmuebles($fotografia,$nombre_historico,$nombre_actual,$latitud,$longitud,$direccion,$nucleo_familiar,$tipologia,$altura,$uso_suelo,$estilo,$estado,$numero_inmueble);

			break;
		case 'cons_gestion':
			$num=$_POST['direccion'];
			$funcion->consultar_gestion($num);
			break;

                                          
#------------------------------------------------------------------------------------------------

			case 'usuario':
					       $nombres=$_POST['nombres'];
                                          $apellidos=$_POST['apellidos'];
                                          $cedula=$_POST['cedula'];
                                          $telefono=$_POST['telefono'];
                                          $contrasena=$_POST['contrasena'];
                                          $tipo_usuario=$_POST['tipo_usuario'];
                                           
        $funcion->registrar_usuario($nombres,$apellidos,$cedula,$telefono,$contrasena,$tipo_usuario);

			break;
		case 'cons_registro':
			$num=$_POST['cedula'];
			$funcion->consultar_usuario($num);
			break;	


#------------------------------------------------------------------------------------------------

			case 'consultar':
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
$funcion->registrar_inmuebles($fotografia,$nombre_historico,$nombre_actual,$latitud,$longitud,$direccion,$nucleo_familiar,$tipologia,$altura,$uso_suelo,$estilo,$estado,$numero_inmueble);

			break;
		case 'cons_inmueble':
			$num=$_POST['direccion'];
			$funcion->concultar_inmueble($num);
			break;
		
	}



	?>