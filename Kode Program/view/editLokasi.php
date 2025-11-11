<h3>Edit Lokasi Thrift</h3>

<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $data = $lokasi->getLokasiById($id);

    if ($data):
?>
<div class="form-container">
    <form action="?page=editLokasi&action=update&id=<?= $id ?>" method="post">
        <label for="nama_lokasi">Nama Lokasi</label>
        <input type="text" id="nama_lokasi" name="nama_lokasi" 
               value="<?= htmlspecialchars($data['nama_lokasi']) ?>" required>

        <label for="alamat_lokasi">Alamat</label>
        <input type="text" id="alamat_lokasi" name="alamat_lokasi" 
               value="<?= htmlspecialchars($data['alamat_lokasi']) ?>" required>

        <label for="kota">Kota</label>
        <input type="text" id="kota" name="kota" 
               value="<?= htmlspecialchars($data['kota']) ?>" required>

        <div class="form-btn">
            <input type="submit" value="Update Lokasi" class="btn-submit">
            <button type="button" class="btn-cancel" onclick="window.location.href='?page=lokasi'">Batal</button>
        </div>
    </form>
</div>
<?php
    else:
        echo "<p>Data lokasi tidak ditemukan.</p>";
    endif;
}
?>