<?php

/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

/** Include PHPExcel */
require_once dirname(__FILE__) . '/../Classes/PHPExcel.php';
require_once ('../../includes/connection.php');
require_once ('../../includes/functions.php');


// Create new PHPExcel object

$objPHPExcel = new PHPExcel();

// Set document properties
echo date('H:i:s') , " Set document properties" , EOL;

$export_set = get_all_registered();
$entries = mysqli_num_rows($export_set);


	$objPHPExcel->setActiveSheetIndex(0)
	            ->setCellValue('A1', 'Nombre')
	            ->setCellValue('B1', 'Primer Apellido')
	            ->setCellValue('C1', 'Segundo Apellido')
	            ->setCellValue('D1', 'Ciudad')
	            ->setCellValue('E1', 'Centro')
	            ->setCellValue('F1', 'Cargo')
	            ->setCellValue('G1', 'Email')
	            ->setCellValue('H1', 'Telefono')
	            ->setCellValue('I1', 'Telefono secundario');
while($export_data = mysqli_fetch_object( $export_set )){
				$objPHPExcel->setActiveSheetIndex(0)
		            ->setCellValue('A'.$entries, $export_data->nombre)
		            ->setCellValue('B'.$entries, $export_data->primer_apellido." ".$export_data->segundo_apellido)
		            ->setCellValue('C'.$entries, $export_data->segundo_apellido)
		            ->setCellValue('D'.$entries, $export_data->ciudad)
		            ->setCellValue('E'.$entries, $export_data->centro)
		            ->setCellValue('F'.$entries, $export_data->cargo)
		            ->setCellValue('G'.$entries, $export_data->email)
		            ->setCellValue('H'.$entries, $export_data->telefono)
		            ->setCellValue('I'.$entries, $export_data->telefono_secundario);
		            $entries++;

}
// Set active sheet index to the first sheet, so Excel opens this as the first sheet
$objPHPExcel->setActiveSheetIndex(0);


    // Redirect output to a client’s web browser (Excel5) 
    ob_end_clean(); 
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');  
    header('Content-Type: application/vnd.ms-excel'); 
    header('Content-Disposition: attachment;filename="Export-Directory Tool.xls"'); 
    header('Cache-Control: max-age=0'); 
    $objWriter->save('php://output');  
    exit;  