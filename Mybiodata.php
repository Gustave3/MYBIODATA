<?php

$nama = "Haekal Figo Anwar <br/>";
$umur = "Umur : 16 <br/>";
$kelas = "X RPL 2 <br/>";
$TTL = "Jakarta, 13 Desember 2007 <br/>";
$NW = "0878 7497 5084 <br/>";
$alamat = "Jl. Duri selatan <br/>";

function Mybiodata(){
    global $nama, $umur, $kelas, $TTL, $NW, $alamat;
    echo "Nama Lengkap : $nama <br/> Umur : $umur <br/> Kelas : $kelas <br/> Tempat/Tanggal Lahir : $TTL <br/> No WhatsApp : $NW <br/> Alamat : $alamat";
}
echo Mybiodata()

?>