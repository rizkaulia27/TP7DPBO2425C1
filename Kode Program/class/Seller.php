<?php
    require_once 'config/db.php';

    class Seller{
        private $db;

        public function __construct() {
            $this->db = (new Database())->conn;
        }

        public function getAllSeller() {
            $stmt = $this->db->query("SELECT * FROM seller");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getSellerById($id){
            $stmt = $this->db->prepare("SELECT * FROM seller WHERE id_seller = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        //Fungsi Create
        public function createSeller($nama_seller, $kontak_seller) {
            $stmt = $this->db->prepare("INSERT INTO seller (nama_seller, kontak_seller) VALUES (?, ?)");
            return $stmt->execute([$nama_seller, $kontak_seller]);
        }

        //Fungsi Update
        public function updateSeller($id, $nama_seller, $kontak_seller) {
            $stmt = $this->db->prepare("UPDATE seller SET nama_seller = ?, kontak_seller = ? WHERE id_seller = ?");
            return $stmt->execute([$nama_seller, $kontak_seller, $id]);
        }

        //Fungsi Delete
        public function deleteSeller($id) {
            $stmt = $this->db->prepare("DELETE FROM seller WHERE id_seller = ?");
            return $stmt->execute([$id]);
        }
    }
?>