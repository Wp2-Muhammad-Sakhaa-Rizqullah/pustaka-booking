<?php
// TransaksiModel.php

class TransaksiModel {
    public function hitungTotalHarga($data) {
        // Daftar harga sepatu berdasarkan merk
        $hargaSepatu = array(
            "Nike" => 375000,
            "Adidas" => 300000,
            "Kickers" => 250000,
            "Eiger" => 275000,
            "Bucherri" => 400000
        );

        // Menghitung total harga berdasarkan merk sepatu dan ukuran
        $hargaSatuan = $hargaSepatu[$data['merk_sepatu']];
        $totalHarga = $hargaSatuan;

        // Contoh operasi atau validasi lainnya bisa ditambahkan di sini

        return $totalHarga;
    }
}