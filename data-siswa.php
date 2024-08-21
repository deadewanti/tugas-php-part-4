<?php

$siswa = array(
    "dhea" => 85,
    "Boy" => 72,
    "Nina" => 90,
    "Sandy" => 65,
    "vera" => 78
);


foreach ($siswa as $nama => $nilai) {
    echo "<br>";

    if ($nilai > 75) {
        $keterangan = "lulus";
    } else {
        $keterangan = "Tidak lulus ";
    }


    echo "nama : $nama, Nilai: $nilai, keterangan: $keterangan" . "<br>";
}
