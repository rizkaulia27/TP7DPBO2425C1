<h3>Tambah Seller</h3>

<div class="form-container">
    <form action="?page=addSeller&action=simpan" method="post">
        <label for="nama_seller">Nama Seller</label>
        <input type="text" id="nama_seller" name="nama_seller" placeholder="Masukkan Nama Seller" required>

        <label for="kontak_seller">Kontak</label>
        <input type="text" id="kontak_seller" name="kontak_seller" placeholder="Masukkan Kontak Seller" required>

        <div class="form-btn">
            <input type="submit" value="Simpan Seller" class="btn-submit">
            <button type="button" class="btn-cancel" onclick="window.location.href='?page=seller'">Batal</button>
        </div>
    </form>
</div>
