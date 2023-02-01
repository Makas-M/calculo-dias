

<?php
$data1 = $_GET['data1'];
$data2 = $_GET['data2'];

$d1 = strtotime("$data1");
$d2 = strtotime("$data2");

$dataFinal = ($d2-$d1)/86400;

if ($d2 < $d1) {
	$dataFinal = $dataFinal * (-1);

	
}
echo $dataFinal;

?>