<?php
	if(isset($_GET['fibbonacci'])){
		$n = $_GET['fibbonacci'];
	}
	include "fibbonacci.php";
	$fibbonacci = print_deret_fibonacci($n);
	echo $fibbonacci;
?>