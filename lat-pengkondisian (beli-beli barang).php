<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<body>
          <p>Nama Barang : Printer Laserjet 1001</p>

          <p>Kode Barang : P001 </p>

          <p>Kategori : Elektronik </p>

          <?php $hargaBarang = 100000; ?>
          <p>Harga Barang : Rp
          <?= $hargaBarang; ?></p>

          <?php $jumlahBarang = 2; ?>
          <p><?= "Jumlah Barang : "; ?>          
          <?= $jumlahBarang; ?>

          <?php $totalHarga = $hargaBarang * $jumlahBarang; ?>
          <?php if ($totalHarga > 100000) : ?>
                    <p>Total Harga : Rp                                
                    <?= $totalHarga - 50000; ?>
                    </p>
          <?php else : ?>
                    <p>Total Harga : Rp
                    <?= $totalHarga; ?>
                    </p>
          <?php endif ; ?>

          <?php $status = "Sudah Bayar"; ?>
          <?php if ($status == "Proses") : ?>
                    <p>Status : 
                    <span style="color: yellow;"><?=$status; ?></sp>
                    </p>
          <?php elseif ($status == "Sudah Bayar") : ?>
                    <p>Status : 
                    <span style="color: green;"><?=$status; ?></span>
                    </p>
          <?php else : ?>
                    <p>Status : 
                    <span style="color: red;"><?=$status; ?></span>
                    </p>
          <?php endif; ?>
</body>
</html>