<?php
// Test CVS
require_once 'Excel/reader.php';
header("Content-Type:text/html;charset=utf-8");

$data = new Spreadsheet_Excel_Reader();
$data->setOutputEncoding('UTF-8');
$data->read('____.xls');

error_reporting(E_ALL ^ E_NOTICE);

for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
	for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
		echo "\"".$data->sheets[0]['cells'][$i][$j]."\",";
	}
	echo "\n";
}


//print_r($data);
//print_r($data->formatRecords);