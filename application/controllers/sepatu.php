<?php
// TransaksiController.php

// Include model
include_once 'TransaksiModel.php';

class TransaksiController {
    public function prosesTransaksi($data) {
        // Membuat objek model
        $transaksiModel = new TransaksiModel();

        // Memanggil method untuk proses transaksi dari model
        $hasilTransaksi = $transaksiModel->hitungTotalHarga($data);

        // Memanggil view untuk menampilkan hasil transaksi
        include 'hasil_transaksi.php';
    }
}

// Mendapatkan data dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = array(
        "nama_pembeli" => $_POST["nama_pembeli"],
        "no_hp" => $_POST["no_hp"],
        "merk_sepatu" => $_POST["merk_sepatu"],
        "ukuran_sepatu" => $_POST["ukuran_sepatu"]
    );

    // Membuat objek controller
    $transaksiController = new TransaksiController();
    $transaksiController->prosesTransaksi($data);
}