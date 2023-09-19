<?php
    // Pertemuan ke -3
    // Materi function  dan if condition
    $npm = 2226250068;
    $nama = "rahmand";

    // Built-in function
    $tahun_masuk = substr($npm, 0, 2);
    echo $tahun_masuk;
    $tahun_lulus  = substr($npm, 2, 2);
    echo "<br>".$tahun_lulus;
    $prodi = substr($npm, 4, 2);
    echo "<br>".$prodi;
    $nomor_urut = substr($npm, 6, 4);
    echo "<br>".$nomor_urut;
    echo "<hr>";
    echo strtoupper($nama);
    echo "<br>".ucfirst($nama);

    // IF Condition
    // kode prodi : 25, Maka Informatika
    // kode prodi : 24, Maka Sistem Informasi
    echo "<br>";
    if($prodi == 25){
        echo "Informatika";
    } else if ($prodi == 24) {
        echo "Sistem Informasi";
    }
?>