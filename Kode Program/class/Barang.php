<?php
    require_once 'config/db.php';

    class Barang{
        private $db;

        public function __construct() {
            $this->db = (new Database())->conn;
        }

        public function getAllBarang() {
            $stmt = $this->db->query("SELECT barang.*, barang.nama_barang, barang.harga_barang, barang.warna_barang, seller.nama_seller, lokasi.nama_lokasi 
                                    FROM barang 
                                    JOIN seller ON barang.seller = seller.id_seller 
                                    JOIN lokasi ON barang.lokasi = lokasi.id_lokasi");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getBarangById($id){
            $stmt = $this->db->prepare("SELECT * FROM barang WHERE id_barang = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        //Fungsi Create
        public function createBarang($nama_barang, $harga_barang, $warna_barang, $seller, $lokasi) {
            $stmt = $this->db->prepare("INSERT INTO barang (nama_barang, harga_barang, warna_barang, seller, lokasi) VALUES (?, ?, ?, ?, ?)");
            return $stmt->execute([$nama_barang, $harga_barang, $warna_barang, $seller, $lokasi]);
        }

        //Fungsi Update
        public function updateBarang($id, $nama_barang, $harga_barang, $warna_barang, $seller, $lokasi) {
            $stmt = $this->db->prepare("UPDATE barang SET nama_barang = ?, harga_barang = ?, warna_barang = ?, seller = ?, lokasi = ? WHERE id_barang = ?");
            return $stmt->execute([$nama_barang, $harga_barang, $warna_barang, $seller, $lokasi, $id]);
        }

        //Fungsi Delete
        public function deleteBarang($id) {
            $stmt = $this->db->prepare("DELETE FROM barang WHERE id_barang = ?");
            return $stmt->execute([$id]);
        }
    }
?>