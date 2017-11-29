<?php
	$n=isset($_GET['prima'])?$_GET['prima']:1;
	for($angka=1;$angka<=$n;$angka++)
		{
			$prima = true;
			for($i=2; $i<$angka;$i++)
				{
					if($angka%$i == 0)
						$prima = false;
			
		}
									}
			if($prima) {
					echo $n." merupakan bilangan prima";
			} else {
					echo $n." bukan bilangan prima ";
			}
?>