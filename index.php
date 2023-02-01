<?php
//receber as datas
$data1 = $_GET['data1'];
$data2 = $_GET['data2'];
//transformar as datas em segundos
$d1 = strtotime("$data1");
$d2 = strtotime("$data2");
//fazer a subtracao entre as datas
$dataFinal = ($d2-$d1)/86400;
//condicao para nao haverem dados negativos
if ($d2 < $d1) {
	$dataFinal = $dataFinal * (-1);	
}
//saida
echo $dataFinal;

?>