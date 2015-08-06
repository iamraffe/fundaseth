<?php
	require_once("connection.php");
	// This file is the place to store all basic functions

	function confirm_query($result_set) {
		global $connection;
		if (!$result_set) {
			die("Database query failed: " . mysqli_error($connection));
		}
	}
	
	function get_all_registered() {
		global $connection;
		$query = "SELECT * FROM registro ORDER BY id DESC";
		$registered_set = mysqli_query($connection, $query);
		confirm_query($registered_set);
		return $registered_set;
	}

	function fetch_registered($search_parameter){
		global $connection;
		$query = "SELECT * FROM registro WHERE nombre REGEXP '$search_parameter' OR primer_apellido REGEXP '$search_parameter' OR segundo_apellido REGEXP '$search_parameter' OR email REGEXP '$search_parameter' OR telefono REGEXP '$search_parameter' OR ciudad REGEXP '$search_parameter' OR centro REGEXP '$search_parameter' OR  cargo REGEXP '$search_parameter' OR telefono_secundario REGEXP '$search_parameter'";
		$fetch_results = mysqli_query($connection, $query);
		confirm_query($fetch_results);

		return $fetch_results;
	}
	
	function show_registered( $fetch_results ){
			$returnData = "";
			while($row = mysqli_fetch_object( $fetch_results )){
		           	$returnData .= '<tr>';
		            $returnData .= '<td>'.$row->id.'</td>';
					$returnData .= '<td>'.$row->nombre.'</td>';
					$returnData .= '<td>'.$row->primer_apellido." ".$row->segundo_apellido.'</td>';
					$returnData .= '<td>'.$row->ciudad.'</td>';
					$returnData .= '<td>'.$row->centro.'</td>';
					$returnData .= '<td>'.$row->cargo.'</td>';
					$returnData .= '<td>'.$row->email.'</td>';
					$returnData .= '<td>'.$row->telefono.'</td>';
					$returnData .= '<td>'.$row->telefono_secundario.'</td>';
					$returnData .= '<td>'.date('d-m H:i',  strtotime($row->fecha)).'</td>';
				
					$returnData .= '
			            <td>
		                    <a title="Editar" class="edit m110" href="edit-voice.php?id="'.$row->id.'""><span class="glyphicon glyphicon-pencil"></span></a> 
		                    <a title="Eliminar" class="remove m110" href="javascript:delpost("'.$row->id.'","'.$row->nombre.'")"><span class="glyphicon glyphicon-remove"></span></a>
		                </td>
		            </tr>';
        	}
        	//echo $returnData;
        	return $returnData;
	}


	function export_database(){
		//Moved to its own file, not really a function
	}


	function insert_into_database($nombre, $primer_apellido, $segundo_apellido, $ciudad, $centro, $cargo, $email, $telefono, $telefono_secundario){
		global $connection;
		$fecha = date('Y-m-d G:i:s');
		$query = "INSERT INTO registro (nombre, primer_apellido, segundo_apellido, ciudad, centro, cargo, email, telefono, telefono_secundario, fecha) VALUES ('$nombre', '$primer_apellido', '$segundo_apellido', '$ciudad', '$centro', '$cargo', '$email', '$telefono', '$telefono_secundario', '$fecha')";
		if(!mysqli_query($connection, $query)){
			die('Error: ' . mysqli_error($connection));
		}
		else{
			return;
		}
	}

		
?>