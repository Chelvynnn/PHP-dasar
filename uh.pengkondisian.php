<?php


function hotelKeren($nama, $noTlpn, $alamat, $tipeKamar, $hargaMalam, $lamaInap, $discount, $total, $status) {
          echo "===Program Revervasi Hotel Sederhana=== <br/>";
          echo "Nama Pemesan : $nama <br/>";
          echo "No Whatsapp : $noTlpn <br/>";
          echo "Alamat : $alamat <br/>";
          echo "Tipe Kamar : $tipeKamar <br/>";

          if ($tipeKamar == "Deluxe") {
                    $hargaTipe = 200000;
                    $totalHargaD = $hargaTipe * $lamaInap;

                    if ($lamaInap > 4) {
                              $totalSemua = $totalHargaD * 0.5;
                              $discount = $totalSemua;
                    } else {
                              $totalSemua = $totalHargaD;
                    }

          } elseif ($tipeKamar == "Superior") {
                    $hargaTipe = 400000;
                    $totalHargaS = $hargaTipe * $lamaInap;

                    if ($lamaInap > 4) {
                              $totalSemua = $totalHargaS * 0.65;
                              $discount = $totalHargaS * 0.35  ;
                    } else {
                              $totalSemua = $totalHargaS;
                    }

          } elseif ($tipeKamar == "Premium") {
                    $hargaTipe = 800000;
                    $totalHargaP = $hargaTipe * $lamaInap;

                    if ($lamaInap > 4) {
                              $totalSemua = $totalHargaP * 0.75;
                              $discount = $totalHargaP * 0.25;
                    } else {
                              $totalSemua = $totalHargaP;
                    }
          }

          // echo "Tipe Kamar : $tipeKamar <br/>";
          echo "Harga per Malam : Rp. ". number_format($hargaTipe). "<br/>";
          echo "Lama Menginap : $lamaInap hari<br/>";
          echo "diskon : Rp " .number_format($discount). "<br/>";
          echo "Total Harga : Rp. " .number_format($totalSemua). "<br/>";


          if ($status == "Waiting" ) {
                    echo "Status : <span style='color: yellow';> $status</span>";
          } elseif ($status == "Checkin") {
                    echo "Status : <span style='color:green';> $status</span>";
          } elseif ($status == "Checkout") {
                    echo "Status : <span style='color:red';> $status</span>";
          }
}

global $hargaTipe ;
global $discount ;
global $totalSemua ;


echo hotelKeren("Chelvin Yusuf Maulana", "082937498", "Jl. Abdul Muiz No. 44", "Premium", $hargaTipe, "5", $discount, $totalSemua, "Waiting");


?>