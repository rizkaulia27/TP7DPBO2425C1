<h3>Edit Informasi Seller</h3>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = $seller->getSellerById($id);

    if ($data):
?>
<div class="form-container">
    <form action="?page=editSeller&action=update&id=<?= $id ?>" method="post">
        <label for="nama_seller">Nama Seller</label>
        <input type="text" id="nama_seller" name="nama_seller" 
               value="<?= htmlspecialchars($data['nama_seller']) ?>" required>

        <label for="kontak_seller">Kontak</label>
        <input type="text" id="kontak_seller" name="kontak_seller" 
               value="<?= htmlspecialchars($data['kontak_seller']) ?>" required>

        <div class="form-btn">
            <input type="submit" value="Update Seller" class="btn-submit">
            <button type="button" class="btn-cancel" onclick="window.location.href='?page=seller'">Batal</button>
        </div>
    </form>
</div>
<?php
    else:
        echo "<p>Data seller tidak ditemukan.</p>";
    endif;
}
?>