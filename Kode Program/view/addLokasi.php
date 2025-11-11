<h3>Tambah Lokasi Thrift</h3>

<div class="form-container">
    <form action="?page=addLokasi&action=simpan" method="post">
        <label for="nama_lokasi">Nama Lokasi</label>
        <input type="text" id="nama_lokasi" name="nama_lokasi" placeholder="Masukkan nama lokasi" required>

        <label for="alamat_lokasi">Alamat</label>
        <input type="text" id="alamat_lokasi" name="alamat_lokasi" placeholder="Masukkan alamat lengkap" required>

        <label for="kota">Kota</label>
        <input type="text" id="kota" name="kota" placeholder="Masukkan nama kota" required>

        <div class="form-btn">
            <input type="submit" value="Simpan Lokasi" class="btn-submit">
            <button type="button" class="btn-cancel" onclick="window.location.href='?page=lokasi'">Batal</button>
        </div>
    </form>
</div>
