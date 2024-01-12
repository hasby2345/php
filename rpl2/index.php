<?php
$nama = "Ujang Rohmat"; //string
$umur = 23; //integer
$nilai = 87.5; //float
$status = true; //boolean

echo "Nama : $nama<br>";
echo 'Umur : ' . $umur . '<br>';
printf("Nilai : %.2f <br>", $nilai);
if ($status) {
    echo "Status siswa aktif";
} else {
    echo "Status siswa tidak aktif";
}
