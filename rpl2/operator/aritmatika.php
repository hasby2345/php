<?php
$gaji = 1000000;
$pajak = 0.025; //pajak 2.5%

$thp = $gaji - ($gaji * $pajak);
echo "Gaji sebelum di potong pajak : <b>Rp. $gaji</b><br>";
echo "Gaji bersih : <b>Rp. $thp</b><br>";
?>