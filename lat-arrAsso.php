<?php

$dataSiswa = [
          [
                    "nama" => "Chelvin Yusuf Maulana",
                    "kelas" => "X Rpl 1",
                    "alamat" => "Hiroshima, Jepang",
                    "nisn" => "29038402938",
                    "noWa" => "087890239",
                    "hobi" => "tidur",
                    "cita" => "pengen jadi anaknya Sandhika Ghalih",
                    "jurusan" => "Rekayasa Perangkat Lunak",
                    "gmail" => "Chelvin@gmail.com"
          ],
          [
                    "nama" => "Fadhel Dos Santos Aveiro Guccitini Andres ",
                    "kelas" => "X ST 1",
                    "alamat" => "Israel, Mars",
                    "nisn" => "009304230493",
                    "noWa" => "08726398742",
                    "hobi" => "Merangkak",
                    "cita" => "Menangin Balon Do'r, Menangin Ucl, Menangin golden boots, Menangin World Cup, Join WWW1, Masuk Organisasi G20, Menguasai Eropa, Membanggakan anak yatim",
                    "jurusan" => "Angkatan Kelautan Indonesia",
                    "gmail" => "FadbiBejo@gmail.com"
          ],
          [
                    "nama" => "Juan Pharsha Naiem",
                    "kelas" => "X Akl 3",
                    "alamat" => "Israel, Jepang",
                    "nisn" => "009304230493",
                    "noWa" => "08726398742",
                    "hobi" => "Males-Malesan",
                    "cita" => "Membanggakan Orang tua",
                    "jurusan" => "Angkatan Kelautan Indonesia",
                    "gmail" => "JuanPA@gmail.com"
          ],
          [
                    "nama" => "Ilham Anur Rosdiana",
                    "kelas" => "X Akl 3",
                    "alamat" => "Bogor Ujungan dikit",
                    "nisn" => "009304230493",
                    "noWa" => "08726398742",
                    "hobi" => "Males-Malesan",
                    "cita" => "Membanggakan Orang tua",
                    "jurusan" => "Angkatan Kelautan Indonesia",
                    "gmail" => "JokoZ@gmail.com"
          ],
          [
                    "nama" => "Prasetya Budiharjo Azziqri",
                    "kelas" => "X Akl 3",
                    "alamat" => "Roma, Jakarta",
                    "nisn" => "009304230493",
                    "noWa" => "08726398742",
                    "hobi" => "Males-Malesan",
                    "cita" => "Membanggakan Orang tua",
                    "jurusan" => "Angkatan Kelautan Indonesia",
                    "gmail" => "PrasetyaBudiA@gmail.com"
          ],
          [
                    "nama" => "Dirga Safinatul",
                    "kelas" => "X Akl 3",
                    "alamat" => "Afrika, Papua",
                    "nisn" => "009304230493",
                    "noWa" => "08726398742",
                    "hobi" => "Males-Malesan",
                    "cita" => "Membanggakan Orang tua",
                    "jurusan" => "Angkatan Kelautan Indonesia",
                    "gmail" => "DirgaS@gmail.com"
          ],
          [
                    "nama" => "<span style='color:red;'>Nabil Hidayat Efendi Budiharjo Dwianka Ramdhani Winata Alfarizi Arifin Aziz Sofia Caska Wijaya Ramadhan Falah Utomo Kurniawan Yusuf Nugroho</span>",
                    "kelas" => "X Akl 3",
                    "alamat" => "Tartarus",
                    "nisn" => "009304230493",
                    "noWa" => "08726398742",
                    "hobi" => "Membantai clan Barca",
                    "cita" => "<span style='color:red;'>Kriminal Kelas Kakap </span>",
                    "jurusan" => "Angkatan Kelautan Indonesia",
                    "gmail" => "NabilHidayatM@gmail.com"
          ],
          [
                    "nama" => "Asdi Syam Hidayat Gultom",
                    "kelas" => "X Akl 3",
                    "alamat" => "Israel, Mars",
                    "nisn" => "009304230493",
                    "noWa" => "08726398742",
                    "hobi" => "Males-Malesan",
                    "cita" => "Membanggakan Orang tua",
                    "jurusan" => "Angkatan Kelautan Indonesia",
                    "gmail" => "ASHD@gmail.com"
          ],
          [
                    "nama" => "Azkal Azmi Akbar",
                    "kelas" => "X Akl 3",
                    "alamat" => "Israel, Mars",
                    "nisn" => "009304230493",
                    "noWa" => "08726398742",
                    "hobi" => "Males-Malesan",
                    "cita" => "Membanggakan Orang tua",
                    "jurusan" => "Angkatan Kelautan Indonesia",
                    "gmail" => "A3@gmail.com"
          ],
          [
                    "nama" => "Hasbi Kote",
                    "kelas" => "X Akl 3",
                    "alamat" => "Israel, Mars",
                    "nisn" => "009304230493",
                    "noWa" => "08726398742",
                    "hobi" => "Males-Malesan",
                    "cita" => "Membanggakan Orang tua",
                    "jurusan" => "Angkatan Kelautan Indonesia",
                    "gmail" => "koteKote@gmail.com"
          ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>JANGAN DIBUKA</title>
</head>
<body>
          <table border = "1" cellpadding= "7" cellspacing= "0">
                    <tr>
                              <th>Nama</th>
                              <th>Kelas</th>
                              <th>Alamat</th>
                              <th>Nisn</th>
                              <th>No WhatsApp</th>
                              <th>Hobi</th>
                              <th>Cita-Cita</th>
                              <th>Jurusan</th>
                              <th>Gmail</th>
                    </tr>
                    <tr>
                              <?php foreach($dataSiswa as $siswal) : ?>
                                        <td><?= $siswal ["nama"]; ?></td>
                                        <td><?= $siswal ["kelas"]; ?></td>
                                        <td><?= $siswal ["alamat"]; ?></td>
                                        <td><?= $siswal ["nisn"]; ?></td>
                                        <td><?= $siswal ["noWa"]; ?></td>
                                        <td><?= $siswal ["hobi"]; ?></td>
                                        <td><?= $siswal ["cita"]; ?></td>
                                        <td><?= $siswal ["jurusan"]; ?></td>
                                        <td><?= $siswal ["gmail"]; ?></td>
                              </tr>
                              <?php endforeach; ?>
                    </table>

</body>
</html>