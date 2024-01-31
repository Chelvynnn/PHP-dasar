<?php

$abjad = ["A", "B", "C",  "D",  "E", "F",  "G",  "H",  "I",  "J",  "K",  "L",  "M",  "N",  "O",  "P",  "Q",  "R", "S",  "T",  "U",  "V",  "W",  "X",  "Y",  "Z"];

$mataPelajaran = [ "Pendidikan Agama Dan Budi Pekerti",  "Pendidikan Pancasila",  "Bahasa Indonesia",  "Matematika",  "Bahasa Inggris",  "Dasar-dasar Kejuruan RPL"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <style>
                    .bulat{
                              width: 90px;
                              height: 90px;
                              text-align: center;
                              line-height: 90px;
                              margin: 5px;
                              background: red;
                              color: white;
                              border-radius: 50%;
                              float: left;

                    }
                    .clear{
                              clear: both;
                    }

                    .mataPel{
                              width:300px;
                              height: 200px;
                              text-align: center;
                              line-height: 200px;
                              float: left;
                              background: darkorange;
                              color: white;
                              font-weight: 600;
                              font-size:16px;
                              margin: 6px;
                              border-radius: 23px 0 23px 0;
                    }
          </style>
</head>
<body>
          <!-- TUGAS PERTAMA -->
          <?php for ($i=0; $i < count($abjad) ; $i++) : ?>
                    <div class="bulat"><?=$abjad[$i]; ?></div>
          <?php endfor; ?>

          <div class="clear"></div>

          <!-- TUGAS KEDUA -->
          <h1>Mata Pelajaran - X RPL</h1>
          <?php foreach ($mataPelajaran as $matpel) : ?>
                    <div class="mataPel"><?=$matpel ?></div>
          <?php endforeach; ?>
</body>
</html>