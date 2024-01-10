<?php
echo "Nama : Chelvynn Yusuf Maulana <br/>";
echo "Kelas : XII RPL 1 <br/>";

$nilaiHarian = 81 * 30 / 100;
echo "Nilai harian : ";
echo $nilaiHarian;
echo "<br/>";

$nilaiUts = 80 * 30 / 100;
echo "Nilai Uts : ";
echo $nilaiUts;
echo "<br/>";

$nilaiUas = 90 * 40 / 100;
echo "Nilai Uas : ";
echo $nilaiUas;
echo "<br/>";

$nilaiAkhir = $nilaiHarian + $nilaiUts + $nilaiUas;
echo "Nilai akhir : ";
echo $nilaiAkhir;
echo "<br/>";


if ($nilaiAkhir >= 90 && $nilaiAkhir <=100) {
          echo "Predikat : A+ <br/>";
} elseif ($nilaiAkhir >= 85 && $nilaiAkhir <= 89.99) {
          echo "Predikat : A <br/>";
} elseif ( $nilaiAkhir >= 80 &&  $nilaiAkhir <= 84.99) {
          echo "Predikat : B+ <br/>";
} elseif ( $nilaiAkhir  >= 76 &&  $nilaiAkhir  <= 79.99) {
          echo "Predikat : B <br/>";
} elseif ( $nilaiAkhir >= 60 &&  $nilaiAkhir <= 75.99) {
          echo "Predikat : C <br/>";
} elseif ( $nilaiAkhir >= 40 &&  $nilaiAkhir <= 59.99) {
          echo "Predikat : D <br/>";
} elseif ( $nilaiAkhir >= 0 &&  $nilaiAkhir <=39.99) {
          echo "Predikat : E <br/>";
} else {
          echo "<b style='color: red;'>TIDAK ADA PERINGKAT<b/>";
}
?>