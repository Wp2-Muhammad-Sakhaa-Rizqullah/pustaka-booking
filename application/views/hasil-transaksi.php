<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hasil Transaksi</title>
</head>
<body>
  <h1>Hasil Transaksi</h1>
  <?php
    // Menampilkan hasil transaksi dari controller
    echo "<p>Nama Pembeli: " . $data['nama_pembeli'] . "</p>";
    echo "<p>Nomor HP: " . $data['no_hp'] . "</p>";
    echo "<p>Merk Sepatu: " . $data['merk_sepatu'] . "</p>";
    echo "<p>Ukuran Sepatu: " . $data['ukuran_sepatu'] . "</p>";
    echo "<p>Total Harga: Rp" . number_format($hasilTransaksi, 0, ',', '.') . "</p>";
  ?>
  <!-- Tambahkan link untuk kembali ke halaman input -->
  <a href="form_transaksi.php">Kembali ke Form Input Transaksi</a>
</body>
</html>