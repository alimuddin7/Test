<?php
	if(isset($_GET['cekfibbonacci'])){
		$n = $_GET['cekfibbonacci'];
	}
	include "fibbonacci.php";
	$fibbonacci =  cari_fibonacci($n);
	echo $fibbonacci;
?>