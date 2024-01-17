<?php

function angkotJakarta($angkot) {
          for ($angkot=1; $angkot <= 20; $angkot++) { 
                    if ($angkot == 1 || $angkot == 3 || $angkot == 10 || $angkot == 11) {
                              echo "Angkot no $angkot tersedia <br/>";
                    } elseif ($angkot == 2 || $angkot == 9 || $angkot == 12 || $angkot == 17) {
                              echo "Angkot no $angkot sedang di perbaiki <br/>";
                    } else {
                              echo "Angkot no $angkot tidak tersedia <br/>";
                    }
          }
}

echo angkotJakarta(1);








?>