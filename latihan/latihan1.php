<!DOCTYPE html>
<html>
<head>
	<title>Latihan 1</title>
</head>
<body>
	<?php  
		function penjumlahan($a,$b)
		{
			return $a+$b;
		}
		function Pengurangan($a,$b)
		{
			return $a-$b;
		}
		function perkalian($a,$b)
		{
			return $a*$b;
		}
		function pembagian($a,$b)
		{
			return $a/$b;
		}
		function modulus($a,$b)
		{
			return $a%$b;
		}
	?>
	<?php 
	$x = 20; $y = 5;
		echo "PENJUMLAHAN"."<br>";
		echo "Operator : + "."<br>";
		echo "Hasil : ".penjumlahan($x,$y);
		echo "<br><br>";
		echo "PENGURANGAN"."<br>";
		echo "Operator : - "."<br>";
		echo "Hasil : ".pengurangan($x,$y);
		echo "<br><br>";
		echo "PERKALIAN"."<br>";
		echo "Operator : * "."<br>";
		echo "Hasil : ".perkalian($x,$y);
		echo "<br><br>";
		echo "PEMBAGIAN"."<br>";
		echo "Operator : / "."<br>";
		echo "Hasil : ".pembagian($x,$y);
		echo "<br><br>";
		echo "MODULUS"."<br>";
		echo "Operator : % "."<br>";
		echo "Hasil : ".modulus($x,$y);
	 ?>
</body>
</html>