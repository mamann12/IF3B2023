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

    // include/require
    echo "<hr>";
    require('mdp_helper.php');
    echo get_prodi($prodi);

    //silahkan buat array $mahasiswa
    // key,npm, nama
    // tampilkan data array $mahasiswa dalam bentuk tabel dengan kolom
    //NPM | Nama | Program Studi
    
    echo "<hr>";
    $mahasiswa = [
        [
            "npm" => 2226250068,
            "nama" => "Rahmand",
        ],
        [
            "npm" => 2226250069,
            "nama" => "Reno",
        ]

    ];
     echo "<table>
        <tr>
            <th>NPM</th>
            <th>Nama</th>
            <th>Program Studi</th>
        </tr>
        </thead>
        <tbody>";
    foreach ($mahasiswa as $row) {
        echo "<tr>
        <td>".$row["npm"]."</td>
        <td>".$row["nama"]."</td>
        <td>".get_prodi(substr($row["npm"],4,2))."</td>
        </tr>";
        
    };
        echo "</tbody></table>";
        echo "<br>";
        
  
   
   
?>