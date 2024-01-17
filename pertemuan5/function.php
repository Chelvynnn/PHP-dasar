<?php

// Build in Function
// date("D, M, Y");
// date_default_timezone_set("Asia/Jakarta");
// $tanggal = date("d, M, Y");
// $waktu = date ("h:i:s");

// echo "Jakarta hari ini tanggal $tanggal <br/>
// Jam $waktu";

// User Defined Function
// function JumlahDuaBilangan($a = 5, $b = 8, $nama = "Chelvin Ym"){
//           // $total = $a + $b;
//           $namaLengkap = $nama
//           return $namaLengkap
// }
// echo JumlahDuaBilangan();

// $a = 10;
// function JumlahBilangan(){
//           global $a;
//           echo $a;
// }
// echo JumlahBilangan();

// Latihan 1

function pengulanganBuku($noBuku, $kondisiTerminasi, $kondisiTerminasi1, $kondisiTerminasi2) {
          for ($noBuku; $noBuku <= $kondisiTerminasi ; $noBuku++) { 
                    if ($noBuku <= $kondisiTerminasi1) {
                              echo "Buku ke - $noBuku tersedia <br/>";
                    } else if ($noBuku <= $kondisiTerminasi2){
                              echo "Buku ke - $noBuku sedang dipinjam <br/>";
                    } else {
                              echo "Buku ke - $noBuku tidak tersedia <br/>";
                    }
                    
          }
}

echo pengulanganBuku(1, 15, 6, 10);


?>