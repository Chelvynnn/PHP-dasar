<?php

$namaLengkap = "<b>Nama Lengkap :</b> Chelvin Yusuf Maulana <br/>";
$umur = "<b>Umur : </b>20 Tahun <br/>";
$kelas = "<b>Kelas :</b> X RPL 1 <br/>";
$tempatTanggal = "<b>Tempat/Tanggal Lahir : </b>Jakarta 14 Mei 2000 <br/>";
$noWhatsapp = "<b>Nomor Whatsapp :</b> 0803094384 <br/>";
$alamat = "<b>Alamat :</b> Jl. Abdul Muis No. 44, Jakarta Pusat <br/>";

function myBiodata() {
          global $namaLengkap, $umur, $kelas, $tempatTanggal, $noWhatsapp, $alamat;
          echo $namaLengkap;
          echo $umur;
          echo $kelas;
          echo $tempatTanggal;
          echo $noWhatsapp;
          echo $alamat;
}

echo myBiodata(1);

?>