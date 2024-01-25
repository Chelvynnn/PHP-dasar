<?php

function Pdidik($Pdidik, $terminasi, $kt1, $kt2, $kt3, $kt4, $kt5, $kt6, $kt7, ){
          for ($Pdidik; $Pdidik <= $terminasi ; $Pdidik++) { 
                    if ($Pdidik == $kt1 || $Pdidik == $kt2 || $Pdidik == $kt6) {
                              echo "Peserta didik no absen $Pdidik tidak hadir <br/>";
                    } elseif ($Pdidik == $kt3 || $Pdidik == $kt4 ) {
                              echo "Peserta didik no absen $Pdidik terlambat <br/>";
                    } elseif ($Pdidik == $kt5 || $Pdidik == $kt7) {
                              echo "Peserta didik no absen $Pdidik sakit <br/>";
                    } else {
                              echo "Peserta didik no absen $Pdidik hadir <br/>";
                    }
          }
}

echo Pdidik(1, 15, 2, 3, 6, 8, 9, 10, 13);






?>