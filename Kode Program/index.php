<?php
    require_once 'class/Seller.php';
    require_once 'class/Lokasi.php';
    require_once 'class/Barang.php';

    $seller = new Seller();
    $lokasi = new Lokasi();
    $barang = new Barang();
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Thrift Yuk</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'view/header.php'; ?>
    <main>
        <h2>Welcome to Thrift Yuk</h2>
        <nav>
            <a href="?page=index">Home</a> |
            <a href="?page=barang">Barang</a> |
            <a href="?page=seller">Seller</a> |
            <a href="?page=lokasi">Lokasi</a> 
        </nav>
    <?php if ($page === 'index'): ?>
        <section class="hero-image">
            <img src="assets/Thrift Yuk.png" alt="Banner Thrift">
        </section>
        <?php endif; ?>

    <?php
        if (isset($_GET['page'])) {
        $page = $_GET['page'];
        $action = $_GET['action'] ?? '';

        //List Lokasi
        if ($page == 'lokasi'){
            //Hapus lokasi
            if ($action == 'hapus' && isset($_GET['id'])){
                $id = $_GET['id'];
                if ($lokasi->deleteLokasi($id)){
                    echo "<script>alert('Lokasi berhasil dihapus!'); window.location='?page=lokasi';</script>";
                }else{
                    echo "<script>alert('Gagal menghapus lokasi.');</script>";
                }
            //Default tampil tabel lokasi
            }else{
                include 'view/lokasi.php';
            }
        //Add Lokasi
        }elseif ($page == 'addLokasi') {
            if ($action == 'simpan' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                $nama = $_POST['nama_lokasi'];
                $alamat = $_POST['alamat_lokasi'];
                $kota = $_POST['kota'];

                if ($lokasi->createLokasi($nama, $alamat, $kota)) {
                    echo "<script>alert('Lokasi berhasil ditambahkan!'); window.location='?page=lokasi';</script>";
                }else{
                    echo "<script>alert('Gagal menambahkan lokasi.');</script>";
                }
            }else{
                include 'view/addLokasi.php';
            }
        //Update lokasi
        }elseif ($page == 'editLokasi'){
            if ($action == 'update' && isset($_GET['id'])){
                $id = $_GET['id'];
                $nama = $_POST['nama_lokasi'];
                $alamat = $_POST['alamat_lokasi'];
                $kota = $_POST['kota'];
                if ($lokasi->updateLokasi($id, $nama, $alamat, $kota)) {
                    echo "<script>alert('Lokasi berhasil diperbarui!'); window.location='?page=lokasi';</script>";
                }else{
                    echo "<script>alert('Gagal memperbarui lokasi.');</script>";
                }
            //Edit lokasi (tampilkan form)
            }elseif ($action == 'edit' && isset($_GET['id'])) {
                include 'view/editLokasi.php';
            }
        //List Seller
        }elseif ($page == 'seller'){
            //Hapus seller
            if ($action == 'hapus' && isset($_GET['id'])){
                $id = $_GET['id'];
                if ($seller->deleteSeller($id)){
                    echo "<script>alert('Seller berhasil dihapus!'); window.location='?page=seller';</script>";
                }else{
                    echo "<script>alert('Gagal menghapus seller.');</script>";
                }
            //Default tampil tabel seller
            }else{
                include 'view/seller.php';
            }
        //Add seller
        }elseif ($page == 'addSeller') {
            if ($action == 'simpan' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                $nama = $_POST['nama_seller'];
                $kontak = $_POST['kontak_seller'];

                if ($seller->createSeller($nama, $kontak)) {
                    echo "<script>alert('Seller berhasil ditambahkan!'); window.location='?page=seller';</script>";
                }else{
                    echo "<script>alert('Gagal menambahkan seller.');</script>";
                }
            }else{
                include 'view/addSeller.php';
            }
        //Update seller 
        }elseif ($page == 'editSeller'){
            if ($action == 'update' && isset($_GET['id'])){
                $id = $_GET['id'];
                $nama = $_POST['nama_seller'];
                $kontak = $_POST['kontak_seller'];
                if ($seller->updateSeller($id, $nama, $kontak)) {
                    echo "<script>alert('Seller berhasil diperbarui!'); window.location='?page=seller';</script>";
                }else{
                    echo "<script>alert('Gagal memperbarui seller.');</script>";
                }
                //Edit seller (tampilkan form)
            }elseif ($action == 'edit' && isset($_GET['id'])) {
                include 'view/editSeller.php';
            }
        //List barang
        }elseif ($page == 'barang'){
            //Hapus barang
            if ($action == 'hapus' && isset($_GET['id'])){
                $id = $_GET['id'];
                if ($barang->deleteBarang($id)){
                    echo "<script>alert('Barang berhasil dihapus!'); window.location='?page=barang';</script>";
                }else{
                    echo "<script>alert('Gagal menghapus barang.');</script>";
                }
            //Default tampil tabel barang
            }else{
                include 'view/barang.php';
            }
        //Add barang
        }elseif ($page == 'addBarang') {
            if ($action == 'simpan' && $_SERVER['REQUEST_METHOD'] === 'POST') {
                    $nama = $_POST['nama_barang'];
                    $harga = $_POST['harga_barang'];
                    $warna = $_POST['warna_barang'];
                    $seller = $_POST['seller'];
                    $lokasi = $_POST['lokasi'];

                    if ($barang->createBarang($nama, $harga, $warna, $seller, $lokasi)){
                        echo "<script>alert('Barang berhasil ditambahkan!'); window.location='?page=barang';</script>";
                    }else{
                        echo "<script>alert('Gagal menambahkan barang.');</script>";
                    }
            }else{
                include 'view/addBarang.php';
            }
        //Update barang 
        }elseif ($page == 'editBarang'){
            if ($action == 'update' && isset($_GET['id'])){
                $id = $_GET['id'];
                $nama = $_POST['nama_barang'];
                $harga = $_POST['harga_barang'];
                $warna = $_POST['warna_barang'];
                $seller = $_POST['seller'];
                $lokasi = $_POST['lokasi'];
                if ($barang->updateBarang($id, $nama, $harga, $warna, $seller, $lokasi)) {
                    echo "<script>alert('Barang berhasil diperbarui!'); window.location='?page=barang';</script>";
                }else{
                    echo "<script>alert('Gagal memperbarui barang.');</script>";
                }
                //Edit barang (tampilkan form)
            }elseif ($action == 'edit' && isset($_GET['id'])) {
                include 'view/editBarang.php';
            }
        }
    }
?>
    </main>
    <?php include 'view/footer.php'; ?>
</body>
</html>