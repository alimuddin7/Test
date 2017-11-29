<?php
if(isset($_GET['angka']))
$angka = $_GET['angka'];
$jumlah = strlen($angka);
for($i=0; $i<$jumlah; $i++){
	$sub = substr($angka,$i,1);
	$kurang =$jumlah-1-$i;
	echo $sub;
	for($n=0; $n<$kurang; $n++){
		$nilai = "0";
		echo $nilai;
	}	
	echo "<br/>";
}

?>