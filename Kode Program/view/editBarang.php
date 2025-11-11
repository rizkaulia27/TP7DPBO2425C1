<?php
$id = $_GET['id'];
$dataBarang = $barang->getBarangById($id);

if ($dataBarang):
    $sellers = $seller->getAllSeller();
    $lokasis = $lokasi->getAllLokasi();
?>
<h3>Edit Barang Thrift</h3>

<div class="form-container">
    <form action="?page=editBarang&action=update&id=<?= $id ?>" method="post">
        <input type="hidden" name="id_barang" value="<?= htmlspecialchars($dataBarang['id_barang']) ?>">

        <label for="nama_barang">Nama Barang</label>
        <input type="text" id="nama_barang" name="nama_barang"
               value="<?= htmlspecialchars($dataBarang['nama_barang']) ?>"
               placeholder="Masukkan Nama Barang" required>

        <label for="harga_barang">Harga Barang</label>
        <input type="text" id="harga_barang" name="harga_barang"
               value="<?= htmlspecialchars($dataBarang['harga_barang']) ?>"
               placeholder="Masukkan Harga Barang" required>

        <label for="warna_barang">Warna Barang</label>
        <input type="text" id="warna_barang" name="warna_barang"
               value="<?= htmlspecialchars($dataBarang['warna_barang']) ?>"
               placeholder="Masukkan Warna Barang" required>

        <label for="seller">Seller</label>
        <select id="seller" name="seller" class="font-bagus" required>
            <option value="">-- Pilih Seller --</option>
            <?php foreach ($sellers as $s): ?>
                <option value="<?= htmlspecialchars($s['id_seller']) ?>">
                    <?= htmlspecialchars($s['nama_seller']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <label for="lokasi">Lokasi</label>
        <select id="lokasi" name="lokasi" class="font-bagus" required>
            <option value="">-- Pilih Lokasi --</option>
            <?php foreach ($lokasis as $l): ?>
                <option value="<?= htmlspecialchars($l['id_lokasi']) ?>">
                    <?= htmlspecialchars($l['nama_lokasi']) ?> - <?= htmlspecialchars($l['kota']) ?>
                </option>
            <?php endforeach; ?>
        </select>

        <div class="form-btn">
            <input type="submit" value="Update Barang" class="btn-submit">
            <button type="button" class="btn-cancel" onclick="window.location.href='?page=barang'">Batal</button>
        </div>
    </form>
</div>
<?php
else:
    echo "<p>Data barang tidak ditemukan.</p>";
endif;
?>
