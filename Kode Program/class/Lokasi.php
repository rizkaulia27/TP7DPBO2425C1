<?php
    require_once 'config/db.php';

    class Lokasi{
        private $db;

        public function __construct(){
            $this->db = (new Database())->conn;
        }

        public function getAllLokasi(){
            $stmt = $this->db->query("SELECT * FROM lokasi");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getLokasiById($id){
            $stmt = $this->db->prepare("SELECT * FROM lokasi WHERE id_lokasi = ?");
            $stmt->execute([$id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        }

        //Fungsi Create
        public function createLokasi($nama_lokasi, $alamat_lokasi, $kota){
            $stmt = $this->db->prepare("INSERT INTO lokasi (nama_lokasi, alamat_lokasi, kota) VALUES (?, ?, ?)");
            return $stmt->execute([$nama_lokasi, $alamat_lokasi, $kota]);
        }

        //Fungsi Update
        public function updateLokasi($id, $nama_lokasi, $alamat_lokasi, $kota){
            $stmt = $this->db->prepare("UPDATE lokasi SET nama_lokasi = ?, alamat_lokasi = ?, kota = ? WHERE id_lokasi = ?");
            return $stmt->execute([$nama_lokasi, $alamat_lokasi, $kota, $id]);
        }

        //Fungsi Delete
        public function deleteLokasi($id){
            $stmt = $this->db->prepare("DELETE FROM lokasi WHERE id_lokasi = ?");
            return $stmt->execute([$id]);
        }
    }
?>