<?php
$data1 = $_GET['data1'];
$data2 = $_GET['data2'];

//$data1 = explode('/', $data1);
//$data2 = explode('/', $data2);

$d1 = strtotime("$data1");
$d2 = strtotime("$data2");

$dataFinal = ($d2-$d1)/86400;
echo $dataFinal;
?>