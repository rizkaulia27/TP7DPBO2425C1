<h3>List Lokasi Thrift</h3>

<div class="table-header">
    <button class="btn-add" onclick="window.location.href='?page=addLokasi&action=tambah'">+ Tambah Lokasi</button>
</div>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Kota</th>
        <th>Aksi</th>
    </tr>
    <?php foreach ($lokasi->getAllLokasi() as $m): ?>
    <tr>
        <td><?= htmlspecialchars($m['id_lokasi']) ?></td>
        <td><?= htmlspecialchars($m['nama_lokasi']) ?></td>
        <td><?= htmlspecialchars($m['alamat_lokasi']) ?></td>
        <td><?= htmlspecialchars($m['kota']) ?></td>
        <td>
            <a href="?page=editLokasi&action=edit&id=<?= $m['id_lokasi'] ?>" class="btn-edit">Edit</a>
            <a href="?page=lokasi&action=hapus&id=<?= $m['id_lokasi'] ?>" class="btn-delete" onclick="return confirm('Yakin ingin menghapus lokasi ini?')">Hapus</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
