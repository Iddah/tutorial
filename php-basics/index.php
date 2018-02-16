<?php 
/** Error reporting */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
date_default_timezone_set('Europe/London');

define('EOL',(PHP_SAPI == 'cli') ? PHP_EOL : '<br />');

date_default_timezone_set('Europe/London');

require_once "Classes/PHPExcel.php";

 echo date('H:i:s') , "Load workbook from Excel Xslx file", EOL;

   	$tmpfname = "Classes/sampleData/CBD-New-indicators-Decision.xls";
  	$excelReader = PHPExcel_IOFactory::createReaderForFile($tmpfname);
  	$excelObj = $excelReader->load($tmpfname);
  	$worksheet = $excelObj->getActiveSheet();
  	$lastRow = $worksheet->getHighestRow();

  	echo "<table>";
  	for($row =1; $row <= $lastRow; $row++) {
 echo "<tr><td>";
 echo $worksheet->getCell('A'.$row)->getValue();
 echo "</td><td>";
 echo $worksheet->getCell('B'.$row)->getValue();
 echo "</td><tr>";
}
echo "</table>"
  
?>