<h3>List Barang Thrift</h3>

<div class="table-header">
    <button class="btn-add" onclick="window.location.href='?page=addBarang&action=tambah'">+ Tambah Barang</button>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Harga</th>
        <th>Warna</th>
        <th>Seller</th>
        <th>Lokasi</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($barang->getAllbarang() as $m): ?>
    <tr>
        <td><?= htmlspecialchars($m['id_barang']) ?></td>
        <td><?= htmlspecialchars($m['nama_barang']) ?></td>
        <td><?= htmlspecialchars($m['harga_barang']) ?></td>
        <td><?= htmlspecialchars($m['warna_barang']) ?></td>
        <td><?= htmlspecialchars($m['seller']) ?></td>
        <td><?= htmlspecialchars($m['lokasi']) ?></td>
        <td>
            <a href="?page=editBarang&action=edit&id=<?= $m['id_barang'] ?>" class="btn-edit">Edit</a>
            <a href="?page=barang&action=hapus&id=<?= $m['id_barang'] ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus barang ini?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
