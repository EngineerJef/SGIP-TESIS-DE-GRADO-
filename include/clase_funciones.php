<?php 

	/**
	* 
	*/
	class clase_funciones	{



		function registrar_inmuebles($fotografia,$nombre_historico,$nombre_actual,$latitud,$longitud,$direccion,$nucleo_familiar,$tipologia,$altura,$uso_suelo,$estilo,$estado,$numero_inmueble)
		{
				include_once('conexion.php');

			 	$resul= mysqli_query($con,"SELECT * FROM inmuebles WHERE nomenclatura='$direccion'");

			 	if ($resul) {
			 		if(mysqli_num_rows($resul)>0){	
			 		$update= mysqli_query($con,"UPDATE `inmuebles` SET `fotografias`='$fotografia',`nombre_historico`='$nombre_historico',`nombre_actual`='$nombre_actual',`latitud`='$latitud',`longitud`='$longitud',`nomenclatura`='$direccion',`nucleo_familiar`='$nucleo_familiar',`tipologia_arquitectonica`='$tipologia',`altura_inmueble`='$altura',`uso_suelo`='$uso_suelo',`estilo_arquitectonico`='$estilo',`estado_conservacion`='$estado',`numero_inmueble`='$numero_inmueble' WHERE `nomenclatura`='$direccion'");
			 				if ($update) {
										echo "success";	
								}else{
						 		echo 'error';
						
								}


			 		}else{
			 			 	$registrar= mysqli_query($con,"INSERT INTO `inmuebles`(`fotografias`,`nombre_historico`,`nombre_actual`,`latitud`,`longitud`,`nomenclatura`,`nucleo_familiar`,`tipologia_arquitectonica`,`altura_inmueble`,`uso_suelo`,`estilo_arquitectonico`,`estado_conservacion`,`numero_inmueble`) VALUES ('$fotografia','$nombre_historico','$nombre_actual','$latitud','$longitud','$direccion','$nucleo_familiar','$tipologia','$altura','$uso_suelo','$estilo','$estado','$numero_inmueble')");
			 			
			 			 		if ($registrar) {
									echo "success";		
										 		}else{
										 			echo "error";
										 		}

			 		}
			 	}else{
			 		echo 'error';
			 	}


		}
	function consultar_gestion($direccion){
			include_once('conexion.php');

						 $resul= mysqli_query($con,"SELECT * FROM inmuebles WHERE nomenclatura='$direccion'");
						 if($resul){

						 					 		if(mysqli_num_rows($resul)>0){	

						 $arraydatos = array(); //creamos un array

						 					 			    $i=0;
						 					 			    while($row = mysqli_fetch_array($resul)){
																	       $arraydatos[$i] = $row;
												     					   $i++;
																	    }		

																	  echo  json_encode($arraydatos);

						 					 		}else{
						 					 			
						 					 			echo "error";
						 					 		}

						 }else{
						 	
						 	echo "error";
						 }



	}

#---------------------------------------------------------------------------------------------------------------


	function registrar_usuario($nombres,$apellidos,$cedula,$telefono,$contrasena,$tipo_usuario)
		{
				include_once('conexion.php');

			 	$resul= mysqli_query($con,"SELECT * FROM usuarios WHERE cedula=$cedula");

			 	if ($resul) {
			 		if(mysqli_num_rows($resul)>0){
			 		$update= mysqli_query($con,"UPDATE `usuarios` SET `nombres`='$nombres',`apellidos`='$apellidos',`cedula`='$cedula',`telefono`='$telefono',`contrasena`='$contrasena',`tipo_usuario`='$tipo_usuario' WHERE `cedula`='$cedula'");
			 				if ($update) {
										echo "success";	
								}else{
						 		echo 'error';
						
								}


			 		}else{
			 			 	$registrar= mysqli_query($con,"INSERT INTO `usuarios`(`nombres`,`apellidos`,`cedula`,`telefono`,`contrasena`,`tipo_usuario`) VALUES ('$nombres','$apellidos','$cedula','$telefono','$contrasena','$tipo_usuario')");
			 			
			 			 		if ($registrar) {
									echo "success";		
										 		}else{
										 			echo "error";
										 		}

			 		}
			 	}else{
			 		echo 'error';
			 	}


		}
	function consultar_usuario($cedula){
			include_once('conexion.php');
						 $resul= mysqli_query($con,"SELECT * FROM usuarios WHERE cedula=$cedula");
						 if($resul){

						 					 		if(mysqli_num_rows($resul)>0){
						 					 		
						 $arraydatos = array(); //creamos un array
                         $i=0;
						 					 			    while($row = mysqli_fetch_array($resul)){
																	       $arraydatos[$i] = $row;
												     					   $i++;
																	    }		

																	  echo  json_encode($arraydatos);

						 					 		}else{
						 					 			echo "error";
						 					 		}

						 }else{
						 	echo "error";
						 }



	}


#---------------------------------------------------------------------------------------------------------------


	function concultar_inmueble($direccion){
			include_once('conexion.php');
						 $resul= mysqli_query($con,"SELECT * FROM inmuebles WHERE nomenclatura='$direccion'");
						 if($resul){

						 					 		if(mysqli_num_rows($resul)>0){	
						 $arraydatos = array(); //creamos un array

						 					 			    $i=0;
						 					 			    while($row = mysqli_fetch_array($resul)){
																	       $arraydatos[$i] = $row;
												     					   $i++;
																	    }		

																	  echo  json_encode($arraydatos);

						 					 		}else{
						 					 			echo "error";
						 					 		}

						 }else{
						 	echo "error";
						 }



	}
}
	#---------------------------------------------------------------------------------------------------------------

	